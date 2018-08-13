<?php
/* @var $this McApplicationController */
/* @var $model DotTrackerMc */

$this->breadcrumbs=array(
	'MC Applications'=>array('index'),
	'Manage',
);

/*$this->menu=array(
	array('label'=>'List DotTrackerMc', 'url'=>array('index')),
	array('label'=>'Create DotTrackerMc', 'url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dot-tracker-mc-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage MC Applications</h1>

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
	'id'=>'dot-tracker-mc-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
        array(
            'class' => 'CCheckBoxColumn',
            'selectableRows' => 2,
            'value' => 'FilingGenerics::encryptKey($data->id)',

            'htmlOptions' => array('width' => '3%'),
        ),
        array(
            'name' => 'id',
            'value' => function ($data) {
                echo FilingGenerics::showMcId($data->id);
            },
            'htmlOptions' => array('width' => '10%'),
        ),
        'dot_number',
		'legal_business_name',
		'doing_business_as',
		'p_street',

		'p_state',
		'p_city',
		'p_zip',
		'p_telephone',
		'p_fax',
        'creationdate_time',
        'last_update',
        'created_by',
		/*'m_street',
		'm_city',
		'm_state',
		'm_zip',
		'm_telephone',
		'm_fax',
		'r_name',
		'r_title',
		'r_street',
		'r_state',
		'r_zip',
		'r_telephone',
		'r_fax',
		'dot_number',
		'form_of_business_c',
		'form_of_business',
		'type_of_auth',
		'p_29a',
		'p_29b',
		'p_30',
		'p_31',
		'affl_cont',
		'affl_file',
		'p_33',
		'p_34',
		'p_35',
		'p_36_check',
		'p_36_file',
		'p_37',
		'p_38_name',
		'sign_link',
		'title',
		'date',
		'no_of_checkboxes',
		'payment_method',
		'cc_type',
		'cc_number',
		'cc_date',
		'cc_name',
		'payment_amount',
		'street',
		'city',
		'state',
		'zip',
		'sign_link1',
		'date1',
		'extra1',
		'extra2',
		'extra3',
		'extra4',
		'extra5',
		'extra6',

		*/
		array(
			'class'=>'CButtonColumn',
            'template'=>'{view}'
		),
	),
)); ?>
