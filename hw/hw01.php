<?php
if (empty($_POST['tel']) || empty($_POST['code'])) {
    header("Location:01.html");
    die;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

</style>
<body>
<div class="wrapper">
    <div class="row">
        <span>你的手机号：</span>
        <p><?php echo $_POST['tel'] ?></p>
    </div>
    <div class="row">
        <span>创建密码：</span>
        <p><?php echo $_POST['password']
            ?></p>
    </div>
    <div class="row">
        <span>昵称：</span>
        <p><?php echo $_POST['nickname']
            ?></p>
    </div>
    <div class="row">
        <span>性别：</span>
        <p><?php
            echo $_POST['sex']?></p>
    </div>
    <div class="row">
        <span> 所在地：</span>
        <p><?php $p=array('广州','深圳','上海','北京');
        echo $p[$_POST['location']]
            ?></p>
    </div>
    <div class="row">
        <span>所在区号:</span>
        <p><?php
            $l=array('020','0755','030','040');
            echo  $p[$_POST['location']]
            ?></p>
    </div>
    <div class="row">
        <span>手机验证码:</span>
        <p>
            <?php
            echo $_POST['code'];
            ?>
        </p>
    </div>

</div>
</body>
</html>
