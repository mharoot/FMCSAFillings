<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FMCSA Filings</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/drawingboard.js/css/drawingboard.css">
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/css/html2canvas.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!--<link rel="stylesheet" href="/resources/demos/style.css">-->
    <?php
    $arrayNoJquery=array('quoteForm','dotTrackerUser');



    if(!(in_array(Yii::app()->controller->id,$arrayNoJquery) && Yii::app()->controller->action->id=='admin') ) { ?> <script src="http://code.jquery.com/jquery-1.12.4.js"></script> <?php } ?>

    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/clipboard/dist/clipboard.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: "textarea",
            relative_urls: false,
            theme: "modern",
            height:"300",
            plugins: [
                "advlist autolink lists link image charmap preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
            toolbar2: "print preview media | forecolor backcolor emoticons",
            image_advtab: true,
            templates: [
                {title: 'Test template 1', content: 'Test 1'},
                {title: 'Test template 2', content: 'Test 2'}
            ]
        });
    </script>


    <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script>

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>


</head>

<body>

<?php

$userRole=FilingGenerics::getuserRole(Yii::app()->user->id);
//echo $userRole;
$userId=FilingGenerics::getuserId(Yii::app()->user->id);
?>

<!-- Navigation -->
<nav class="navbar" role="navigation">
    <div class="container navbar-inverse navbar-bg">
        <!-- Brand and toggle get grouped for better mobile display -->
        <?php if(Yii::app()->user->isGuest) { ?>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="color:#fff;" href="http://fmcsafiling.com/"><?php echo CHtml::encode(Yii::app()->name); ?></a>
        </div>
        <?php } ?>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
               <?php  if(!Yii::app()->user->isGuest){ ?>
                    <li><a href="<?php echo Yii::app()->createUrl('/site/index');?>" <?php if(Yii::app()->controller->id=='site'){echo 'class="navbar-active"';}?> ><i class="fa fa-home"></i> Home</a></li> 
                <?php } ?>
               <?php  if(!Yii::app()->user->isGuest){ ?>
                    <li <?php if(Yii::app()->controller->id=='quoteForm' || Yii::app()->controller->id=='QuoteForm'){echo 'class="navbar-active"';}?> ><a href="<?php echo Yii::app()->createUrl('quoteForm/admin');?>"> <i class="fa fa-dollar"></i>  Quotes</a></li> <?php } ?>
                <?php  if(!Yii::app()->user->isGuest){ ?>
                    <li >
                        <a href="<?php echo Yii::app()->createUrl('orderForm/admin'); ?>"><i class="fa fa-clipboard"></i> Orders</a>
                    </li>
                <?php } ?>
                <?php  if(!Yii::app()->user->isGuest && 1==2){ ?>
                    <li><a href="<?php echo Yii::app()->createUrl('');?>">Orders</a></li> 
                <?php } ?>
               <?php  if(!Yii::app()->user->isGuest  && $userRole==LoginForm::$allowedRole){ ?>
                    <li <?php if(Yii::app()->controller->id=='allForms'){echo 'class="navbar-active"';}?> ><a href="<?php echo Yii::app()->createUrl('/allForms/index');?>" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-clipboard"></i> Forms <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="?r=dotTrackerCorporationform/create">Corporation Filing</a>
                            </li>
                            
                            <li>
                                <a href="?r=mcApplication/create">Mc Application Form</a>
                            </li>

                            <li>
                                <a href="?r=oregonForm/index">Oregon Temporary Permit Form</a>
                            </li>
                            <li>
                                <a href="?r=kentuckyForm/index">Kentucky WD Permit Form</a>
                            </li>

                            <li>
                                <a href="?r=mexicoForm/index">New Mexico WD Permit Form</a>
                            </li>
                            <li>
                                <a href="?r=newyorkForm/index">New York HUT Permit Form</a>
                            </li>
                            <li>
                                <a href="?r=dbaForm/index">Fictitious Business Name (DBA) Form</a>
                            </li>
                            <li>
                                <a href="?r=bocForm/index">BOC-3 Form</a>
                            </li>
                            <li>
                                <a href="?r=allForms/index">All Forms</a>
                            </li>
                        </ul>
                    </li> 
               <?php } ?>
                <?php  if(!Yii::app()->user->isGuest){ ?>
                <li <?php if(Yii::app()->controller->id=='creditCardAuthorization' ){echo 'class="navbar-active"';}?>>
                    <a href="?r=creditCardAuthorization/create"><i class="fa fa-credit-card"></i> Credit Card Authorization</a>
                </li>
                <?php } ?>


                <?php  if(!Yii::app()->user->isGuest){ ?>
                    <li <?php if(Yii::app()->controller->id=='sms' ){echo 'class="navbar-active"';}?>>
                        <a href="?r=sms/admin"><i class="fa fa-comments"></i> Inbound SMS</a>
                    </li>
                <?php } ?>



                <?php  if(!Yii::app()->user->isGuest  && $userRole==LoginForm::$allowedRole){ ?>
                    <li <?php if(Yii::app()->controller->id=='asdas'){echo 'class="navbar-active"';}?> ><a href="<?php echo Yii::app()->createUrl('');?>" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-file"></i> Employer Notice Forms <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="?r=employerPullNotice/admin"><i class="fa fa-envelope"></i> EPN1 Form</a>
                            </li><li>
                                <a href="?r=employeePullNotice2/admin"><i class="fa fa-envelope"></i> EPN2 Form</a>
                            </li><li>
                                <a href="?r=employeePullNotice3/admin"><i class="fa fa-envelope"></i> EPN Agreements</a>
                            </li>




                        </ul>
                    </li>
                <?php } ?>

                <?php  if(!Yii::app()->user->isGuest  && $userRole==LoginForm::$allowedRole){ ?>
                    <li <?php if(Yii::app()->controller->id=='automatedTemplate'){echo 'class="navbar-active"';}?> ><a href="<?php echo Yii::app()->createUrl('');?>" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-cogs"></i> Preferences <b class="caret"></b></a>
                        <ul class="dropdown-menu">


                            <li>
                                <a href="?r=automatedTemplate/admin"><i class="fa fa-envelope"></i> Automated Templates</a>
                            </li>

                            <li>
                                <a href="?r=serviceType/admin"><i class="fa fa-cog"></i> Manage Service Types</a>
                            </li>

                            <li <?php if(Yii::app()->controller->id=='DotTrackerUser' || Yii::app()->controller->id=='dotTrackerUser'){echo 'class="navbar-active"';}?> ><a href="<?php
                                //echo 'USERROLE'.$userRole;
                                // if(!$userRole==LoginForm::$allowedRole) {
                                if($userRole !=  LoginForm::$allowedRole) {
                                    echo Yii::app()->createUrl('/DotTrackerUser/view',array('id'=>$userId));
                                }
                                else{
                                    echo Yii::app()->createUrl('/DotTrackerUser/admin');
                                }
                                ?>" > <i class="fa fa-users"></i> Manage User</a></li>

                        </ul>
                    </li>
                <?php } ?>








               <?php  if(!Yii::app()->user->isGuest){ ?>
                    <li><a href="<?php echo Yii::app()->createUrl('/site/logout');?>" style="color: #fdb6b6 !important;"><i class="fa fa-sign-out"></i> Logout (<?php echo Yii::app()->user->name; ?>)</a></li> 
               <?php } ?>

            </ul>
        </div>


        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>



<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <?php if(isset($this->breadcrumbs) && !Yii::app()->user->isGuest):?>
                <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links'=>$this->breadcrumbs,
                )); ?><!-- breadcrumbs -->
            <?php endif?>
        </div>
    </div>
    <!-- /.row -->

    <!-- Marketing Icons Section -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-md-12">

            <?php echo $content; ?>

        </div>

        <!-- Right Sidebar
        <div class="col-md-3">
            <div class="list-group">
                <?php //echo $content1; ?>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <hr>



    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p style="text-align: center;">Copyright &copy; FMCSA Filings <?php echo date('Y'); ?></p>
            </div>
        </div>
    </footer>

</div>
<!-- /.container -->

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>

</body>

</html>
