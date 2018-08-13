<?php
/* @var $this QuoteFormController */
/* @var $data DotTrackerQuote */
?>

<?php

$this->breadcrumbs=array(
    'Quotes'=>array('index'),

);

//print_r($modelAll);

?>
    <h1>Quote History #<?php echo FilingGenerics::showQuoteId($quote_id); ?></h1>

<br><br>

<div class="row">
    <div class="col-lg-9">


        <?
        if(!sizeof($modelAll))
        {
            echo '<h3 style="color: indianred;"> No Records Found </h3>';
        }
        foreach($modelAll as $model)
        {
            if($model->logDet != '<table class="table table-striped"><tr style="font-weight: bold;"><td>Field </td><td>Old Values</td><td>New Values</td></tr></table>') {
                echo '<div class="col-lg-12" style="margin-bottom: 10px;">[' . FilingGenerics::showDate($model->date) . '] <i style="color: #d1d1d1">updated by </i> ' . FilingGenerics::getUserName($model->created_by) . ' ( ' . $model->created_by . ' ) </div><br>';
                echo $model->logDet;
                echo '<br><br>';
            }
        }

        ?>
    </div>

    <div class="col-lg-3 noprint">
        <div class="list-group">
            <a href="#" class="list-group-item active"><i class="fa fa-cogs"></i> Actions</a>
            <a href="<?php echo Yii::app()->createUrl('quoteForm/create')?>" class="list-group-item"><i class="fa fa-plus" aria-hidden="true"></i>
                &nbsp;Create Quote </a>
            <a href="<?php echo Yii::app()->createUrl('quoteForm/view',array('id'=>$quote_id))?>" class="list-group-item"><i class="fa fa-eye" aria-hidden="true"></i>
                &nbsp;View Quote </a>
            <a href="<?php echo Yii::app()->createUrl('quoteForm/update',array('id'=>$quote_id))?>" class="list-group-item"><i class="fa fa-pencil" aria-hidden="true"></i>
                &nbsp;Update Quote </a>




        </div>
    </div>

</div>
