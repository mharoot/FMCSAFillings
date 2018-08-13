<?php
/* @var $this QuoteLogController */
/* @var $model DotTrackerQuoteLog */

$this->breadcrumbs=array(
	'Dot Tracker Quote Logs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DotTrackerQuoteLog', 'url'=>array('index')),
	array('label'=>'Manage DotTrackerQuoteLog', 'url'=>array('admin')),
);
?>

<h1>Create DotTrackerQuoteLog</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>