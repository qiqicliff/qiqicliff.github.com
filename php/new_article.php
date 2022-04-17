<?php
    include "./session.php";
    include "./connect.php";
    $title=$_POST['title'];
    $author=$_POST['author'];
    $content=$_POST['content'];
	$username = $_SESSION['username'];
    if($title&&$author&&$content){
        $sql="INSERT INTO articles (id, username, text, tittle, author) VALUES(NULL,'$username','$content','$title','$author')";
        $result=mysqli_query($conn,$sql);
		if (!$result) {
			printf("Error: %s\n", mysqli_error($conn));
			exit();
		}
?>
	<script>
			alert("文章发布成功!");
			window.location.href="./personal.php";
	</script>
	<?php
	}else if(!$title){
	?>
	<script>
			alert("文章发布失败!标题为空！");
			window.location.href="../html/new_article.html";
	</script>
	
	<?php
	}else if(!$author){
	?>
	<script>
			alert("文章发布失败!作者为空！");
			window.location.href="../html/new_article.html";
	</script>
	
	<?php
	}else if(!$content){
	?>
	<script>
			alert("文章发布失败!文章内容为空！");
			window.location.href="../html/new_article.html";
	</script>
	
	<?php
	}else{
	?>
	<script>
			alert("文章发布失败!");
			window.location.href="../html/new_article.html";
	</script>
	
	<?php
	}
	?>