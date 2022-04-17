<?php
    session_start();
    if (isset ( $_SESSION ["login"] )) {//判断login存不存在，如果不存在，说明异常登录 
        include "./connect.php";
    }else{
?>
	<script>
		alert("请先登录!");
		window.location.href="../index.html";
    </script>
    <?php
    }
?>