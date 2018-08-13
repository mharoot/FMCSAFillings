<?php
/* @var $this EmployeePullNotice3Controller */
/* @var $model DotTrackerEpn3 */

$this->breadcrumbs=array(
	'Agreements'=>array('index'),
	'Manage',
);

/*$this->menu=array(
	array('label'=>'List DotTrackerEpn3', 'url'=>array('index')),
	array('label'=>'Create DotTrackerEpn3', 'url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dot-tracker-epn3-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Employee Pull Notice Agreements</h1>

<a class="btn btn-primary" href="<?php echo Yii::app()->createUrl('employeePullNotice3/create');?>"> <i class="fa fa-plus"></i> Create </a>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'dot-tracker-epn3-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'requester',
		'day',
		'month',
		'year',
		'party',
		/*
		'company_name',
		'dmv_sign',
		'mailing_address',
		'auth_sign',
		'city',
		'state',
		'zip',
		'auth_name',
		'ext1',
		'ext2',
		'ext3',
		'ext4',
		'created_by',
		'creation_datetime',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
