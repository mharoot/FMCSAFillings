<?php
/* @var $this NotesController */
/* @var $model DotTrackerNotes */

$this->breadcrumbs=array(
	'Dot Tracker Notes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DotTrackerNotes', 'url'=>array('index')),
	array('label'=>'Create DotTrackerNotes', 'url'=>array('create')),
	array('label'=>'View DotTrackerNotes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DotTrackerNotes', 'url'=>array('admin')),
);
?>

<h1>Update DotTrackerNotes <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>