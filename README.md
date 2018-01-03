# article
文章管理系统PHP+Mysql
需要在本地创建数据库账号密码可以在connect.php配置
建立article数据库
建立article数据表
```sql
create table article(id int(11) primary key auto_increment,title char(100) not null,author char(50) not null,
description text not null,content text not null,dateline int(11) not null default 0);
```
字段：id,title,author,description,content,dateline
