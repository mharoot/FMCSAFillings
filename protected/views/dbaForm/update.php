<?php
/* @var $this DbaFormController */
/* @var $model DotTrackerDba */

$this->breadcrumbs=array(
	'Dot Tracker Dbas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

/*$this->menu=array(
	array('label'=>'List DotTrackerDba', 'url'=>array('index')),
	array('label'=>'Create DotTrackerDba', 'url'=>array('create')),
	array('label'=>'View DotTrackerDba', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DotTrackerDba', 'url'=>array('admin')),
);*/
?>

    <h1>Update Fictitious Business Name (DBA)</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>