<?php
/* @var $this BocFormController */
/* @var $model DotTrackerBoc */

$this->breadcrumbs=array(
	'BOC-3 Forms'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);


?>

<h1>Update BOC-3 Form #<?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>