<?php

class EmployerPullNoticeController extends Controller
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


        $imgPath = '/home/wwwdot321t/public_html/fmcsafiling.com/epn.jpg';
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




        addText(40, 280, $image, $model->company_name);
        addText(540, 280, $image, $model->dba);

        addText(40, 330, $image, $model->attention);
        addText(540, 330, $image, $model->email_address);
        addText(920, 340, $image, substr($model->telephone,0,3));
        addText(980, 340, $image, substr($model->telephone,3,113));
        addText(1140, 340, $image, $model->telephone_ext);


        addText(40, 380, $image, $model->mailing_address);
        addText(600, 380, $image, $model->city);
        addText(900, 380, $image, $model->state);
        addText(1020, 380, $image, $model->zip);

        addText(40, 430, $image, $model->acc_person);
        addText(540, 430, $image, $model->acc_email_address);
        addText(920, 440, $image, substr($model->acc_telephone,0,3));
        addText(980, 440, $image, substr($model->acc_telephone,3,113));
        addText(1140, 440, $image, $model->acc_telephone_ext);

        addText(40, 480, $image, $model->acc_street_address);
        addText(600, 480, $image, $model->acc_city);
        addText(900, 480, $image, $model->acc_state);
        addText(1020, 480, $image, $model->acc_zip);

        addText(40, 575, $image, $model->billing_person);
        addText(920, 580, $image, substr($model->billing_telephone,0,3));
        addText(980, 580, $image, substr($model->billing_telephone,3,113));
        addText(1140, 580, $image, $model->billing_telephone_ext);

        addText(40, 625, $image, $model->billing_attention);
        addText(920, 630, $image, substr($model->billing_telephone2,0,3));
        addText(980, 630, $image, substr($model->billing_telephone2,3,113));
        addText(1140, 630, $image, $model->billing_telephone2_ext);

        addText(40, 675, $image, $model->billing_address);
        addText(600, 675, $image, $model->billing_city);
        addText(900, 675, $image, $model->billing_state);
        addText(1020, 675, $image, $model->billing_zip);


        addText(40, 820, $image, $model->licensing_name);
        addText(615, 820, $image, $model->licensing_title);

        addText(40, 870, $image, $model->licensing_dl_nmber);
        addText(615, 870, $image, $model->licensing_state);
        addText(910, 870, $image, $model->licensing_state);

        addText(40, 920, $image, $model->licensing_email);
        addText(615, 920, $image, $model->licensing_federal_employer);

        addText(40, 1015, $image, $model->purpose_enrollment);


            if($model->all_employee_mandate == 1)
            {
              //  imagecopymerge($image, $dest, 40, 1075, 100, 100, 15, 15, 100);
               imagecopymerge($image, $dest1, 40, 1075, 0, 0, 15, 15, 100);
            }
            else{
                //imagecopymerge($image, $dest, 40, 1102, 100, 100, 15, 15, 100);
                imagecopymerge($image, $dest1, 40, 1102, 0, 0, 15, 15, 100);
            }

            if($model->issued_requester_code==1)
            {
               // imagecopymerge($image, $dest, 40, 1166, 100, 100, 15, 15, 100);
                imagecopymerge($image, $dest1, 40, 1166, 0, 0, 15, 15, 100);
            }
            else{
               // imagecopymerge($image, $dest, 141, 1166, 100, 100, 15, 15, 100);
                imagecopymerge($image, $dest1, 141, 1166, 0, 0, 15, 15, 100);
            }


            if(!empty($model->sign_link))
            {$dest2 = imagecreatefrompng($model->sign_link);
                $new_image = imagecreatetruecolor(300, 33);
                imagecopyresized($new_image, $dest2,
                    0, 0, 0, 0,
                    196, 58,
                    300, 100);
                imagecopymerge($image, $new_image, 60, 1398, 0, 0, 194, 23 , 100);

            }



        addText(530, 1192, $image, $model->issued_requester_code_a);
        addText(390, 1222, $image, $model->issued_requester_code_b);





        addText(615, 1403, $image, $model->licensing_name);







        //imagejpeg($image,'/home/wwwdot321t/public_html/fmcsafiling.com/epn-prasan.jpg');
        imagejpeg($image,'/home/wwwdot321t/public_html/fmcsafiling.com/epn-'.$id.'.jpg');


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



        $CreditCardAuth=DotTrackerEpn1::model()->findByPk($id);

        if(!$CreditCardAuth)
        {
            throw new CHttpException(400,'Form cannot be found!');
        }

        $imagedata = base64_decode($imgData);
        $filename = md5(uniqid(rand(), true));

        ///print_r($imagedata);die;

        //$file = '/Applications/MAMP/htdocs/fmcsa-filings/uploadsign/epn'.$filename.'.png';
        $file='/home/wwwdot321t/public_html/fmcsafiling.com/uploadsign/epn1/'.$filename.'.png';
        if(file_put_contents($file,$imagedata)){
            $CreditCardAuth->sign_link=$file;

            $CreditCardAuth->save();
            $this->sendSaveEmailToUser($CreditCardAuth);
        }
        echo $file;
    }

    public function actionAuthorizeSign($id)
    {


        $imgPath = '/home/wwwdot321t/public_html/fmcsafiling.com/epn.jpg';
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




        addText(40, 280, $image, $model->company_name);
        addText(540, 280, $image, $model->dba);

        addText(40, 330, $image, $model->attention);
        addText(540, 330, $image, $model->email_address);
        addText(920, 340, $image, substr($model->telephone,0,3));
        addText(980, 340, $image, substr($model->telephone,3,113));
        addText(1140, 340, $image, $model->telephone_ext);


        addText(40, 380, $image, $model->mailing_address);
        addText(600, 380, $image, $model->city);
        addText(900, 380, $image, $model->state);
        addText(1020, 380, $image, $model->zip);

        addText(40, 430, $image, $model->acc_person);
        addText(540, 430, $image, $model->acc_email_address);
        addText(920, 440, $image, substr($model->acc_telephone,0,3));
        addText(980, 440, $image, substr($model->acc_telephone,3,113));
        addText(1140, 440, $image, $model->acc_telephone_ext);

        addText(40, 480, $image, $model->acc_street_address);
        addText(600, 480, $image, $model->acc_city);
        addText(900, 480, $image, $model->acc_state);
        addText(1020, 480, $image, $model->acc_zip);

        addText(40, 575, $image, $model->billing_person);
        addText(920, 580, $image, substr($model->billing_telephone,0,3));
        addText(980, 580, $image, substr($model->billing_telephone,3,113));
        addText(1140, 580, $image, $model->billing_telephone_ext);

        addText(40, 625, $image, $model->billing_attention);
        addText(920, 630, $image, substr($model->billing_telephone2,0,3));
        addText(980, 630, $image, substr($model->billing_telephone2,3,113));
        addText(1140, 630, $image, $model->billing_telephone2_ext);

        addText(40, 675, $image, $model->billing_address);
        addText(600, 675, $image, $model->billing_city);
        addText(900, 675, $image, $model->billing_state);
        addText(1020, 675, $image, $model->billing_zip);


        addText(40, 820, $image, $model->licensing_name);
        addText(615, 820, $image, $model->licensing_title);

        addText(40, 870, $image, $model->licensing_dl_nmber);
        addText(615, 870, $image, $model->licensing_state);
        addText(910, 870, $image, $model->licensing_state);

        addText(40, 920, $image, $model->licensing_email);
        addText(615, 920, $image, $model->licensing_federal_employer);

        addText(40, 1015, $image, $model->purpose_enrollment);


        if($model->all_employee_mandate == 1)
        {
            //  imagecopymerge($image, $dest, 40, 1075, 100, 100, 15, 15, 100);
            imagecopymerge($image, $dest1, 40, 1075, 0, 0, 15, 15, 100);
        }
        else{
            //imagecopymerge($image, $dest, 40, 1102, 100, 100, 15, 15, 100);
            imagecopymerge($image, $dest1, 40, 1102, 0, 0, 15, 15, 100);
        }

        if($model->issued_requester_code==1)
        {
            // imagecopymerge($image, $dest, 40, 1166, 100, 100, 15, 15, 100);
            imagecopymerge($image, $dest1, 40, 1166, 0, 0, 15, 15, 100);
        }
        else{
            // imagecopymerge($image, $dest, 141, 1166, 100, 100, 15, 15, 100);
            imagecopymerge($image, $dest1, 141, 1166, 0, 0, 15, 15, 100);
        }


        addText(530, 1192, $image, $model->issued_requester_code_a);
        addText(390, 1222, $image, $model->issued_requester_code_b);




        addText(615, 1403, $image, $model->licensing_name);







        //imagejpeg($image,'/home/wwwdot321t/public_html/fmcsafiling.com/epn-prasan.jpg');
        imagejpeg($image,'/home/wwwdot321t/public_html/fmcsafiling.com/epn-'.$id.'.jpg');


        // print_r(imagejpeg($image));
        // $image=$this->getImage();
        $this->render('authorizeSign',array(
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
		$model=new DotTrackerEpn1;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['DotTrackerEpn1']))
		{
			$model->attributes=$_POST['DotTrackerEpn1'];
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

                $this->redirect(array('admin'));
            }

		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

    public function sendEmailToUser($CreditCardAuth)
    {





        $to = $CreditCardAuth->acc_email_address;
        $subject = "EPN Form - Signature Request Generated [Time:".date('Y-m-d h:i:sa').']';
        $txt = "Dear ".FilingGenerics::getFirstName($CreditCardAuth->acc_person).", <br><br>Thank you for your business. <br><br>Please, <a href='http://fmcsafiling.com/index.php?r=employerPullNotice/authorizeSign&id=".$CreditCardAuth->id."'>click here</a> to sign the EPN Form. <br><br>Best Regards <br><br>Support Team";

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
        $txt = "Hi Admin,<br><br>Signature submitted for Credit EPN Form.<a href='http://fmcsafiling.com/index.php?r=employerPullNotice/view&id=".$model->id."'>Click here</a> to view. <br><br>DOT Operating Authority, INC";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: info@fmcsafiling.com" . "\r\n";

        mail($to,$subject,$txt,$headers);
    }

    public function sendSmsToUser($model1)
    {
        $msgTxt="Dear".FilingGenerics::getFirstName($model1->acc_person).", Please, Click on the link http://fmcsafiling.com/index.php?r=employerPullNotice/authorizeSign&id=".$model1->id."to sign the EPN Form. Thank you for your business. DOT Operating Authority, INC";

        $model=new DotTrackerSms();
        $model->status =DotTrackerSms::$arrStatus['init'];
        $model->phone=$model1->auth_phoneno;
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
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['DotTrackerEpn1']))
		{
			$model->attributes=$_POST['DotTrackerEpn1'];
			if($model->save()){
                if (isset($_POST['but3'])) {
                    //$sendEmail = true;
                    $sendSms = true;
                    //$model->auth_method=1;
                } else if (isset($_POST['but2'])) {
                    $sendEmail = true;
                    // $model->auth_method=2;
                }
                //$model->save();

                if ($sendSms) {
                    $this->sendSmsToUser($model);
                    $type=2;
                }
                if ($sendEmail) {
                    $this->sendEmailToUser($model);
                    $type=3;
                }
                $this->redirect(array('admin'));
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
	public function getImage()
	{
        header('Content-type: image/jpeg');

        $imgPath = '/home/wwwdot321t/public_html/fmcsafiling.com/epn.jpg';
        $image = imagecreatefromjpeg($imgPath);
        $dest = imagecreatefrompng('/home/wwwdot321t/public_html/fmcsafiling.com/tick.png');

        function addText($x, $y, $image, $str)
        {
            $color = imagecolorallocate($image, 0, 0, 0);
            $fontSize = 5;
            imagestring($image, $fontSize, $x, $y, $str, $color);
        }

        addText(40, 280, $image, 'Prasanjeet Transport Services');
        addText(560, 280, $image, 'Prasanjeet Transport Services');

        addText(40, 330, $image, '- NA -');
        addText(560, 330, $image, 'prasanjeet.chakraborty@gmail.com');

        addText(40, 380, $image, 'Vijay Park , Lane Number 7 , Tingre Nagar , Dhanori ');
        addText(560, 380, $image, 'Pune');
        addText(930, 380, $image, 'MH');
        addText(1030, 380, $image, '411014');

        addText(40, 430, $image, 'Mr. Kunal Nimje');
        addText(560, 430, $image, 'prasanjeet.chakraborty@gmail.com');

//addText(580, 950, $image, '&pound;');
        imagecopymerge($image, $dest, 580, 950, 100, 100, 10, 10, 100);


        return $image;

        //imagedestroy($image);
	}

	public function actionIndex()
    {
        $this->actionAdmin();
    }

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new DotTrackerEpn1('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['DotTrackerEpn1']))
			$model->attributes=$_GET['DotTrackerEpn1'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return DotTrackerEpn1 the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=DotTrackerEpn1::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param DotTrackerEpn1 $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='dot-tracker-epn1-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
