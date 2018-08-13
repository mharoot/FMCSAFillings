<?php
/* @var $this EmployeePullNotice2Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dot Tracker Epn2s',
);

$this->menu=array(
	array('label'=>'Create DotTrackerEpn2', 'url'=>array('create')),
	array('label'=>'Manage DotTrackerEpn2', 'url'=>array('admin')),
);
?>

<h1>Dot Tracker Epn2s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
