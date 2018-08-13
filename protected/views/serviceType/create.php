<?php
/* @var $this ServiceTypeController */
/* @var $model DotTrackerServicetype */

$this->breadcrumbs=array(
	'Service Types'=>array('index'),
	'Create',
);

/*$this->menu=array(
	array('label'=>'List DotTrackerServicetype', 'url'=>array('index')),
	array('label'=>'Manage DotTrackerServicetype', 'url'=>array('admin')),
);*/

$menuArr=array(

    array('label'=>'Manage Service Types',
        'url'=>'serviceType/admin' ,
        'icon'=>'fa fa-cog')
);
?>

<h1>Create Service Type</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'menuArr'=>$menuArr)); ?>