<?php
    require_once('../model/userModel.php');
    include_once('../controller/sessionCheck.php');
    $username=$_SESSION['username'];
    $users=getOrderhistory($username);
?>
<fieldset>
    <legend>PROFILE</legend>
    <?php for($i=0;$i<count($users);$i++)
    {?>
    Name: 
    <input type="text" name="name" value="<?=$users[$i]['name']?>" /> <br><br>
    User Name:
    <input type="text" name="username" value="<?=$users[$i]['username']?>" /> <br><br>
    Email: 
    <input type="email" name="email" value="<?=$users[$i]['email']?>" /> <br><br>

    <?php }?>
</fieldset>