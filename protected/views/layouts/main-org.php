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
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>


</head>

<body>

<!-- Navigation -->
<nav class="navbar" role="navigation">
    <div class="container navbar-inverse navbar-bg">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="color:#fff;"><?php echo CHtml::encode(Yii::app()->name); ?></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
               <?php  if(!Yii::app()->user->isGuest){ ?><li><a href="<?php echo Yii::app()->createUrl('/site/index');?>" <?php if(Yii::app()->controller->id=='site'){echo 'class="navbar-active"';}?> ><i class="fa fa-home"></i> Home</a></li> <?php } ?>
               <?php  if(!Yii::app()->user->isGuest){ ?><li <?php if(Yii::app()->controller->id=='quotes' || Yii::app()->controller->id=='Quotes'){echo 'class="navbar-active"';}?> ><a href="<?php echo Yii::app()->createUrl('/quotes/index');?>"> <i class="fa fa-dollar"></i>  Quotes</a></li> <?php } ?>
               <?php  if(!Yii::app()->user->isGuest && 1==2){ ?><li><a href="<?php echo Yii::app()->createUrl('');?>">Orders</a></li> <?php } ?>
               <?php  if(!Yii::app()->user->isGuest){ ?><li <?php if(Yii::app()->controller->id=='creditCardAuthorization' || Yii::app()->controller->id=='allForms'){echo 'class="navbar-active"';}?> ><a href="<?php echo Yii::app()->createUrl('/allForms/index');?>"> <i class="fa fa-clipboard"></i> Forms</a></li> <?php } ?>
               <?php  if(!Yii::app()->user->isGuest){ ?><li <?php if(Yii::app()->controller->id=='DotTrackerUser' || Yii::app()->controller->id=='dotTrackerUser'){echo 'class="navbar-active"';}?> ><a href="<?php echo Yii::app()->createUrl('/DotTrackerUser/admin');?>"> <i class="fa fa-users"></i> Manage User</a></li> <?php } ?>
               <?php  if(!Yii::app()->user->isGuest){ ?><li><a href="<?php echo Yii::app()->createUrl('/site/logout');?>" style="color: #fdb6b6 !important;"><i class="fa fa-sign-out"></i> Logout (<?php echo Yii::app()->user->name; ?>)</a></li> <?php } ?>

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
