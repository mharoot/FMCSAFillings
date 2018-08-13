<?php
/* @var $this EmployerPullNoticeController */
/* @var $model DotTrackerEpn1 */

$this->breadcrumbs=array(
    'Corporation Filing'=>array('index'),
    $model->id,
);

/*$this->menu=array(
	array('label'=>'List DotTrackerEpn1', 'url'=>array('index')),
	array('label'=>'Create DotTrackerEpn1', 'url'=>array('create')),
	array('label'=>'Update DotTrackerEpn1', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DotTrackerEpn1', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DotTrackerEpn1', 'url'=>array('admin')),
);*/

/*$menuArr=array(

    array('label'=>'Manage EPN Form',
        'url'=>'employerPullNotice/admin' ,
        'icon'=>'fa fa-cog'),

    array('label'=>'Update EPN Form',
        'url'=>'employerPullNotice/update&id='.$model->id ,
        'icon'=>'fa fa-pencil'),



);*/
?>


<h1 class="no-print">Authorize Corporation Filing #<?php echo $model->id; ?></h1>
<br class="no-print"><br class="no-print">
<div class="row" style="padding-bottom: 50px; ">
    <div class="col-md-12 ">
        <div class="row">
            <a id="scrollBtn" style="float: right; "><i class="scrollBut fa fa-2x fa-angle-down"></i> </a>
        </div>
    </div>
    <div class="col-lg-12" >
        <img id="formImg" class="img-responsive img" src="http://fmcsafiling.com/corporation-<?php echo $model->id; ?>.jpg" style="border: 1px solid #000000 ;">
    </div>
    <div class="col-lg-12" style="margin-top:20px;">
        <div class="panel panel-default" id="autho">
            <div class="panel-heading" style="font-weight: bold">AUTHORIZE FORM</div>
            <div id="errorMsg" style="display: none"></div>
            <div class="panel-body">
                <fieldset>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div id="signBoard"></div>
                                <p style="max-width: 300px; word-break: break-word; text-align: center">Sign inside the above box and click on "Submit Form" to update your signature.</p>
                                <div onclick="clearCanvas();" style="max-width: 300px;text-align: center;cursor: pointer;text-decoration: underline;">Clear</div>

                                <br><br>
                                <input class="btn btn-success " type="button" value="Submit Form" onclick="onSaveclick();" style="float: right;">
                            </div>
                        </div>



                    </div>

                    </fieldset>
            </div>
        </div>
    </div>


</div>

<div id="myModal" class="modal fade" role="dialog" style="margin-top: 100px;">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">

            <div class="modal-body">
                <p style="text-align:center;font-size: large; color:green;"><i class="fa fa-check"></i> Corporation Filing has been submitted successfully.</p>
            </div>

        </div>

    </div>
</div>


<script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/simple-undo/lib/simple-undo.js"></script>

<!-- in a production environment, just include the minified script. It contains the board and the default controls (size, nav, colors, download): -->
<!--<script src="../dist/drawingboard.min.js"></script>-->

<script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/drawingboard.js/js/utils.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/drawingboard.js/js/board.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/drawingboard.js/js/controls/control.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/drawingboard.js/js/controls/color.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/drawingboard.js/js/controls/drawingmode.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/drawingboard.js/js/controls/navigation.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/drawingboard.js/js/controls/size.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/bower_components/drawingboard.js/js/controls/download.js"></script>

<style>
    @media print {
        .no-print {
            display:none;
        }.breadcrumbs {
             display:none;
         }footer {
              display:none;
          }
    }

    #signBoard {
        width: 300px;
        height: 46px;
        border:none;
    }

    #errorMsg
    {
        color: red;
        padding: 18px;
        background: rgba(255, 0, 0, 0.12);
        margin: 20px;
        border-radius: 10px;
        border: 1px solid;
    }

    .scrollBut
    {
        background: #8ac3de;
        color: #fff;
        padding: 8px 11px;
        width: 40px;

        border-radius: 100%;
        height: 40px;
        cursor: pointer;
        right:7px;
    }
</style>

<script type="application/javascript">
    function onSaveclick(){
        var successF=true;
        var failM='';



        html2canvas($("#signBoard"), {
            onrendered: function(canvas) {
                var myImage = canvas.toDataURL("image/png");
                var myImage = myImage.replace(/^data:image\/(png|jpg);base64,/, "");
                //alert(myImage.length);
                if(myImage.length <= 1144)
                {
                    successF=false;
                    failM= failM + '<li>Please sign the Authorization Form.</li>';
                }


                if(!successF)
                {
                    $('#errorMsg').show();
                    $('#errorMsg').html(failM);

                    $("html, body").animate({ scrollTop: ($('#autho').offset().top-20) }, 1000);
                    // $(window).scrollTop($('#autho').offset().top)
                    return false;
                }
                else{
                    $('#errorMsg').hide();
                }

                var sendUrl= '<?php echo $this->createUrl('/dotTrackerCorporationform/saveScr',array('id'=>Yii::app()->request->getParam('id'))); ?>';
                $.ajax({
                    type:'POST',
                    url: sendUrl,
                    data:{'imgData': myImage},
                    dataType: 'JSON',
                    success:function(jsonResp) {
                        console.log(jsonResp);
                        $('#myModal').modal('show');
                        setTimeout(function(){
                            $('#myModal').modal('hide');
                            window.close();
                        },2000);
                    },
                    error:function(err)
                    {
                        console.log('error in updating data');
                        $('#myModal').modal('show');
                        setTimeout(function(){
                            $('#myModal').modal('hide');
                            //window.close();
                        },2000);
                    }

                });

            }
        });
    }

    function clearCanvas() {
        $('#signBoard').html('');
        var simpleBoard = new DrawingBoard.Board('signBoard', {
            controls: false,
            webStorage: false,
            size: 5,

        });
    }
    $(document).ready(function(){
        $('#scrollBtn').on('click',function(){
            $("html, body").animate({ scrollTop: 3000 }, 2000);
        });


        var simpleBoard = new DrawingBoard.Board('signBoard', {
            controls: false,
            webStorage: false,
            size: 5,

        });










    });


</script>