<?php
/* @var $this DotTrackerQuoteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dot Tracker Quotes',
);

$this->menu=array(
	array('label'=>'Create DotTrackerQuote', 'url'=>array('create')),
	array('label'=>'Manage DotTrackerQuote', 'url'=>array('admin')),
);
?>

<h1>Dot Tracker Quotes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
