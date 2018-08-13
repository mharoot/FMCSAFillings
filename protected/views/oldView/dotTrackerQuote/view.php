<?php
/* @var $this DotTrackerQuoteController */
/* @var $model DotTrackerQuote */

$this->breadcrumbs=array(
	'Dot Tracker Quotes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DotTrackerQuote', 'url'=>array('index')),
	array('label'=>'Create DotTrackerQuote', 'url'=>array('create')),
	array('label'=>'Update DotTrackerQuote', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DotTrackerQuote', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DotTrackerQuote', 'url'=>array('admin')),
);
?>

<h1>View DotTrackerQuote #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		's_fname',
		's_lname',
		's_company',
		's_address1',
		's_address2',
		's_city',
		's_state',
		's_state_code',
		's_email',
		's_phone1',
		's_phone2',
		's_mobile',
		's_fax',
		'o_city',
		'o_state',
		'o_state_code',
		'o_country',
		'd_city',
		'd_state',
		'd_state_code',
		'd_country',
		'est_shipdate',
		'vehicles_run',
		'ship_via',
		'shipper_notes_from',
		'vehicle_detais',
		'shipper_notes_to',
		'reffered_by',
		'creationdatetime',
		'last_update',
		'id',
	),
)); ?>
