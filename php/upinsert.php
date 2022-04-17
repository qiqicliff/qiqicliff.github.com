<?php
    include "session.php";
    $username=$_SESSION["username"];
    $sql="select * from user where username='$username'";
    $result=$conn->query($sql);
    $result=mysqli_fetch_array($result);
    $password=$result['password'];
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
            window.location.href="./update.php"; 
        </script>
        <?php
    }
    $username=$_REQUEST['username'];
    $name=$_REQUEST['name'];
    $email=$_REQUEST['Email'];
    $id=$result['userid'];
    if($username){
        $username=$username;
        $sql="UPDATE user set username='$username' where userid='$id'";
        $result=mysqli_query($conn,$sql);
        if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
    }
    if($newpassword){
        $newpassword=$newpassword;
        $sql="UPDATE user set password='$newpassword' where userid='$id'";
        $result=mysqli_query($conn,$sql);
        if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
    }
    if($name){
        $sql="UPDATE user set name='$name' where userid='$id'";
        $result=mysqli_query($conn,$sql);
        if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
    }
    if($email){
        $sql="UPDATE user set Email='$email' where userid='$id'";
        $result=mysqli_query($conn,$sql);
        if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
    }
    ?>
    <script> 
        alert("个人资料已更新!"); 
        <?php
        //修改密码必须重新登陆
        session_destroy();
        ?>
        alert("请重新登陆!"); 
        window.location.href="../html/login.html"; 
    </script>
    