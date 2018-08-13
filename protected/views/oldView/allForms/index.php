<?php
/* @var $this AllFormsController */

$this->breadcrumbs=array(
	'All Forms',
);
?>
<h1>Select a Form </h1>

<table class="detail-view" border="1" style="margin-bottom: 200px;">
    <tr>
        <td style="border-bottom: 1px solid #e2e2e2 !important;font-weight: bold;">Form Name</td>
        <td style="border-bottom: 1px solid #e2e2e2 !important;font-weight: bold;">Form Description</td>
        <td style="border-bottom: 1px solid #e2e2e2 !important;font-weight: bold;">Show All Forms</td>
        <td style="border-bottom: 1px solid #e2e2e2 !important;font-weight: bold;">Actions</td>
    </tr>

    <tr class="even">

        <td>Corporation Filing Form(LLC,INC )</td>
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

        <td>Form MCS-150(Biennial Update)</td>
        <td>Description Not Available</td>
        <td><a href="" style="color: #e2e2e2; text-decoration: none">Show All Submitted Forms</a></td>
        <td><a href="<?php echo Yii::app()->createUrl('biennialUpdateForm')?>">Open Form</a> </td>

    </tr>



</table>
