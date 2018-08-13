<?php
/* @var $this ServiceTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dot Tracker Servicetypes',
);

$this->menu=array(
	array('label'=>'Create DotTrackerServicetype', 'url'=>array('create')),
	array('label'=>'Manage DotTrackerServicetype', 'url'=>array('admin')),
);
?>

<h1>Dot Tracker Servicetypes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
