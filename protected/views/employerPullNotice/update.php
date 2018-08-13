<?php
/* @var $this EmployerPullNoticeController */
/* @var $model DotTrackerEpn1 */

$this->breadcrumbs=array(
	'Employer Pull Notices'=>array('index'),
    FilingGenerics::showEpnId($model->id)=>array('view','id'=>$model->id),
	'Update',
);

/*$this->menu=array(
	array('label'=>'List DotTrackerEpn1', 'url'=>array('index')),
	array('label'=>'Create DotTrackerEpn1', 'url'=>array('create')),
	array('label'=>'View DotTrackerEpn1', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DotTrackerEpn1', 'url'=>array('admin')),
);*/
?>

<h1>Update Employer Pull Notice #<?php echo FilingGenerics::showEpnId($model->id); ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>