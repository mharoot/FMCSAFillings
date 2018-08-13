<?php
/* @var $this DotTrackerMcDetachmentController */
/* @var $model DotTrackerMcDetachment */
/* @var $form CActiveForm */
?>

<div class="row">
    <div class="col-lg-9">
        <div class="form">

            <?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'dot-tracker-mc-detachment-form',
                // Please note: When you enable ajax validation, make sure the corresponding
                // controller action is handling ajax validation correctly.
                // There is a call to performAjaxValidation() commented in generated controller code.
                // See class documentation of CActiveForm for details on this.
                'enableAjaxValidation'=>false,
            )); ?>

            <p class="note">Fields with <span class="required">*</span> are required.</p>

            <?php echo $form->errorSummary($model); ?>

            <div class="row">
                <?php echo $form->labelEx($model,'usdot'); ?>
                <?php echo $form->textField($model,'usdot',array('rows'=>6, 'cols'=>50)); ?>
                <?php echo $form->error($model,'usdot'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'mc'); ?>
                <?php echo $form->textField($model,'mc',array('rows'=>6, 'cols'=>50)); ?>
                <?php echo $form->error($model,'mc'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'legal_business_name'); ?>
                <?php echo $form->textField($model,'legal_business_name',array('rows'=>6, 'cols'=>50)); ?>
                <?php echo $form->error($model,'legal_business_name'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'office_name'); ?>
                <?php echo $form->textField($model,'office_name',array('rows'=>6, 'cols'=>50)); ?>
                <?php echo $form->error($model,'office_name'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'date'); ?>
                <?php echo $form->textField($model,'date',array('rows'=>6, 'cols'=>50)); ?>
                <?php echo $form->error($model,'date'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'created_by'); ?>
                <?php echo $form->textField($model,'created_by',array('rows'=>6, 'cols'=>50)); ?>
                <?php echo $form->error($model,'created_by'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'creation_datetime'); ?>
                <?php echo $form->textField($model,'creation_datetime'); ?>
                <?php echo $form->error($model,'creation_datetime'); ?>
            </div>

            <div class="row buttons">
                <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
            </div>

            <?php $this->endWidget(); ?>

        </div>
    </div>

    <div class="col-md-3">
        <div class="list-group">
            <a href="#" class="list-group-item active"><i class="fa fa-cogs" aria-hidden="true"></i> Actions</a>
            <?php
            foreach($menuArr as $menu)
            {
                // echo '<pre>'; print_r($menu);die;
                echo ' <a href="'.Yii::app()->createUrl($menu['url']).'" class="list-group-item"><i class="'.$menu['icon'].'" aria-hidden="true"></i> '.$menu['label'].'</a>';
            }

            ?>


        </div>
    </div>
</div>
<!-- form -->