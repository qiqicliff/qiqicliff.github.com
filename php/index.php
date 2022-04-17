<!--index.php-->
 
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>个人主页</title>
</head>
 
<body>
	<h2>个人主页</h2>
	<?php 
		session_start();
		if(isset($_SESSION['username'])){
			echo "<br>当前用户：".$_SESSION['username'];//此处接收来自login.php查询成功后返回的用户名
			echo "<br><a href=\"./personal.php\">个人中心</a>";
			echo "<br><a href=\"./destroy_session.php\">注销</a>";
		}else{
			echo "<br><a href=\"../html/login.html\">前往登陆</a>";
			echo "<br><a href=\"../html/register.html\">注册</a>";
		}
	?>
	
</body>
</html>
