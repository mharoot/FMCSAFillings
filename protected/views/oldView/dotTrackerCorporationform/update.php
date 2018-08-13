<?php
/* @var $this DotTrackerCorporationformController */
/* @var $model DotTrackerCorporationform */

$this->breadcrumbs=array(
	'Corporation Forms'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

?>

<h1>Update Corporation Form <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>