<?php
/* @var $this MexicoFormController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dot Tracker Mexicos',
);

$this->menu=array(
	array('label'=>'Create DotTrackerMexico', 'url'=>array('create')),
	array('label'=>'Manage DotTrackerMexico', 'url'=>array('admin')),
);
?>

<h1>Dot Tracker Mexicos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
