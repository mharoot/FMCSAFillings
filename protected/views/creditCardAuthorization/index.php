<?php
/* @var $this CreditCardAuthorizationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Credit Card Authorizations',
);

$this->menu=array(
	array('label'=>'Create Credit Card Authorization', 'url'=>array('create')),
	array('label'=>'Manage Credit Card Authorization', 'url'=>array('admin')),
);
?>

<h1>Credit Card Authorizations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
