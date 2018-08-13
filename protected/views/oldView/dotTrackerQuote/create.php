<?php
/* @var $this DotTrackerQuoteController */
/* @var $model DotTrackerQuote */

$this->breadcrumbs=array(
	'Dot Tracker Quotes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage Quotes', 'url'=>array('admin')),
);
?>

<h1>Create Quote</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>