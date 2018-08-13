<?php
/* @var $this QuoteLogController */
/* @var $model DotTrackerQuoteLog */

$this->breadcrumbs=array(
	'Dot Tracker Quote Logs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DotTrackerQuoteLog', 'url'=>array('index')),
	array('label'=>'Create DotTrackerQuoteLog', 'url'=>array('create')),
	array('label'=>'Update DotTrackerQuoteLog', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DotTrackerQuoteLog', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DotTrackerQuoteLog', 'url'=>array('admin')),
);
?>

<h1>View DotTrackerQuoteLog #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'logDet',
		'quote_id',
		'extrafield',
		'date',
		'created_by',
	),
)); ?>
