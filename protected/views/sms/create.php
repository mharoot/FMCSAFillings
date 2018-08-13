<?php
/* @var $this SmsController */
/* @var $model SmsResponse */

$this->breadcrumbs=array(
	'Sms Responses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SmsResponse', 'url'=>array('index')),
	array('label'=>'Manage SmsResponse', 'url'=>array('admin')),
);
?>

<h1>Create SmsResponse</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>