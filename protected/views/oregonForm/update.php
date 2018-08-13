<?php
/* @var $this OregonFormController */
/* @var $model DotTrackerOregaon */

$this->breadcrumbs=array(
	'Dot Tracker Oregaons'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

/*$this->menu=array(
	array('label'=>'List DotTrackerOregaon', 'url'=>array('index')),
	array('label'=>'Create DotTrackerOregaon', 'url'=>array('create')),
	array('label'=>'View DotTrackerOregaon', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DotTrackerOregaon', 'url'=>array('admin')),
);*/
?>

<h1>Update Oregon Temporary Permit Form #<?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>