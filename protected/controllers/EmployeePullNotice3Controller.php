<?php

class EmployeePullNotice3Controller extends Controller
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

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
    public function actionView($id)
    {


        $imgPath = '/home/wwwdot321t/public_html/fmcsafiling.com/epn3.jpg';
        $image = imagecreatefromjpeg($imgPath);
        $dest = imagecreatefrompng('/home/wwwdot321t/public_html/fmcsafiling.com/tick.png');
        $dest1 = imagecreatefrompng('/home/wwwdot321t/public_html/fmcsafiling.com/tick1.png');






        function addText($x, $y, $image, $str)
        {
            $color = imagecolorallocate($image, 0,0,0);
            $fontSize = 5;
            imagestring($image, $fontSize, $x, $y, $str, $color);
        }

        $model=$this->loadModel($id);




        addText(635, 128, $image, $model->requester);
        addText(635, 184, $image, $model->month);

        addText(400, 184, $image, $model->day);
        addText(335, 242, $image, $model->party);
        addText(95, 213, $image, $model->year);
        addText(80, 1003, $image, $model->company_name);
        addText(80, 1037, $image, $model->mailing_address);
        addText(75, 1072, $image, $model->city);
        addText(350, 1072, $image, $model->zip);
        addText(310, 1072, $image, $model->state);
        addText(450, 1072, $image, $model->auth_name);

        if(!empty($model->auth_sign))
        {$dest2 = imagecreatefrompng($model->auth_sign);
            $new_image = imagecreatetruecolor(300, 33);
            imagecopyresized($new_image, $dest2,
                0, 0, 0, 0,
                196, 58,
                300, 100);
            imagecopymerge($image, $new_image, 450, 1035, 0, 0, 194, 23 , 100);

        }


        //imagejpeg($image,'/home/wwwdot321t/public_html/fmcsafiling.com/epn-prasan.jpg');
        imagejpeg($image,'/home/wwwdot321t/public_html/fmcsafiling.com/epn3-'.$id.'.jpg');

//echo '/home/wwwdot321t/public_html/fmcsafiling.com/epn3-'.$id.'.jpg'; die;

        // print_r(imagejpeg($image));
        // $image=$this->getImage();
        $this->render('view',array(
            'model'=>$model,
            //'image'=>$image
        ));
    }

    public function actionSaveScr()
    {

        $imgData=Yii::app()->request->getPost('imgData','');
        $id=Yii::app()->request->getParam('id','');



        $CreditCardAuth=DotTrackerEpn3::model()->findByPk($id);

        if(!$CreditCardAuth)
        {
            throw new CHttpException(400,'Form cannot be found!');
        }

        $imagedata = base64_decode($imgData);
        $filename = md5(uniqid(rand(), true));

        ///print_r($imagedata);die;

        //$file = '/home/wwwdot321t/public_html/fmcsafiling.com/uploadsign/epn'.$filename.'.png';
        $file='/home/wwwdot321t/public_html/fmcsafiling.com/uploadsign/epn1/'.$filename.'.png';
        if(file_put_contents($file,$imagedata)){
            $CreditCardAuth->auth_sign=$file;

            $CreditCardAuth->save();
             $this->sendSaveEmailToUser($CreditCardAuth);
        }
        echo $file;
    }

    public function actionAuthorizeSign($id)
    {


        $imgPath = '/home/wwwdot321t/public_html/fmcsafiling.com/epn3.jpg';
        $image = imagecreatefromjpeg($imgPath);
        $dest = imagecreatefrompng('/home/wwwdot321t/public_html/fmcsafiling.com/tick.png');
        $dest1 = imagecreatefrompng('/home/wwwdot321t/public_html/fmcsafiling.com/tick1.png');






        function addText($x, $y, $image, $str)
        {
            $color = imagecolorallocate($image, 0,0,0);
            $fontSize = 5;
            imagestring($image, $fontSize, $x, $y, $str, $color);
        }

        $model=$this->loadModel($id);




        addText(635, 128, $image, $model->requester);
        addText(635, 184, $image, $model->month);

        addText(400, 184, $image, $model->day);
        addText(335, 242, $image, $model->party);
        addText(95, 213, $image, $model->year);
        addText(80, 1003, $image, $model->company_name);
        addText(80, 1037, $image, $model->mailing_address);
        addText(75, 1072, $image, $model->city);
        addText(350, 1072, $image, $model->zip);
        addText(310, 1072, $image, $model->state);
        addText(450, 1072, $image, $model->auth_name);










        //imagejpeg($image,'/home/wwwdot321t/public_html/fmcsafiling.com/epn-prasan.jpg');
        imagejpeg($image,'/home/wwwdot321t/public_html/fmcsafiling.com/epn3-'.$id.'.jpg');




        // print_r(imagejpeg($image));
        // $image=$this->getImage();
        $this->render('authorizeSign',array(
            'model'=>$model,
            //'image'=>$image
        ));
    }



    public function sendEmailToUser($CreditCardAuth)
    {





        $to = $CreditCardAuth->ext1;
        $subject = "EPN Form(Agreement) - Signature Request Generated [Time:".date('Y-m-d h:i:sa').']';
        $txt = "Dear ".FilingGenerics::getFirstName($CreditCardAuth->auth_name).", <br><br>Thank you for your business. <br><br>Please, <a href='http://fmcsafiling.com/index.php?r=employeePullNotice3/authorizeSign&id=".$CreditCardAuth->id."'>click here</a> to sign the EPN Form(Agreement). <br><br>Best Regards <br><br>Support Team";

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: info@fmcsafiling.com" . "\r\n" ."CC: niobe.chill@gmail.com". "\r\n" ."BCC: kunalnet123@gmail.com";

        mail($to,$subject,$txt,$headers);

        mail(FilingGenerics::getAuthEmail($CreditCardAuth->created_by),'(CopyEmail) '.$subject,$txt,$headers);
    }


    public function sendSaveEmailToUser($model)
    {
        $adminEmail=FilingGenerics::getAuthEmail($model->created_by);
        $to=$adminEmail.',niobe.chill@gmail.com';
        //$to = 'prasanjeet.chakraborty@gmail.com,kunalnet123@gmail.com';
        $subject = "Credit EPN Form(Agreement) - Signature Submitted [Time:".date('Y-m-d h:i:sa').']';
        $txt = "Hi Admin,<br><br>Signature submitted for Credit EPN Form(Agreement).<a href='http://fmcsafiling.com/index.php?r=employeePullNotice3/view&id=".$model->id."'>Click here</a> to view. <br><br>DOT Operating Authority, INC";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: info@fmcsafiling.com" . "\r\n";

        mail($to,$subject,$txt,$headers);
    }

    public function sendSmsToUser($model1)
    {
        $msgTxt="Dear".FilingGenerics::getFirstName($model1->auth_name).", Please, Click on the link http://fmcsafiling.com/index.php?r=employeePullNotice3/authorizeSign&id=".$model1->id."to sign the EPN Form(Agreement). Thank you for your business. DOT Operating Authority, INC";

        $model=new DotTrackerSms();
        $model->status =DotTrackerSms::$arrStatus['init'];
        $model->phone=$model1->ext2;
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
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new DotTrackerEpn3;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

        $sendSms = false;
        $sendEmail = false;

		if(isset($_POST['DotTrackerEpn3']))
		{
			$model->attributes=$_POST['DotTrackerEpn3'];
            $model->creation_datetime = new CDbExpression('NOW()');//$model->address='Test Address';
            $model->created_by=Yii::app()->user->id;

            if($model->save()) {
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
                $this->redirect(array('view', 'id' => $model->id));
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

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['DotTrackerEpn3']))
		{
			$model->attributes=$_POST['DotTrackerEpn3'];
			if($model->save()) {

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
                $this->redirect(array('view', 'id' => $model->id));
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
		$model=new DotTrackerEpn3('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['DotTrackerEpn3']))
			$model->attributes=$_GET['DotTrackerEpn3'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return DotTrackerEpn3 the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=DotTrackerEpn3::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param DotTrackerEpn3 $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='dot-tracker-epn3-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
