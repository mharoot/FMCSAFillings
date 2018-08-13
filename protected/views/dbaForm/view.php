<?php
/* @var $this DbaFormController */
/* @var $model DotTrackerDba */

$this->breadcrumbs=array(
	'Dot Tracker Dbas'=>array('index'),
	$model->id,
);

$menuArr=array(

    array('label'=>'Manage Business Name Form (DBA)',
        'url'=>'dbaForm/admin' ,
        'icon'=>'fa fa-cog'),

    array('label'=>'Update Business Name Form (DBA)',
        'url'=>'dbaForm/update&id='.$model->id ,
        'icon'=>'fa fa-pencil'),

    /*array('label'=>'Authorize Business Name Form (DBA)',
        'url'=>'mexicoForm/authorizeSign&id='.$model->id ,
        'icon'=>'fa fa-pencil'),*/



);
?>

<h1>Manage Fictitious Business Name Form  (DBA) #<?php echo $model->id; ?></h1>

<div class="row">

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
                                        <label for="nameon_card">Desired Fictitious Business Name *</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <?php echo $model->dba; ?>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="nameon_card">Business Address *</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <?php echo $model->b_address; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">Business Additional Address</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <?php echo $model->b_add_address; ?>
                                </div>

                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">Business City *</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <?php echo $model->b_city; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">Business State *</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <?php echo $model->b_state; ?>
                                </div>

                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">Business Zip Code *</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <?php echo $model->b_zip; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">Business County *</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <?php echo $model->b_county; ?>
                                </div>

                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">Business Country *</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <?php echo $model->v_country; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">Articles of Incorporation # (if applicable)</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <?php echo $model->article_incorp; ?>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>


                <div class="panel panel-default">
                    <div class="panel-heading">BUSINESS MAILING ADDRESS (if different than Business Address):</div>
                    <div class="panel-body">
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="nameon_card">Mailing Address</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <?php echo $model->m_address; ?>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="nameon_card">Mailing Additional Address</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <?php echo $model->m_add_address; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">Mailing City</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <?php echo $model->m_city; ?>
                                </div>

                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">Mailing State</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    grer yeryer yeryeryeryer
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">Mailing Zip Code</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <?php echo $model->m_zip; ?>
                                </div>

                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">Mailing Country</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <?php echo $model->m_country; ?>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">PLEASE ENTER THE FOLLOWING REGISTERED OWNER INFORMATION</div>
                    <div class="panel-body">
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="nameon_card">Full Name/Corp Name/LLC Name *</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <?php echo $model->full_name; ?>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="nameon_card">Street Address: P.O. Box is not accepted</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <?php echo $model->s_address; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">Required Address Additional (Unit, Apt, etc):</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <?php echo $model->s_add_address; ?>
                                </div>

                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">City *</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <?php echo $model->city; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">State *</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <?php echo $model->state; ?>
                                </div>

                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">Zip *</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <?php echo $model->zip; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">Country *</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <?php echo $model->dba; ?>
                                </div>

                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">State of Organization (If Corp or LLC):</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <?php echo $model->state_of_org; ?>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">SELECT THE REGISTERED OWNER WHO WILL SIGN THE FBN STATEMENT</div>
                    <div class="panel-body">
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="nameon_card">Full Name/Corp Name/LLC Name *</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <?php echo $model->r_full_name; ?>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="nameon_card">Signatory's Name (if Corp or LLC):</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <?php echo $model->sign_name; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">Signatory's Title *</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <?php echo $model->sign_title; ?>
                                </div>

                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">Email *</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <?php echo $model->s_email; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">Phone *</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <?php echo $model->s_phone; ?>
                                </div>

                                <div class="col-sm-2">
                                    <div class='form-group'>
                                        <label for="cardholder_information">Business is conducted by *</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <?php echo $model->business_conducted; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class='form-group'>
                                        <label for="cardholder_information">Date registrant commenced to transact business under the fictitious business name or names listed above on (enter N/A if not applicable): *</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <?php echo $model->date_reg; ?>
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
