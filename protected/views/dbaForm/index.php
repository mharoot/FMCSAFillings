<?php
/* @var $this DbaFormController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dot Tracker Dbas',
);

$this->menu=array(
	array('label'=>'Create DotTrackerDba', 'url'=>array('create')),
	array('label'=>'Manage DotTrackerDba', 'url'=>array('admin')),
);
?>

<h1>Dot Tracker Dbas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
