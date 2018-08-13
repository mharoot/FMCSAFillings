<?php
/* @var $this DotTrackerUserController */
/* @var $model DotTrackerUser */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Manage',
);

/*$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dot-tracker-user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");

?>

<h1>Manage Users</h1>

<a class="btn btn-info" href="<?php echo Yii::app()->createUrl('DotTrackerUser/create')?>" style="float: right;margin-left:30px;"><i class="fa fa-plus"></i> Create User</a>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'dot-tracker-user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
        array(
                'name'=>'id',
                'value'=>function($data)
                {
                    echo '<a href="'.Yii::app()->createUrl('dotTrackerUser/view',array('id'=>$data->id)).'">'.$data->id.'</a>';
                }
        ),
		'fname',
		'lname',
        'email',
		'phone',
		'username',
        array(
            'name'=>'role',
            'value'=>function($data)
            {
                echo DotTrackerUser::$arrUserRoles[$data->role];
            }
        ),
        'creationdatetime',


        'last_updated',
		/*
		'email',
		'active',
		'creationdatetime',
		'last_updated',
		'password',
		'role',
		*/
		array(
			'class'=>'CButtonColumn','template'=>' {delete}'
		),
	),
)); ?>
