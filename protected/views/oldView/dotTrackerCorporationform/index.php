<?php
/* @var $this DotTrackerCorporationformController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Corporation Forms',
);

$this->menu=array(
	array('label'=>'Create Corporation Form', 'url'=>array('create')),
	array('label'=>'Manage Corporation Form', 'url'=>array('admin')),
);
?>

<h1>Corporation Forms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
