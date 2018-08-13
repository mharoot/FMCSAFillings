<?php
/* @var $this CreditCardAuthorizationController */
/* @var $model CreditCardAuthorization */

$this->breadcrumbs=array(
	'Credit Card Authorizations'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Create Credit Card Authorization', 'url'=>array('create')),
	array('label'=>'Update Credit Card Authorization', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Manage Credit Card Authorization', 'url'=>array('admin')),
);
?>

<h1>View Credit Card Authorization #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'cc_name',
		'cc_type',
		'cc_number',
		'cc_expdate',
		'cc_seccode',
		'address',
		'city',
		'state',
		'zipcode',
		'phone',
		'email',
		'fax',
		'auth_name',
		'auth_company',
		'auth_phoneno',
		'auth_email',
		'auth_drivlicense',
		'auth_relationuser',
		'auth_charges',
		'auth_amount',
		'date_of_charge',
		'ccholder_name',
		'sign_link',
		'date',
		'creation_datetime',
		'last_updated',
		'created_by',
	),
)); ?>
