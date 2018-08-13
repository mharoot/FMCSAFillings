<?php
/* @var $this OregonFormController */
/* @var $model DotTrackerOregaon */

$this->breadcrumbs=array(
	'Oregon Temporary Permit Form'=>array('index'),
	$model->id,
);

$menuArr=array(

    array('label'=>'Manage Oregon Temporary Permit Form',
        'url'=>'oregonForm/admin' ,
        'icon'=>'fa fa-cog'),

    array('label'=>'Update Oregon Temporary Permit Form',
        'url'=>'oregonForm/update&id='.$model->id ,
        'icon'=>'fa fa-pencil'),

    /*array('label'=>'Authorize Oregon Temporary Permit Form',
        'url'=>'oregonForm/authorizeSign&id='.$model->id ,
        'icon'=>'fa fa-pencil'),*/



);
?>

<h1>View Oregon Temporary Permit Form #<?php echo $model->id; ?></h1>

<div class="row">
    <br>
    <!-- Content Column -->
    <div class="col-md-10">
        <div class="row">

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
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">EIN# / TAX ID#</label>
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
                                    <div class='form-group'>
                                        <label for="cardholder_information">OWNER'S FULL NAME</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $model->o_full_name; ?>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">DRIVER'S FULL NAME</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $model->d_full_name; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">DATE ENTERING  #</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $model->date_entering; ?>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class='form-group'>
                                        <label for="cardholder_information">WHAT HIGHWAY / INTERSTATE ARE YOU ENTERING FROM?</label>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <?php echo $model->highway; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">DATE EXITING  #</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $model->ext4; ?>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class='form-group'>
                                        <label for="cardholder_information">WHAT HIGHWAY / INTERSTATE ARE YOU EXITING FROM?</label>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <?php echo $model->ext5; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">WHAT IS THE CARGO?</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $model->cargo; ?>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">LOADING OR PASSING THROUGH</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $model->loading; ?>
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
                            </div>

                            <div class="row">
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">MODEL</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $model->model; ?>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">LICENSE PLATE</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $model->license_plate; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">STATE LICENSE PLATE IS ISSUED?</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $model->ext2; ?>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class='form-group'>
                                        <label for="cardholder_information">IS LICENSE PLATE APPORTIONED FOR ISSUED STATE ONLY OR OTHER STATES AS WELL ON REGISTRATION?</label>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <?php echo $model->ext3; ?>
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
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">UNIT #</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $model->unit_no; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">ODOMETER#</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $model->odometer; ?>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">IS VEHICLE OWNED OR LEASED?</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $model->vehicle_owned; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">HOW MANY MILES ARE YOU SET UP FOR BY IRP TO ENTER EACH STATE?</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $model->miles; ?>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">WHAT IS THE YOUR # APPORTIONED FOR STATE OREGON?</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <?php echo $model->apportioned; ?>
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
