<?php
/* @var $this SmsController */
/* @var $model SmsResponse */

$this->breadcrumbs=array(
	'Sms Responses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SmsResponse', 'url'=>array('index')),
	array('label'=>'Create SmsResponse', 'url'=>array('create')),
	array('label'=>'View SmsResponse', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SmsResponse', 'url'=>array('admin')),
);
?>

<h1>Update SmsResponse <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>