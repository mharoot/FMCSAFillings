<?php
/* @var $this DotTrackerCorporationformController */
/* @var $model DotTrackerCorporationform */

$this->breadcrumbs=array(
	'Corporation Forms'=>array('index'),
	'Manage',
);

$this->menu=array(

	array('label'=>'Create Corporation Form', 'url'=>array('create')),
);

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

<h1>Manage Corporation Forms</h1>

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
        'creation_datetime',
        'last_updated',
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
		),
	),
)); ?>
