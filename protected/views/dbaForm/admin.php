<?php
/* @var $this DbaFormController */
/* @var $model DotTrackerDba */

$this->breadcrumbs=array(
	'Fictitious Business Name (DBA)'=>array('index'),
	'Manage',
);

/*$this->menu=array(
	array('label'=>'List DotTrackerDba', 'url'=>array('index')),
	array('label'=>'Create DotTrackerDba', 'url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dot-tracker-dba-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Fictitious Business Name Form (DBA)</h1>

<a class="btn btn-primary" href="<?php echo Yii::app()->createUrl('dbaForm/create'); ?>" style="float: right"><i class="fa fa-plus"></i> Create</a>
<br><br><br>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'dot-tracker-dba-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'dba',
		'b_address',
		'b_add_address',
		'b_city',
		'b_state',

		'b_zip',
		'b_county',
		'v_country',
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
		'article_incorp',
		'm_address',
		'm_add_address',
		'm_city',
		'm_state',
		'm_zip',
		'm_country',
		'full_name',
		's_address',
		's_add_address',
		'city',
		'state',
		'zip',
		'country',
		'state_of_org',
		'r_full_name',
		'sign_name',
		'sign_title',
		's_email',
		's_phone',
		'business_conducted',
		'date_reg',
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
		),
	),
)); ?>
