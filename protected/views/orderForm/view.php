<?php
/* @var $this OrderFormController */
/* @var $model DotTrackerOrder */

$this->breadcrumbs=array(
	'Dot Tracker Orders'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DotTrackerOrder', 'url'=>array('index')),
	array('label'=>'Create DotTrackerOrder', 'url'=>array('create')),
	array('label'=>'Update DotTrackerOrder', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DotTrackerOrder', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DotTrackerOrder', 'url'=>array('admin')),
);
?>

<h1>View DotTrackerOrder #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'quote_id',
		'form_details',
		'extrafields',
		'created_by',
		'creation_datetime',
		'status',
	),
)); ?>
