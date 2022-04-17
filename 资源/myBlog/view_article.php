<?php
    include "session.php";
    include "connect.php";
    $id=$_GET['id'];
    $sql="select * from articles where id='$id'";
    $result=$conn->query($sql);
    $result=mysqli_fetch_array($result);
    ?>
    <link href="view.css" rel="stylesheet" type="text/css"/>
    <div class="view_div">
    <form>
        <h1>文章内容</h1>
        <h3>标题</h3>
        <?php echo $result[1];?>
        <h3>作者</h3>
        <?php echo $result[2];?>
        <h3>内容</h3>
        <?php echo $result[3];?>
        <a href="personal.php">返回主页</a>
    </form>
    </div>