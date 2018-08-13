<?php
/* @var $this OregonFormController */
/* @var $model DotTrackerOregaon */

$this->breadcrumbs = array(
    'Oregon Form' => array('index'),
    'Manage',
);

/*$this->menu=array(
	array('label'=>'List Oregaon Form', 'url'=>array('index')),
	array('label'=>'Create Oregaon Form', 'url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dot-tracker-oregaon-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Oregon Temporary Permit Form</h1><br>

<a href="<?php echo Yii::app()->createUrl('oregonForm/create'); ?>" class="btn btn-primary" style="float: right;"><i
            class="fa fa-plus"></i> Create</a>
<br>
<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'dot-tracker-oregaon-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        'usdot',
        'o_full_name',
        'd_full_name',
        'year',
        'make',
        'model',
        'license_plate',
        'vin_no',
        'unit_no',
        'odometer',
        array('name' => 'created_by',
            'value' => function ($data) {
                echo FilingGenerics::getUserName($data->created_by);
            },
        ),
        array('name' => 'creation_datetime',
            'value' => function ($data) {
                echo FilingGenerics::showDate($data->creation_datetime);
            },
        ),
        /*
        'date_entering',
        'loading',
        'year',
        'make',
        'model',
        'license_plate',
        'vin_no',
        'unit_no',
        'odometer',
        'vehicle_owned',
        'miles',
        'apportioned',
        'ext1',
        'ext2',
        'ext3',
        'ext4',
        'ext5',
        'ext6',
        'ext7',
        'ext8',
        'ext9',
        'ext10',
        'created_by',
        'creation_datetime',
        */
        array(
            'class' => 'CButtonColumn',
            'template' => '{view} {update}'
        ),
    ),
)); ?>
