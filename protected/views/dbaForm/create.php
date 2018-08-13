<?php
/* @var $this DbaFormController */
/* @var $model DotTrackerDba */

$this->breadcrumbs=array(
	'Fictitious Business Name (DBAs'=>array('index'),
	'Create',
);

/*$this->menu=array(
	array('label'=>'List DotTrackerDba', 'url'=>array('index')),
	array('label'=>'Manage DotTrackerDba', 'url'=>array('admin')),
);*/
?>

<h1>Create Fictitious Business Name (DBA)</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>