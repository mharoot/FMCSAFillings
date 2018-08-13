<?php
/* @var $this NewyorkFormController */
/* @var $model DotTrackerNewyork */

$this->breadcrumbs=array(
	'New York HUT Permit Forms'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

/*$this->menu=array(
	array('label'=>'List DotTrackerNewyork', 'url'=>array('index')),
	array('label'=>'Create DotTrackerNewyork', 'url'=>array('create')),
	array('label'=>'View DotTrackerNewyork', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DotTrackerNewyork', 'url'=>array('admin')),
);*/
?>

<h1>Update  New York HUT Permit Form #<?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>