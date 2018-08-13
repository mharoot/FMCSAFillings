<?php
/* @var $this EmployerPullNoticeController */
/* @var $model DotTrackerEpn1 */

$this->breadcrumbs=array(
	'Employer Pull Notice'=>array('index'),
	'Create',
);

/*$this->menu=array(
	array('label'=>'List DotTrackerEpn1', 'url'=>array('index')),
	array('label'=>'Manage DotTrackerEpn1', 'url'=>array('admin')),
);*/
?>

<h1>Create Employer Pull Notice</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>