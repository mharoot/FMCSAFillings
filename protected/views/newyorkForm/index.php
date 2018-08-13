<?php
/* @var $this NewyorkFormController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dot Tracker Newyorks',
);

$this->menu=array(
	array('label'=>'Create DotTrackerNewyork', 'url'=>array('create')),
	array('label'=>'Manage DotTrackerNewyork', 'url'=>array('admin')),
);
?>

<h1>Dot Tracker Newyorks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
