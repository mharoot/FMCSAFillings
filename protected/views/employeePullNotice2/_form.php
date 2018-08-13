<?php
/* @var $this EmployeePullNotice2Controller */
/* @var $model DotTrackerEpn2 */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dot-tracker-epn2-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>




    <div class="row">

        <!-- Content Column -->
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <h3>COMMERCIAL EMPLOYER PULL NOTICE ENROLLMENT OR DELETION OF DRIVERS</h3>
                    <p class="note">Fields with <span class="required">*</span> are required.</p>
                    <?php echo $form->errorSummary($model); ?>



                </div>
                <!-- Contact Form -->
                <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
                <div class="col-md-12" style="margin-top: 10px;">
                    <div class="col-md-3" style="padding-top: 15px;">
                        <div class="form-group">
                            <label>CHECK ONLY ONE PROCESS PER FORM</label>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="col-sm-1" style="text-align: center;"><input class="form-control" id="reqCode1" name="reqCode1" size="30" type="checkbox"  onclick="checkVal1();"/><label for="name">ENROLL</label></div>
                        <div class="col-sm-1" style="text-align: center; padding-top:15px; "><b>OR</b></div>
                        <div class="col-sm-1" style="text-align: center;"><input class="form-control" id="reqCode2" name="reqCode2" size="30" type="checkbox"  onclick="checkVal2();" /><label for="name">DELETE</label></div>

                        <?php echo $form->hiddenField($model,'is_enroll',array()); ?>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">PLEASE TYPE OR PRINT IN INK</div>
                                <div class="panel-body">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label for="nameon_card">EMPLOYER</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <?php echo $form->textField($model,'employer',array('class'=>'form-control')); ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label for="nameon_card">CURRENT ADDRESS</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <?php echo $form->textField($model,'current_address',array('class'=>'form-control')); ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-2">
                                                <div class='form-group'>
                                                    <label for="cardholder_information">CITY</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <?php echo $form->textField($model,'city',array('class'=>'form-control')); ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-1">
                                                <div class='form-group'>
                                                    <label for="cardholder_information">STATE</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <?php echo $form->textField($model,'state',array('class'=>'form-control')); ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class='form-group'>
                                                    <label for="cardholder_information">Zip Code</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <?php echo $form->textField($model,'zip',array('class'=>'form-control')); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                Email Address
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <?php echo $form->textField($model,'ext6',array('class'=>'form-control')); ?>
                                                </div>
                                            </div>

                                            <div class="col-sm-3">
                                                Mobile
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <?php echo $form->textField($model,'ext7',array('class'=>'form-control')); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">REQUESTER INFO</div>
                                <div class="panel-body">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="city">REQUESTER CODE</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <?php echo $form->textField($model,'requester_code',array('class'=>'form-control')); ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-1">
                                                <div class="form-group">
                                                    <label for="state">DATE</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <?php echo $form->textField($model,'date',array('class'=>'form-control')); ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="city">TELEPHONE</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <?php echo $form->textField($model,'telephone',array('class'=>'form-control')); ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-1">
                                                <div class="form-group">
                                                    <label for="city">Ext</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <?php echo $form->textField($model,'ext',array('class'=>'form-control')); ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="city">CONTACT PERSON'S NAME AND TITLE (FIRST, MI, LAST)</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <?php echo $form->textField($model,'contact_name',array('class'=>'form-control')); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">CLASS LICENSES</div>
                        <div class="panel-body">
                            <div>
                                <div class="row" style="padding-bottom: 25px;">
                                    <div class="col-sm-2">
                                        <b>A</b> - CLASS A<br />
                                        <b>B</b> - CLASS B
                                    </div>
                                    <div class="col-sm-4">
                                        <b>B/P</b> - Class B with passengers (Charter-Party)<br />
                                        <b>C/H</b> - Class C with Hazardous Materials Endorsement
                                    </div>
                                    <div class="col-sm-4">
                                        <b>C/S</b> - Class C with Special Certificates<br />
                                        <b>C/P</b> - Class C with PUC permit issued
                                    </div>
                                </div>
                                <div class="row">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col" class="text-center">CALIFORNIA DRIVER LICENSE OR TEMPORARY "X" NUMBER</th>
                                            <th scope="col" class="text-center">DRIVER'S<br /> LAST NAME ONLY</th>
                                            <th scope="col" class="text-center">CLASS<br/> LICENSE</th>
                                            <th scope="col" class="text-center">"REMARKS" FOR YOUR USE (LIMIT TO 21 SPACES)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>
                                                <?php echo $form->textField($model,'c11',array('class'=>'form-control nameCharge')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c12',array('class'=>'form-control')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c13',array('class'=>'form-control')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c14',array('class'=>'form-control')); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>
                                                <?php echo $form->textField($model,'c21',array('class'=>'form-control nameCharge')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c22',array('class'=>'form-control')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c23',array('class'=>'form-control')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c24',array('class'=>'form-control')); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>
                                                <?php echo $form->textField($model,'c41',array('class'=>'form-control nameCharge')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c42',array('class'=>'form-control')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c43',array('class'=>'form-control')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c44',array('class'=>'form-control')); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>
                                                <?php echo $form->textField($model,'c51',array('class'=>'form-control nameCharge')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c52',array('class'=>'form-control')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c53',array('class'=>'form-control')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c54',array('class'=>'form-control')); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td>
                                                <?php echo $form->textField($model,'c61',array('class'=>'form-control nameCharge')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c62',array('class'=>'form-control')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c63',array('class'=>'form-control')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c64',array('class'=>'form-control')); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">7</th>
                                            <td>
                                                <?php echo $form->textField($model,'c71',array('class'=>'form-control nameCharge')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c72',array('class'=>'form-control')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c73',array('class'=>'form-control')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c74',array('class'=>'form-control')); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">8</th>
                                            <td>
                                                <?php echo $form->textField($model,'c81',array('class'=>'form-control nameCharge')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c82',array('class'=>'form-control')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c83',array('class'=>'form-control')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c84',array('class'=>'form-control')); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">9</th>
                                            <td>
                                                <?php echo $form->textField($model,'c91',array('class'=>'form-control nameCharge')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c92',array('class'=>'form-control')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c93',array('class'=>'form-control')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c94',array('class'=>'form-control')); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">10</th>
                                            <td>
                                                <?php echo $form->textField($model,'c101',array('class'=>'form-control nameCharge')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c102',array('class'=>'form-control')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c103',array('class'=>'form-control')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c104',array('class'=>'form-control')); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">10</th>
                                            <td>
                                                <?php echo $form->textField($model,'c111',array('class'=>'form-control nameCharge')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c112',array('class'=>'form-control')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c113',array('class'=>'form-control')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c114',array('class'=>'form-control')); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">11</th>
                                            <td>
                                                <?php echo $form->textField($model,'c121',array('class'=>'form-control nameCharge')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c122',array('class'=>'form-control')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c123',array('class'=>'form-control')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c124',array('class'=>'form-control')); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">12</th>
                                            <td>
                                                <?php echo $form->textField($model,'c131',array('class'=>'form-control nameCharge')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c132',array('class'=>'form-control')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c133',array('class'=>'form-control')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c134',array('class'=>'form-control')); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">13</th>
                                            <td>
                                                <?php echo $form->textField($model,'c141',array('class'=>'form-control nameCharge')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c142',array('class'=>'form-control')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c143',array('class'=>'form-control')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c144',array('class'=>'form-control')); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">14</th>
                                            <td>
                                                <?php echo $form->textField($model,'c151',array('class'=>'form-control nameCharge')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c152',array('class'=>'form-control')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c153',array('class'=>'form-control')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c154',array('class'=>'form-control')); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">15</th>
                                            <td>
                                                <?php echo $form->textField($model,'c31',array('class'=>'form-control nameCharge')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c32',array('class'=>'form-control')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c33',array('class'=>'form-control')); ?>
                                            </td>
                                            <td>
                                                <?php echo $form->textField($model,'c34',array('class'=>'form-control')); ?>

                                                <?php echo $form->hiddenField($model,'ext1',array('class'=>'form-control')); ?>

                                                <?php echo $form->hiddenField($model,'ext2',array('class'=>'form-control')); ?>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <span id="totalDriversEnrolled"></span> <b>TOTAL DRIVERS ADDED</b> (A $5 ENROLLMENT FEE FOR EACH DRIVER WILL BE BILLED TO YOUR ABIS ACCOUNT)
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <span id="totalDriversDeleted"></span> <b>TOTAL DRIVERS DELETED</b> (NO FEE)
                                    </div>
                                </div>
                                <div style="display: none;">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <b>FOR ENROLLMENT ONLY:</b><br />
                                        <b>I certify (or declare) under penalty of perjury under the laws of the State of California that the foregoing is true and correct.</b><br />
                                        The driver(s) listed above are (1) mandated for enrollment under California Vehicle Code §1808.1. <b>Or</b> (2) have signed an “Authorization for Release of driver Record Information” form (INF 1101) or internal document with similar language <b>AND</b> are currently in an employer/employee relationship AND frequently drive during the course of their employment.
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <div class="form-group">
                                        <label>DATE</label>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <input class="form-control" id="date" name="date" size="30" type="text" />
                                    </div>
                                </div>
                                <div class="col-sm-2 text-right">
                                    <div class="form-group">
                                        <label>SIGNATURE</label>
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class="form-control" id="sign" name="sign" size="30" type="text" />
                                    </div>
                                </div>
                                <div class="col-sm-5 text-right">
                                    <div class="form-group">
                                        <label>PRINTED NAME AND TITLE</label>
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class="form-control" id="printedName" name="printedName" size="30" type="text" />
                                    </div>
                                </div>
                            </div>
                            </fieldset>
                        </div>
                    </div>






                </div>
            </div>
        </div>

        <!-- /.row -->
    </div>



        <div class="col-sm-12" style="margin-bottom: 50px;">
            <div class="form-group" style="float: right;">
                <div class="row buttons" style="margin-top:30px;">
                    <?php echo CHtml::submitButton($model->isNewRecord ? 'Save' : 'Save',array('id'=>'subBtn','style'=>'', 'name' => 'but1','class'=>'btn btn-success')); ?>
                    <?php echo CHtml::submitButton($model->isNewRecord ? 'Save and Email' : 'Save and Email',array('id'=>'subBtn2','style'=>'margin-left:10px', 'name' => 'but2' ,'class'=>'btn btn-info')); ?>
                    <?php echo CHtml::submitButton($model->isNewRecord ? 'Save and Message ' : 'Save and Message',array('id'=>'subBtn3','style'=>'margin-left:10px', 'name' => 'but3' ,'class'=>'btn btn-warning')); ?>
                </div>
            </div>
        </div>

<?php $this->endWidget(); ?>

</div><!-- form -->

    <script>
        function checkVal1() {

            if($('#reqCode1').is(':checked'))
            {
                $('#reqCode2').attr('checked',false);
                $('#DotTrackerEpn2_is_enroll').val('1');

            }
            $('#DotTrackerEpn2_c11').trigger('change');

        }
        function checkVal2() {

            if($('#reqCode2').is(':checked'))
            {
                $('#reqCode1').attr('checked',false); $('#DotTrackerEpn2_is_enroll').val('0');


            }
            $('#DotTrackerEpn2_c11').trigger('change');

        }


        $(document).ready(function(){

            if($('#DotTrackerEpn2_is_enroll').val()==1)
            {
                $('#reqCode1').attr('checked',true);
            }
            else{
                $('#reqCode2').attr('checked',true);
            }


            $('.nameCharge').on('change',function(){
                var l=0;
                $('.nameCharge').each(function(index,value)
                {
                 if($(value).val()!='')
                 {
                     l++;
                 }
                });
                //var l=$('.nameCharge').length;
                var totCharge=l*5;

                if ($('#DotTrackerEpn2_is_enroll').val()==1)
                {
                    $('#totalDriversEnrolled').html(l);
                    $('#totalDriversDeleted').html('0');
                    $('#DotTrackerEpn2_ext1').val(l);
                    $('#DotTrackerEpn2_ext2').val('0');

                }
                else{
                    $('#totalDriversDeleted').html(l);
                    $('#totalDriversEnrolled').html('0');
                    $('#DotTrackerEpn2_ext2').val(l);
                    $('#DotTrackerEpn2_ext1').val('0');
                }





            });

            $('#DotTrackerEpn2_c11').trigger('change');
        });
    </script>

    <style>
        #totalDriversEnrolled{
            border-bottom: 1px dashed #000;
            padding-bottom: 5px;
        }

        #totalDriversDeleted{
            border-bottom: 1px dashed #000;
            padding-bottom: 5px;
        }

        </style>

