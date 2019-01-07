<?php 
	// 接值
	$name = $_GET['name'];
	// 链接pdo
	$pdo = new PDO("mysql:host=127.0.0.1;dbname=1606","root","root");
	// 写sql语句
	$sql = "SELECT * FROM `user` where name='$name'";
	// 执行
	$sth = $pdo->query($sql);
	$res = $sth->fetch(PDO::FETCH_ASSOC);
	// 判断是否成功
	if($res){
		echo "1";
	}else{
		echo "0";
	}
 ?>