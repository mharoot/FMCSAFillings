<?php
/* @var $this KentuckyFormController */
/* @var $model DotTrackerKentucky */

$this->breadcrumbs=array(
	'Kentucky WD Permit Form'=>array('index'),
	$model->id,
);
$menuArr=array(

    array('label'=>'Manage Kentucky WD Permit Form',
        'url'=>'kentuckyForm/admin' ,
        'icon'=>'fa fa-cog'),

    array('label'=>'Update Kentucky WD Permit Form',
        'url'=>'kentuckyForm/update&id='.$model->id ,
        'icon'=>'fa fa-pencil'),

    /*array('label'=>'Authorize Kentucky WD Permit Form',
        'url'=>'kentuckyForm/authorizeSign&id='.$model->id ,
        'icon'=>'fa fa-pencil'),*/



);

/*
$this->menu=array(
	array('label'=>'List DotTrackerKentucky', 'url'=>array('index')),
	array('label'=>'Create DotTrackerKentucky', 'url'=>array('create')),
	array('label'=>'Update DotTrackerKentucky', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DotTrackerKentucky', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DotTrackerKentucky', 'url'=>array('admin')),
);*/
?>

<h1>View Kentucky WD Permit Form #<?php echo $model->id; ?></h1>

<div class="row">

    <!-- Content Column -->
    <div class="col-md-10">
        <div class="row">
            <br>
            <!-- Contact Form -->
            <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">INFORMATION</div>
                    <div class="panel-body">
                        <fieldset>

                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="nameon_card">USDOT #</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                       <?php echo $model->usdot; ?>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class='form-group'>
                                        <label for="cardholder_information">EIN# / SSN</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <?php echo $model->ein; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">NUMBER OF AXLES</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $model->no_of_axles; ?>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class='form-group'>
                                        <label for="cardholder_information">GROSS VEHICLES WEIGHT</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <?php echo $model->ext1; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">VIN #</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $model->vin_no; ?>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class='form-group'>
                                        <label for="cardholder_information">IS THE VEHICLE OWNED OR LEASED?</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <?php echo $model->vehicle_owned; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">WHAT IS THE TRUCK UNIT #</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $model->truck_unit_no; ?>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class='form-group'>
                                        <label for="cardholder_information">TITLE STATE</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <?php echo $model->title_state; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">MAKE</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $model->make; ?>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class='form-group'>
                                        <label for="cardholder_information">MODEL</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <?php echo $model->model; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">YEAR</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $model->year; ?>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class='form-group'>
                                        <label for="cardholder_information">LICENSE PLATE</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <?php echo $model->license_plate; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">PLATE STATE</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $model->plate_state; ?>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class='form-group'>
                                        <label for="cardholder_information">TYPE OF FUEL USED</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <?php echo $model->type_of_fuel; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">UNLOADED WEIGHT</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $model->unloaded_weight; ?>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>

                

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
