<?php
/* @var $this OrderFormController */
/* @var $model DotTrackerOrder */

$this->breadcrumbs=array(
	'Dot Tracker Orders'=>array('index'),
	'Create',
);

/*$this->menu=array(
	array('label'=>'List DotTrackerOrder', 'url'=>array('index')),
	array('label'=>'Manage DotTrackerOrder', 'url'=>array('admin')),
);*/
?>

<h1>Create DotTrackerOrder</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>