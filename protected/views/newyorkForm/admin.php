<?php
/* @var $this NewyorkFormController */
/* @var $model DotTrackerNewyork */

$this->breadcrumbs=array(
	'New York HUT Permit Form'=>array('index'),
	'Manage',
);

/*$this->menu=array(
	array('label'=>'List DotTrackerNewyork', 'url'=>array('index')),
	array('label'=>'Create DotTrackerNewyork', 'url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dot-tracker-newyork-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage New York HUT Permit Forms</h1>

<a class="btn btn-primary" href="<?php echo Yii::app()->createUrl('newyorkForm/create'); ?>" style="float: right"><i class="fa fa-plus"></i> Create</a>
<br><br><br>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'dot-tracker-newyork-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
        'id',
        'usdot',
        'ein_no',
        'no_of_axles',
        'vin_no',
        'v_owned',
        'truck_unit',
        'make',
        'model',
        'year',
        'fuel_type',
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
		'g_weight',
		'vin_no',
		'v_owned',
		'truck_unit',
		'title_state',
		'make',
		'model',
		'year',
		'license_plate',
		'plate_state',
		'fuel_type',
		'unloaded_weight',
		'ext1',
		'ext2',
		'ext3',
		'ext4',
		'ext5',
		'ext6',
		'created_by',
		'creation_datetime',
		*/
		array(
			'class'=>'CButtonColumn',
            'template'=>'{view} {update}'
		),
	),
)); ?>
