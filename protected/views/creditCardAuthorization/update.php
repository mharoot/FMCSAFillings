<?php
/* @var $this CreditCardAuthorizationController */
/* @var $model CreditCardAuthorization */

$this->breadcrumbs=array(
	'Credit Card Authorizations'=>array('index'),
    FilingGenerics::showCCid(FilingGenerics::getQuoteID($model->id))=>array('view','id'=>$model->id),
	'Update',
);
$menuArr=array(

    array(
        'label'=>'Create Credit Card Authorization',
        'url'=>'creditCardAuthorization/create' ,
        'icon'=>'fa fa-plus'
        ),
    array(
        'label'=>'View Credit Card Authorization',
        'url'=>'creditCardAuthorization/view&id='.$model->id ,
        'icon'=>'fa fa-eye'
          ),
    array(
        'label'=>'Manage Credit Card Authorization',
        'url'=>'creditCardAuthorization/admin' ,
        'icon'=>'fa fa-edit'
    ),
    array(
        'label'=>'Authorize Form',
        'url'=>'creditCardAuthorization/authorizeSignature&id='.$model->id ,
        'icon'=>'fa fa-certificate'
    ),



);


?>

<h1>Update Credit Card Authorization (<?php echo FilingGenerics::showCCid($model->id); ?>)</h1>

<?php $this->renderPartial('_form', array(
        'model'=>$model,
        'menuArr'=>$menuArr

)); ?>