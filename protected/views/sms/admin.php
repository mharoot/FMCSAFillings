<?php
/* @var $this SmsController */
/* @var $model SmsResponse */

$this->breadcrumbs=array(
	'Inbound Responses'=>array('index'),
	'Manage',
);

/*$this->menu=array(
	array('label'=>'List SmsResponse', 'url'=>array('index')),
	array('label'=>'Create SmsResponse', 'url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sms-response-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Inbound Responses</h1>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'sms-response-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
            'name'=>'id',
            'htmlOptions' => array('width' => '5%'),
        ),
        array(
                'name'=>'fromPhone',
                'htmlOptions' => array('width' => '15%'),
        ),
		array(
                'name'=>'toPhone',
                'htmlOptions' => array('width' => '15%'),
        ),
		/*'fromPhone',
		'toPhone',*/
		'content',
        array(
            'name' => 'creationdatetime',
            'filter'=>'',
            'htmlOptions' => array('width' => '15%'),
            'value'=>function($data){
                echo FilingGenerics::showDate($data->creationdatetime);
            },

        ),

		/*
		'ext1',
		'ext2',
		*/
		array(
			'class'=>'CButtonColumn',
            'template'=>'',
		),
	),
)); ?>
