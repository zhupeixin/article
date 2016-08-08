<?php
include_once("connect.php");
$search=$_GET['search'];
$query = mysql_query("select * from article where title like '%$search%' order by dateline desc");
if($query&&mysql_num_rows($query)){
		while($row = mysql_fetch_assoc($query)){
			$data[] = $row;
		}
	}
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>文章发布管理系统</title>
		<link rel="stylesheet" type="text/css" href="commen.css"/>
	</head>
	<body>
		<div id="header">
			<div id="head">
				<div id="header_title">
					文章发布系统
				</div>
				<ul id="menu">
					<li>
						<a href="index.php">首页</a>
					</li>
					<li>
						<a href="about.php">关于我们</a>
					</li>
					<li>
						<a href="connectus.php">联系我们</a>
					</li>
				</ul>
			</div>
		</div>
		<div id="header_border"></div>
		
		<!--内容部分-->
		<div id="content_box">
		<div id="content">
			<div id="left_content">
				<?php if(empty($data)){	
			echo "当前没有文章，请管理员在后台添加文章";
		}else{foreach($data as $values){?>
				<div class="content_list">
					<ul>
						<li><span class="content_title"><a href="article.show.php?id=<?php echo $values['id']?>"><?php echo $values['title']?></a></span><span class="content_author">作者：<?php echo $values['author']?></span></li>
						<hr style="height: 5px;background-color: #EDEDED;"/>
						<li><p><?php echo $values['description']?></p></li>
						<li><p class="content_more"><a href="article.show.php?id=<?php echo $values['id']?>">查看全文</a>>></p></li>
					</ul>
				</div>
				<?php }}?>
			</div>
			<div id="right_find">
				<div id="sidebar">
					<span id="search_title">
						search
					</span>
					<hr style="width: 100%;height: 5px;background-color: #EDEDED;margin-bottom: 20px;" />
					<form action="article.list.php" method="post">
						<input type="text" name="search" id="search" value="" />
						<input type="submit" value="搜索"/>
					</form>
				</div>
			</div>
		</div>
		</div>
		<div id="footer"></div>
	</body>
</html>