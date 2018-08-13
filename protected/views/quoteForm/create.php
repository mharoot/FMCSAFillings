<?php
/* @var $this QuoteFormController */
/* @var $model DotTrackerQuote */

$this->breadcrumbs=array(
	'Quotes'=>array('index'),
	'Create',
);

?>

<h1>Create Quote</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>