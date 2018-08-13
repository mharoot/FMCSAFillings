<?php
/* @var $this EmployeePullNotice2Controller */
/* @var $model DotTrackerEpn2 */

$this->breadcrumbs=array(
	'EPN'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

/*$this->menu=array(
	array('label'=>'List DotTrackerEpn2', 'url'=>array('index')),
	array('label'=>'Create DotTrackerEpn2', 'url'=>array('create')),
	array('label'=>'View DotTrackerEpn2', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DotTrackerEpn2', 'url'=>array('admin')),
);*/
?>

<br>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>