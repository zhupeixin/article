<?php
include_once('../connect.php');
$id = $_GET['id'];
if(mysql_query("delete from article where id=$id")){
	echo "<script>window.location.href=\"article.manage.php\";window.alert(\"删除数据成功\")</script>";
}else{
	echo mysql_error();
}
?>