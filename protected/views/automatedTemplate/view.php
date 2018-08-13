<?php
/* @var $this AutomatedTemplateController */
/* @var $model DotTrackerEmailtemp */

$this->breadcrumbs=array(
	'Dot Tracker Emailtemps'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DotTrackerEmailtemp', 'url'=>array('index')),
	array('label'=>'Create DotTrackerEmailtemp', 'url'=>array('create')),
	array('label'=>'Update DotTrackerEmailtemp', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DotTrackerEmailtemp', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DotTrackerEmailtemp', 'url'=>array('admin')),
);
?>

<h1>View DotTrackerEmailtemp #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'emaildata',
		'created_by',
		'creationdate_time',
		'type',
	),
)); ?>
