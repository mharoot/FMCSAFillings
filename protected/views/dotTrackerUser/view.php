<?php
/* @var $this DotTrackerUserController */
/* @var $model DotTrackerUser */

$userRole=FilingGenerics::getuserRole(Yii::app()->user->id);
$userId=FilingGenerics::getuserId(Yii::app()->user->id);

    if($userRole == LoginForm::$allowedRole) {
    $this->breadcrumbs = array(
        'Users' => array('index'),
        $model->fname.' '.$model->lname ,
    );
}
else{
    $this->breadcrumbs = array(

        $model->fname.' '.$model->lname ,
    );
}


?>
<style>
    .row{ margin-bottom: 10px; }
    /* Style the tab */
    .tab {
        overflow: hidden;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
        width:100%;
    }

    /* Style the buttons that are used to open the tab content */
    .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
        background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
        display: none;
        border: 1px solid #ccc;
        border-top: none;
        padding: 28px;
        /* margin: 39px; */
        min-height: 400px;
    }

    .viewTab{
        display: block;
    }
    .tabcontent h3
    {
        text-decoration: underline;
    }
</style>
<h1 style="word-break: break-all;">User :: <?php echo $model->fname.' '.$model->lname ; ?>(<?php echo $model->email; ?>) </h1>
<?php
?>
<div class="row">
<!-- Tab links -->
    <div class="col-sm-9">
        <div class="tab">
            <button class="tablinks" id="userDetailsBtn" onclick="openTab('userDetails')">User Details</button>
            <button class="tablinks" id="editUserBtn" onclick="openTab('editUser')">Edit User</button>
            <?php if($userRole==LoginForm::$allowedRole) { ?><button class="tablinks" id="privelegesBtn"onclick="openTab('priveleges')">Login Restrictions</button> <?php } ?>
            <button class="tablinks" id="loginHistoryBtn"onclick="openTab('loginHistory')">Login History</button>
        </div>

    <!-- Tab content -->
        <div id="userDetails" class="tabcontent">
            <h3>View User Details</h3>
            <?php  $this->widget('zii.widgets.CDetailView', array(
                'data'=>$model,
                'attributes'=>array(
                    'id',
                    'fname',
                    'lname',
                    'email',
                    'phone',
                    'username',

                    array(
                        'name'=>'active',
                        'value'=>DotTrackerUser::$arrActivationStatus[$model->active],
                    ),
                    array(
                            'name'=>'role',
                            'value'=>DotTrackerUser::$arrUserRoles[$model->role],
                    ),
                    'extra',
                    'creationdatetime',
                    'last_updated',
                ),
            )); ?>
        </div>

        <div id="editUser" class="tabcontent" >
            <h3>Edit User Details</h3>
            <p id="successMsgUser" style="background: green;padding: 8px;color: #fff; border-radius:5px; display: none;"></p>
            <p id="errorMsgUser" style="background: red;padding: 8px;color: #fff;border-radius:5px; display: none;"></p>
            <form id="dot-tracker-user-form"  method="post">
                <p class="note">Fields with <span class="required">*</span> are required.</p>


                <div class="row">
                    <div class="col-sm-3">
                        <label> First Name <span class="required">*</span></label>
                    </div>
                    <div class="col-sm-9">
                        <input rows="6" cols="50" name="DotTrackerUser[fname]" id="DotTrackerUser_fname" type="text" value="<?php echo $model->fname;?>">			
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label> Last Name</label>
                    </div>
                    <div class="col-sm-9">
                        <input rows="6" cols="50" name="DotTrackerUser[lname]" id="DotTrackerUser_lname" type="text" value="<?php echo $model->lname;?>">			
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <label> Phone Number <span class="required">*</span></label>
                    </div>
                    <div class="col-sm-9">
                        <input rows="6" cols="50" name="DotTrackerUser[phone]" id="DotTrackerUser_phone" type="text" value="<?php echo $model->phone;?>">			
                    </div>
                </div>

               <!-- <div class="row">
                    <div class="col-sm-3">
                        <label> Username <span class="required">*</span></label>
                    </div>
                    <div class="col-sm-9">
                        <input rows="6" cols="50" name="DotTrackerUser[username]" id="DotTrackerUser_username" type="text" value="<?php /*echo $model->username;*/?>">
                    </div>
                </div>-->

                <div class="row">
                    <div class="col-sm-3">
                        <label> Email ID <span class="required">*</span></label>
                    </div>
                    <div class="col-sm-9">
                        <input rows="6" cols="50" name="DotTrackerUser[email]" id="DotTrackerUser_email" type="text" value="<?php echo $model->email;?>">			
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <label> Password <span class="required">*</span></label>
                    </div>
                    <div class="col-sm-9">
                        <input rows="6" cols="50" name="DotTrackerUser[password]" id="DotTrackerUser_password" type="password" >            
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <label> Repeat Password <span class="required">*</span></label>
                    </div>
                    <div class="col-sm-9">
                        <input rows="6" cols="50" name="DotTrackerUser[s_password]" id="DotTrackerUser_s_password" type="password">            
                    </div>
                </div>

                <?php if($userRole==LoginForm::$allowedRole) { ?>

                <div class="row">
                    <div class="col-sm-3">
                        <label> Extra Notes</label>
                    </div>
                    <div class="col-sm-9">
                        <input rows="6" cols="50" name="DotTrackerUser[extra]" id="DotTrackerUser_extra" type="text" value="<?php echo $model->extra;?>">            
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label> User Role <span class="required">*</span></label>
                    </div>
                    <div class="col-sm-9">
                        <select name="DotTrackerUser[role]" id="DotTrackerUser_role">
                            <option value="1" <?php echo ($model->role==1)?'selected="selected"':''; ?> >Administrator</option>
                            <option value="2" <?php echo ($model->role==2)?'selected="selected"':''; ?> >User</option>
                        </select>            
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3"><label> Activation Status <span class="required">*</span></label></div>
                    <div class="col-sm-9">
                        <select name="DotTrackerUser[active]" id="DotTrackerUser_active">
                            <option value="1" <?php echo ($model->active==1)?'selected="selected"':''; ?> >Active</option>
                            <option value="0" <?php echo ($model->active==0)?'selected="selected"':''; ?>>Not Active</option>
                        </select>            
                    </div>
                </div>
                <br><br>
               <?php } ?>
            </form>
                
            <div class="row buttons" style="width100% !important;">
                    <button name="yt0" onclick="updateData(<?php echo $model->id; ?>)">Save</button>	</div>
            </div>

        <div id="priveleges" class="tabcontent">
            <h3>Login Restrictions</h3><br><p style="margin-bottom: 10px;">Check "Enable login restrictions" and use the options below to limit user login times.</p>
            <div style="margin-top: 10px; margin-left: 10px;">
                <input type="checkbox" id="enabled" name="login_restriction_enabled" value="1" onchange="updaterest();">
                Enable login restrictions
            </div>
            <p id="successMsgUser1" style="background: green;padding: 8px;color: #fff; border-radius:5px; display: none;"></p>
            <p id="errorMsgUser1" style="background: red;padding: 8px;color: #fff;border-radius:5px; display: none;"></p><br><br>
            <div class="row">
                <div class="col-sm-3">
                    <label> <b>Allow</b> login during the following hours: </label>
                </div>

               <form name="loginRestriction" id="loginRestriction">
                <div class="col-sm-9">
                    <table cellspacing="0" cellpadding="0">
                        <tbody><tr>
                            <td align="right">From: </td>
                            <td>
                                <select class="set_restr" name="login_restriction_allow_start_hour"  disabled="" checked="true" style="margin-left: 10px">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7" selected="selected">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">12</option>

                                </select>
                            </td>
                            <td>
                                <select class="set_restr" name="login_restriction_allow_start_minute"  disabled="" checked="true" style="margin-left: 10px">
                                    <option value="00" selected="selected">00</option>
                                    <option value="15">15</option>
                                    <option value="30">30</option>
                                    <option value="45">45</option>

                                </select>
                            </td>
                            <td>
                                <select class="set_restr" name="login_restriction_allow_start_ampm"  disabled="" checked="true"style="margin-left: 10px">
                                    <option value="AM" selected="selected">AM</option>
                                    <option value="PM">PM</option>

                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">To: </td>
                            <td>
                                <select class="set_restr" name="login_restriction_allow_end_hour"  disabled="" checked="true" style="margin-left: 10px">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7" selected="selected">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">12</option>

                                </select>
                            </td>
                            <td>
                                <select class="set_restr" name="login_restriction_allow_end_minute"  disabled="" checked="true" style="margin-left: 10px">
                                    <option value="00" selected="selected">00</option>
                                    <option value="15">15</option>
                                    <option value="30">30</option>
                                    <option value="45">45</option>

                                </select>
                            </td>
                            <td>
                                <select class="set_restr" name="login_restriction_allow_end_ampm"  disabled="" checked="true" style="margin-left: 10px" >
                                    <option value="AM">AM</option>
                                    <option value="PM" selected="selected">PM</option>

                                </select>
                            </td>
                        </tr>
                        </tbody></table>
                </div>
            </div>




            <div class="row">
                <div class="col-sm-3">
                    <label><b>Allow</b> login during the following days:</label>
                </div>
                <div class="col-sm-9">
                    <div style="width: 300px;padding-top: 10px; padding-bottom:10px; border: 1px dotted #e2e2e2;border-radius: 5px;">
                    <input class="day" type="checkbox" checked style="margin-left: 10px;"> Monday
                    <input class="day" type="checkbox" checked> Tuesday
                    <input class="day" type="checkbox" checked> Wednesday<br>
                    <input class="day" type="checkbox" checked style="margin-left: 10px;"> Thursday
                    <input class="day" type="checkbox" checked> Friday
                    <input class="day" type="checkbox"checked> Saturday<br>
                    <input class="day" type="checkbox"checked style="margin-left: 10px;"> Sunday
                   </div>
                </div>
            </div>
            </form>

            <input type="button" name="yt0" value="Save" onclick="updatePriveleges()">

        </div>

        <div id="loginHistory" class="tabcontent">
            <h3>User Login History</h3>
           <table class="detail-view">
               <tr>
                   <td>User Details</td>
                   <td>Login At</td>
                   <td>IP</td>
                  <!-- <td>Location Traced</td>-->

               </tr>
               <?php
               $c=1;
               foreach ($modelHistory as $data){
                   if($c%2==0){
                       $class='odd';
                   }
                   else{
                       $class='even';
                   }

                   $ip = $data->ip;
                   //$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
                   $loc='';
                   /*if(count($details) && isset($details->city) && isset($details->region) && isset($details->country))
                   {
                       $loc=$details->city.' '.$details->region.' '.$details->country;
                   }
                   else{
                       $loc='NA';
                   }*/

                   echo '<tr class="'.$class.'">
                   <td>'.$data->user_id.'</td>
                   <td>'.FilingGenerics::showDate($data->creationdatetime).'</td>
                   <td>'.$data->ip.'</td>
                   

               </tr>
        ';
                   $c++;
               }

               ?>


           </table>
        </div>

    </div>
    <!-- Right Sidebar -->
    <div class="col-md-3">
        <div class="list-group">
            <a href="#" class="list-group-item active"><i class="fa fa-cogs" aria-hidden="true"></i> Actions</a>
            <?php if($userRole != LoginForm::$allowedRole) { ?>
            <a href="#" class="list-group-item"><i class="fa fa-close" aria-hidden="true"></i> No Actions Available</a>
            <?php }
            else {?>
                <a href="<?php echo Yii::app()->createUrl('DotTrackerUser/admin')?>" class="list-group-item"><i class="fa fa-pencil" aria-hidden="true"></i> Manage Users</a>

            <?php } ?>
        </div>
    </div>
</div>

<script type="application/javascript">



    $(document).ready(function(){

        openTab('userDetails');
        updaterest();
    });

    function openTab(id) {
        var tabArr = ['userDetails', 'editUser', 'priveleges', 'loginHistory'];

        $.each(tabArr, function(index, val)
        {
            $('#' + val).removeClass('viewTab');
            $('#' + val + 'Btn').removeClass('active');
        });


        $('#' + id + 'Btn').addClass('active');
        $('#' + id).addClass('viewTab');


    }


    function updateData(id)
    {
        var ajaxUrl='<?php echo Yii::app()->createUrl('dotTrackerUser/updateAjax',array('id'=>'__id__'));?>';
        ajaxUrl=ajaxUrl.replace('__id__',id);
        $.ajax({
            url: ajaxUrl,
            type: 'POST',
            data: $('#dot-tracker-user-form').serializeArray(),
            dataType: "json",
            success: function(html){
                console.log(html);
                if(html.success==true)
                {
                    $("#successMsgUser").html(html.message);
                    $("#successMsgUser").fadeIn();
                    setTimeout(function () {
                        $("#successMsgUser").fadeOut();
                    },2000);

                }
                else{
                    $("#errorMsgUser").html('Error in Saving User');
                    $("#errorMsgUser").fadeIn();
                    setTimeout(function () {
                        $("#errorMsgUser").fadeOut();
                    },2000);
                }

            }
        });
    }


    function updatePriveleges()
    {

        $("#successMsgUser1").html('Login Restrictions have been successfully saved for the user');
        $("#successMsgUser1").fadeIn();
        setTimeout(function () {
            $("#successMsgUser1").fadeOut();
        },2000);
    }

    function updaterest()
    {

        if($('#enabled').is(":checked"))
        {
            $('form[id="loginRestriction"]').find('select').removeAttr('disabled');
            $('input[class="day"]').removeAttr("disabled");
        }
        else
            {
                $('form[id="loginRestriction"]').find('select').attr('disabled',true);
                $('input[class="day"]').attr("disabled", true);
        }
    }




</script>





