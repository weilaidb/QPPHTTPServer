<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
< html xmlns="http://www.w3.org/1999/xhtml">
< head>
< meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
< title>无标题文档</title>
< /head>

<body>
< center><table style="border:dotted;border-color:#F06">
< caption>留言内容</caption>
< tr><th>编号</th><th>用户</th><th>标题</th><th>内容</th><th>发表时间</th></tr>
< ?PHP
$link=mysql_connect('localhost','root','123')or die("数据库连接失败");
//连接数据库
mysql_select_db('lyb',$link);//选择数据库
mysql_query("set names utf8");//设置编码格式

$q="select * from content";//设置查询指令
$result=mysql_query($q);//执行查询
while($row=mysql_fetch_assoc($result))//将result结果集中查询结果取出一条
{
 echo"<tr><td>".$row["id"]."</td><td>".$row["username"]."</td><td>".$row["title"]."</td><td>".$row["content"]."</td><td>".$row["lastdate"]."</td><tr>";
 
}
?>
< /table>
< a href="liuyanban.html">返回</a>

</center>
< /body>
< /html>