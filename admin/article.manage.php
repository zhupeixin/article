<?php
	include_once("../connect.php");
	$res = mysql_query("select id,title,author,dateline from article order by dateline desc");			
	if(isset($res)&&$res){
		while($row = mysql_fetch_assoc($res)){
			$data[] = $row;			
		}
	}else{
		$data = array();
	}
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
					<li><a href="article.add.php">新增文章</a></li>
					<li><a href="article.manage.php">文章列表></a></li>
				</ul>
			</div>
			<div id="right_content">
				<span id="right_content_title">
					文章管理列表
				</span>
				<table border="1px" cellspacing="" cellpadding="1px">
					<tr><th>编号</th><th>标题</th><th>作者</th><th colspan="2">操作</th></tr>
					<?php
					if(!empty($data)){
						foreach($data as $values){
							$id = $values['id'];
							$title = $values['title'];
							$author = $values['author'];
							echo "<tr><td class=\"text-center\">$id</td><td>$title</td><td class=\"text-center\">$author</td>
							<td class=\"text-center\"><a href=\"article.modify.php?id=$id\">编辑</a></td><td class=\"text-center\"><a href=\"article.del.handle.php?id=$id\">删除</a></td></tr>";
						}
					}	
					?>
					
					
				</table>
			</div>
		</div>
		<div id="footer"></div>
	</body>
</html>