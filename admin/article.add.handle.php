<?php
include_once('../connect.php');
$title = $_POST['title'];
$author = $_POST['author'];
$description = $_POST['description'];
$content = $_POST['content'];
$dateline = time();
if(mysql_query("insert into article(title,author,description,content,dateline)values('$title','$author','$description','$content',$dateline)")){
	echo "<script>window.location.href='article.add.php';window.alert('插入数据成功')</script>";
}else{
	echo mysql_error();
}

?>