<?php

class CreditCardAuthorizationController extends Controller
{
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

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
                'actions' => array('authorizeSignature','saveScr','pdfConvert','view'),
                'users' => array('*'),
            ),

            array('allow',  // allow all users to perform 'index' and 'view' actions
                'actions' => array('index','sendReceipt'),
                'users' => array('@'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('@'),
            ),
            array('deny',  // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id)
    {
        $this->render('_view', array(
            'data' => $this->loadModel($id),
        ));
    }

    public function actionPdfConvert()
    {
        $this->render('pdfConvert'
        );
    }
    public function actionAuthorizeSignature($id)
    {
        $this->render('_changeSign', array(
            'data' => $this->loadModel($id),
        ));
    }


    public function actionSaveScr()
    {

        $imgData=Yii::app()->request->getPost('imgData','');
        $id=Yii::app()->request->getParam('id','');
        $ccname=Yii::app()->request->getParam('ccholder_name','');
        $ccdate=Yii::app()->request->getParam('date','');
        $acceptinitial1=Yii::app()->request->getParam('phone','');
        $acceptinitial2=Yii::app()->request->getParam('email','');


        $CreditCardAuth=CreditCardAuthorization::model()->findByPk($id);

        if(!$CreditCardAuth)
        {
            throw new CHttpException(400,'Template cannot be found!');
        }

        $imagedata = base64_decode($imgData);
        $filename = md5(uniqid(rand(), true));

        ///print_r($imagedata);die;

        $file = '/Applications/MAMP/htdocs/fmcsa-filings/uploadsign/'.$filename.'.png';
        $file='/home/wwwdot321t/public_html/fmcsafiling.com/uploadsign/'.$filename.'.png';		
        if(file_put_contents($file,$imagedata)){
            $CreditCardAuth->sign_link='uploadsign/'.$filename.'.png';
            $CreditCardAuth->ccholder_name=$ccname;
            $CreditCardAuth->date=$ccdate;
            $CreditCardAuth->phone=$acceptinitial1;
            $CreditCardAuth->email=$acceptinitial2;
            $CreditCardAuth->save();
            $this->sendSaveEmailToUser($CreditCardAuth);
           // $this->sendSaveSmsToUser($CreditCardAuth);
        }
        echo $file;
    }
    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $model = new CreditCardAuthorization;
        $sendEmail = false;
        $sendSms = false;
        if(isset($_GET['order-id'])){
            $orderId=$_GET['order-id'];
        }

        if(isset($_GET['quote-id']) && is_numeric($_GET['quote-id'])){
            $q=DotTrackerOrder::model()->findByAttributes(array('quote_id'=>$_GET['quote-id']));

            if($q)
            {
                $orderId=$q->id;
            }
          //  $orderId=$_GET['order-id'];
        }


       //  echo $orderId; die;
        if(isset($orderId) && !empty($orderId))
        {
            $orderModel=DotTrackerOrder::model()->findByPk($orderId);
            if($orderModel)
            {
                $quoteModel=DotTrackerQuote::model()->findByPk($orderModel->quote_id);
                if($quoteModel)
                {
                    $arrN=json_decode($quoteModel->arrdata);
                    $newArr=array();
                    if(count($arrN)) {
                        foreach (json_decode($quoteModel->arrdata) as $data) {
                            array_push($newArr, FilingGenerics::$serviceType[$data->id]);
                            //array_push()
                        }
                    }

                    $arrData = implode(' , ',$newArr);
                    $model->auth_amount=$quoteModel->discounted_price;
                    $model->service_details=$quoteModel->arrdata;
                    $model->order_id=$orderModel->id;
                    $model->auth_charges=$arrData;
                    $model->auth_phoneno=$quoteModel->phone;
                    $model->auth_email=$quoteModel->email;
                    $model->address=$quoteModel->address;
                    $model->city=$quoteModel->city;
                    $model->zipcode=$quoteModel->zip;
                    $model->state=$quoteModel->state;
                }
            }

        }
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['CreditCardAuthorization'])) {

            $type=1;
            $model->attributes = $_POST['CreditCardAuthorization'];
            $model->creation_datetime = new CDbExpression('NOW()');//$model->address='Test Address';
            $model->ccholder_name='--';
            $model->date='--';
            $model->sign_link='--';
            if ($model->save()) {
                if (isset($_POST['but3'])) {
                    //$sendEmail = true;
                    $sendSms = true;
                    $model->auth_method=1;
                } else if (isset($_POST['but2'])) {
                    $sendEmail = true;
                    $model->auth_method=2;
                }
                $model->save();

                if ($sendSms) {
                    $this->sendSmsToUser($model);
                    $type=2;
                }
                if ($sendEmail) {
                    $this->sendEmailToUser($model);
                    $type=3;
                }


                $this->redirect(array('view', 'id' => $model->id,'type'=>$type));
            }

        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function actionSendReceipt()
    {
        $id=Yii::app()->request->getParam('id');
        $success=true;
        $msg="Successfull Transaction";
        if(empty($id))
        {
            $success=false;
            $msg='Invalid ID';
        }

        $CreditAuth=CreditCardAuthorization::model()->findByPk($id);
        if(empty($CreditAuth))
        {
            $success=false;
            $msg='Invalid Request';
        }

        if($success==true){
            $this->sendReceiptToUser($CreditAuth);
        }

        echo json_encode(array('success'=>$success,$msg=>$msg));

    }

    public function sendEmailToUser($CreditCardAuth)
    {





        $to = $CreditCardAuth->auth_email;
        $subject = "Credit Card Authorization Form - Signature Request Generated [Time:".date('Y-m-d h:i:sa').']';
        $txt = "Dear ".FilingGenerics::getFirstName($CreditCardAuth->auth_name).", <br><br>Thank you for your business. <br><br>Please, <a href='http://fmcsafiling.com/index.php?r=creditCardAuthorization/authorizeSignature&id=".$CreditCardAuth->id."'>click here</a> to sign the authorization form. <br><br>Best Regards <br><br>Support Team";

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: info@fmcsafiling.com" . "\r\n" ."CC: niobe.chill@gmail.com". "\r\n" ."BCC: kunalnet123@gmail.com";

        mail($to,$subject,$txt,$headers);
    }

    public function sendReceiptToUser($model)
    {
        $to = $model->auth_email;
        $subject =  "Receipt for Transaction in FMCSA Filings - Submitted on [Time:".date('Y-m-d h:i:sa').']';
        $txt = "Dear ".FilingGenerics::getFirstName($model->auth_name).",<br><br>Please Find the Receipt Below. <br><br> Warm Regards<br>Support Team<br> www.fmcsafiling.com";

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: info@fmcsafiling.com" . "\r\n" ."CC: niobe.chill@gmail.com". "\r\n" ."BCC: kunalnet123@gmail.com";

        mail($to,$subject,$txt,$headers);
    }



    public function sendSaveEmailToUser($model)
    {
        $adminEmail=FilingGenerics::getAuthEmail($model->created_by);
        $to=$adminEmail.',niobe.chill@gmail.com';
        //$to = 'prasanjeet.chakraborty@gmail.com,kunalnet123@gmail.com';
        $subject = "Credit Card Authorization Form - Signature Submitted [Time:".date('Y-m-d h:i:sa').']';
        $txt = "Hi Admin,<br><br>Signature submitted for Credit Card Authorization Form.<a href='http://fmcsafiling.com/index.php?r=creditCardAuthorization/view&id=".$model->id."'>Click here</a> to view. <br><br>DOT Operating Authority, INC";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: info@fmcsafiling.com" . "\r\n";

        mail($to,$subject,$txt,$headers);


        $subject1 = "Credit Card Authorization Form - Signature Submitted [Time:".date('Y-m-d h:i:sa').']';
        $to1 = $model->auth_email;
        $txt1 = "Dear ".FilingGenerics::getFirstName($model->auth_name).",<br><br> Signature has been submitted for Credit Card Authorization Form. <br><br>DOT Operating Authority, INC";
        $headers1 = "MIME-Version: 1.0" . "\r\n";
        $headers1 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers1 .= "From: info@fmcsafiling.com" . "\r\n";

        mail($to1,$subject1,$txt1,$headers1);


        $txt = "Hi Admin,<br><br>Signature submitted for Credit Card Authorization Form, please click on the link http://fmcsafiling.com/index.php?r=creditCardAuthorization/view&id=".$model->id." to view. <br><br> Warm Regards<br>Support Team<br> www.fmcsafiling.com";

        $model1=new DotTrackerSms();
        $model1->status =DotTrackerSms::$arrStatus['init'];
        $model1->phone=$model->auth_phoneno;
        $model1->message=strip_tags($txt1);

        // print_r($model->a)
        if($model1->validate())
        {
            $model1->save();
            //   echo 'saved';
        }
        else{
            print_r($model1->getErrors());
        }



    }


    public function sendSaveSmsToUser($model)
    { return;
        $txt = "Hi Admin,<br><br>Signature submitted for Credit Card Authorization Form.<a href='http://fmcsafiling.com/index.php?r=creditCardAuthorization/view&id=".$model->id."'>Click here</a> to view. <br><br>DOT Operating Authority, INC";

        $model=new DotTrackerSms();
        $model->status =DotTrackerSms::$arrStatus['init'];
        $model->phone=$model->auth_phoneno;
        $model->message=$txt;

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

    public function sendSmsToUser($model1)
    {
        $msgTxt="Dear ".FilingGenerics::getFirstName($model1->auth_name).", please, click on the link http://fmcsafiling.com/index.php?r=creditCardAuthorization/authorizeSignature&id=".$model1->id." to sign the authorization form. Thank you for your business. DOT Operating Authority, INC";

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
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        $sendSms=false;
        $sendEmail=false;

        if (isset($_POST['CreditCardAuthorization'])) {
            $type=1;
            $model->attributes = $_POST['CreditCardAuthorization'];
           // $model->address='Test';
            if ($model->save())
            {
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

                $this->redirect(array('view', 'id' => $model->id,'type'=>$type));
            }

        }

        $this->render('update', array(
            'model' => $model,
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
        if (!isset($_GET['ajax']))
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
        $model = new CreditCardAuthorization('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['CreditCardAuthorization']))
            $model->attributes = $_GET['CreditCardAuthorization'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return CreditCardAuthorization the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model = CreditCardAuthorization::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CreditCardAuthorization $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'credit-card-authorization-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}

