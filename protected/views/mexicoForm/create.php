<?php
/* @var $this MexicoFormController */
/* @var $model DotTrackerMexico */

$this->breadcrumbs=array(
	'New Mexico WD Permit Form'=>array('index'),
	'Create',
);

/*$this->menu=array(
	array('label'=>'List DotTrackerMexico', 'url'=>array('index')),
	array('label'=>'Manage DotTrackerMexico', 'url'=>array('admin')),
);*/
?>

<h1>Create New Mexico WD Permit Form </h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>