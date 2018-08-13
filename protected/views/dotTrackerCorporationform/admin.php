<?php
/* @var $this DotTrackerCorporationformController */
/* @var $model DotTrackerCorporationform */

$this->breadcrumbs=array(
	'Corporation Filings'=>array('index'),
	'Manage',
);

/*$this->menu=array(

	array('label'=>'Create Corporation Filing', 'url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dot-tracker-corporationform-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Corporation Filings</h1>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'dot-tracker-corporationform-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'street',
		'city',
		'state',
		'zip',
        /*array(
            'name'=>'created_by',
            'value'=>function($data)
            {
                echo FilingGenerics::getUserName($data->created_by).' ( '.$data->created_by.' )';
            }
        ),*/

        array(
            'name'=>'creation_datetime',
            'value'=>function($data)
            {
                echo FilingGenerics::showDate($data->creation_datetime);
            }
        ),
		/*
		'm_street',
		'm_city',
		'm_state',
		'm_zip',
		'ca_fname',
		'ca_mname',
		'ca_lname',
		'ca_suffix',
		'ag_street',
		'ag_city',
		'ag_state',
		'ag_zip',
		'shares',
		'creation_datetime',
		'last_updated',
		*/
		array(
			'class'=>'CButtonColumn',
            'template'=>'{view} {update}',
		),
	),
)); ?>


<script>
    $('document').ready(function(){
        $('#dot-tracker-corporationform-grid td').on('dblclick',function()
        {
            console.log(this);
            var url=$(this).parent().find('.button-column .update').attr('href');
            if(typeof url !== 'undefined')
                window.location= url;
        });

    });
</script>