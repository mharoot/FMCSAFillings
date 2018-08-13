<?php
/* @var $this DotTrackerMcDetachmentController */
/* @var $model DotTrackerMcDetachment */

$this->breadcrumbs=array(
	'Dot Tracker Mc Detachments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MC# Detachment ', 'url'=>array('index')),
	array('label'=>'Create MC# Detachment ', 'url'=>array('create')),
	array('label'=>'Update MC# Detachment ', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MC# Detachment ', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MC# Detachment ', 'url'=>array('admin')),
);
?>

<h1>View MC# Detachment  #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'usdot',
		'mc',
		'legal_business_name',
		'office_name',
		'date',
		'created_by',
		'creation_datetime',
	),
)); ?>
