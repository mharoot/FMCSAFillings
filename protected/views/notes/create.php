<?php
/* @var $this NotesController */
/* @var $model DotTrackerNotes */

$this->breadcrumbs=array(
	'Dot Tracker Notes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DotTrackerNotes', 'url'=>array('index')),
	array('label'=>'Manage DotTrackerNotes', 'url'=>array('admin')),
);
?>

<h1>Create DotTrackerNotes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>