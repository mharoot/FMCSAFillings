<?php
/* @var $this QuoteLogController */
/* @var $model DotTrackerQuoteLog */

$this->breadcrumbs=array(
	'Dot Tracker Quote Logs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DotTrackerQuoteLog', 'url'=>array('index')),
	array('label'=>'Create DotTrackerQuoteLog', 'url'=>array('create')),
	array('label'=>'View DotTrackerQuoteLog', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DotTrackerQuoteLog', 'url'=>array('admin')),
);
?>

<h1>Update DotTrackerQuoteLog <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>