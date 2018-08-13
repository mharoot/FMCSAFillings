<?php
/* @var $this AutomatedTemplateController */
/* @var $model DotTrackerEmailtemp */

$this->breadcrumbs=array(
	'Automated Email Templates'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update Automated Email Templates',
);


?>

<h1>Automated Email Template ( <?php echo $model->type; ?> )</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>