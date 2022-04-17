<?php
    include "./session.php";
    include "./connect.php";
	$username=$_SESSION['username'];
    $sql="select * from articles where username = '$username' order by id  " ;
    $result=mysqli_query($conn,$sql);
    
    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
    // if(mysqli_num_rows($result) > 0){
    //     // 关联数组
       
    //     $rows =  mysqli_num_rows($result);
    // }
    
    
	
    ?> 
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>文章列表</title>
        <link href="../css/list_show.css" rel="stylesheet" type="text/css"/>
    </head>
	
    <body>
        <h2>文章列表</h2>
		<div class="list_div">
        <?php 
            session_start();
            if(isset($_SESSION['username'])){
                while($res=mysqli_fetch_array($result)){
                    // echo '<a  href="./article_detail.php">'.$res["tittle"].'</a>';
                    //打印当前用户发布过的所有文章
                    echo "<br>".$res['id']."<br>";
                    echo "<br>作者：".$res['author']."<br>";
                    echo "<br>题目：".$res['tittle']."<br>";
                    echo "<br>内容：".$res['text']."<br>";
                    echo "<br>发布时间：".$res['create_time']."<br>";
                    echo "<br>更新时间：".$res['update_time']."<br>";

                    echo '<br>';
                }
                
               
            }else{
                echo "<br><a href=\"../html/login.html\">前往登陆</a>";
                echo "<br><a href=\"../html/register.html\">注册</a>";
            }
	    ?>
        <br>
        <a href="./personal.php">返回主页</a>
        </div>
        
    </body>
    </html>