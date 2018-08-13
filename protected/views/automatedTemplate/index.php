<?php
/* @var $this AutomatedTemplateController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dot Tracker Emailtemps',
);

$this->menu=array(
	array('label'=>'Create DotTrackerEmailtemp', 'url'=>array('create')),
	array('label'=>'Manage DotTrackerEmailtemp', 'url'=>array('admin')),
);
?>

<h1>Dot Tracker Emailtemps</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
