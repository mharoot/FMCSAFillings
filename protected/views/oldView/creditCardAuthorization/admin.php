<?php
/* @var $this CreditCardAuthorizationController */
/* @var $model CreditCardAuthorization */

$this->breadcrumbs=array(
	'Credit Card Authorizations'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Create Credit Card Authorization', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#credit-card-authorization-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Credit Card Authorizations</h1>

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
	'id'=>'credit-card-authorization-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
        'auth_name',
        'auth_company',
        'auth_phoneno',
        'auth_email',
        'auth_amount',
        'creation_datetime',
        'last_updated',
        'created_by',
		/*
		'address',
		'city',
		'state',
		'zipcode',
		'phone',
		'email',
		'fax',
		'auth_name',
		'auth_company',
		'auth_phoneno',
		'auth_email',
		'auth_drivlicense',
		'auth_relationuser',
		'auth_charges',
		'auth_amount',
		'date_of_charge',
		'ccholder_name',
		'sign_link',
		'date',
		'creation_datetime',
		'last_updated',
		'created_by',
		*/
        array
        (
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}',
        )
	),
)); ?>
