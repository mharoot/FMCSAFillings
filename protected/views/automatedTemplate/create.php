<?php
/* @var $this AutomatedTemplateController */
/* @var $model DotTrackerEmailtemp */

$this->breadcrumbs=array(
	'Automated Email Templates'=>array('index'),
	'Create',
);

/*$this->menu=array(
	array('label'=>'List DotTrackerEmailtemp', 'url'=>array('index')),
	array('label'=>'Manage DotTrackerEmailtemp', 'url'=>array('admin')),
);*/
?>

<h1>Create Automated Email Templates</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>