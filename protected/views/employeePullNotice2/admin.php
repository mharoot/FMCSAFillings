<?php
/* @var $this EmployeePullNotice2Controller */
/* @var $model DotTrackerEpn2 */

$this->breadcrumbs=array(
	'EPN'=>array('index'),
	'Manage',
);

/*$this->menu=array(
	array('label'=>'List DotTrackerEpn2', 'url'=>array('index')),
	array('label'=>'Create DotTrackerEpn2', 'url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dot-tracker-epn2-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>COMMERCIAL EMPLOYER PULL NOTICE
    ENROLLMENT OR DELETION OF DRIVERS</h1>


<a href="<?php echo Yii::app()->createUrl('employeePullNotice2/create')?>" style="float: right; margin-left: 20px;" class="btn btn-primary"><i class="fa fa-plus"></i> Create EPN</a>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'dot-tracker-epn2-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'employer',
		'current_address',
		'city',
		'state',
		'zip',
		/*
		'is_enroll',
		'requester_code',
		'date',
		'telephone',
		'ext',
		'contact_name',
		'c11',
		'c12',
		'c13',
		'c14',
		'c21',
		'c22',
		'c23',
		'c24',
		'c31',
		'c32',
		'c33',
		'c34',
		'c41',
		'c42',
		'c43',
		'c44',
		'c51',
		'c52',
		'c53',
		'c54',
		'c61',
		'c62',
		'c63',
		'c64',
		'c71',
		'c72',
		'c73',
		'c74',
		'c81',
		'c82',
		'c83',
		'c84',
		'c91',
		'c92',
		'c93',
		'c94',
		'c101',
		'c102',
		'c103',
		'c104',
		'c111',
		'c112',
		'c113',
		'c114',
		'c121',
		'c122',
		'c123',
		'c124',
		'c131',
		'c132',
		'c133',
		'c134',
		'c141',
		'c151',
		'c152',
		'c153',
		'c154',
		'c142',
		'c143',
		'c144',
		'ext1',
		'ext2',
		'ext3',
		'ext4',
		'ext5',
		'ext6',
		'ext7',
		'printed_name',
		'sign',
		'sign_date',
		'created_by',
		'creation_datetime',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
