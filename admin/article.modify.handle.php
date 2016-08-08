<?php
include_once('../connect.php');
$id =$_POST['id'];
$title = $_POST['title'];
$author = $_POST['author'];
$description = $_POST['description'];
$content = $_POST['content'];
$dateline = time();
if(mysql_query("update article set title ='$title',author='$author',description='$description',content='$content',dateline='$dateline' where id=$id")){
	echo "<script>window.location.href='article.manage.php';window.alert('修改数据成功')</script>";
}else{
	echo mysql_error();
}
?>