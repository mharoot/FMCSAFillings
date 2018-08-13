<?php
/* @var $this DotTrackerUserController */
/* @var $model DotTrackerUser */

$this->breadcrumbs=array(
	'Dot Tracker Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>Create User</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>