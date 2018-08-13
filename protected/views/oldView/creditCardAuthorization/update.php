<?php
/* @var $this CreditCardAuthorizationController */
/* @var $model CreditCardAuthorization */

$this->breadcrumbs=array(
	'Credit Card Authorizations'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Create Credit Card Authorization', 'url'=>array('create')),
	array('label'=>'View Credit Card Authorization', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Credit Card Authorization', 'url'=>array('admin')),
);
?>

<h1>Update Credit Card Authorization <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>