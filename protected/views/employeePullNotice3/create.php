<?php
/* @var $this EmployeePullNotice3Controller */
/* @var $model DotTrackerEpn3 */

$this->breadcrumbs=array(
	'Agreements'=>array('index'),
	'Create',
);

/*$this->menu=array(
	array('label'=>'List DotTrackerEpn3', 'url'=>array('index')),
	array('label'=>'Manage DotTrackerEpn3', 'url'=>array('admin')),
);*/
?>

<h1>Create Agreement</h1><br>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>