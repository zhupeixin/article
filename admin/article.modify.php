<?php
	include_once("../connect.php");	
	$id = $_GET['id'];
	$res = mysql_query("select * from article where id=$id");
	$data = mysql_fetch_assoc($res);
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>文章后台管理系统</title>
		<link rel="stylesheet" type="text/css" href="../commen.css"/>
	</head>
	<body>
		<div id="header">
			<div id="head">
				<div id="header_title">
					文章后台管理系统
				</div>
			</div>
		</div>
		<div id="header_border"></div>
		
		<!--内容部分-->
		<div id="content" style="height: 550px;">
			<div id="left_bar">
				<ul>
					<li><a href="article.add.php">新增文章></a></li>
					<li><a href="article.manage.php">文章列表</a></li>
				</ul>
			</div>
			<div id="right_content">
				<span id="right_content_title">
					修改文章
				</span>
				<form action="article.modify.handle.php" method="post">
					<input type="hidden" name="id" value="<?php echo $data['id']?>" />
					<table border="0" cellspacing="0" cellpadding="10px">
						<tr>
							<td>标题</td>
							<td><input type="text" name="title" id="title" value="<?php echo $data['title']?>" /></td>
						</tr>
						<tr>
							<td>作者</td>
							<td><input type="text" name="author" id="author" value="<?php echo $data['author']?>" /></td>
						</tr>
						<tr>
							<td>描述</td>
							<td><textarea name="description" rows="5" cols="20"><?php echo $data['description']?></textarea></td>
						</tr>
						<tr>
							<td>内容</td>
							<td><textarea name="content" rows="10" cols="20"><?php echo $data['content']?></textarea></td>
						</tr>
					</table>
					<input type="submit" value="保存" style="float: right;margin-right: 125px;"/>
				</form>
			</div>
		</div>
		<div id="footer"></div>
	</body>
</html>