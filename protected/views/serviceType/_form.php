<?php
/* @var $this ServiceTypeController */
/* @var $model DotTrackerServicetype */
/* @var $form CActiveForm */
?>

<div class="row" style="padding-bottom: 70px; padding-top:50px;">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dot-tracker-servicetype-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


	<?php echo $form->errorSummary($model); ?>
    <div class="col-lg-9">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">SECTION A — ACCOUNT INFORMATION</div>
                <div class="panel-body">
                    <fieldset>
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="nameon_card">TITLE</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <?php echo $form->textField($model,'title',array('class'=>'form-control','readonly'=>'readonly')); ?>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="nameon_card">SLUG</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <?php echo $form->textField($model,'slug',array('class'=>'form-control','readonly'=>'readonly')); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">
                                <div class='form-group'>
                                    <label for="cardholder_information">DESCRIPTION</label>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <?php echo $form->textField($model,'description',array('class'=>'form-control')); ?>
                                </div>
                            </div>

                        </div>







                    </fieldset>
                </div>
            </div>
        </div>
        <div class="col-sm-12" style="margin-bottom: 50px;">
            <div class="form-group" style="float: right;">
                <div class="row buttons" style="margin-top:30px;">
                    <?php echo CHtml::submitButton($model->isNewRecord ? 'Save' : 'Save',array('id'=>'subBtn','style'=>'', 'name' => 'but1','class'=>'btn btn-success')); ?>
                    <?php //echo CHtml::submitButton($model->isNewRecord ? 'Save and Email' : 'Save and Email',array('id'=>'subBtn2','style'=>'margin-left:10px', 'name' => 'but2' ,'class'=>'btn btn-info')); ?>
                    <?php //echo CHtml::submitButton($model->isNewRecord ? 'Save and Message ' : 'Save and Message',array('id'=>'subBtn3','style'=>'margin-left:10px', 'name' => 'but3' ,'class'=>'btn btn-warning')); ?>
                </div>
            </div>
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


	<!--<div class="row">
		<?php /*echo $form->labelEx($model,'title'); */?>
		<?php /*echo $form->textField($model,'title',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'title'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'slug'); */?>
		<?php /*echo $form->textField($model,'slug',array('size'=>60,'maxlength'=>255)); */?>
		<?php /*echo $form->error($model,'slug'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'description'); */?>
		<?php /*echo $form->textField($model,'description',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'description'); */?>
	</div>

	<div class="row">
		<?php /*echo $form->labelEx($model,'creationdatetime'); */?>
		<?php /*echo $form->textField($model,'creationdatetime',array('rows'=>6, 'cols'=>50)); */?>
		<?php /*echo $form->error($model,'creationdatetime'); */?>
	</div>-->



<?php $this->endWidget(); ?>

</div><!-- form -->