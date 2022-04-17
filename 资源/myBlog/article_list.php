<?php
    include "session.php";
    include "connect.php";
    $sql="select * from articles order by id desc";
    $result=$conn->query($sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $data[]=$row;
        }
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>文章列表</title>
        <link href="list_show.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="list_div">
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
                                    <a href="view_article.php?id=<?php echo $value['id']?>">查看</a>
                                    <a href="article_del.php?id=<?php echo $value['id']?>">删除</a>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
        </table>
        <a href="personal.php">返回主页</a>
        </div>
    </body>
    </html>