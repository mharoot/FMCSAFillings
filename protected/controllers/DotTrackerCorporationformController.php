<?php

class DotTrackerCorporationformController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
    public function accessRules()
    {
        return array(
            array('allow',  // allow all users to perform 'index' and 'view' actions
                'actions'=>array('index'),
                'users'=>array('@'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions'=>array('create','update'),
                'users'=>array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions'=>array('admin','delete'),
                'users'=>array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions'=>array('view','authorizeSign','saveScr'),
                'users'=>array('*'),
            ),
            array('deny',  // deny all users
                'users'=>array('*'),
            ),
        );
    }



    public function actionSaveScr()
    {

        $imgData=Yii::app()->request->getPost('imgData','');
        $id=Yii::app()->request->getParam('id','');



        $CreditCardAuth=DotTrackerCorporationform::model()->findByPk($id);

        if(!$CreditCardAuth)
        {
            throw new CHttpException(400,'Form cannot be found!');
        }

        $imagedata = base64_decode($imgData);
        $filename = md5(uniqid(rand(), true));

        ///print_r($imagedata);die;

        //$file = '/xampp/htdocs/FMCSAFillings/uploadsign/epn'.$filename.'.png';
        $file='/xampp/htdocs/FMCSAFillings/uploadsign/epn1/'.$filename.'.png';
        if(file_put_contents($file,$imagedata)){
            $CreditCardAuth->ext2=$file;
            //$CreditCardAuth->sign_date=new CDbExpression('NOW()');

            $CreditCardAuth->save();
             $this->sendSaveEmailToUser($CreditCardAuth);
        }
        echo $file;
    }

    public function actionAuthorizeSign($id)
    {


        $imgPath = '/xampp/htdocs/FMCSAFillings/corporation.jpg';
        $image = imagecreatefromjpeg($imgPath);
        $dest = imagecreatefrompng('/xampp/htdocs/FMCSAFillings/tick.png');
        $dest1 = imagecreatefrompng('/xampp/htdocs/FMCSAFillings/tick1.png');


        function addText($x, $y, $image, $str)
        {
            $color = imagecolorallocate($image, 0, 0, 0);
            $fontSize = 10;
            //imagestring($image, $fontSize, $x, $y, $str, $color);
            imagettftext($image, 30, 0, $x, $y, $color, 'arial', $str);
        }

        $model = $this->loadModel($id);

        //imagettftext($im, 45, 0, 220, 180, $text_color, $font_path, $text);


        addText(820, 1010, $image, $model->name);

        addText(350, 1338, $image, $model->street);
        addText(350, 1465, $image, $model->m_street);

        addText(1360, 1338, $image, $model->city);
        addText(1360, 1465, $image, $model->m_city);

        addText(1930, 1338, $image, $model->state);
        addText(1930, 1465, $image, $model->m_state);

        addText(2050, 1338, $image, $model->zip);
        addText(2050, 1465, $image, $model->m_zip);

        if (!empty($model->ca_fname)) {

        addText(350, 1740, $image, $model->ca_fname);
        addText(1360, 1740, $image, $model->ca_mname);
        addText(1710, 1740, $image, $model->ca_lname);
        addText(2180, 1740, $image, $model->ca_suffix);


        addText(350, 1840, $image, $model->ag_street);
        addText(1360, 1840, $image, $model->ag_city);
        addText(2050, 1840, $image, $model->ag_zip);
    }
    else {
        addText(350, 2020, $image, $model->c3filed);
    }

        addText(1530, 2270, $image, $model->shares);

        addText(1430, 2730, $image, $model->sign_name);







        /*if(!empty($model->sign_link))
        {$dest2 = imagecreatefrompng($model->sign_link);
            $new_image = imagecreatetruecolor(300, 33);
            imagecopyresized($new_image, $dest2,
                0, 0, 0, 0,
                196, 58,
                300, 100);
            imagecopymerge($image, $new_image, 60, 1398, 0, 0, 194, 23 , 100);

        }*/



        //imagejpeg($image,'/xampp/htdocs/FMCSAFillings/corporation-prasan.jpg');
        imagejpeg($image,'/xampp/htdocs/FMCSAFillings/corporation-'.$id.'.jpg');





        // print_r(imagejpeg($image));
        // $image=$this->getImage();
        $this->render('authorizeSign',array(
            'model'=>$model,
            //'image'=>$image
        ));
    }



    public function sendEmailToUser($CreditCardAuth)
    {
        $to = $CreditCardAuth->phone;
        $subject = "Corporation Form - Signature Request Generated [Time:".date('Y-m-d h:i:sa').']';
        $txt = "Dear ".FilingGenerics::getFirstName($CreditCardAuth->sign_name).", <br><br>Thank you for your business. <br><br>Please, <a href='http://fmcsafiling.com/index.php?r=dotTrackerCorporationform/authorizeSign&id=".$CreditCardAuth->id."'>click here</a> to sign the Corporation Form. <br><br>Best Regards <br><br>Support Team";

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: info@fmcsafiling.com" . "\r\n" ."CC: niobe.chill@gmail.com". "\r\n" ."BCC: kunalnet123@gmail.com";

        mail($to,$subject,$txt,$headers);

        mail(FilingGenerics::getAuthEmail($CreditCardAuth->ext1),'(CopyEmail) '.$subject,$txt,$headers);
    }


    public function sendSaveEmailToUser($model)
    {
        $adminEmail=FilingGenerics::getAuthEmail($model->ext1);
        $to=$adminEmail.',niobe.chill@gmail.com';
        //$to = 'prasanjeet.chakraborty@gmail.com,kunalnet123@gmail.com';
        $subject = "Credit Corporation Form - Signature Submitted [Time:".date('Y-m-d h:i:sa').']';
        $txt = "Hi Admin,<br><br>Signature submitted for Credit Corporation Form.<a href='http://fmcsafiling.com/index.php?r=dotTrackerCorporationform/view&id=".$model->id."'>Click here</a> to view. <br><br>DOT Operating Authority, INC";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: info@fmcsafiling.com" . "\r\n";

        mail($to,$subject,$txt,$headers);
    }

    public function sendSmsToUser($model1)
    {
        $msgTxt="Dear".FilingGenerics::getFirstName($model1->sign_name).", Please, Click on the link http://fmcsafiling.com/index.php?r=dotTrackerCorporationform/authorizeSign&id=".$model1->id."to sign the Corporation Form. Thank you for your business. DOT Operating Authority, INC";

        $model=new DotTrackerSms();
        $model->status =DotTrackerSms::$arrStatus['init'];
        $model->phone=$model1->mobile;
        $model->message=$msgTxt;

        // print_r($model->a)
        if($model->validate())
        {
            $model->save();
            //   echo 'saved';
        }
        else{
            print_r($model->getErrors());
        }



    }

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
    public function actionView($id)
    {


        $imgPath = '/xampp/htdocs/FMCSAFillings/corporation.jpg';
        $image = imagecreatefromjpeg($imgPath);
        $dest = imagecreatefrompng('/xampp/htdocs/FMCSAFillings/tick.png');
        $dest1 = imagecreatefrompng('/xampp/htdocs/FMCSAFillings/tick1.png');






        function addText($x, $y, $image, $str)
        {
            $color = imagecolorallocate($image, 0,0,0);
            $fontSize = 10;
            //imagestring($image, $fontSize, $x, $y, $str, $color);
            imagettftext($image, 30, 0, $x, $y, $color, 'arial', $str);
        }

        $model=$this->loadModel($id);

        //imagettftext($im, 45, 0, 220, 180, $text_color, $font_path, $text);


        addText(820, 1010, $image, $model->name);

        addText(350, 1338, $image, $model->street);
        addText(350, 1465, $image, $model->m_street);

        addText(1360, 1338, $image, $model->city);
        addText(1360, 1465, $image, $model->m_city);

        addText(1930, 1338, $image, $model->state);
        addText(1930, 1465, $image, $model->m_state);

        addText(2050, 1338, $image, $model->zip);
        addText(2050, 1465, $image, $model->m_zip);


        if (!empty($model->ca_fname)) {

            addText(350, 1740, $image, $model->ca_fname);
            addText(1360, 1740, $image, $model->ca_mname);
            addText(1710, 1740, $image, $model->ca_lname);
            addText(2180, 1740, $image, $model->ca_suffix);


            addText(350, 1840, $image, $model->ag_street);
            addText(1360, 1840, $image, $model->ag_city);
            addText(2050, 1840, $image, $model->ag_zip);
        }
        else {
            addText(350, 2020, $image, $model->c3filed);
        }


        addText(1530, 2270, $image, $model->shares);

        addText(1430, 2730, $image, $model->sign_name);







        if(!empty($model->ext2))
        {$dest2 = imagecreatefrompng($model->ext2);
            $new_image = imagecreatetruecolor(600, 66);
            imagecopyresized($new_image, $dest2,
                0, 0, 0, 0,
                394, 118,
                300, 100);
            imagecopymerge($image, $new_image, 350, 2680, 2, 2, 370, 45 , 100);

        }

        /*if(!empty($model->sign_link))
        {$dest2 = imagecreatefrompng($model->sign_link);
            $new_image = imagecreatetruecolor(300, 33);
            imagecopyresized($new_image, $dest2,
                0, 0, 0, 0,
                196, 58,
                300, 100);
            imagecopymerge($image, $new_image, 60, 1398, 0, 0, 194, 23 , 100);

        }*/



        //imagejpeg($image,'/xampp/htdocs/FMCSAFillings/corporation-prasan.jpg');
        imagejpeg($image,'/xampp/htdocs/FMCSAFillings/corporation-'.$id.'.jpg');


        // print_r(imagejpeg($image));
        // $image=$this->getImage();
        $this->render('view',array(
            'model'=>$model,
            //'image'=>$image
        ));
    }
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new DotTrackerCorporationform;
        $sendSms=false;
        $sendEmail=false;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['DotTrackerCorporationform']))
		{
			$model->attributes=$_POST['DotTrackerCorporationform'];
            $model->creation_datetime=new CDbExpression('NOW()');
            $model->ext1=Yii::app()->user->id;
			if($model->save()){
                if (isset($_POST['but3'])) {
                    //$sendEmail = true;
                    $sendSms = true;
                    //$model->auth_method=1;
                } else if (isset($_POST['but2'])) {
                    $sendEmail = true;
                    //$model->auth_method=2;
                }
                if ($sendSms) {
                    $this->sendSmsToUser($model);
                    $type=2;
                }
                if ($sendEmail) {
                    $this->sendEmailToUser($model);
                    $type=3;
                }
                $this->redirect(array('view','id'=>$model->id));
            }

		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
        $sendSms = false;
        $sendEmail = false;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['DotTrackerCorporationform']))
		{
			$model->attributes=$_POST['DotTrackerCorporationform'];
            if($model->save()){
                if (isset($_POST['but3'])) {
                    //$sendEmail = true;
                    $sendSms = true;
                    //$model->auth_method=1;
                } else if (isset($_POST['but2'])) {
                    $sendEmail = true;
                    //$model->auth_method=2;
                }
                if ($sendSms) {
                    $this->sendSmsToUser($model);
                    $type=2;
                }
                if ($sendEmail) {
                    $this->sendEmailToUser($model);
                    $type=3;
                }
                $this->redirect(array('view','id'=>$model->id));
            }
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$this->actionAdmin();
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new DotTrackerCorporationform('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['DotTrackerCorporationform']))
			$model->attributes=$_GET['DotTrackerCorporationform'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return DotTrackerCorporationform the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=DotTrackerCorporationform::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param DotTrackerCorporationform $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='dot-tracker-corporationform-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
