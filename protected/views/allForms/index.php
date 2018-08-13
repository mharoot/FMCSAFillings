<?php
/* @var $this AllFormsController */

$this->breadcrumbs=array(
	'All Forms',
);

$content1='fdsfdsf';
?>
<h1>Select a Form </h1>
<br>

<table class="table table-striped" style="margin-bottom: 200px;">
    <tr>
        <td style="font-weight: bold;">Form Name</td>
        <td style="font-weight: bold;">Form Description</td>
        <td style="font-weight: bold;">Show All Forms</td>
        <td style="font-weight: bold;">Actions</td>
    </tr>

    <tr class="even">

        <td>Corporation Filing</td>
        <td>Every state has it's own requirements. Sending you the example of CA Attached - http://www.sos.ca.gov/business-programs/business-entities/forms/#corp.</td>
        <td><a href="<?php echo Yii::app()->createUrl('dotTrackerCorporationform/admin')?>">Show All Submitted Forms</a></td>
        <td><a href="<?php echo Yii::app()->createUrl('dotTrackerCorporationform/create')?>">Open Form</a> </td>

    </tr>
    <tr class="even">

        <td>Credit Card Authorization Form</td>
        <td>This form is used to authorize the ownership of the form</td>
        <td><a href="<?php echo Yii::app()->createUrl('creditCardAuthorization/admin')?>">Show All Submitted Forms</a></td>
        <td><a href="<?php echo Yii::app()->createUrl('creditCardAuthorization/create')?>">Open Form</a> </td>

    </tr>
    <tr class="odd">

        <td>MC Application Form</td>
        <td>Description Not Available</td>
        <td><a href="<?php echo Yii::app()->createUrl('mcApplication/admin')?>">Show All Submitted Forms</a></td>
        <td><a href="<?php echo Yii::app()->createUrl('mcApplication/create')?>">Open Form</a> </td>

    </tr>
    <tr class="even">

        <td>Oregon Temporary Permit Form</td>
        <td>This form is used to get Oregon Temporary Permit</td>
        <td><a href="<?php echo Yii::app()->createUrl('oregonForm/admin')?>">Show All Submitted Forms</a></td>
        <td><a href="<?php echo Yii::app()->createUrl('oregonForm/create')?>">Open Form</a> </td>

    </tr>


    <tr class="odd">

        <td> Kentucky WD Permit Form</td>
        <td>Description Not Available</td>
        <td><a href="<?php echo Yii::app()->createUrl('kentuckyForm/admin')?>">Show All Submitted Forms</a></td>
        <td><a href="<?php echo Yii::app()->createUrl('kentuckyForm/create')?>">Open Form</a> </td>

    </tr>


    <tr class="even">

        <td>New Mexico WD Permit Form</td>
        <td>This form is used to get Oregon Temporary Permit</td>
        <td><a href="<?php echo Yii::app()->createUrl('mexicoForm/admin')?>">Show All Submitted Forms</a></td>
        <td><a href="<?php echo Yii::app()->createUrl('mexicoForm/create')?>">Open Form</a> </td>

    </tr>


    <tr class="odd">

        <td> New York HUT Permit Form</td>
        <td>Description Not Available</td>
        <td><a href="<?php echo Yii::app()->createUrl('newyorkForm/admin')?>">Show All Submitted Forms</a></td>
        <td><a href="<?php echo Yii::app()->createUrl('newyorkForm/create')?>">Open Form</a> </td>

    </tr>

    <tr class="even">

        <td>Fictitious Business Name (DBA) Form</td>
        <td>Description Not Available</td>
        <td><a href="<?php echo Yii::app()->createUrl('dbaForm/admin')?>">Show All Submitted Forms</a></td>
        <td><a href="<?php echo Yii::app()->createUrl('dbaForm/create')?>">Open Form</a> </td>

    </tr>

    <tr class="odd">

        <td> BOC-3 Form</td>
        <td>Description Not Available</td>
        <td><a href="<?php echo Yii::app()->createUrl('bocForm/admin')?>">Show All Submitted Forms</a></td>
        <td><a href="<?php echo Yii::app()->createUrl('bocForm/create')?>">Open Form</a> </td>

    </tr>


</table>
