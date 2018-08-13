<?php
/* @var $this DotTrackerMcDetachmentController */
/* @var $model DotTrackerMcDetachment */

$this->breadcrumbs=array(
	'Dot Tracker Mc Detachments'=>array('index'),
	'Create',
);

/*$this->menu=array(
	array('label'=>'List MC# Detachment ', 'url'=>array('index')),
	array('label'=>'Manage MC# Detachment ', 'url'=>array('admin')),
);*/
$menuArr=array(

    array('label'=>'Manage Credit Card Authorization Form',
        'url'=>'creditCardAuthorization/admin' ,
        'icon'=>'fa fa-cog')
);

?>

<h1>Create MC# Detachment </h1>

<?php $this->renderPartial('_form', array('model'=>$model,'menuArr'=>$menuArr)); ?>