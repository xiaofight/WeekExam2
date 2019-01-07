<?php 
	// 接值
	$name = $_POST['name'];
	$pwd = $_POST['pwd'];
	// 链接pdo
	$pdo = new PDO("mysql:host=127.0.0.1;dbname=1606","root","root");
	// 写sql语句
	$sql = "SELECT * FROM `user` where name='$name' and pwd='$pwd'";
	// 执行sql语句
	$sth = $pdo->query($sql);
	$res = $sth->fetch(PDO::FETCH_ASSOC);
	// 是否成功
	if($res){
		echo "<script>alert('登录成功');location.href='show.php'</script>";
	}else{
		echo "<script>alert('登录失败');location.href='login.html'</script>";
	}
 ?>