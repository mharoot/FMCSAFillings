<?php
/* @var $this QuoteLogController */
/* @var $model DotTrackerQuoteLog */

$this->breadcrumbs=array(
	'Dot Tracker Quote Logs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List DotTrackerQuoteLog', 'url'=>array('index')),
	array('label'=>'Create DotTrackerQuoteLog', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dot-tracker-quote-log-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Dot Tracker Quote Logs</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'dot-tracker-quote-log-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'logDet',
		'quote_id',
		'extrafield',
		'date',
		'created_by',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
