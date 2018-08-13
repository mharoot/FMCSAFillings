<?php
/* @var $this OrderFormController */
/* @var $model DotTrackerOrder */

$this->breadcrumbs=array(

	'Manage',
);

/*$this->menu=array(
	array('label'=>'List DotTrackerOrder', 'url'=>array('index')),
	array('label'=>'Create DotTrackerOrder', 'url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dot-tracker-order-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Orders</h1>

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

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'dot-tracker-order-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		array(
		        'name'=>'quote_id',
                'header'=>'Order Id',
                'htmlOptions'=>array('style'=>'text-align:center'),
                'value'=>function($data)
                {
                    echo FilingGenerics::showOrderId($data->quote_id).'<br> <font style="color:lightslategrey; font-size: 10px;">( Converted from '.FilingGenerics::showQuoteId($data->quote_id).' )</font> ';

                    echo '<br><a style="color:#125a96 !important; font-size: 10px;" href="'.Yii::app()->createUrl('creditCardAuthorization/create',array('order-id'=>$data->id)).'"><i class="fa fa-refresh"></i> Convert to Payment</a>';
                }
        ),


        array(
            'name'=>'form_details',
            'header'=>'Service Type',
            'value'=>function($data)
            {
                $arrAll=json_decode($data->form_details);
                //print_r($arr);
                foreach($arrAll as $ind=>$val)
                {
                    echo '<li style="list-style: none"> - '.FilingGenerics::$serviceType[$ind].'</li>';
                }
            }
        ),
        array(
            'name'=>'created_by',
            'header'=>'Converted by',
            'value'=>function($data)
            {
                echo FilingGenerics::getUserName($data->created_by).'( '.$data->created_by.' )';
            }
        ),


        array(
            'name'=>'creation_datetime',
            'header'=>'Created on',
            'value'=>function($data)
            {
                echo FilingGenerics::showDate($data->creation_datetime);
            }
        ),


		/*
		'status',
		*/
		array(
			'class'=>'CButtonColumn',
            'template'=>'{update} {convertL} ',
            'buttons'=>array(
                    'convertL'=>array(
                        'label'=>'<i class="fa fa-refresh"></i>',
                        'url'=>"",
                    )
            ),

		),
	),
)); ?>

<script>
    $(document).ready(function(){
        $('#dot-tracker-order-grid td').on('dblclick',function()
        {
            console.log(this);
            var url=$(this).parent().find('.button-column .update').attr('href');
            if(typeof url !== 'undefined')
                window.location= url;
        });
    });
</script>
