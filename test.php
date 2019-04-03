<!--
<?php

//造一个mysqli对象，造连接对象okok
$db=new MySQLi("localhost","root","aaa052460","test");
//括号里面填的是IP地址域名，用户名，密码，数据库的名字

if($db->connect_error){
	echo 'Could not connect to database.';
	echo "<br/>";
	exit;
}
else{
	echo  '连接成功';
	echo "<br/>";
}
$sql = "CREATE DATABASE test3";
if ($db->query($sql) === TRUE) {
    echo "数据库创建成功";
} 
else {
    echo "Error creating database: " ;
}
$db->close();//关闭sql连接
?>
-->
<!DOCTYPE html>
<html>
<body>

<?php
echo "Hello World!";
?>

</body>
</html>
