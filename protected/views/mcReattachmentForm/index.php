<?php
/* @var $this McReattachmentFormController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dot Tracker Mc Reattachments',
);

$this->menu=array(
	array('label'=>'Create DotTrackerMcReattachment', 'url'=>array('create')),
	array('label'=>'Manage DotTrackerMcReattachment', 'url'=>array('admin')),
);
?>

<h1>Dot Tracker Mc Reattachments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
