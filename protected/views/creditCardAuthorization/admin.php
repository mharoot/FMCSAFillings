<?php
/* @var $this CreditCardAuthorizationController */
/* @var $model CreditCardAuthorization */

$this->breadcrumbs=array(
	'Credit Card Authorizations'=>array('index'),
	'Manage',
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

$cs=Yii::app()->clientScript;
$cs->scriptMap=array(
    'jquery.js'=>false,
);
$cs->coreScriptPosition = CClientScript::POS_END;
?>

<h1>Manage Credit Card Authorizations</h1>
<br><br>
<!--<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php /*echo CHtml::link('<i class="fa fa-cog>"></i>Advanced Search','#',array('class'=>'search-button','style'=>'color:brown;')); */?>
<div class="search-form" style="display:none">
<?php /*$this->renderPartial('_search',array(
	'model'=>$model,
)); */?>
</div>--><!-- search-form -->
<?php if (FilingGenerics::getuserRole(Yii::app()->user->id)==LoginForm::$allowedRole) { ?><span style="float: right;margin-right:30px;margin-left:30px;"> Select User :  <?php $models = DotTrackerUser::model()->findAll(array('order' => 'username DESC'));
    $list = CHtml::listData($models,'username', 'username');
    echo CHtml::dropDownList('username', '',$list,
        array('empty' => 'All Users '));
    ?></span> <?php } ?>
    <span style="float: right;margin-right:30px;margin-left:30px;"> Select Item Count :  <select name="pagen" id="pagen" style="">
                    <option value="50">50</option>
                    <option value="100">100</option>
                    <option value="100">150</option>
                    <option value="250">200</option>
                    <option value="500">500</option>
                    <option value="500">1000</option>
                </select> </span><a class="" href="<?php echo Yii::app()->createUrl('creditCardAuthorization/create');?>" style="float:right;"> <i class="fa fa-plus"></i> Create Credit Card Authorization Form</a>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'credit-card-authorization-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,


	'columns'=>array(
        array(
            'name' => 'id',
            'value' => function ($data) {
                echo FilingGenerics::showCCid(FilingGenerics::getQuoteID($data->id));
            },
            'htmlOptions' => array('width' => '10%','style'=>'text-align:center'),
        ),
        'auth_name',
        'auth_company',
       // 'auth_phoneno',
        array(
                'name'=>'auth_email',
                'htmlOptions' => array('width' => '20%','style'=>'text-align:center'),
                'value'=>function($data)
                {
                    if($data->auth_method==2)
                    {
                        echo '<i class="fa fa-check-circle-o" style="color: green;"></i> '.$data->auth_email ;
                    }
                    else{
                        echo $data->auth_email;
                    }
                }
        ),

        array(
            'name'=>'auth_phoneno',
            'htmlOptions' => array('width' => '10%','style'=>'text-align:center'),
            'value'=>function($data)
            {
                if($data->auth_method==1)
                {
                    echo '<i class="fa fa-check-circle-o" style="color: green;"></i> '.$data->auth_phoneno ;
                }
                else{
                    echo $data->auth_phoneno;
                }
            }
        ),
      //  'auth_email',
        array(
                'name'=>'auth_amount',
                'htmlOptions' => array('style'=>'text-align:center'),
                'value'=>function($data){
                    if($data->auth_amount!='')
                    {
                        echo $data->auth_amount;
                    }
                }   ,
        ),
        'date_of_charge',
        array(
            'name'=>'created_by',
            'visible'=>FilingGenerics::getuserRole(Yii::app()->user->id)==LoginForm::$allowedRole?true:false,
        ),
         array(
                 'name'=>'pay_status',
                 'header'=>'Payment Status',
                 'filter'=>'',
                 'htmlOptions' => array('width' => '20%','style'=>'text-align:center'),
                 'value'=>function($data)
                 {
                     //echo $data->pay_status;
                     if($data->pay_status=='true'){
                         echo '<font style="color:green;"> <i class="fa fa-check"></i> '.$data->pay_log.'</font>';
                     }
                     else if($data->pay_status=='false'){
                         echo '<font style="color:red;"> <i class="fa fa-close"></i> '.$data->pay_log.'</font>';
                     }
                     else{
                         echo '<font style="color: #b5b7b7;"> <i class="fa fa-spinner"></i> Payment not processed.</font>';
                     }
                 }

         ),
       // 'last_updated',

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
            'template'=>'{view} {update}',
        )
	),
)); ?>


<script>

    $(document).ready(function(){
        $('#credit-card-authorization-grid td').on('dblclick',function()
        {
            console.log(this);
            var url=$(this).parent().find('.button-column .update').attr('href');
            if(typeof url !== 'undefined')
            window.location= url;
        });
        $('#username').on('change',function(){

            $('input[name="CreditCardAuthorization[created_by]"]').val($('#username').val());
            $('input[name="CreditCardAuthorization[created_by]"]').trigger('change');
        });

        var element=$('input[name="CreditCardAuthorization[id]"]');

        element.on('keypress',function(e){
            var keycode = e.which;
            /* 48-57: 0 -9
             8:backspace */
            if((keycode >= 48 && keycode <= 57) || keycode == 8 )
                return true;
            return false;
        });


        var element1=$('input[name="CreditCardAuthorization[auth_phoneno]"]');

        element1.on('keypress',function(e){
            var keycode = e.which;
            /* 48-57: 0 -9
             8:backspace */
            if((keycode >= 48 && keycode <= 57) || keycode == 8 )
                return true;
            return false;
        });

        var element2=$('input[name="CreditCardAuthorization[auth_amount]"]');

        element2.on('keypress',function(e){
            var keycode = e.which;
            /* 48-57: 0 -9
             8:backspace */
            if((keycode >= 48 && keycode <= 57) || keycode == 8 )
                return true;
            return false;
        });
    });

</script>

<style>
    .summary
    {
        float:left !important;
    }
</style>


