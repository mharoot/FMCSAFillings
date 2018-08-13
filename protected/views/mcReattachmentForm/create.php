<?php
/* @var $this McReattachmentFormController */
/* @var $model DotTrackerMcReattachment */

$this->breadcrumbs=array(
	'Dot Tracker Mc Reattachments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DotTrackerMcReattachment', 'url'=>array('index')),
	array('label'=>'Manage DotTrackerMcReattachment', 'url'=>array('admin')),
);
?>

<h1>Create DotTrackerMcReattachment</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>