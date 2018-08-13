<?php
/* @var $this ServiceTypeController */
/* @var $model DotTrackerServicetype */

$this->breadcrumbs=array(
	'Dot Tracker Servicetypes'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List DotTrackerServicetype', 'url'=>array('index')),
	array('label'=>'Create DotTrackerServicetype', 'url'=>array('create')),
	array('label'=>'Update DotTrackerServicetype', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DotTrackerServicetype', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DotTrackerServicetype', 'url'=>array('admin')),
);
?>

<h1>View DotTrackerServicetype #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'slug',
		'description',
		'creationdatetime',
	),
)); ?>
