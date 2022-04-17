<?php
    $server="localhost";
    $dbuser="root";
    $dbpwd="123456";
    $db="blog";
    $conn=new mysqli($server,$dbuser,$dbpwd,$db);
    if($conn->connect_error){
        die("连接失败：".$conn->connect_error);
    }
?>