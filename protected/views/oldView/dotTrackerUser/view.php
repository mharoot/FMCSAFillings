<?php
/* @var $this DotTrackerUserController */
/* @var $model DotTrackerUser */

$this->breadcrumbs=array(
	'Dot Tracker Users'=>array('index'),
    $model->fname,
);

$this->menu=array(
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>
<style>
    /* Style the tab */


    .row{
       margin:15px;
        float: left;
    }

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
        margin-top: 58px;
        margin-left: 17px;min-height: 400px;
    }

    .viewTab{
        display: block;
    }
    .tabcontent h3
    {
        text-decoration: underline;
    }
</style>
<h1>User <?php echo $model->fname.' '.$model->lname ; ?>(<?php echo $model->email; ?>) </h1>


<!-- Tab links -->
<div class="tab">
    <button class="tablinks" id="userDetailsBtn" onclick="openTab('userDetails')">User Details</button>
    <button class="tablinks" id="editUserBtn" onclick="openTab('editUser')">Edit User</button>
    <button class="tablinks" id="privelegesBtn"onclick="openTab('priveleges')">Privileges</button>
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
            <label> First Name <span class="required">*</span></label>
            <input rows="6" cols="50" name="DotTrackerUser[fname]" id="DotTrackerUser_fname" type="text" value="<?php echo $model->fname;?>">			</div>

        <div class="row">
            <label> Last Name</label>
            <input rows="6" cols="50" name="DotTrackerUser[lname]" id="DotTrackerUser_lname" type="text" value="<?php echo $model->lname;?>">			</div>



        <div class="row">
            <label> Phone Number <span class="required">*</span></label>
            <input rows="6" cols="50" name="DotTrackerUser[phone]" id="DotTrackerUser_phone" type="text" value="<?php echo $model->phone;?>">			</div>

        <div class="row">
            <label> Username <span class="required">*</span></label>
            <input rows="6" cols="50" name="DotTrackerUser[username]" id="DotTrackerUser_username" type="text" value="<?php echo $model->username;?>">			</div>

        <div class="row">
            <label> Email ID <span class="required">*</span></label>
            <input rows="6" cols="50" name="DotTrackerUser[email]" id="DotTrackerUser_email" type="text" value="<?php echo $model->email;?>">			</div>

        <div class="row">
            <label> Password <span class="required">*</span></label>
            <input rows="6" cols="50" name="DotTrackerUser[password]" id="DotTrackerUser_password" type="password" >            </div>
        <div class="row">
            <label> Repeat Password <span class="required">*</span></label>
            <input rows="6" cols="50" name="DotTrackerUser[s_password]" id="DotTrackerUser_s_password" type="password">            </div>



        <!--<div class="row">
                                </div>

        <div class="row">
                                </div>-->

        <div class="row">
            <label> Extra Notes</label>
            <input rows="6" cols="50" name="DotTrackerUser[extra]" id="DotTrackerUser_extra" type="text" value="<?php echo $model->extra;?>">            </div>
        <div class="row">
            <label> User Role <span class="required">*</span></label>
            <select name="DotTrackerUser[role]" id="DotTrackerUser_role">
                <option value="1" <?php echo ($model->role==1)?'selected="selected"':''; ?> >Administrator</option>
                <option value="2" <?php echo ($model->role==2)?'selected="selected"':''; ?> >User</option>
            </select>            </div><div class="row">
            <label> Activation Status <span class="required">*</span></label>
            <select name="DotTrackerUser[active]" id="DotTrackerUser_active">
                <option value="1" <?php echo ($model->active==1)?'selected="selected"':''; ?> >Active</option>
                <option value="0" <?php echo ($model->active==0)?'selected="selected"':''; ?>>Not Active</option>
            </select>            </div>



        <br><br>
    </form>
        <div class="row buttons" style="width100% !important;">
            <button name="yt0" onclick="updateData(<?php echo $model->id; ?>)">Save</button>	</div>


</div>

<div id="priveleges" class="tabcontent">
    <h3>User Priveleges</h3>
    <p id="successMsgUser1" style="background: green;padding: 8px;color: #fff; border-radius:5px; display: none;"></p>
    <p id="errorMsgUser1" style="background: red;padding: 8px;color: #fff;border-radius:5px; display: none;"></p>
    <table cellspacing="4">
        <tbody><tr>
            <td width="100">Leads:</td>
            <td>
                <input type="radio" name="lead" value="0" onchange="enableUnloadPrompt(true)"> View Mine / Edit Mine &nbsp; &nbsp;
                <input type="radio" name="lead" value="1" onchange="enableUnloadPrompt(true)" checked=""> View All / Edit Mine &nbsp; &nbsp;
                <input type="radio" name="lead" value="2" onchange="enableUnloadPrompt(true)" checked=""> View All / Edit All
            </td>
        </tr>
        <tr>
            <td>Quotes:</td>
            <td>
                <input type="radio" name="quote" value="0" onchange="enableUnloadPrompt(true)"> View Mine / Edit Mine &nbsp; &nbsp;
                <input type="radio" name="quote" value="1" onchange="enableUnloadPrompt(true)" checked=""> View All / Edit Mine &nbsp; &nbsp;
                <input type="radio" name="quote" value="2" onchange="enableUnloadPrompt(true)" checked=""> View All / Edit All
            </td>
        </tr>
        <tr>
            <td>Orders:</td>
            <td>
                <input type="radio" name="order" value="0" onchange="enableUnloadPrompt(true)"> View Mine / Edit Mine &nbsp; &nbsp;
                <input type="radio" name="order" value="1" onchange="enableUnloadPrompt(true)" checked=""> View All / Edit Mine &nbsp; &nbsp;
                <input type="radio" name="order" value="2" onchange="enableUnloadPrompt(true)" checked=""> View All / Edit All
            </td>
        </tr>
        </tbody></table>

    <table cellspacing="4">
        <tbody>
        <tr>
            <td>Users:</td>
            <td><input type="checkbox" name="user_priv_edit" value="1" checked=""> Add / Edit Users, Groups and Privileges</td>
        </tr>
        <tr>
            <td>Preferences:</td>
            <td><input type="checkbox" name="preferences_manage" value="1" checked=""> Edit Company Preferences</td>
        </tr>

        </tbody></table>
    <input type="button" name="yt0" value="Save" onclick="updatePriveleges()">

</div>

<div id="loginHistory" class="tabcontent">
    <h3>User Login History</h3>
   <table class="detail-view">
       <tr>
           <td>User Details</td>
           <td>Login At</td>
           <td>IP</td>
           <td>Location Traced</td>

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
           $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
           $loc='';
           if(count($details) && isset($details->city) && isset($details->region) && isset($details->country))
           {
               $loc=$details->city.' '.$details->region.' '.$details->country;
           }
           else{
               $loc='NA';
           }

           echo '<tr class="'.$class.'">
           <td>'.$data->user_id.'</td>
           <td>'.$data->creationdatetime.'</td>
           <td>'.$data->ip.'</td>
           <td>'.$loc.'</td>

       </tr>
';
           $c++;
       }

       ?>


   </table>
</div>

<script type="application/javascript">



    $(document).ready(function(){

        openTab('userDetails');
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

        $("#successMsgUser1").html('Priveleges have been successfully saved for the user');
        $("#successMsgUser1").fadeIn();
        setTimeout(function () {
            $("#successMsgUser1").fadeOut();
        },2000);
    }




</script>





