<?php
/* @var $this DotTrackerMcDetachmentController */
/* @var $model DotTrackerMcDetachment */

$this->breadcrumbs=array(
	'Dot Tracker Mc Detachments'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MC# Detachment ', 'url'=>array('index')),
	array('label'=>'Create MC# Detachment ', 'url'=>array('create')),
	array('label'=>'View MC# Detachment ', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MC# Detachment ', 'url'=>array('admin')),
);
?>

<h1>Update MC# Detachment  <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>