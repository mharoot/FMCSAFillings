<?php
/* @var $this KentuckyFormController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dot Tracker Kentuckys',
);

$this->menu=array(
	array('label'=>'Create DotTrackerKentucky', 'url'=>array('create')),
	array('label'=>'Manage DotTrackerKentucky', 'url'=>array('admin')),
);
?>

<h1>Dot Tracker Kentuckys</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
