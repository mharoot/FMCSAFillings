<?php
/* @var $this DotTrackerCorporationformController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Corporation Filings',
);

$this->menu=array(
	array('label'=>'Create Corporation Filing', 'url'=>array('create')),
	array('label'=>'Manage Corporation Filing', 'url'=>array('admin')),
);
?>

<h1>Corporation Filings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
