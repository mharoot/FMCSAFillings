<?php
/* @var $this MexicoFormController */
/* @var $model DotTrackerMexico */

$this->breadcrumbs=array(
	'New Mexico WD Permit Forms'=>array('index'),
	'Manage',
);
/*
$this->menu=array(
	array('label'=>'List DotTrackerMexico', 'url'=>array('index')),
	array('label'=>'Create DotTrackerMexico', 'url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dot-tracker-mexico-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage New Mexico WD Permit Forms</h1>

<a class="btn btn-primary" href="<?php echo Yii::app()->createUrl('mexicoForm/create'); ?>" style="float: right"><i class="fa fa-plus"></i> Create</a>
<br><br><br>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'dot-tracker-mexico-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
        'id',
        'usdot',
        'ein',
        'no_of_axles',
        'vin_no',
        'vehicle_owned',
        'truck_unit_no',
        'make',
        'model',
        'year',
        'type_of_fuel',
        array(
            'name'=>'created_by',
            'value'=>function($data)
            {
                echo FilingGenerics::getUserName($data->created_by).' ( '.$data->created_by.' )';
            }
        ),

        array(
            'name'=>'creation_datetime',
            'value'=>function($data)
            {
                echo FilingGenerics::showDate($data->creation_datetime);
            }
        ),
		/*
		'truck_unit_no',
		'title_state',
		'make',
		'model',
		'year',
		'license_plate',
		'plate_state',
		'type_of_fuel',
		'unloaded_weight',
		'ext1',
		'ext2',
		'ext3',
		'ext4',
		'ext5',
		'ext6',
		'ext7',
		'created_by',
		'creation_datetime',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
