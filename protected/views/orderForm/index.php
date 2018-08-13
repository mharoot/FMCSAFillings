<?php
/* @var $this OrderFormController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dot Tracker Orders',
);

$this->menu=array(
	array('label'=>'Create DotTrackerOrder', 'url'=>array('create')),
	array('label'=>'Manage DotTrackerOrder', 'url'=>array('admin')),
);
?>

<h1>Dot Tracker Orders</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
