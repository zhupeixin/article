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
					新增文章
				</span>
				<form action="article.add.handle.php" method="post">
					<table border="0" cellspacing="0" cellpadding="10px">
						<tr>
							<td>标题</td>
							<td><input type="text" name="title" id="title" value="" /></td>
						</tr>
						<tr>
							<td>作者</td>
							<td><input type="text" name="author" id="author" value="" /></td>
						</tr>
						<tr>
							<td>描述</td>
							<td><textarea name="description" rows="5" cols="20"></textarea></td>
						</tr>
						<tr>
							<td>内容</td>
							<td><textarea name="content" rows="10" cols="20"></textarea></td>
						</tr>
					</table>
					<input type="submit" value="保存" style="float: right;margin-right: 125px;"/>
				</form>
			</div>
		</div>
		<div id="footer"></div>
	</body>
</html>