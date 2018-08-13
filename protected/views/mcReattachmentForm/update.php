<?php
/* @var $this McReattachmentFormController */
/* @var $model DotTrackerMcReattachment */

$this->breadcrumbs=array(
	'Dot Tracker Mc Reattachments'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DotTrackerMcReattachment', 'url'=>array('index')),
	array('label'=>'Create DotTrackerMcReattachment', 'url'=>array('create')),
	array('label'=>'View DotTrackerMcReattachment', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DotTrackerMcReattachment', 'url'=>array('admin')),
);
?>

<h1>Update DotTrackerMcReattachment <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>