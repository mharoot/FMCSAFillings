<?php
/* @var $this McApplicationController */
/* @var $model DotTrackerMc */

$this->breadcrumbs=array(
	'MC Applications'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MC Application', 'url'=>array('index')),
	array('label'=>'Create MC Application', 'url'=>array('create')),
	array('label'=>'View MC Application', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MC Application', 'url'=>array('admin')),
);
?>

<h1>Update MC Application <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>