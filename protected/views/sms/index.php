<?php
/* @var $this SmsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sms Responses',
);

$this->menu=array(
	array('label'=>'Create SmsResponse', 'url'=>array('create')),
	array('label'=>'Manage SmsResponse', 'url'=>array('admin')),
);
?>

<h1>Sms Responses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
