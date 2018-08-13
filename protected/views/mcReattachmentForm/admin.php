<?php
/* @var $this McReattachmentFormController */
/* @var $model DotTrackerMcReattachment */

$this->breadcrumbs=array(
	'Dot Tracker Mc Reattachments'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List DotTrackerMcReattachment', 'url'=>array('index')),
	array('label'=>'Create DotTrackerMcReattachment', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dot-tracker-mc-reattachment-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Dot Tracker Mc Reattachments</h1>

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
	'id'=>'dot-tracker-mc-reattachment-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'usdot',
		'mc',
		'legal_business_name',
		'office_name',
		'date',
		/*
		'created_by',
		'creation_datetime',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
