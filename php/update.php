<link href="../css/update.css" rel="stylesheet" type="text/css"/>
<?php
    include "session.php";
    ?>
<body>
<div class="update_div">
    <form action="upinsert.php" method="post">
        <h1>更新资料</h1>
        <input class="update_text" type="text" name="username" placeholder="用户名">
        <input class="update_text" type="password" name="oldpassword" placeholder="旧密码">
        <input class="update_text" type="password" name="newpassword" placeholder="新密码">
        <input class="update_text" type="password" name="repassword" placeholder="确认密码">
        <input class="update_text" type="text" name="name" placeholder="姓名">
        <input class="update_text" type="text" name="Email" placeholder="邮箱">
        <input class="update_btn" type="submit" value="确认修改">
        <a href="./personal.php">返回主页</a>
    </form>
</div>
</body>