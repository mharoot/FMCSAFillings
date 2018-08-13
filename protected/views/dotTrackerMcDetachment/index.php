<?php
/* @var $this DotTrackerMcDetachmentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dot Tracker Mc Detachments',
);

$this->menu=array(
	array('label'=>'Create MC# Detachment ', 'url'=>array('create')),
	array('label'=>'Manage MC# Detachment ', 'url'=>array('admin')),
);
?>

<h1>Dot Tracker Mc Detachments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
