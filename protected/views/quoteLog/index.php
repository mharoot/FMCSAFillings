<?php
/* @var $this QuoteLogController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dot Tracker Quote Logs',
);

$this->menu=array(
	array('label'=>'Create DotTrackerQuoteLog', 'url'=>array('create')),
	array('label'=>'Manage DotTrackerQuoteLog', 'url'=>array('admin')),
);
?>

<h1>Dot Tracker Quote Logs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
