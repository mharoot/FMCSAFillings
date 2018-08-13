<?php
/* @var $this NotesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dot Tracker Notes',
);

$this->menu=array(
	array('label'=>'Create DotTrackerNotes', 'url'=>array('create')),
	array('label'=>'Manage DotTrackerNotes', 'url'=>array('admin')),
);
?>

<h1>Dot Tracker Notes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
