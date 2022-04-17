<?php
    include "session.php";
    include "connect.php";
    $title=$_POST['title'];
    $author=$_POST['author'];
    $content=$_POST['content'];
    if($title&&$author&&$content){
        $sql="INSERT INTO articles(title,author,content) VALUES('$title','$author','$content')";
        $conn->query($sql);
        ?>
        <script>
            alert("文章发布成功!");
            window.location.href="personal.php";
    </script>
    <?php
    }else{
        ?>
        <script>
            alert("文章发布失败!标题、作者、内容可能为空！");
            window.location.href="new_article.html";
    </script>
    <?php
    }
    ?>