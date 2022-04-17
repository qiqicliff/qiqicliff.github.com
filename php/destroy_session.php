<!--destroy_session.php-->
 
<?php
	//销毁session并跳转到login.html登录页面
	session_start();
	session_destroy();
	echo "<script>url=\"../html/login.html\";window.location.href=url;</script>";
?>