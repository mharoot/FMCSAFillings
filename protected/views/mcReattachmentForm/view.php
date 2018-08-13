<?php
/* @var $this McReattachmentFormController */
/* @var $model DotTrackerMcReattachment */

$this->breadcrumbs=array(
	'Dot Tracker Mc Reattachments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DotTrackerMcReattachment', 'url'=>array('index')),
	array('label'=>'Create DotTrackerMcReattachment', 'url'=>array('create')),
	array('label'=>'Update DotTrackerMcReattachment', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DotTrackerMcReattachment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DotTrackerMcReattachment', 'url'=>array('admin')),
);
?>

<h1>View DotTrackerMcReattachment #<?php echo $model->id; ?></h1>

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
