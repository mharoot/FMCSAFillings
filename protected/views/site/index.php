<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<center><div style="margin-top: -1px; border: 1px solid #ccc; width: 670px; padding: 10px 5px 0 5px;">
    <form name="task_form" method="post" action="">
        <input type="hidden" name="priority" value="0">
        <table>
            <tbody><tr>
                <td><div class="priorityButtonOff" onclick="togglePriority(this)"></div></td>
                <td><input type="text" class="text dp-applied" name="date" id="task_date" value="Date" onclick="value=''" style="width: 55px;"><a href="#" class="dp-choose-date" title="Choose date">Choose date</a></td>
                <td><input type="text" class="text" name="note" value="Enter note here." size="50" maxlength="255" onclick="taskClearNote(this)"></td>
                <td><input type="text" class="text" name="item" value="LQO #" size="10" onclick="taskClearItem(this)"></td>
                <td>
                    <span class="fakeSelector" id="assign_user_name">Kunal</span>

                    <select style="display: none; height: auto; z-index: 2000; position: absolute;" id="user_id" name="user_id" multiple="multiple" size="0">
                        <option value="All Users">All Users</option>
                        <option value="18213">Chelsea</option>
                        <option value="17525">Helen</option>
                        <option value="11482">John</option>
                        <option value="18400" selected="selected">Kunal</option>
                        <option value="5286">Tony</option>

                    </select>
                </td>
                <td><span class="grayButton"><span>Add<input type="button" name="send" value="Add" onclick="addTask()"></span></span></td>
            </tr>
            </tbody></table>
        <input type="hidden" id="CSRFToken" name="CSRFToken" value="ce4369426e081c80c39900d6d9a671f0cbe869929fc281a5da27aca840e6458a"></form>
    No tasks.
</div></center>
<br><br>

<p style="text-align: center; color: #569cc8;">For more details please mail us on info@fmcsafilings.com.</p>
