<?php
/* @var $this EmployeePullNotice3Controller */
/* @var $model DotTrackerEpn3 */

$this->breadcrumbs=array(
	'Agreements'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

/*$this->menu=array(
	array('label'=>'List DotTrackerEpn3', 'url'=>array('index')),
	array('label'=>'Create DotTrackerEpn3', 'url'=>array('create')),
	array('label'=>'View DotTrackerEpn3', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DotTrackerEpn3', 'url'=>array('admin')),
);*/
?>

<h1>Update Employee Pull Notice Agreements #<?php echo $model->id; ?></h1><br>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>