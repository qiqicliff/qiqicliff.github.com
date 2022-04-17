<?php
    include "session.php";
    include "connect.php";
    $id=$_GET['id'];
    $sql="delete from articles where id='$id'";
    $conn->query($sql);
    ?>
    <script>
        alert("删除成功!");
        window.location.href="article_list.php";
</script>