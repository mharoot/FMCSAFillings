<?php

class EmployeePullNotice2Controller extends Controller
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



    public function actionSaveScr()
    {

        $imgData=Yii::app()->request->getPost('imgData','');
        $id=Yii::app()->request->getParam('id','');



        $CreditCardAuth=DotTrackerEpn2::model()->findByPk($id);

        if(!$CreditCardAuth)
        {
            throw new CHttpException(400,'Form cannot be found!');
        }

        $imagedata = base64_decode($imgData);
        $filename = md5(uniqid(rand(), true));

        ///print_r($imagedata);die;

        //$file = '/Applications/MAMP/htdocs/fmcsa-filings/uploadsign/epn'.$filename.'.png';
        $file='/xampp/htdocs/FMCSAFillings/uploadsign/epn1/'.$filename.'.png';
        if(file_put_contents($file,$imagedata)){
            $CreditCardAuth->sign=$file;
            $CreditCardAuth->sign_date=new CDbExpression('NOW()');

            $CreditCardAuth->save();
           // $this->sendSaveEmailToUser($CreditCardAuth);
        }
        echo $file;
    }

    public function actionAuthorizeSign($id)
    {


        $imgPath = '/xampp/htdocs/FMCSAFillings/epn2.jpg';
        $image = imagecreatefromjpeg($imgPath);
        $dest = imagecreatefrompng('/xampp/htdocs/FMCSAFillings/tick.png');
        $dest1 = imagecreatefrompng('/xampp/htdocs/FMCSAFillings/tick1.png');






        function addText($x, $y, $image, $str)
        {
            $color = imagecolorallocate($image, 0,0,0);
            $fontSize = 5;
            imagestring($image, $fontSize, $x, $y, $str, $color);
        }

        $model=$this->loadModel($id);




        addText(60, 150, $image, $model->employer);
        addText(500, 150, $image, $model->requester_code);
        addText(680, 150, $image, $model->date);


        addText(60, 185, $image, $model->current_address);
        addText(500, 185, $image, substr($model->telephone,0,3));
        addText(545, 185, $image, substr($model->telephone,3,113));
        addText(680, 185, $image, $model->ext);

        addText(60, 217, $image, $model->city);
        addText(325, 217, $image, $model->state);
        addText(370, 217, $image, $model->zip);
        addText(500, 217, $image, $model->contact_name);
        if($model->is_enroll == 1)
        {
            //  imagecopymerge($image, $dest, 40, 1075, 100, 100, 15, 15, 100);
            imagecopymerge($image, $dest1, 320, 100, 0, 0, 15, 15, 100);
        }
        else{
            //imagecopymerge($image, $dest, 40, 1102, 100, 100, 15, 15, 100);
            imagecopymerge($image, $dest1, 455, 100, 0, 0, 15, 15, 100);
        }

        addText(80, 337, $image, $model->c11);
        addText(245, 337, $image, $model->c12);
        addText(370, 337, $image, $model->c13);
        addText(435, 337, $image, $model->c14);

        addText(80, 375, $image, $model->c21);
        addText(245, 375, $image, $model->c22);
        addText(370, 375, $image, $model->c23);
        addText(435, 375, $image, $model->c24);

        addText(80, 410, $image, $model->c31);
        addText(245, 410, $image, $model->c32);
        addText(370, 410, $image, $model->c33);
        addText(435, 410, $image, $model->c34);

        addText(80, 442, $image, $model->c41);
        addText(245, 442, $image, $model->c42);
        addText(370, 442, $image, $model->c43);
        addText(435, 442, $image, $model->c44);

        addText(80, 475, $image, $model->c51);
        addText(245, 475, $image, $model->c52);
        addText(370, 475, $image, $model->c53);
        addText(435, 475, $image, $model->c54);

        addText(80, 510, $image, $model->c61);
        addText(245, 510, $image, $model->c62);
        addText(370, 510, $image, $model->c63);
        addText(435, 510, $image, $model->c64);


        addText(80, 545, $image, $model->c71);
        addText(245, 545, $image, $model->c72);
        addText(370, 545, $image, $model->c73);
        addText(435, 545, $image, $model->c74);

        addText(80, 577 , $image, $model->c81);
        addText(245, 577, $image, $model->c82);
        addText(370, 577, $image, $model->c83);
        addText(435, 577, $image, $model->c84);

        addText(80, 613 , $image, $model->c91);
        addText(245, 613, $image, $model->c92);
        addText(370, 613, $image, $model->c93);
        addText(435, 613, $image, $model->c94);

        addText(80, 648 , $image, $model->c101);
        addText(245, 648, $image, $model->c102);
        addText(370, 648, $image, $model->c103);
        addText(435, 648, $image, $model->c104);

        addText(80, 682 , $image, $model->c111);
        addText(245, 682, $image, $model->c112);
        addText(370, 682, $image, $model->c113);
        addText(435, 682, $image, $model->c114);

        addText(80, 715 , $image, $model->c121);
        addText(245, 715, $image, $model->c122);
        addText(370, 715, $image, $model->c123);
        addText(435, 715, $image, $model->c124);

        addText(80, 750 , $image, $model->c131);
        addText(245, 750, $image, $model->c132);
        addText(370, 750, $image, $model->c133);
        addText(435, 750, $image, $model->c134);

        addText(80, 750 , $image, $model->c131);
        addText(245, 750, $image, $model->c132);
        addText(370, 750, $image, $model->c133);
        addText(435, 750, $image, $model->c134);

        addText(80, 785 , $image, $model->c141);
        addText(245, 785, $image, $model->c142);
        addText(370, 785, $image, $model->c143);
        addText(435, 785, $image, $model->c144);

        addText(80, 820 , $image, $model->c151);
        addText(245, 820, $image, $model->c152);
        addText(370, 820, $image, $model->c153);
        addText(435, 820, $image, $model->c154);


        addText(80, 850, $image, $model->ext1);
        addText(80, 880, $image, $model->ext2);










        //imagejpeg($image,'/xampp/htdocs/FMCSAFillings/epn-prasan.jpg');
        imagejpeg($image,'/xampp/htdocs/FMCSAFillings/epn2-'.$id.'.jpg');




        // print_r(imagejpeg($image));
        // $image=$this->getImage();
        $this->render('authorizeSign',array(
            'model'=>$model,
            //'image'=>$image
        ));
    }



    public function sendEmailToUser($CreditCardAuth)
    {





        $to = $CreditCardAuth->ext6;
        $subject = "EPN Form - Signature Request Generated [Time:".date('Y-m-d h:i:sa').']';
        $txt = "Dear ".FilingGenerics::getFirstName($CreditCardAuth->contact_name).", <br><br>Thank you for your business. <br><br>Please, <a href='http://fmcsafiling.com/index.php?r=employeePullNotice2/authorizeSign&id=".$CreditCardAuth->id."'>click here</a> to sign the EPN Form. <br><br>Best Regards <br><br>Support Team";

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
        $subject = "Credit EPN Form - Signature Submitted [Time:".date('Y-m-d h:i:sa').']';
        $txt = "Hi Admin,<br><br>Signature submitted for Credit EPN Form.<a href='http://fmcsafiling.com/index.php?r=employeePullNotice2/view&id=".$model->id."'>Click here</a> to view. <br><br>DOT Operating Authority, INC";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: info@fmcsafiling.com" . "\r\n";

        mail($to,$subject,$txt,$headers);
    }

    public function sendSmsToUser($model1)
    {
        $msgTxt="Dear".FilingGenerics::getFirstName($model1->contact_name).", Please, Click on the link http://fmcsafiling.com/index.php?r=employeePullNotice2/authorizeSign&id=".$model1->id."to sign the EPN Form. Thank you for your business. DOT Operating Authority, INC";

        $model=new DotTrackerSms();
        $model->status =DotTrackerSms::$arrStatus['init'];
        $model->phone=$model1->ext7;
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



    public function actionView($id)
    {


        $imgPath = '/xampp/htdocs/FMCSAFillings/epn2.jpg';
        $image = imagecreatefromjpeg($imgPath);
        $dest = imagecreatefrompng('/xampp/htdocs/FMCSAFillings/tick.png');
        $dest1 = imagecreatefrompng('/xampp/htdocs/FMCSAFillings/tick1.png');






        function addText($x, $y, $image, $str)
        {
            $color = imagecolorallocate($image, 0,0,0);
            $fontSize = 5;
            imagestring($image, $fontSize, $x, $y, $str, $color);
        }

        $model=$this->loadModel($id);




        addText(60, 150, $image, $model->employer);
        addText(500, 150, $image, $model->requester_code);
        addText(680, 150, $image, $model->date);


        addText(60, 185, $image, $model->current_address);
        addText(500, 185, $image, substr($model->telephone,0,3));
        addText(545, 185, $image, substr($model->telephone,3,113));
        addText(680, 185, $image, $model->ext);

        addText(60, 217, $image, $model->city);
        addText(325, 217, $image, $model->state);
        addText(370, 217, $image, $model->zip);
        addText(500, 217, $image, $model->contact_name);
        if($model->is_enroll == 1)
        {
            //  imagecopymerge($image, $dest, 40, 1075, 100, 100, 15, 15, 100);
            imagecopymerge($image, $dest1, 320, 100, 0, 0, 15, 15, 100);
        }
        else{
            //imagecopymerge($image, $dest, 40, 1102, 100, 100, 15, 15, 100);
            imagecopymerge($image, $dest1, 455, 100, 0, 0, 15, 15, 100);
        }

        addText(80, 337, $image, $model->c11);
        addText(245, 337, $image, $model->c12);
        addText(370, 337, $image, $model->c13);
        addText(435, 337, $image, $model->c14);

        addText(80, 375, $image, $model->c21);
        addText(245, 375, $image, $model->c22);
        addText(370, 375, $image, $model->c23);
        addText(435, 375, $image, $model->c24);

        addText(80, 410, $image, $model->c31);
        addText(245, 410, $image, $model->c32);
        addText(370, 410, $image, $model->c33);
        addText(435, 410, $image, $model->c34);

        addText(80, 442, $image, $model->c41);
        addText(245, 442, $image, $model->c42);
        addText(370, 442, $image, $model->c43);
        addText(435, 442, $image, $model->c44);

        addText(80, 475, $image, $model->c51);
        addText(245, 475, $image, $model->c52);
        addText(370, 475, $image, $model->c53);
        addText(435, 475, $image, $model->c54);

        addText(80, 510, $image, $model->c61);
        addText(245, 510, $image, $model->c62);
        addText(370, 510, $image, $model->c63);
        addText(435, 510, $image, $model->c64);


        addText(80, 545, $image, $model->c71);
        addText(245, 545, $image, $model->c72);
        addText(370, 545, $image, $model->c73);
        addText(435, 545, $image, $model->c74);

        addText(80, 577 , $image, $model->c81);
        addText(245, 577, $image, $model->c82);
        addText(370, 577, $image, $model->c83);
        addText(435, 577, $image, $model->c84);

        addText(80, 613 , $image, $model->c91);
        addText(245, 613, $image, $model->c92);
        addText(370, 613, $image, $model->c93);
        addText(435, 613, $image, $model->c94);

        addText(80, 648 , $image, $model->c101);
        addText(245, 648, $image, $model->c102);
        addText(370, 648, $image, $model->c103);
        addText(435, 648, $image, $model->c104);

        addText(80, 682 , $image, $model->c111);
        addText(245, 682, $image, $model->c112);
        addText(370, 682, $image, $model->c113);
        addText(435, 682, $image, $model->c114);

        addText(80, 715 , $image, $model->c121);
        addText(245, 715, $image, $model->c122);
        addText(370, 715, $image, $model->c123);
        addText(435, 715, $image, $model->c124);

        addText(80, 750 , $image, $model->c131);
        addText(245, 750, $image, $model->c132);
        addText(370, 750, $image, $model->c133);
        addText(435, 750, $image, $model->c134);

        addText(80, 750 , $image, $model->c131);
        addText(245, 750, $image, $model->c132);
        addText(370, 750, $image, $model->c133);
        addText(435, 750, $image, $model->c134);

        addText(80, 785 , $image, $model->c141);
        addText(245, 785, $image, $model->c142);
        addText(370, 785, $image, $model->c143);
        addText(435, 785, $image, $model->c144);

         addText(80, 820 , $image, $model->c151);
        addText(245, 820, $image, $model->c152);
        addText(370, 820, $image, $model->c153);
        addText(435, 820, $image, $model->c154);


        addText(80, 850, $image, $model->ext1);
        addText(80, 880, $image, $model->ext2);


        if(!empty($model->sign))
        {$dest2 = imagecreatefrompng($model->sign);
            $new_image = imagecreatetruecolor(300, 33);
            imagecopyresized($new_image, $dest2,
                0, 0, 0, 0,
                196, 58,
                300, 100);
            imagecopymerge($image, $new_image, 290, 990, 0, 0, 194, 23 , 100);
            addText(50, 1000, $image, $model->sign_date);
            addText(50, 1030, $image, $model->contact_name);


        }








        //imagejpeg($image,'/xampp/htdocs/FMCSAFillings/epn-prasan.jpg');
        imagejpeg($image,'/xampp/htdocs/FMCSAFillings/epn2-'.$id.'.jpg');


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
		$model=new DotTrackerEpn2;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['DotTrackerEpn2']))
		{
			$model->attributes=$_POST['DotTrackerEpn2'];
            $model->creation_datetime = new CDbExpression('NOW()');//$model->address='Test Address';
            $model->created_by=Yii::app()->user->id;
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

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['DotTrackerEpn2']))
		{
			$model->attributes=$_POST['DotTrackerEpn2'];
			if($model->save()){ if (isset($_POST['but3'])) {
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
		$model=new DotTrackerEpn2('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['DotTrackerEpn2']))
			$model->attributes=$_GET['DotTrackerEpn2'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return DotTrackerEpn2 the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=DotTrackerEpn2::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param DotTrackerEpn2 $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='dot-tracker-epn2-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
