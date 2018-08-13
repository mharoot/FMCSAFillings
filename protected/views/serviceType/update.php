<?php
/* @var $this ServiceTypeController */
/* @var $model DotTrackerServicetype */

$this->breadcrumbs=array(
	'Service Types'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

/*$this->menu=array(
	array('label'=>'List DotTrackerServicetype', 'url'=>array('index')),
	array('label'=>'Create DotTrackerServicetype', 'url'=>array('create')),
	array('label'=>'View DotTrackerServicetype', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DotTrackerServicetype', 'url'=>array('admin')),
);*/
$menuArr=array(

    array('label'=>'Manage Service Types',
        'url'=>'serviceType/admin' ,
        'icon'=>'fa fa-cog')
);

?>

<h1>Update Service Types ( <?php echo $model->title; ?> )   </h1>

<?php $this->renderPartial('_form', array('model'=>$model,'menuArr'=>$menuArr)); ?>