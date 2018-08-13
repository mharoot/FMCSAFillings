<?php
/* @var $this OregonFormController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dot Tracker Oregaons',
);

/*$this->menu=array(
	array('label'=>'Create DotTrackerOregaon', 'url'=>array('create')),
	array('label'=>'Manage DotTrackerOregaon', 'url'=>array('admin')),
);*/
?>

<h1>Dot Tracker Oregaons</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
