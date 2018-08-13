<?php
/* @var $this KentuckyFormController */
/* @var $model DotTrackerKentucky */

$this->breadcrumbs=array(
	'Kentucky WD Permit Form'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

/*$this->menu=array(
	array('label'=>'List DotTrackerKentucky', 'url'=>array('index')),
	array('label'=>'Create DotTrackerKentucky', 'url'=>array('create')),
	array('label'=>'View DotTrackerKentucky', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DotTrackerKentucky', 'url'=>array('admin')),
);*/
?>

<h1>Update Kentucky WD Permit Form <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>