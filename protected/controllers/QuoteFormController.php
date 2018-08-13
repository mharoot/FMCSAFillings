<?php

class QuoteFormController extends Controller
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
				'actions'=>array('index','view'),
				'users'=>array('@'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','changeStatus','changeUser','followup','history'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('@'),
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
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */

	public function actionChangeStatus()
    {
        $id=Yii::app()->request->getParam('id',0);
        $status=Yii::app()->request->getParam('status',0);
        $success=false;
        $msg='';
        if(empty($id) || empty($status))
        {
            die;
        }

        if(!empty($id))
        {
            $id=FilingGenerics::decryptKey($id);
        }

        //print_r($_REQUEST);die;
        if(!empty($status))
        {
            $status=FilingGenerics::decryptKey($status);
        }
        $model=$this->loadModel($id);
        $model->status=$status;
        if($model->validate())
        {
            $model->save();
            $success=true;
            $msg='Status updated successfully';
        }
        else{
            $success=false;
            $msg='Status could not be updated';
        }

        echo CJSON::encode(array('success'=>$success,'msg'=>$msg));

    }

	public function actionCreate()
	{
		$model=new DotTrackerQuote;
		$modelO=$model->attributes;
        $sendSms=false;
        $sendEmail=false;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['DotTrackerQuote']))
		{
			$model->attributes=$_POST['DotTrackerQuote'];
            $model->creationdate = new CDbExpression('NOW()');
            $model->created_by = Yii::app()->user->id;
            $model->status=DotTrackerQuote::$enumStatus['quote'];
            
            $arrAll=json_decode($model->arrdata);
            $orderArr=array();
            foreach ($arrAll as $arr)
            {
                $orderArr[$arr->id]=0;
            }

            if($model->save())
            {
                $this->addLog($modelO,$model);
                //die;
                $order=new DotTrackerOrder();
                $order->quote_id=$model->id;
                $order->form_details=json_encode($orderArr);
                $order->creation_datetime = new CDbExpression('NOW()');
                $order->created_by = Yii::app()->user->id;
                $order->status=0;


                if(!empty($_POST['DotTrackerQuote']['shipper_notes']))
                {
                    $notes=new DotTrackerNotes();
                    $notes->quote_id=$model->id;
                    $notes->created_by = Yii::app()->user->id;
                    $notes->date = new CDbExpression('NOW()');
                    $notes->note=$_POST['DotTrackerQuote']['shipper_notes'];

                    if($notes->validate())
                    {
                        $notes->save();
                    }
                    else{
                        print_r($notes->getErrors);die;
                    }
                }





                if($order->validate())
                {
                    $order->save();
                }

                if (isset($_POST['but3'])) {
                    //$sendEmail = true;
                    $sendSms = true;
                } else if (isset($_POST['but2'])) {
                    $sendEmail = true;
                }
                if ($sendSms) {
                    $this->sendSmsToUser($model);
                }
                if ($sendEmail) {
                    $this->sendEmailToUser($model);
                }
                //$this->redirect(array('admin'),array('click','menu1'));
                $this->redirect(Yii::app()->createUrl('quoteForm/admin',array('click'=>'menu1')));
            }

		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function addLog($modelO,$model)
    {
        $attrlabels=DotTrackerQuote::model()->attributeLabels();
        $error=false;
        $excArr=array('creationdate','id');
      $modelVars=$model->attributes;
      $newArrDataC = (json_decode($modelVars['arrdata']));
      $oldArrDataC = count(json_decode($modelO['arrdata']));
       $data='<table class="table table-striped">';
        $data.='<tr style="font-weight: bold;"><td>Field </td><td>Old Values</td><td>New Values</td></tr>';



      foreach ($modelVars as $ind=>$val)
      {
          if( ($model[$ind] != $modelO[$ind]) && (in_array($ind,$excArr) != '-1') )
          {
              if(empty($attrlabels[$ind])){
                  $error=true;
              }

              if($ind=='status')
              {
                  $oldVal=empty($modelO[$ind])?'None':DotTrackerQuote::$arrStatus[$modelO[$ind]];

                  $data.='<tr><td>'.$attrlabels[$ind]. '</td><td>'.$oldVal.'</td><td>'.DotTrackerQuote::$arrStatus[$model[$ind]].'</td></tr>';
              }
              elseif ($ind=='arrdata')
              {
                  $oldVal=empty($modelO[$ind])?'None':FilingGenerics::parseServiceType($modelO[$ind]);
               //  echo '<pre>'; echo FilingGenerics::parseServiceType($oldVal); die;
                  $data.='<tr><td>'.$attrlabels[$ind]. '</td><td>'.$oldVal.'</td><td>'.FilingGenerics::parseServiceType($model[$ind]).'</td></tr>';
              }
              else{
                  $oldVal=empty($modelO[$ind])?'None':$modelO[$ind];

                  $data.='<tr><td>'.$attrlabels[$ind]. '</td><td>'.$oldVal.'</td><td>'.$model[$ind].'</td></tr>';
              }



          }
      }
      $data.='</table>';




      $quoteLog=new DotTrackerQuoteLog();
      $quoteLog->logDet=$data;
      $quoteLog->quote_id=$model->id;
      $quoteLog->extrafield='no Data';
      $quoteLog->date=new CDbExpression('NOW()');
      $quoteLog->created_by= Yii::app()->user->id;

      if(!$error) {
          $quoteLog->save();

      }




    }

	public function actionChangeUser()
    {
        $id=Yii::app()->request->getParam('id',0);
        $username=Yii::app()->request->getParam('username',0);
        $success=false;
        $msg='';
        if(empty($id) || empty($username))
        {
            die;
        }

        if(!empty($id))
        {
            $id=FilingGenerics::decryptKey($id);
        }

        //print_r($_REQUEST);die;

        $model=$this->loadModel($id);
        $model->created_by=$username;
        if($model->validate())
        {
            $model->save();
            $success=true;
            $msg='Username updated successfully';
        }
        else{
            $success=false;
            $msg='Username could not be updated';
        }

        echo CJSON::encode(array('success'=>$success,'msg'=>$msg));
    }

    public function actionFollowup()
    {
        $id=Yii::app()->request->getParam('id',0);
        $actionF=Yii::app()->request->getParam('actionF',0);
        $success=false;
        $msg='';
        if(empty($id) || empty($actionF))
        {
            die;
        }

        if(!empty($id))
        {
            $id=FilingGenerics::decryptKey($id);
        }

        //print_r($_REQUEST);die;

        $model=$this->loadModel($id);
        $mailC=0;
        $smsC=0;
        switch ($actionF)
        {
            case 'email':
                $mailC=$model->mailCount;
                $mailC=$mailC+1;
                $model->mailCount=$mailC;
                $this->sendEmailToUserFollowUp($model);
                break;

            case 'sms':
                $smsC=$model->smsCount;
                $smsC=$smsC+1;
                $model->smsCount=$smsC;
                $this->sendSmsToUserFollowup($model);
                break;

            case 'both':
                $mailC=$model->mailCount;
                $mailC=$mailC+1;
                $model->mailCount=$mailC;
                $this->sendEmailToUserFollowUp($model);

                $smsC=$model->smsCount;
                $smsC=$smsC+1;
                $model->smsCount=$smsC;
                $this->sendSmsToUserFollowup($model);


                break;

        }
       // $model->created_by=$username;
        if($model->validate())
        {
            $model->save();
            $success=true;
            $msg='Username updated successfully';
        }
        else{
            $success=false;
            $msg='Username could not be updated';
        }

        echo CJSON::encode(array('success'=>$success,'msg'=>$msg));
    }

    public function sendSmsToUserFollowupO($model1)
    {
        $msgTxt="Quote form followup submitted successfullly";


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


    public function sendEmailToUserFollowUpO($model)
    {
        $to = $model->email;
        $subject =  "Quote Form Followup - Submitted on [Time:".date('Y-m-d h:i:sa').']';
        $txt = "Hi ,<br><br>Quote Form submitted. <br><br> Warm Regards<br>Support Team<br> www.fmcsafiling.com";

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: info@fmcsafiling.com" . "\r\n" ."CC: niobe.chill@gmail.com". "\r\n" ."BCC: kunalnet123@gmail.com";

        mail($to,$subject,$txt,$headers);
    }

    public function sendEmailToUserFollowUp($CreditCardAuth)
    {

        $allAttr=$CreditCardAuth->attributes;
        $template=1;
        $arr=DotTrackerQuote::model()->attributeLabels();

        $Template=DotTrackerEmailtemp::model()->findByPk($template);
        $templArr=$Template->attributes;

        $body=$templArr['emaildata'];

        //echo $body;
        $discount_p=floatval(str_replace('$','',$allAttr['discounted_price']));
        $total=floatval($allAttr['totpayment']);
        $discount=$total-$discount_p;

        $bodytxt='';
        $serviceData=DotTrackerServicetype::model()->findAll();
        $serArr=array();
        foreach($serviceData as $service)
        {
            // echo '<pre>';print_r($service->attributes); echo '</pre>';
            $serArr[$service->slug]=$service->description;
        }

        //echo '<pre>';print_r($serArr);echo '</pre>';

        foreach ($arr as $index=>$val)
        {

            if($index=='agent_name') //added from here
            {    $body=str_replace('[agent_name]',FilingGenerics::getUserName($allAttr['created_by']),$body);


            }

            if($index=='agent_phone') //added from here
            {    $body=str_replace('[agent_phone]',FilingGenerics::getUserPhone($allAttr['created_by']),$body);


            }
            if($index=='arrdata') //added from here
            {   $bodytxt='<hr style="width:100%; float:left;"><table style="width:100%;" cellpadding="10" cellspacing="0">';
                $allData=CJSON::decode($allAttr['arrdata']);
                // print_r($allData); die;
                foreach($allData as $data )
                {
                    $bodytxt.='<tr><td style="width:90%"><b>'.FilingGenerics::$serviceType[$data['id']].'</b><br>'.$serArr[$data['id']].'</td><td width="10%" valign="bottom">$'.number_format(floatval(str_replace('$','',$data['amt'])),2).'</td></tr>';
                }
                $bodytxt.='</table><hr style="width:100%; float:left;">';
                $bodytxt.='<table style="width:100%;" border="0" cellpadding="10" cellspacing="0"><tbody><tr><td style="width: 90%; color:#ff0000;"><b>Total</b></td><td style="width: 10%; color:#ff0000;">$'.number_format($total,2).'</td></tr></tbody></table>';

                $bodytxt.='<table style="width:100%;" border="0" cellpadding="10" cellspacing="0"><tbody><tr><td style="width: 90%; color:#008000;"><b>Discount</b></td><td style="width: 10%; color:#008000;">$'.number_format($discount,2).'</td></tr></tbody></table><hr style="width:100%; float:left;">';

                $bodytxt.='<table style="width:100%;" border="0" cellpadding="10" cellspacing="0"><tbody><tr><td style="width: 90%; color:#000000;"><b>Your Total</b></td><td style="width: 10%; color:#000000;"><b>$'.number_format($discount_p,2).'</b></td></tr></tbody></table>';

                $body=str_replace('[arrdata]',$bodytxt,$body);


            }
            //added till here
            //   echo $index.'=>'.$allAttr[$index].'<br>';
            if(array_key_exists($index,$allAttr))
                $body=str_replace('['.$index.']',$allAttr[$index],$body);


        }



        $to = $CreditCardAuth->email;
        $subject =  "Quote Form - Submitted on [Time:".date('Y-m-d h:i:sa').']';


        // for kunal email
//        echo $body; die;

        $txt = $body;

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: info@fmcsafiling.com" . "\r\n" ."CC: niobe.chill@gmail.com". "\r\n" ."BCC: kunalnet123@gmail.com";

        mail($to,$subject,$txt,$headers);



        $adminEmail=FilingGenerics::getAuthEmail($CreditCardAuth->created_by);
        $to = $adminEmail;
        $subject =  "(Copy Email) Quote Form - Submitted on [Time:".date('Y-m-d h:i:sa').']';
        $txt = $body;

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: info@fmcsafiling.com" . "\r\n" ."CC: niobe.chill@gmail.com". "\r\n" ."BCC: kunalnet123@gmail.com";

        mail($to,$subject,$txt,$headers);
    }
    public function sendEmailToUser($CreditCardAuth)
    {

        $allAttr=$CreditCardAuth->attributes;
        $template=1;
        $arr=DotTrackerQuote::model()->attributeLabels();

        $Template=DotTrackerEmailtemp::model()->findByPk($template);
        $templArr=$Template->attributes;

        $body=$templArr['emaildata'];

        //echo $body;
        $discount_p=floatval(str_replace('$','',$allAttr['discounted_price']));
        $total=floatval($allAttr['totpayment']);
        $discount=$total-$discount_p;

        $bodytxt='';
        $serviceData=DotTrackerServicetype::model()->findAll();
        $serArr=array();
        foreach($serviceData as $service)
        {
           // echo '<pre>';print_r($service->attributes); echo '</pre>';
            $serArr[$service->slug]=$service->description;
        }

        //echo '<pre>';print_r($serArr);echo '</pre>';

        foreach ($arr as $index=>$val)
        {

            if($index=='agent_name') //added from here
            {    $body=str_replace('[agent_name]',FilingGenerics::getUserName($allAttr['created_by']),$body);


            }

            if($index=='agent_phone') //added from here
            {    $body=str_replace('[agent_phone]',FilingGenerics::getUserPhone($allAttr['created_by']),$body);


            }
            if($index=='arrdata') //added from here
            {   $bodytxt='<hr style="width:100%; float:left;"><table style="width:100%;" cellpadding="10" cellspacing="0">';
                $allData=CJSON::decode($allAttr['arrdata']);
               // print_r($allData); die;
                foreach($allData as $data )
                {
                    $bodytxt.='<tr><td style="width:90%"><b>'.FilingGenerics::$serviceType[$data['id']].'</b><br>'.$serArr[$data['id']].'</td><td width="10%" valign="bottom">$'.number_format(floatval(str_replace('$','',$data['amt'])),2).'</td></tr>';
                }
                $bodytxt.='</table><hr style="width:100%; float:left;">';
                $bodytxt.='<table style="width:100%;" border="0" cellpadding="10" cellspacing="0"><tbody><tr><td style="width: 90%; color:#ff0000;"><b>Total</b></td><td style="width: 10%; color:#ff0000;">$'.number_format($total,2).'</td></tr></tbody></table>';

                $bodytxt.='<table style="width:100%;" border="0" cellpadding="10" cellspacing="0"><tbody><tr><td style="width: 90%; color:#008000;"><b>Discount</b></td><td style="width: 10%; color:#008000;">$'.number_format($discount,2).'</td></tr></tbody></table><hr style="width:100%; float:left;">';

                $bodytxt.='<table style="width:100%;" border="0" cellpadding="10" cellspacing="0"><tbody><tr><td style="width: 90%; color:#000000;"><b>Your Total</b></td><td style="width: 10%; color:#000000;"><b>$'.number_format($discount_p,2).'</b></td></tr></tbody></table>';

                $body=str_replace('[arrdata]',$bodytxt,$body);


            }
            //added till here
         //   echo $index.'=>'.$allAttr[$index].'<br>';
            if(array_key_exists($index,$allAttr))
            $body=str_replace('['.$index.']',$allAttr[$index],$body);


        }



        $to = $CreditCardAuth->email;
        $subject =  "Quote Form - Submitted on [Time:".date('Y-m-d h:i:sa').']';


       // for kunal email
//        echo $body; die;

        $txt = $body;

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: info@fmcsafiling.com" . "\r\n" ."CC: niobe.chill@gmail.com". "\r\n" ."BCC: kunalnet123@gmail.com";

        mail($to,$subject,$txt,$headers);



        $adminEmail=FilingGenerics::getAuthEmail($CreditCardAuth->created_by);
        $to = $adminEmail;
        $subject =  "(Copy Email) Quote Form - Submitted on [Time:".date('Y-m-d h:i:sa').']';
        $txt = $body;

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: info@fmcsafiling.com" . "\r\n" ."CC: niobe.chill@gmail.com". "\r\n" ."BCC: kunalnet123@gmail.com";

        mail($to,$subject,$txt,$headers);
    }

    public function sendSaveEmailToUser($model)
    {
        $to = 'globalautotransportation@gmail.com,prasanjeet.chakraborty@gmail.com,kunalnet123@gmail.com';
        $subject = "Credit Card Authorization Form - Signature Submitted [Time:".date('Y-m-d h:i:sa').']';
        $txt = "Hi Admin,<br><br>Signature submitted for Credit Card Authorization Form.<a href='http://fmcsafiling.com/index.php?r=creditCardAuthorization/view&id=".$model->id."'>Click here</a> to view <br><br> Warm Regards<br>Support Team<br> www.fmcsafiling.com";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: info@fmcsafiling.com" . "\r\n";

        mail($to,$subject,$txt,$headers);
    }
    public function sendSaveSmsToUser($model)
    {
        $txt = "Hi Admin,<br><br>Signature submitted for Credit Card Authorization Form.<a href='http://fmcsafiling.com/index.php?r=creditCardAuthorization/view&id=".$model->id."'>Click here</a> to view <br><br> Warm Regards<br>Support Team<br> www.fmcsafiling.com";

        $model=new DotTrackerSms();
        $model->status =DotTrackerSms::$arrStatus['init'];
        $model->phone=$model->phone;
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
        $msgTxt="Hi ".$model1->fname.",Quote form  submitted successfullly";
        $allAttr=$model1->attributes;
        $template=3;
        $arr=DotTrackerQuote::model()->attributeLabels();

        $Template=DotTrackerEmailtemp::model()->findByPk($template);
        $templArr=$Template->attributes;

        $body=$templArr['emaildata'];

        $discount_p=floatval(str_replace('$','',$allAttr['discounted_price']));
        $total=floatval($allAttr['totpayment']);
        $discount=$total-$discount_p;


        //echo $body;

        $bodytxt='';
        $serviceData=DotTrackerServicetype::model()->findAll();
        $serArr=array();
        foreach($serviceData as $service)
        {
            // echo '<pre>';print_r($service->attributes); echo '</pre>';
            $serArr[$service->slug]=$service->description;
        }

        //echo '<pre>';print_r($serArr);echo '</pre>';

        foreach ($arr as $index=>$val)
        {

            if($index=='agent_name') //added from here
            {    $body=str_replace('[agent_name]',FilingGenerics::getUserName($allAttr['created_by']),$body);


            }

            if($index=='agent_phone') //added from here
            {    $body=str_replace('[agent_phone]',FilingGenerics::getUserPhone($allAttr['created_by']),$body);


            }
            if($index=='arrdata') //added from here
            {   $bodytxt=' ';
                $allData=CJSON::decode($allAttr['arrdata']);
                // print_r($allData); die;
                foreach($allData as $data )
                {
                    $bodytxt.=FilingGenerics::$serviceType[$data['id']].' $'.number_format(floatval(str_replace('$','',$data['amt'])),2).', ';
                }
                //$bodytxt.='</table><hr style="width:100%; float:left;">';
                $bodytxt.=' Total $'.number_format($total,2).'.';

                $bodytxt.=' Your Discount $'.number_format($discount,2).'.';

                $bodytxt.=' Your Total $'.number_format($discount_p,2).'.';

                $body=str_replace('[arrdata]',$bodytxt,$body);
                $body=str_replace(', Total','. Total',$body);



            }

            $body=strip_tags($body);
            //added till here
            //   echo $index.'=>'.$allAttr[$index].'<br>';
            if(array_key_exists($index,$allAttr))
                $body=str_replace('['.$index.']',$allAttr[$index],$body);


        }

        $msgTxt=$body;

       // echo $msgTxt; die;

        $model=new DotTrackerSms();
        $model->status =DotTrackerSms::$arrStatus['init'];
        $model->phone=$model1->phone;
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

        //die;
    }
  public function sendSmsToUserFollowup($model1)
    {
        $msgTxt="Hi ".$model1->fname.",Quote form  submitted successfullly";
        $allAttr=$model1->attributes;
        $template=3;
        $arr=DotTrackerQuote::model()->attributeLabels();

        $Template=DotTrackerEmailtemp::model()->findByPk($template);
        $templArr=$Template->attributes;

        $body=$templArr['emaildata'];

        $discount_p=floatval(str_replace('$','',$allAttr['discounted_price']));
        $total=floatval($allAttr['totpayment']);
        $discount=$total-$discount_p;


        //echo $body;

        $bodytxt='';
        $serviceData=DotTrackerServicetype::model()->findAll();
        $serArr=array();
        foreach($serviceData as $service)
        {
            // echo '<pre>';print_r($service->attributes); echo '</pre>';
            $serArr[$service->slug]=$service->description;
        }

        //echo '<pre>';print_r($serArr);echo '</pre>';

        foreach ($arr as $index=>$val)
        {

            if($index=='agent_name') //added from here
            {    $body=str_replace('[agent_name]',FilingGenerics::getUserName($allAttr['created_by']),$body);


            }

            if($index=='agent_phone') //added from here
            {    $body=str_replace('[agent_phone]',FilingGenerics::getUserPhone($allAttr['created_by']),$body);


            }
            if($index=='arrdata') //added from here
            {   $bodytxt=' ';
                $allData=CJSON::decode($allAttr['arrdata']);
                // print_r($allData); die;
                foreach($allData as $data )
                {
                    $bodytxt.=FilingGenerics::$serviceType[$data['id']].' $'.number_format(floatval(str_replace('$','',$data['amt'])),2).',';
                }
                //$bodytxt.='</table><hr style="width:100%; float:left;">';
                $bodytxt.=' Total $'.number_format($total,2).'.';

                $bodytxt.=' Your Discount $'.number_format($discount,2).'.';

                $bodytxt.=' Your Total $'.number_format($discount_p,2).'.';

                $body=str_replace('[arrdata]',$bodytxt,$body);


            }

            $body=strip_tags($body);

            //added till here
            //   echo $index.'=>'.$allAttr[$index].'<br>';
            if(array_key_exists($index,$allAttr))
                $body=str_replace('['.$index.']',$allAttr[$index],$body);


        }
        $body=str_replace(', Total','. Total',$body);

        $msgTxt=$body;

        //echo $msgTxt; die;

        $model=new DotTrackerSms();
        $model->status =DotTrackerSms::$arrStatus['init'];
        $model->phone=$model1->phone;
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

        //die;
    }

    public function actionHistory()
    {
        $id=Yii::app()->request->getParam('id');
        if(empty($id))
        {
            throw new CHttpException(404,'The requested page does not exist.');
        }
        $criteria=new CDbCriteria();
        $criteria->condition='quote_id='.$id;
        $criteria->order='id DESC';

        $model=DotTrackerQuoteLog::model()->findAll($criteria);

        $this->render('viewHistory',array('modelAll'=>$model,'quote_id'=>$id));
    }

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
        $sendSms=false;
        $sendEmail=false;

        $modelO=$model->attributes;


        // Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['DotTrackerQuote']))
		{
		    //print_r($_POST); die;
			$model->attributes=$_POST['DotTrackerQuote'];
			if($model->save())
            {
                $this->addLog($modelO,$model);
                if (isset($_POST['but3'])) {
                    //$sendEmail = true;
                    $sendSms = true;
                } else if (isset($_POST['but2'])) {
                    $sendEmail = true;
                }
                if ($sendSms) {
                    $this->sendSmsToUser($model);
                }
                if ($sendEmail) {
                    $this->sendEmailToUser($model);
                }
                $this->redirect(Yii::app()->createUrl('quoteForm/admin',array('click'=>'menu1')));
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
		$model=new DotTrackerQuote('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['DotTrackerQuote']))
			$model->attributes=$_GET['DotTrackerQuote'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return DotTrackerQuote the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=DotTrackerQuote::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param DotTrackerQuote $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='dot-tracker-quote-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
