<?php
/* @var $this NotesController */
/* @var $model DotTrackerNotes */

$this->breadcrumbs=array(
	'Dot Tracker Notes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DotTrackerNotes', 'url'=>array('index')),
	array('label'=>'Create DotTrackerNotes', 'url'=>array('create')),
	array('label'=>'Update DotTrackerNotes', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DotTrackerNotes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DotTrackerNotes', 'url'=>array('admin')),
);
?>

<h1>View DotTrackerNotes #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'quote_id',
		'date',
		'note',
		'created_by',
	),
)); ?>
