<?php
/* @var $this BocFormController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dot Tracker Bocs',
);

$this->menu=array(
	array('label'=>'Create DotTrackerBoc', 'url'=>array('create')),
	array('label'=>'Manage DotTrackerBoc', 'url'=>array('admin')),
);
?>

<h1>Dot Tracker Bocs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
