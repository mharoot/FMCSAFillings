<?php
/* @var $this QuoteFormController */
/* @var $model DotTrackerQuote */

$this->breadcrumbs = array(
    'Quotes' => array('index'),
    'Manage',
);
$pageSize = Yii::app()->user->getState('pageSize', Yii::app()->params['defaultPageSize']);

/*$this->menu=array(
	array('label'=>'List DotTrackerQuote', 'url'=>array('index')),
	array('label'=>'Create DotTrackerQuote', 'url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dot-tracker-quote-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
/*$cs=Yii::app()->clientScript;
$cs->scriptMap=array(
    'jquery.js'=>false,
);
$cs->scriptMap=array(
    'ba-bbq.js'=>false,
);*/
?>

<h1>Manage Quotes</h1>
<br><br>
<!--<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>,
    <b>&lt;&gt;</b>
    or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php /*echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); */?>
<div class="search-form" style="display:none">
    <?php /*$this->renderPartial('_search', array(
        'model' => $model,
    )); */?>
</div>--><!-- search-form -->
<br><Br><br>
<div class="row">
    <div class="col-lg-12">
        <div style="float:left;">
            <select name="searchQ" id="searchQ">
                <option value="id">Quote ID</option>
                <option value="email">Email</option>
                <option value="fname">Customer First Name</option>
                <option value="lname">Customer Last Name</option>
                <option value="phone">Mobile Number</option>
                <option value="shipper">Company</option>
            </select>
            <input type="text" name="sBox"  id="sBox" placeholder="Enter Search Query">
            <span class="btn btn-info" onclick="searchText()"><i class="fa fa-search"></i> Search</span>
            <span class="btn btn-info" onclick="resetSearch()"><i class="fa fa-undo"></i> Reset</span>
        </div>
        <br><br><br>
        <p id="processingReq" class="alert alert-warning" style="display: none;"><i class="fa fa-spinner"></i>
            Processing your request. </p>
        <a href="<?php echo Yii::app()->createUrl('quoteForm/create'); ?>" class="btn btn-info" style="float: right;"><i
                    class="fa fa-plus"></i> Create Quote</a>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Follow Up
                    (<?php echo $model->search(DotTrackerQuote::$enumStatus['followup'])->getTotalItemCount(); ?>)</a>
            </li>
            <li><a data-toggle="tab" href="#menu1">Quotes
                    (<?php echo $model->search(DotTrackerQuote::$enumStatus['quote'])->getTotalItemCount(); ?>)</a></li>
            <li><a data-toggle="tab" href="#menu2">Hold
                    (<?php echo $model->search(DotTrackerQuote::$enumStatus['hold'])->getTotalItemCount(); ?>)</a></li>
            <li><a data-toggle="tab" href="#menu4">Cancelled
                    (<?php echo $model->search(DotTrackerQuote::$enumStatus['archived'])->getTotalItemCount(); ?>)</a>
            </li>

        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <?php $this->widget('zii.widgets.grid.CGridView', array(
                    'id' => 'dot-tracker-quote-grid-followup',
                    'dataProvider' => $model->search(DotTrackerQuote::$enumStatus['followup']),
                    'filter' => $model,
                    'columns' => array(

                        array(
                            'class' => 'CCheckBoxColumn',
                            'selectableRows' => 2,
                            'value' => 'FilingGenerics::encryptKey($data->id)',

                            'htmlOptions' => array('width' => '3%'),
                        ),
                        array(
                            'name' => 'id',
                            'value' => function ($data) {
                                echo FilingGenerics::showQuoteId($data->id);
                            },
                            'htmlOptions' => array('width' => '10%'),
                            'filter'=>'',
                        ),

                        array(
                            'name' => 'creationdate',
                            'filter'=>'',
                            'value'=>function($data){
                                echo FilingGenerics::showDate($data->creationdate);
                            },
                        ),

                        array(
                            'name' => 'fname',
                            'filter'=>'',
                            'header' => 'Customer Name',
                            'value' => function ($data) {
                                $email = '<span style="color: red;">No Email</span>';
                                if ($data->email != '') {
                                    $email = '<span>' . $data->email . '</span>';
                                }
                                $mobile = '<span style="color: red;">No Cell Number</span>';
                                if ($data->phone != '') {
                                    $mobile = '<span>' . FilingGenerics::showPhone($data->phone) . '</span>';
                                }
                                echo $data->fname . ' ' . $data->lname . '<br><br>' . $email . '<br>' . $mobile;
                            },
                            'htmlOptions' => array('style' => 'text-align:center')

                        ),
                        array(
                            'name' => 'totpayment',
                            'filter'=>'',
                            'value' => function ($data) {
                                echo FilingGenerics::showAmt($data->totpayment);
                            }
                        ),array(
                            'name' => 'discounted_price',
                            'filter'=>'',
                            'value' => function ($data) {
                                echo FilingGenerics::showDAmt($data->discounted_price);
                            }
                        ),
                        array(
                            'name' => 'arrdata','filter'=>'',
                            'header' => 'Service Type',
                            'value' => function ($data) {
                                echo FilingGenerics::showServiceType($data->id);
                            },
                            'htmlOptions' => array('width' => '25%')

                        ),
                        array(
                            'name' => 'status','filter'=>'',
                            'header' => 'Follow Up Status',
                            'htmlOptions' => array('width' => '15%','style' => 'text-align:center;'),
                            'value' => function ($data) {
                                echo '<i class="fa fa-envelope"></i> Mailed : '.$data->mailCount.' times <br>';
                                echo '<i class="fa fa-phone-square"></i> Messaged : '.$data->smsCount.' times <br>';

                            }
                        ),
                        array(
                            'name' => 'created_by',
                            'visible'=>FilingGenerics::getuserRole(Yii::app()->user->id)==LoginForm::$allowedRole?true:false,
                            'filter'=> CHtml::activeDropDownList($model, 'created_by',FilingGenerics::getUserList(),
                                array('empty' => 'All Users')),
                        ),
                        /*
                        'mobile',
                        'city',
                        'mobile',status
                        'state',
                        'company',
                        'fax',
                        'zip',
                        'arrdata',
                        'totpayment',
                        'creationdate',
                        'last_update',
                        'created_by',
                        */
                        array(
                            'class' => 'CButtonColumn',
                            'template' => '{view} {update} {history}',
                            'buttons' => array(
                                'update' => array
                                (
                                    'label' => 'Edit',
                                    //'url'=>'Yii::app()->createUrl("users/email", array("id"=>$data->id))',
                                ),

                                'history' => array
                                (
                                    'label' => '<i class="fa fa-calendar"></i> ','options'=>array('title'=>'Quote History'),
                                    'url' => 'Yii::app()->createUrl("quoteForm/history", array("id"=>$data->id))',
                                ),
                            ),
                        ),
                    ),
                )); ?>
                <span>Select : <input type="checkbox" id="allF" style="margin-right:10px;" onclick="checkAllF();"><span onclick="selectAllF();">All</span> / <span
                            onclick="unSelectAllF();">None</span> </span>
                <select name="followupAction" id="followupAction" style="margin-left:20px;">
                    <option value="email"> Email Now</option>
                    <option value="sms"> SMS Now</option>
                    <option value="both"> Email and SMS Now</option>
                </select>
                <a id="followUpBtn" onclick="onFollowup();" class="btn btn-info"
                   style="><i
                                class="fa fa-hand-paper"></i> Take Action</a>
                <span style="float: right;margin-right:30px;"> Select Item Count :  <select name="pagen" id="pagen" style="">
                     <option value="50">50</option>
                    <option value="100">100</option>
                    <option value="100">150</option>
                    <option value="250">200</option>
                    <option value="500">500</option>
                    <option value="500">1000</option>
                </select> </span>
            </div>
            <div id="menu1" class="tab-pane fade">
                <?php $this->widget('zii.widgets.grid.CGridView', array(
                    'id' => 'dot-tracker-quote-grid-quote',

                    'dataProvider' => $model->search(DotTrackerQuote::$enumStatus['quote']),
                    'filter' => $model,
                    'columns' => array(
                        array(
                            'class' => 'CCheckBoxColumn',
                            'selectableRows' => 2,
                            'value' => 'FilingGenerics::encryptKey($data->id)',
                            'htmlOptions' => array('width' => '3%'),
                        ),
                        array(
                            'name' => 'id',
                            'value' => function ($data) {
                                echo FilingGenerics::showQuoteId($data->id);
                            },
                            'filter'=>'',
                            'htmlOptions' => array('width' => '10%'),
                        ),

                        array(
                            'name' => 'creationdate','filter'=>'',
                            'value'=>function($data){
                                echo FilingGenerics::showDate($data->creationdate);
                            },

                        ),

                        array(
                            'name' => 'fname',
                            'header' => 'Customer Name','filter'=>'',
                            'value' => function ($data) {
                                $email = '<span style="color: #d54141;">No Email</span>';
                                if ($data->email != '') {
                                    $email = '<span>' . $data->email . '</span>';
                                }
                                $mobile = '<span style="color: #d54141;">No Cell Number</span>';
                                if ($data->phone != '') {
                                    $mobile = '<span>' . FilingGenerics::showPhone($data->phone) . '</span>';
                                }
                                echo $data->fname . ' ' . $data->lname . '<br><br>' . $email . '<br>' . $mobile;
                            },
                            'htmlOptions' => array('style' => 'text-align:center')

                        ),
                        array(
                            'name' => 'totpayment','filter'=>'',
                            'value' => function ($data) {
                                echo FilingGenerics::showAmt($data->totpayment);
                            }
                        ),
                        array(
                            'name' => 'discounted_price','filter'=>'',
                            'value' => function ($data) {
                                echo FilingGenerics::showDAmt($data->discounted_price);
                            }
                        ),
                        array(
                            'name' => 'arrdata',
                            'filter'=>'',
                            'header' => 'Service Type',
                            'value' => function ($data) {
                                echo FilingGenerics::showServiceType($data->id);
                            },
                            'htmlOptions' => array('width' => '25%')

                        ),
                        array(
                            'name' => 'status',
                            'filter'=>'',
                            'value' => function ($data) {
                                echo DotTrackerQuote::$arrStatus[$data->status];
                            }
                        ),
                        array(
                            'name' => 'created_by',
                            'visible'=>FilingGenerics::getuserRole(Yii::app()->user->id)==LoginForm::$allowedRole?true:false,
                            'filter'=> CHtml::activeDropDownList($model, 'created_by',FilingGenerics::getUserList(),
                                array('empty' => 'All Users')),

                        ),
                        /*
                        'mobile',
                        'city',
                        'mobile',
                        'state',
                        'company',
                        'fax',
                        'zip',
                        'arrdata',
                        'totpayment',
                        'creationdate',
                        'last_update',
                        'created_by',
                        */
                        array(
                            'class' => 'CButtonColumn',
                            'template' => '{view} {update} {history}',
                            'buttons'=>array(
                                'update' => array
                                (
                                    'label'=>'Edit',
                                    //'url'=>'Yii::app()->createUrl("users/email", array("id"=>$data->id))',

                                ),
                                'history' => array
                                (
                                    'label'=>'<i class="fa fa-calendar"></i> ','options'=>array('title'=>'Quote History'),
                                    'url'=>'Yii::app()->createUrl("quoteForm/history", array("id"=>$data->id))',

                                ),
                            ),
                        ),
                    ),
                )); ?>
                <span>Select : <input type="checkbox" id="allQ" style="margin-right:10px;" onclick="checkAllQ();"><span onclick="selectAllQ();">All</span> / <span
                            onclick="unSelectAllQ();">None</span> </span>
                <span style="float: right;margin-right:30px;"> Select Item Count :  <select name="pagen" id="pagen" style="">
                    <option value="50">50</option>
                    <option value="100">100</option>
                    <option value="250">250</option>
                    <option value="500">500</option>
                </select> </span>
            </div>
            <div id="menu2" class="tab-pane fade">
                <?php $this->widget('zii.widgets.grid.CGridView', array(
                    'id' => 'dot-tracker-quote-grid-hold',
                    'dataProvider' => $model->search(DotTrackerQuote::$enumStatus['hold']),
                    'filter' => $model,
                    'columns' => array(
                        array(
                            'class' => 'CCheckBoxColumn',
                            'selectableRows' => 2,
                            'value' => 'FilingGenerics::encryptKey($data->id)',
                            'htmlOptions' => array('width' => '3%'),
                        ), array(
                            'name' => 'id','filter'=>'',
                            'value' => function ($data) {
                                echo FilingGenerics::showQuoteId($data->id);
                            },
                            'htmlOptions' => array('width' => '10%'),
                        ),

                        array(
                            'name' => 'creationdate','filter'=>'',
                            'value'=>function($data){
                                echo FilingGenerics::showDate($data->creationdate);
                            },

                        ),

                        array(
                            'name' => 'fname','filter'=>'',
                            'header' => 'Customer Name',
                            'value' => function ($data) {
                                $email = '<span style="color: #d54141;">No Email</span>';
                                if ($data->email != '') {
                                    $email = '<span>' . $data->email . '</span>';
                                }
                                $mobile = '<span style="color: #d54141;">No Cell Number</span>';
                                if ($data->phone != '') {
                                    $mobile = '<span>' . FilingGenerics::showPhone($data->phone) . '</span>';
                                }
                                echo $data->fname . ' ' . $data->lname . '<br><br>' . $email . '<br>' . $mobile;
                            },
                            'htmlOptions' => array('style' => 'text-align:center')

                        ),
                        array(
                            'name' => 'totpayment','filter'=>'',
                            'value' => function ($data) {
                                echo FilingGenerics::showAmt($data->totpayment);
                            }
                        ),
                        array(
                            'name' => 'discounted_price','filter'=>'',
                            'value' => function ($data) {
                                echo FilingGenerics::showDAmt($data->discounted_price);
                            }
                        ),
                        array(
                            'name' => 'arrdata',
                            'filter'=>'',
                            'header' => 'Service Type',
                            'value' => function ($data) {
                                echo FilingGenerics::showServiceType($data->id);
                            },
                            'htmlOptions' => array('width' => '25%')

                        ),
                        array(
                            'name' => 'status',
                            'filter'=>'',
                            'value' => function ($data) {
                                echo DotTrackerQuote::$arrStatus[$data->status];
                            }
                        ),
                        array(
                            'name' => 'created_by',
                            'visible'=>FilingGenerics::getuserRole(Yii::app()->user->id)==LoginForm::$allowedRole?true:false,
                            'filter'=> CHtml::activeDropDownList($model, 'created_by',FilingGenerics::getUserList(),
                                array('empty' => 'All Users')),

                        ),
                        //'created_by',
                        /*
                        'mobile',
                        'city',
                        'mobile',
                        'state',
                        'company',
                        'fax',
                        'zip',
                        'arrdata',
                        'totpayment',
                        'creationdate',
                        'last_update',
                        'created_by',
                        */
                        array(
                            'class' => 'CButtonColumn',
                            'template' => '{view} {update} {history}',
                            'buttons'=>array(
                                'update' => array
                                (
                                    'label'=>'Edit',
                                    //'url'=>'Yii::app()->createUrl("users/email", array("id"=>$data->id))',

                                ),
                                'history' => array
                                (
                                    'label'=>'<i class="fa fa-calendar"></i> ','options'=>array('title'=>'Quote History'),
                                    'url'=>'Yii::app()->createUrl("quoteForm/history", array("id"=>$data->id))',

                                ),
                            ),

                        ),
                    ),
                )); ?>

                <span>Select : <input type="checkbox" id="allH" style="margin-right:10px;" onclick="checkAllH();"><span onclick="selectAllH();">All</span> / <span
                            onclick="unSelectAllH();">None</span> </span>
                <span style="float: right;margin-right:30px;"> Select Item Count :  <select name="pagen" id="pagen" style="">
                    <option value="50">50</option>
                    <option value="100">100</option>
                    <option value="250">250</option>
                    <option value="500">500</option>
                </select> </span>
            </div>
            <div id="menu3" class="tab-pane fade">
                <p style="margin:20px;">No Quotes Found.</p>
            </div>
            <div id="menu4" class="tab-pane fade">
                <?php $this->widget('zii.widgets.grid.CGridView', array(
                    'id' => 'dot-tracker-quote-grid-archive',
                   /* 'summaryText' => 'Displaying {start}-{end} of {count} result(s). ' .
                        CHtml::dropDownList('pageSize', $pageSize, Yii::app()->params['pageSizeOptions'], array('class' => 'change-pageSize')) .' rows per page',*/
                    'dataProvider' => $model->search(DotTrackerQuote::$enumStatus['archived']),
                    'filter' => $model,
                    'columns' => array(
                        array(
                            'class' => 'CCheckBoxColumn',
                            'selectableRows' => 2,
                            'value' => 'FilingGenerics::encryptKey($data->id)',
                            'htmlOptions' => array('width' => '3%'),
                        ),
                        array(
                            'name' => 'id','filter'=>'',
                            'value' => function ($data) {
                                echo FilingGenerics::showQuoteId($data->id);
                            },
                            'htmlOptions' => array('width' => '10%'),
                        ),

                        array(
                            'name' => 'creationdate','filter'=>'',
                            'value'=>function($data){
                                echo FilingGenerics::showDate($data->creationdate);
                            },

                        ),

                        array(
                            'name' => 'fname','filter'=>'',
                            'header' => 'Customer Name',
                            'value' => function ($data) {
                                $email = '<span style="color: #d54141;">No Email</span>';
                                if ($data->email != '') {
                                    $email = '<span>' . $data->email . '</span>';
                                }
                                $mobile = '<span style="color: #d54141;">No Cell Number</span>';
                                if ($data->phone != '') {
                                    $mobile = '<span>' . FilingGenerics::showPhone($data->phone) . '</span>';
                                }
                                echo $data->fname . ' ' . $data->lname . '<br><br>' . $email . '<br>' . $mobile;
                            },
                            'htmlOptions' => array('style' => 'text-align:center')
                        ),
                        array(
                            'name' => 'totpayment','filter'=>'',
                            'value' => function ($data) {
                                echo FilingGenerics::showAmt($data->totpayment);
                            }
                        ),
                        array(
                            'name' => 'discounted_price','filter'=>'',
                            'value' => function ($data) {
                                echo FilingGenerics::showDAmt($data->discounted_price);
                            }
                        ),
                        array(
                            'name' => 'arrdata',
                            'filter'=>'',
                            'header' => 'Service Type',
                            'value' => function ($data) {
                                echo FilingGenerics::showServiceType($data->id);
                            },
                            'htmlOptions' => array('width' => '25%')
                        ),
                        array(
                            'name' => 'status',
                            'filter'=>'',
                            'value' => function ($data) {
                                echo DotTrackerQuote::$arrStatus[$data->status];
                            }
                        ),
                        array(
                            'name' => 'created_by',
                            'visible' => FilingGenerics::getuserRole(Yii::app()->user->id)==LoginForm::$allowedRole ? true : false,
                            'filter' => CHtml::activeDropDownList($model, 'created_by', FilingGenerics::getUserList(),
                                array('empty' => 'All Users')),
                        ),
                        /*
                        'mobile',
                        'city',
                        'mobile',
                        'state',
                        'company',
                        'fax',
                        'zip',
                        'arrdata',
                        'totpayment',
                        'creationdate',
                        'last_update',
                        'created_by',
                        */
                        array(
                            'class' => 'CButtonColumn',
                            'template' => '{view} {update} {history}',
                            'buttons'=>array(
                                'update' => array
                                (
                                    'label'=>'Edit',
                                    //'url'=>'Yii::app()->createUrl("users/email", array("id"=>$data->id))',

                                ),
                                'history' => array
                                (
                                    'label'=>'<i class="fa fa-calendar"></i> ','options'=>array('title'=>'Quote History'),
                                    'url'=>'Yii::app()->createUrl("quoteForm/history", array("id"=>$data->id))',

                                ),

                            ),
                        ),
                    ),
                )); ?>
                <span>Select : <input type="checkbox" id="allA" style="margin-right:10px;" onclick="checkAllA();"><span onclick="selectAllA();">All</span> / <span
                            onclick="unSelectAllA();">None</span> </span>
               <span style="float: right;margin-right:30px;"> Select Item Count :  <select name="pagen" id="pagen" style="">
                    <option value="50">50</option>
                    <option value="100">100</option>
                    <option value="250">250</option>
                    <option value="500">500</option>
                </select> </span>
            </div>
        </div>

        <a id="archiveBtn" onclick="moveToArchive();" class="btn btn-info"
           style="margin: 10px;float: right;"><i
                    class="fa fa-archive" style=""></i> Move to Cancelled</a>

        <a id="holdBtn" onclick="moveTohold();" class="btn btn-info"
           style="margin:10px;float: right;"><i
                    class="fa fa-stop"></i> Move to Hold</a>



        <?php if (FilingGenerics::getuserRole(Yii::app()->user->id)==LoginForm::$allowedRole) { ?>
        <span  style="margin:10px;float: right;">
          <?php $models = DotTrackerUser::model()->findAll(array('order' => 'username DESC'));
                $list = CHtml::listData($models,'username', 'username');
          echo CHtml::dropDownList('username', '',$list,
              array('empty' => 'Select an user'));
                ?> <a id="userBtn" onclick="moveToUser();" class="btn btn-info"><i class="fa fa-user"></i> Transfer to User</a><span>
                <?php } ?>



    </div>


</div>


<!-- /.row -->
<hr>


<style>
    .nav-tabs > li > a {
        background-color: #f5f5f5;
    }


</style>

<script>
    $(document).ready(function() {
        $('a[href="#<?php echo isset($_GET['click']) ? $_GET['click'] : 'home'; ?>"]').trigger('click');

        $('#dot-tracker-quote-grid-followup td').on('dblclick',function()
        {
            console.log(this);
            var url=$(this).parent().find('.button-column .update').attr('href');
            if(typeof url !== 'undefined')
                window.location= url;
        });

        $('#dot-tracker-quote-grid-quote td').on('dblclick',function()
        {
            console.log(this);
            var url=$(this).parent().find('.button-column .update').attr('href');
            if(typeof url !== 'undefined')
                window.location= url;
        });

        $('#dot-tracker-quote-grid-hold td').on('dblclick',function()
        {
            console.log(this);
            var url=$(this).parent().find('.button-column .update').attr('href');
            if(typeof url !== 'undefined')
                window.location= url;
        });

        $('#dot-tracker-quote-grid-archive td').on('dblclick',function()
        {
            console.log(this);
            var url=$(this).parent().find('.button-column .update').attr('href');
            if(typeof url !== 'undefined')
                window.location= url;
        });
    });

    // $( '#container input[type="checkbox"]' ).prop('checked', this.checked)

    function checkAllF() {
        if($('#allF').is(":checked")) {
            selectAllF();
        } else {
            unSelectAllF();
        }
    }

    function checkAllQ() {
        if($('#allQ').is(":checked")) {
            selectAllQ();
        } else {
            unSelectAllQ();
        }
    }

    function checkAllH() {
        if($('#allH').is(":checked")) {
            selectAllH();
        } else {
            unSelectAllH();
        }
    }

    function checkAllA() {
        if($('#allA').is(":checked")) {
            selectAllA();
        } else {
            unSelectAllA();
        }
    }

    function selectAllF() {
        $('#dot-tracker-quote-grid-followup').find('input[type="checkbox"]').prop('checked', 'checked');
        $('#dot-tracker-quote-grid-quote').find('input[type="checkbox"]').removeAttr('checked');
        $('#dot-tracker-quote-grid-hold').find('input[type="checkbox"]').removeAttr('checked');
        $('#dot-tracker-quote-grid-archive').find('input[type="checkbox"]').removeAttr('checked');
    }
    function selectAllQ() {
        $('#dot-tracker-quote-grid-quote').find('input[type="checkbox"]').prop('checked', 'checked');
        $('#dot-tracker-quote-grid-followup').find('input[type="checkbox"]').removeAttr('checked');
        $('#dot-tracker-quote-grid-hold').find('input[type="checkbox"]').removeAttr('checked');
        $('#dot-tracker-quote-grid-archive').find('input[type="checkbox"]').removeAttr('checked');
    }
    function selectAllH() {
        $('#dot-tracker-quote-grid-hold').find('input[type="checkbox"]').prop('checked', 'checked');
        $('#dot-tracker-quote-grid-followup').find('input[type="checkbox"]').removeAttr('checked');
        $('#dot-tracker-quote-grid-quote').find('input[type="checkbox"]').removeAttr('checked');
        $('#dot-tracker-quote-grid-archive').find('input[type="checkbox"]').removeAttr('checked');
    }
    function selectAllA() {
        $('#dot-tracker-quote-grid-archive').find('input[type="checkbox"]').prop('checked', 'checked');
        $('#dot-tracker-quote-grid-followup').find('input[type="checkbox"]').removeAttr('checked');
        $('#dot-tracker-quote-grid-quote').find('input[type="checkbox"]').removeAttr('checked');
        $('#dot-tracker-quote-grid-hold').find('input[type="checkbox"]').removeAttr('checked');
    }

    function moveTohold() {
        $('#holdBtn').html('Processing');
        $('#processingReq').show();
        $('input[type=checkbox]:checked').each(function (index, val) {
            console.log(val);
            console.log($(val).attr('value'));
            var idVal = $(val).attr('value');
            var url = '<?php echo Yii::app()->createUrl('quoteForm/changeStatus', array('id' => '__id__', 'status' => FilingGenerics::encryptKey(DotTrackerQuote::$enumStatus['hold'])));?>';
            url = url.replace('__id__', idVal);
            $.ajax({
                type: "POST",
                url: url,
                data: {
                    'passKey': '2424324242dsfsdfs',
                },
                success: function (data) {
                    // alert(data);
                }
            });
            sleep(300);
        });
        window.location.href = '<?php echo Yii::app()->createurl('quoteForm/admin', array('click' => 'menu2'))?>';
    }

    function moveToUser() {
        $('#userBtn').html('Processing');
        $('#processingReq').show();
        var username=$('#username').val();
        $('input[type=checkbox]:checked').each(function (index, val) {
            console.log(val);
            console.log($(val).attr('value'));
            var idVal = $(val).attr('value');
            var url = '<?php echo Yii::app()->createUrl('quoteForm/changeUser', array('id' => '__id__', 'username' => '__username__'));?>';
            url = url.replace('__id__', idVal);
            url = url.replace('__username__', username);
            $.ajax({
                type: "POST",
                url: url,
                data: {
                    'passKey': '2424324242dsfsdfs',
                },
                success: function (data) {
                    // alert(data);
                }
            });
            sleep(300);
        });
        var path = '<?php echo Yii::app()->createurl('quoteForm/admin',array('click'=>'__clicked__'))?>';
        path=path.replace('__clicked__',$('a[data-toggle="tab"][aria-expanded="true"]').attr('href'));
        path=path.replace('#','');
        window.location.href = path;
    }

    function onFollowup() {
            $('#followUpBtn').html('Processing');
        $('#processingReq').show();
        var followupAction=$('#followupAction').val();
        $('input[type=checkbox]:checked').each(function (index, val) {
            console.log(val);
            console.log($(val).attr('value'));
            var idVal = $(val).attr('value');
            var url = '<?php echo Yii::app()->createUrl('quoteForm/followup', array('id' => '__id__', 'actionF' => '__actionF__'));?>';
            url = url.replace('__id__', idVal);
            url = url.replace('__actionF__', $('#followupAction').val());
            $.ajax({
                type: "POST",
                url: url,
                data: {
                    'passKey': '2424324242dsfsdfs',
                },
                success: function (data) {
                    // alert(data);
                }
            });
            sleep(300);
        });
        var path = '<?php echo Yii::app()->createurl('quoteForm/admin',array('click'=>'__clicked__'))?>';
        path=path.replace('__clicked__',$('a[data-toggle="tab"][aria-expanded="true"]').attr('href'));
        path=path.replace('#','');
        window.location.href = path;
    }

    function moveToArchive() {
        $('#archiveBtn').html('Processing');
        $('#processingReq').show();
        $('input[type=checkbox]:checked').each(function (index, val) {
            console.log(val);
            console.log($(val).attr('value'));
            var idVal = $(val).attr('value');

            archiveProcess(idVal);
            sleep(300);

        });
        window.location.href = '<?php echo Yii::app()->createurl('quoteForm/admin', array('click' => 'menu4'))?>';
    }

    function archiveProcess(idVal) {
        var url = '<?php echo Yii::app()->createUrl('quoteForm/changeStatus', array('id' => '__id__', 'status' => FilingGenerics::encryptKey(DotTrackerQuote::$enumStatus['archived'])));?>';
        url = url.replace('__id__', idVal);
        $.ajax({
            type: "POST",
            url: url,
            data: {
                'passKey': '2424324242dsfsdfs',
            },
            success: function (data) {
                // alert(data);
                // $('#processingReq').fadeOut(500);
            }
        });
    }

    function sleep(milliseconds) {
        var start = new Date().getTime();
        for (var i = 0; i < 1e7; i++) {
            if ((new Date().getTime() - start) > milliseconds) {
                break;
            }
        }
    }

    function unSelectAllF() {
        $('#dot-tracker-quote-grid-followup').find('input[type="checkbox"]').removeAttr('checked');
    }
    function unSelectAllQ() {
        $('#dot-tracker-quote-grid-quote').find('input[type="checkbox"]').removeAttr('checked');
    }
    function unSelectAllH() {
        $('#dot-tracker-quote-grid-hold').find('input[type="checkbox"]').removeAttr('checked');
    }
    function unSelectAllA() {
        $('#dot-tracker-quote-grid-archive').find('input[type="checkbox"]').removeAttr('checked');
    }

    function searchText() {
        var s=$('#searchQ').val();

        var sb=$('#sBox').val();
        if(s=='phone') {
            console.log('in s');
            sb=sb.replace('(','');
            sb=sb.replace(')','');
            sb=sb.replace('-','');
            sb=sb.replace(' ','');
            sb=sb.trim();
            console.log(sb);
        }
        var ctab=$('.nav-tabs').find('li[class="active"] a').attr('href');
        ctab=ctab.replace('#','');
        var x='DotTrackerQuote['+s+']';

        var url='<?php echo Yii::app()->createUrl('quoteForm/index',array('__searchQ__'=>'__sbox__','click'=>'__click__')); ?>';
            url = url.replace('__searchQ__',x);
            url = url.replace('__sbox__',sb);
            url = url.replace('__click__',ctab);

        window.location.href = url;
    }

    function resetSearch() {
        var ctab=$('.nav-tabs').find('li[class="active"] a').attr('href');
        ctab=ctab.replace('#','');

        var url='<?php echo Yii::app()->createUrl('quoteForm/index',array('click'=>'__click__')); ?>';
        url = url.replace('__click__',ctab);

        window.location.href = url;
    }
</script>

<style>
    .summary
    {
        float:left !important;
    }
</style>
