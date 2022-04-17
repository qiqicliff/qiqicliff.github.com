<?php
    include "session.php";
    $username=$_SESSION["username"];
    $sql="select * from users where user='$username'";
    $result=$conn->query($sql);
    $result=mysqli_fetch_array($result);
    $password=$result[2];
    //判断密码是否输入正确
    if($password!=$_REQUEST["oldpassword"]){
        ?>
        <script> 
            alert("原密码错误!"); 
            window.location.href="update.php"; 
        </script>
        <?php
    }

    //判断新密码是否输入一致
    $newpassword=$_REQUEST["newpassword"];
    $repassword=$_REQUEST["repassword"];
    ?>
    <?php
    if($newpassword!=$repassword){
        ?>
        <script> 
            alert("密码不一致!"); 
            window.location.href="update.php"; 
        </script>
        <?php
    }
    $username=$_REQUEST['username'];
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $id=$result[0];
    if($username){
        $username=$username;
        $sql="UPDATE users set user='$username' where id='$id'";
        $conn->query($sql);
    }
    if($newpassword){
        $newpassword=$newpassword;
        $sql="UPDATE users set pwd='$newpassword' where id='$id'";
        $conn->query($sql);
    }
    if($name){
        $sql="UPDATE users set name='$name' where id='$id'";
        $conn->query($sql);
    }
    if($email){
        $sql="UPDATE users set email='$email' where id='$id'";
        $conn->query($sql);
    }
    ?>
    <script> 
        alert("个人资料已更新!"); 
        window.location.href="personal.php"; 
    </script>
    