<?php
/* @var $this DotTrackerCorporationformController */
/* @var $model DotTrackerCorporationform */

$this->breadcrumbs=array(
	'Corporation Forms'=>array('index'),
	$model->name,
);

$this->menu=array(

	array('label'=>'Create Corporation Form', 'url'=>array('create')),
	array('label'=>'Update Corporation Form', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Corporation Form', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Corporation Form', 'url'=>array('admin')),
);
?>

<h1>View Corporation Form #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'street',
		'city',
		'state',
		'zip',
		'm_street',
		'm_city',
		'm_state',
		'm_zip',
		'ca_fname',
		'ca_mname',
		'ca_lname',
		'ca_suffix',
		'ag_street',
		'ag_city',
		'ag_state',
		'ag_zip',
		'shares',
		'creation_datetime',
		'last_updated',
	),
)); ?>
