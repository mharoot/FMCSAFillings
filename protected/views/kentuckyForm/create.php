<?php
/* @var $this KentuckyFormController */
/* @var $model DotTrackerKentucky */

$this->breadcrumbs=array(
	'Kentucky WD Permit Form'=>array('index'),
	'Create',
);

/*$this->menu=array(
	array('label'=>'List DotTrackerKentucky', 'url'=>array('index')),
	array('label'=>'Manage DotTrackerKentucky', 'url'=>array('admin')),
);*/
?>

<h1>Create Kentucky WD Permit Form </h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>