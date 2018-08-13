<?php
/* @var $this BocFormController */
/* @var $model DotTrackerBoc */

$this->breadcrumbs=array(
	'BOC-3 Forms'=>array('index'),
	'Manage',
);



Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dot-tracker-boc-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage BOC-3 Forms</h1>
<a href="<?php echo Yii::app()->createUrl('bocForm/create')?>" style="float: right; margin-left: 20px;" class="btn btn-primary"><i class="fa fa-plus"></i> Create BOC </a><br>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'dot-tracker-boc-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'usdot',
		'company_name',
		'fname',
		'lname',
		'street',
		/*
		'city',
		'state',
		'zip',
		'phone_no',
		'fax',
		'email',
		'mobile',
		'services',
		'comments',
		'ext1',
		'ext2',
		'ext3',
		'created_by',
		'creation_datetime',
		*/
		array(
			'class'=>'CButtonColumn',
            'template'=>'{view} {update}',
		),
	),
)); ?>

<script>
    $('document').ready(function(){
        $('#dot-tracker-boc-grid td').on('dblclick',function()
        {
            console.log(this);
            var url=$(this).parent().find('.button-column .update').attr('href');
            if(typeof url !== 'undefined')
                window.location= url;
        });

    });
</script>
