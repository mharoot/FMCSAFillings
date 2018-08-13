<?php
/* @var $this QuoteFormController */
/* @var $model DotTrackerQuote */

$this->breadcrumbs=array(
	'Quotes'=>array('index'),
	FilingGenerics::showQuoteId($model->id),
);

/*$this->menu=array(
	array('label'=>'List DotTrackerQuote', 'url'=>array('index')),
	array('label'=>'Create DotTrackerQuote', 'url'=>array('create')),
	array('label'=>'Update DotTrackerQuote', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DotTrackerQuote', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DotTrackerQuote', 'url'=>array('admin')),
);*/
?>

<h1>View Quote #<?php echo FilingGenerics::showQuoteId($model->id); ?></h1>


<div class="row">
    <div class="col-lg-12 alert alert-success" id="succmsg" style="display: none;"></div>
    <div class="col-lg-12">
        <span class="statusCls" id="qStatus1" style="float:left"> <h3>Quote Status :
        <b style="margin-left: 10px;"><?php
            echo DotTrackerQuote::$arrStatus[$model->status];

            ?></b></h3></span>
        <!--<a id="hisBtn" href="<?php /*echo Yii::app()->createUrl('quoteForm/history',array('id'=>$model->id));*/?>" class="btn btn-warning"style="margin: 10px;float: right;"><i class="fa fa-calendar" style=""></i> Quote History</a>
        --><?php if(!$model->isNewRecord) { ?>

                <a id="archiveBtn" onclick="moveToArchive();" class="btn btn-info"
                   style="margin: 10px;float: right;"><i
                            class="fa fa-archive" style=""></i> Move to Cancelled</a>


                <a id="holdBtn" onclick="moveTohold();" class="btn btn-info"
                   style="margin:10px;float: right;"><i
                            class="fa fa-stop"></i> Move to Hold</a>


            <a id="holdBtn" onclick="moveToQuote();" class="btn btn-info"
               style="margin:10px;float: right;"><i
                        class="fa fa-dollar"></i> Move to Quote</a>


        <?php } ?>
        <a href="<?php
        $order=DotTrackerOrder::model()->findByAttributes(array('quote_id'=>$model->id));

        echo Yii::app()->createUrl('orderForm/update',array('id'=>$order->id)); ?>" class="btn btn-info" style="margin:10px;float: right;"><i
                    class="fa fa-retweet"></i> Convert to Order</a></div>



<div class="col-lg-6">
    <h3>Quote Information</h3>
    <?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
        array(
            'name'=>'id',
            'value'=>FilingGenerics::showQuoteId($model->id),

        ),
        array(
            'name'=>'shipper',
            'value'=>(isset($model->shipper) && !empty($model->shipper))?$model->shipper:'--',

        ),

        'fname',
        'lname',
        array(
            'name'=>'email',
            'value'=>(isset($model->email) && !empty($model->email))?$model->email:'--',

        ),
        array(
            'name'=>'address',
            'value'=>(isset($model->address) && !empty($model->address))?$model->address:'--',

        ),
        array(
            'name'=>'phone',
            'value'=>(isset($model->phone) && !empty($model->phone))?$model->phone:'--',

        ),
        array(
            'name'=>'city',
            'value'=>(isset($model->city) && !empty($model->city))?$model->city:'--',

        ),
        array(
            'name'=>'mobile',
            'value'=>(isset($model->mobile) && !empty($model->mobile))?$model->mobile:'--',

        ),
        array(
            'name'=>'state',
            'value'=>(isset($model->state) && !empty($model->state))?$model->state:'--',

        ),

        array(
            'name'=>'zip',
            'value'=>(isset($model->zip) && !empty($model->zip))?$model->zip:'--',

        ),
	),
)); ?>

    <div class="col-lg-6"><h3>Follow Up Details</h3>
    <?php
    echo '<i class="fa fa-envelope" style="margin-left: 10px;"></i> Mailed : '.$model->mailCount.' times <br>';
    echo '<i class="fa fa-phone-square"  style="margin-left: 10px;"></i> Messaged : '.$model->smsCount.' times <br>';

    ?>
    </div>


    <div class="col-lg-6" id="qStatus"><h3>Quote Status</h3>
        <b style="color: #5bc0de;margin-left: 10px;"><?php
        echo DotTrackerQuote::$arrStatus[$model->status];

        ?></b>
    </div>

</div>


    <div class="col-lg-6"><h3>Payment Information</h3><?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=>array(

        array(
            'name'=>'created_by',
            'value'=>FilingGenerics::getUserName($model->created_by).' ( '.$model->created_by.' )'
        ),



        array(
            'name'=>'totpayment',
            'value'=>FilingGenerics::showAmt($model->totpayment)
        ),
        'discounted_price',
        array(
            'name'=>'creationdate',
            'value'=>FilingGenerics::showDate($model->creationdate)
        ),

    ),
));
    ?>

        <br>
        <h3>Service Types</h3>
<div style="border: 1px solid #32ccf3;padding: 10px;border-radius: 5px;min-height: 182px;"><?php echo FilingGenerics::showServiceType($model->id); ?></div>

</div>

</div>
<div class="panel panel-default" style="margin-top:30px;">
    <div class="panel-heading">NOTES</div>
    <div class="panel-body">
        <div class="form-group">
            <label for="nameon_card">Enter Notes from Customer </label>
            <br />
            <div class="alert alert-success" id="successservicety33" style="display: none"></div>
            <div class="alert alert-danger" id="errorservicety33" style="display: none"></div>
            <div class="row">
                <input class="form-control" id="quote_id" type="hidden" value="<?php echo $model->id; ?>">

                    <div class="col-lg-11"><div class="form-group"> <input class="form-control" name="DotTrackerQuote[shipper_notes]" id="DotTrackerQuote_shipper_notes" type="text"></div></div>
                    <div class="col-lg-1"><div class="form-group"> <input type="button" class="form-control btn btn-info" value="Add" onclick="addNote();"></div></div>

            </div>

            <div id="noteArea">
                <?php
                    $criteria = new CDbCriteria();
                    $criteria->addCondition("quote_id = ".$model->id);

                    $noteModels=DotTrackerNotes::model()->findAll($criteria);

                    /*cho '<pre>';print_r($noteModels->getAttributes); die;

                    $noteAll=$noteModels->attributes;*/
                    echo '<table id="noteTable " class="table table-striped" style="margin-top:30px;">';

                    echo '<tr>
                            <td width="10%">Date</td>
                            <td width="75%">Notes</td>
                            <td width="15%">Added By</td>
                        </tr>';
                    foreach ($noteModels as $notes)
                    {
                        $noteAttr=$notes->attributes;

                        echo '<tr>
                            <td>'.FilingGenerics::showDate($noteAttr['date']).'</td>
                            <td>'.$noteAttr['note'].'</td>
                            <td>'.FilingGenerics::getUserName($noteAttr['created_by']).'<br>( '.$noteAttr['created_by'].' )  </td>
                        </tr>';


                    }
                    echo '</table>';

//

                 ?>
            </div>

        </div>
    </div>
</div>

<br><Br>

<script>

    function addNote()
    {
        var arrData={quote_id:$('#quote_id').val(), shipper_notes:$('#DotTrackerQuote_shipper_notes').val()};

        var ajaxUrl='<?php echo Yii::app()->createUrl('notes/updateAjax');?>';
        $.ajax({
            url: ajaxUrl,
            type: 'POST',
            data: arrData,
            dataType: "json",
            success: function(html){
                console.log(html);
                if(html.success==true)
                {
                    $('#noteArea').find('table tbody').append(html.html);
                    $('#DotTrackerQuote_shipper_notes').val('');
                    //alert('savesccc');
                    $('#servicety33').val('1');
                    $("#successservicety33").html(html.msg);
                    $("#successservicety33").fadeIn();
                    setTimeout(function () {
                        $("#successservicety33").fadeOut();

                    },2000);
                    $('#servicety33S').fadeIn();
                    $('#DotTrackerMcReattachment_id').val(html.id);


                    var formDetails=JSON.parse($('#DotTrackerOrder_form_details').val());
                    console.log(formDetails);
                    formDetails.servicety33=html.id;
                    console.log(formDetails);
                    $('#DotTrackerOrder_form_details').val(JSON.stringify(formDetails));



                }
                else{
                    // alert('error');
                    $('#servicety33').val('0');
                    $("#errorservicety33").html(html.msg);
                    $("#errorservicety33").fadeIn();
                    setTimeout(function () {
                        $("#errorservicety33").fadeOut();

                    },2000);
                    $('#servicety33S').fadeOut();
                    $('#DotTrackerMcReattachment_id').val(html.id);


                }

            }
        });

    }


    function moveToArchive() {
        var idVal='<?php echo FilingGenerics::encryptKey($model->id); ?>';
        var url = '<?php echo Yii::app()->createUrl('quoteForm/changeStatus', array('id' => '__id__', 'status' => FilingGenerics::encryptKey(DotTrackerQuote::$enumStatus['archived'])));?>';
        url = url.replace('__id__', idVal);
        $.ajax({
            type: "POST",
            url: url,
            data: {
                'passKey': '2424324242dsfsdfs',
            },
            success: function (data) {

                $("#succmsg").html('Status has been changed to "Cancelled" successfully. ');
                $("#succmsg").fadeIn();
                $('#qStatus b').html('Cancelled');
                $('#qStatus1 b').html('Cancelled');
                setTimeout(function () {
                    $("#succmsg").fadeOut();

                },2000);



            }
        });

    }


    function moveTohold() {

        var idVal='<?php echo FilingGenerics::encryptKey($model->id); ?>';
        var url = '<?php echo Yii::app()->createUrl('quoteForm/changeStatus', array('id' => '__id__', 'status' => FilingGenerics::encryptKey(DotTrackerQuote::$enumStatus['hold'])));?>';
        url = url.replace('__id__', idVal);
        $.ajax({
            type: "POST",
            url: url,
            data: {
                'passKey': '2424324242dsfsdfs',
            },
            success: function (data) {

                $("#succmsg").html('Status has been changed to "Hold" successfully. ');
                $("#succmsg").fadeIn();
                $('#qStatus b').html('On Hold');
                $('#qStatus1 b').html('On Hold');
                setTimeout(function () {
                    $("#succmsg").fadeOut();

                },2000);



            }
        });
    }

    function moveToQuote() {

        var idVal='<?php echo FilingGenerics::encryptKey($model->id); ?>';
        var url = '<?php echo Yii::app()->createUrl('quoteForm/changeStatus', array('id' => '__id__', 'status' => FilingGenerics::encryptKey(DotTrackerQuote::$enumStatus['quote'])));?>';
        url = url.replace('__id__', idVal);
        $.ajax({
            type: "POST",
            url: url,
            data: {
                'passKey': '2424324242dsfsdfs',
            },
            success: function (data) {

                $("#succmsg").html('Status has been changed to "Quote" successfully. ');
                $("#succmsg").fadeIn();
                $('#qStatus b').html('Quoted');
                $('#qStatus1 b').html('Quoted');
                setTimeout(function () {
                    $("#succmsg").fadeOut();

                },2000);



            }
        });
    }


</script>


<style>
    .panel-default > .panel-heading {
        background: #E5F1F4;

    }
    .statusCls
    {
        float: left;
        background: #5bc0de;
        border-radius: 5px;
        border: 2px solid !important;
        padding-bottom: 10px;
        padding-right: 10px;
        padding-left: 10px;
        color: #fff;
    }
</style>
