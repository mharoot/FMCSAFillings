<?php
/* @var $this SmsController */
/* @var $model SmsResponse */

$this->breadcrumbs=array(
	'Sms Responses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SmsResponse', 'url'=>array('index')),
	array('label'=>'Create SmsResponse', 'url'=>array('create')),
	array('label'=>'Update SmsResponse', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SmsResponse', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SmsResponse', 'url'=>array('admin')),
);
?>

<h1>View SmsResponse #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'resp',
		'fromPhone',
		'toPhone',
		'content',
		'creationdatetime',
		'ext1',
		'ext2',
	),
)); ?>
