<?php
/* @var $this EmployerPullNoticeController */
/* @var $model DotTrackerEpn1 */

$this->breadcrumbs=array(
	'Employer Pull Notice'=>array('index'),
	'Manage',
);

/*$this->menu=array(
	array('label'=>'List DotTrackerEpn1', 'url'=>array('index')),
	array('label'=>'Create DotTrackerEpn1', 'url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dot-tracker-epn1-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Employer Pull Notice</h1>

<!--<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php /*echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); */?>
<div class="search-form" style="display:none">
<?php /*$this->renderPartial('_search',array(
	'model'=>$model,
)); */?>
</div>--><!-- search-form -->
<a class="btn btn-info" href="<?php echo Yii::app()->createUrl('employerPullNotice/create');?>" style="float:right;"> <i class="fa fa-plus"></i> Create Employer Pull Notice</a><br><br>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'dot-tracker-epn1-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'company_name',
		'dba',
		'attention',
		'email_address',
		'telephone',
		/*
		'mailing_address',
		'city',
		'state',
		'zip',
		'acc_person',
		'acc_email_address',
		'acc_telephone',
		'acc_street_address',
		'acc_city',
		'acc_state',
		'acc_zip',
		'billing_person',
		'billing_telephone',
		'billing_attention',
		'billing_telephone2',
		'billing_address',
		'billing_city',
		'billing_state',
		'billing_zip',
		'licensing_name',
		'licensing_title',
		'licensing_dl_nmber',
		'licensing_state',
		'licensing_expiration',
		'licensing_email',
		'licensing_federal_employer',
		'purpose_enrollment',
		'all_employee_mandate',
		'issued_requester_code',
		'issued_requester_code_a',
		'issued_requester_code_b',
		'sign_link',
		'extra',
		'creation_datetime',
		'created_by',
		*/
		array(
			'class'=>'CButtonColumn',
            'template'=>'{view} {update}',
		),
	),
)); ?>

<script type="application/javascript">

    $(document).ready(function(){
        $('#dot-tracker-epn1-grid td').on('dblclick',function()
        {
            console.log(this);
            var url=$(this).parent().find('.button-column .update').attr('href');
            if(typeof url !== 'undefined')
                window.location= url;
        });
    });
</script>
