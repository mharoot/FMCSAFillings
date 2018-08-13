<?php
/* @var $this QuoteFormController */
/* @var $model DotTrackerQuote */

$this->breadcrumbs=array(
	'Quotes'=>array('index'),
    FilingGenerics::showQuoteId($model->id)=>array('view','id'=>$model->id),
	'Update',
);

/*$this->menu=array(
	array('label'=>'List DotTrackerQuote', 'url'=>array('index')),
	array('label'=>'Create DotTrackerQuote', 'url'=>array('create')),
	array('label'=>'View DotTrackerQuote', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DotTrackerQuote', 'url'=>array('admin')),
);
*/?>

<h1>Update Quote <?php echo FilingGenerics::showQuoteId($model->id); ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

<script type="application/javascript">
    $(document).ready(function () {
        var stringObj=$('#DotTrackerQuote_arrdata').val();
        objP=JSON.parse(stringObj);
        console.log(objP);
        $(objP).each(function(index,val){
            $('input[name="'+val.id+'"]').trigger('click');
            $('#'+val.id).val(val.amt);
            $('#'+val.id).trigger('change');
        });
    });
</script>
