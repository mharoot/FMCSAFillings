<?php
/* @var $this McApplicationController */
/* @var $model DotTrackerMc */

$this->breadcrumbs=array(
	'MC Applications'=>array('index'),
	'Create',
);

/*$this->menu=array(
	array('label'=>'List MC Application', 'url'=>array('index')),
	array('label'=>'Manage MC Application', 'url'=>array('admin')),
);*/
?>

<h1>Create MC Application</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>