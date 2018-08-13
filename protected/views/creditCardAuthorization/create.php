<?php
/* @var $this CreditCardAuthorizationController */
/* @var $model CreditCardAuthorization */

$this->breadcrumbs=array(
	'Credit Card Authorizations'=>array('index'),
	'Create',
);

/*$this->menu=array(
	array('label'=>'Manage Credit Card Authorization', 'url'=>array('admin')),
);*/

$menuArr=array(

    array('label'=>'Manage Credit Card Authorization Form',
    'url'=>'creditCardAuthorization/admin' ,
    'icon'=>'fa fa-cog')
);
?>

<h1>Credit Card Authorization Form</h1>




<?php $this->renderPartial('_form', array(
        'model'=>$model,
        'menuArr'=> $menuArr
        )); ?>