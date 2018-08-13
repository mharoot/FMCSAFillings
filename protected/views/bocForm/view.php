<?php
/* @var $this BocFormController */
/* @var $model DotTrackerBoc */

$this->breadcrumbs=array(
	'BOC-3 Forms'=>array('index'),
	$model->id,
);

$menuArr=array(

    array('label'=>'Manage BOC-3 Form',
        'url'=>'bocForm/admin' ,
        'icon'=>'fa fa-cog'),

    array('label'=>'Update BOC-3 Form',
        'url'=>'bocForm/update&id='.$model->id ,
        'icon'=>'fa fa-pencil'),

    /*array('label'=>'Authorize BOC-3 Form',
        'url'=>'mexicoForm/authorizeSign&id='.$model->id ,
        'icon'=>'fa fa-pencil'),*/



);
?>

<h1>View BOC-3 Form #<?php echo $model->id; ?></h1>

<div class="row">

    <!-- Content Column -->
    <div class="col-md-10">
        <div class="row">
           <br>
            <!-- Contact Form -->
            <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">COMPANY INFORMATION</div>
                    <div class="panel-body">
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="nameon_card">USDOT# / MC# / FF#*</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $model->usdot; ?>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="nameon_card">COMPANY NAME*</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $model->company_name; ?>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>


                <div class="panel panel-default">
                    <div class="panel-heading">ADDRESS AND CONTACT INFORMATION</div>
                    <div class="panel-body">
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="city">REPRESENTATIVE FIRST NAME*</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $model->fname; ?>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="state">REPRESENTATIVE LAST NAME*</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $model->lname; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="city">STREET ADDRESS*</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $model->street; ?>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="city">STREET ADDRESS LINE 2</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $model->ext1; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="city">CITY</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $model->city; ?>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="state">STATE</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $model->state; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="phone">ZIP CODE</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $model->zip; ?>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="phone">PHONE NUMBER*</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $model->phone_no; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="phone">FAX NUMBER</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $model->fax; ?>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="phone">EMAIL ADDRESS*</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $model->email; ?>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="phone">MOBILE*</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $model->mobile; ?>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>


                <!--<div class="panel panel-default" style="display: none;">
                    <div class="panel-heading">SERVICES</div>
                    <div class="panel-body">
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <?php /*echo DotTrackerBoc::$arrService[$model->services]; */?></label>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">Total : $ <?php /*echo DotTrackerBoc::$arrServiceP[$model->services]; */?></label></label>
                                    </div>
                                </div>

                                <div class="col-sm-12" style="display: none;">
                                    <div class="form-group">
                                        <label>Please make sure you submit your email or fax if you are planning to receive your copy of authority and/or B0C-3 with email or fax.</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="display: none;">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="name">Send BOC-30*</label>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <label>Email</label>
                                </div>
                            </div>

                            <div class="row" style="display: none;">
                                <div class="col-sm-2">&nbsp;</div>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <label for="name">Your order will be processed the same day, 7 days a week, if received by 9 PM Mountain Time.</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="name">Comments</label>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <?php /*echo $model->comments; */?></label>
                                    </div>
                                </div>
                            </div>

                        </fieldset>
                    </div>
                </div>-->




            </div>
        </div>
    </div>

    <div class="col-md-2 no-print">
        <div class="list-group">
            <a href="#" class="list-group-item active"><i class="fa fa-cogs" aria-hidden="true"></i> Actions</a>
            <?php
            foreach($menuArr as $menu)
            {
                // echo '<pre>'; print_r($menu);die;
                echo ' <a href="'.Yii::app()->createUrl($menu['url']).'" class="list-group-item"><i class="'.$menu['icon'].'" aria-hidden="true"></i> '.$menu['label'].'</a>';
            }
            echo ' <a class="list-group-item" onclick="window.print()"><i class="fa fa-print" aria-hidden="true"></i> Print Form </a>';


            ?>


        </div>
    </div>

    <!-- /.row -->
</div>
