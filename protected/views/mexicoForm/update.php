<?php
/* @var $this MexicoFormController */
/* @var $model DotTrackerMexico */

$this->breadcrumbs=array(
	'New Mexico WD Permit Form'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

/*$this->menu=array(
	array('label'=>'List DotTrackerMexico', 'url'=>array('index')),
	array('label'=>'Create DotTrackerMexico', 'url'=>array('create')),
	array('label'=>'View DotTrackerMexico', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DotTrackerMexico', 'url'=>array('admin')),
);*/
?>

<h1>Update New Mexico WD Permit Form <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>