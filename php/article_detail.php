<?php
    include "./session.php";
    include "./connect.php";
	$username=$_SESSION['username'];
    $sql="select * from articles where username = '$username' order by id desc " ;
    $result=mysqli_query($conn,$sql);
    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
    if(mysqli_num_rows($result) > 0){
        // 关联数组
        $res=mysqli_fetch_array($result);
        $tittle=$res['tittle'];
        $author=$res['author'];
        $text=$res['text'];
        $create_time = $res['create_time'];
        $update_time = $res['update_time'];
    }
	
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
                echo "<br>作者：".$author."<br>";//此处接收来自login.php查询成功后返回的用户名
                echo "<br>题目：".$tittle."<br>";
                echo "<br>内容：".$text."<br>";
                echo "<br>发布时间：".$create_time."<br>";
                echo "<br>更新时间：".$update_time."<br>";
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
	
<?php
	/*
	<table align="center">
            <tr align="center">
                <td class="list_text">编号</td>
                <td class="list_text">标题</td>
                <td class="list_text">作者</td>
                <td class="list_text">操作</td>
            </tr>
            <tr>
                <?php
                    if(!empty($result)){
                        foreach($data as $value){
                            ?>
                            <tr>
                                <td class="list_text"><?php echo $value['id'];?></td>
                                <td class="list_text"><?php echo $value['title'];?></td>
                                <td class="list_text"><?php echo $value['author'];?></td>
                                <td >
                                    <a href="./view_article.php?id=<?php echo $value['id']?>">查看</a>
                                    <a href="article_del.php?id=<?php echo $value['id']?>">删除</a>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
        </table>
	*/
?>
	
	