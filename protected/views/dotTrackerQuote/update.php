<?php
/* @var $this DotTrackerQuoteController */
/* @var $model DotTrackerQuote */

$this->breadcrumbs=array(
	'Dot Tracker Quotes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DotTrackerQuote', 'url'=>array('index')),
	array('label'=>'Create DotTrackerQuote', 'url'=>array('create')),
	array('label'=>'View DotTrackerQuote', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DotTrackerQuote', 'url'=>array('admin')),
);
?>

<h1>Update DotTrackerQuote <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>