<?php
/* @var $this EmployerPullNoticeController */
/* @var $model DotTrackerEpn1 */

$this->breadcrumbs=array(
    'EPN'=>array('index'),
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
        'url'=>'employeePullNotice2/admin' ,
        'icon'=>'fa fa-cog'),

    array('label'=>'Update EPN Form',
        'url'=>'employeePullNotice2/update&id='.$model->id ,
        'icon'=>'fa fa-pencil'),

    array('label'=>'Authorize EPN Form',
        'url'=>'employeePullNotice2/authorizeSign&id='.$model->id ,
        'icon'=>'fa fa-pencil'),



);
?>


<h1 class="no-print">View Employee Pull Notice Program #<?php echo $model->id; ?></h1>
<br class="no-print"><br class="no-print">
<div class="row" style="padding-bottom: 50px;">
    <div class="col-lg-10">
        <img id="formImg" class="img-responsive img" src="http://fmcsafiling.com/epn2-<?php echo $model->id; ?>.jpg?id=<?php echo date('Ymdhis')?>" >
    </div>

    <div class="col-md-2 no-print">
        <div class="list-group">
            <a href="#" class="list-group-item active"><i class="fa fa-cogs" aria-hidden="true"></i> Actions</a>
            <?php
            foreach($menuArr as $menu)
            {
                // echo '<pre>'; print_r($menu);die;
                echo ' <a href="'.Yii::app()->createUrl($menu['url']).'" class="list-group-item"><i class="'.$menu['icon'].'" aria-hidden="true"></i> '.$menu['label'].'</a>';
            }
            echo ' <a class="list-group-item" onclick="window.print()"><i class="fa fa-print" aria-hidden="true"></i> Print Form </a>';
            echo '<a  download="epn-'.date('Ymdhis').'" class="list-group-item" href="#" target="_blank" onclick="this.href = $(\'#formImg\').attr(\'src\');" ><i class="fa fa-download" aria-hidden="true"></i> Download Form </a>
            ';

            ?>


        </div>
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