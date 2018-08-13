<?php
/* @var $this OrderFormController */
/* @var $model DotTrackerOrder */

$this->breadcrumbs=array(
	'Dot Tracker Orders'=>array('index'),
    FilingGenerics::showQuoteId($model->quote_id)=>array('view','id'=>$model->id),
	'Update',
);

/*$this->menu=array(
	array('label'=>'List DotTrackerOrder', 'url'=>array('index')),
	array('label'=>'Create DotTrackerOrder', 'url'=>array('create')),
	array('label'=>'View DotTrackerOrder', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DotTrackerOrder', 'url'=>array('admin')),
);*/
?>

<h1>Convert to Order </h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>