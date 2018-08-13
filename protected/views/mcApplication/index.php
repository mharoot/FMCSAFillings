<?php
/* @var $this McApplicationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'MC Applications',
);

$this->menu=array(
	array('label'=>'Create MC Application', 'url'=>array('create')),
	array('label'=>'Manage MC Application', 'url'=>array('admin')),
);
?>

<h1>MC Applications</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
