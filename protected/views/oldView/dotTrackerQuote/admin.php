<?php
/* @var $this DotTrackerQuoteController */
/* @var $model DotTrackerQuote */

$this->breadcrumbs=array(
	'Dot Tracker Quotes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List DotTrackerQuote', 'url'=>array('index')),
	array('label'=>'Create DotTrackerQuote', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dot-tracker-quote-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Dot Tracker Quotes</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'dot-tracker-quote-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		's_fname',
		's_lname',
		's_company',
		's_address1',
		's_address2',
		's_city',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
