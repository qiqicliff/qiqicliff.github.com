<?php 
    $username=$_REQUEST["username"]; 
    $password=$_REQUEST["password"]; 
    include "connect.php";
    $result=$conn->query("select * from users where user='$username'"); 
    $result=mysqli_fetch_array($result);
    $user=$result[1];
    if(!is_null($user)){ 
  ?> 
  <script type="text/javascript"> 
    alert("用户已存在"); 
    window.location.href="signup.html"; 
  </script>  
  <?php 
    } 
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $sql="INSERT INTO users(user,pwd,name,email) VALUES('$username','$password','$name','$email')";
    $conn->query($sql);  
  ?> 
  <script type="text/javascript"> 
    alert("注册成功!马上登录!"); 
    window.location.href="index.html"; 
  </script> 
    