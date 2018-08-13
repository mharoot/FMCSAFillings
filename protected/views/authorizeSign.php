<?php
/* @var $this EmployerPullNoticeController */
/* @var $model DotTrackerEpn1 */

$this->breadcrumbs=array(
    'Dot Tracker Epn1s'=>array('index'),
    FilingGenerics::showEpnId($model->id),
);

/*$this->menu=array(
	array('label'=>'List DotTrackerEpn1', 'url'=>array('index')),
	array('label'=>'Create DotTrackerEpn1', 'url'=>array('create')),
	array('label'=>'Update DotTrackerEpn1', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DotTrackerEpn1', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DotTrackerEpn1', 'url'=>array('admin')),
);*/

$menuArr=array(

    array('label'=>'Manage EPN Form',
        'url'=>'employerPullNotice/admin' ,
        'icon'=>'fa fa-cog'),

    array('label'=>'Update EPN Form',
        'url'=>'employerPullNotice/update&id='.$model->id ,
        'icon'=>'fa fa-pencil'),



);
?>


<h1 class="no-print">Authorize Employee Pull Notice Program #<?php echo FilingGenerics::showEpnId($model->id); ?></h1>
<br class="no-print"><br class="no-print">
<div class="row" style="padding-bottom: 50px;">
    <div class="col-lg-12">
        <img id="formImg" class="img-responsive img" src="http://fmcsafiling.com/epn-<?php echo $model->id; ?>.jpg" style="border: 1px solid #000000 ;">
    </div>


</div>




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
</style>