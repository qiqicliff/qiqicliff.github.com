<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>个人信息</title>
    <link href="../css/personal.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<?php
    include "./session.php";
    include("./connect.php");
    $username=$_SESSION['username'];
    //连接数据库
    $conn = mysqli_connect('localhost','root','a2218914651','root');
    $sql="select * from user where username = '$username'";
    $result=mysqli_query($conn,$sql);
    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
    if(mysqli_num_rows($result) > 0){
        // 关联数组
        $res=mysqli_fetch_array($result);
        $name=$res['name'];
        $email=$res['Email'];
    }
    
    ?>
    <h1 class="info_h1">个人主页</h1>
    <div class="info_div">
    <?php
        echo '<p class="info_show">'."用户名：".$username.'</p>';
        echo '<p class="info_show">'."姓名：".$name.'</p>';
        echo '<p class="info_show">'."Email：".$email.'</p>';
        ?>
    <a  href="../html/new_article.html">发布文章</a>
    <a  href="./article_list.php">查看文章</a>
    <a  href="./update.php">修改资料</a>
    <a  href="./logout.php">退出登录</a>
    </div>
</body>
</html>