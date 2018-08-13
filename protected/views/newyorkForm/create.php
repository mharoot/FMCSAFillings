<?php
/* @var $this NewyorkFormController */
/* @var $model DotTrackerNewyork */

$this->breadcrumbs=array(
	'New York HUT Permit Form'=>array('index'),
	'Create',
);

/*$this->menu=array(
	array('label'=>'List DotTrackerNewyork', 'url'=>array('index')),
	array('label'=>'Manage DotTrackerNewyork', 'url'=>array('admin')),
);
*/?>

<h1>Create New York HUT Permit Form</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>