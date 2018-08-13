<?php
/* @var $this OregonFormController */
/* @var $model DotTrackerOregaon */

$this->breadcrumbs=array(
	'Oregon Temporary Permit Form'=>array('index'),
	'Create',
);

/*$this->menu=array(
	array('label'=>'List DotTrackerOregaon', 'url'=>array('index')),
	array('label'=>'Manage DotTrackerOregaon', 'url'=>array('admin')),
);*/
?>

<h1>Create Oregon Temporary Permit Form</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>