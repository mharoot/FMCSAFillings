<?php
/* @var $this EmployeePullNotice3Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dot Tracker Epn3s',
);

$this->menu=array(
	array('label'=>'Create DotTrackerEpn3', 'url'=>array('create')),
	array('label'=>'Manage DotTrackerEpn3', 'url'=>array('admin')),
);
?>

<h1>Dot Tracker Epn3s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
