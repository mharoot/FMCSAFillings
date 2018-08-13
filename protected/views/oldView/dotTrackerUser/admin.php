<?php
/* @var $this DotTrackerUserController */
/* @var $model DotTrackerUser */

$this->breadcrumbs=array(
	'Dot Tracker Users'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
);

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

<h1>Manage Dot Tracker Users</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'dot-tracker-user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'fname',
		'lname',
		'extra',
		'phone',
		'username',
        'creationdatetime',
        array(
            'name'=>'creationdatetime',
            'filter'=>'<input type="text" name="dateFrom" id="dateFrom" > '
        ),

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
			'class'=>'CButtonColumn',
		),
	),
)); ?>
