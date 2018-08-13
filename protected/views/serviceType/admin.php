<?php
/* @var $this ServiceTypeController */
/* @var $model DotTrackerServicetype */

$this->breadcrumbs=array(
	'Service Types'=>array('index'),
	'Manage',
);

/*this->menu=array(
	array('label'=>'List DotTrackerServicetype', 'url'=>array('index')),
	array('label'=>'Create DotTrackerServicetype', 'url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dot-tracker-servicetype-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Service Types</h1>
<!--
<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php /*echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); */?>
<div class="search-form" style="display:none">
<?php /*$this->renderPartial('_search',array(
	'model'=>$model,
)); */?>
</div>--><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'dot-tracker-servicetype-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		//'title',
	array(
	        'name'=>'title',
             'htmlOptions'=>array('width'=>'15%'),

    ),
	//	'slug',
		'description',
        array(
            'name'=>'creationdatetime',
             'header'=>'Created on',
             'value'=>function($data)
             {
                 echo FilingGenerics::showDate($data->creationdatetime);
             },
            'htmlOptions'=>array('width'=>'17%'),

        ),
		//'creationdatetime',
		array(
			'class'=>'CButtonColumn',
            'template'=>'{update}'
		),
	),
)); ?>

<script>
    $(document).ready(function(){
        $('#dot-tracker-servicetype-grid td').on('dblclick',function()
        {
            console.log(this);
            var url=$(this).parent().find('.button-column .update').attr('href');
            if(typeof url !== 'undefined')
                window.location= url;
        });
    });
</script>
