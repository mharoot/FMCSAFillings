<?php
/* @var $this DotTrackerCorporationformController */
/* @var $model DotTrackerCorporationform */

$this->breadcrumbs=array(
	'Corporation Filings'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

?>

<h1>Update Corporation Filing <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>