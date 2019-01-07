<?php 
	// 接值
	$name = $_POST['name'];
	$pwd = $_POST['pwd'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	// 链接pdo
	$pdo = new PDO("mysql:host=127.0.0.1;dbname=1606","root","root");
	// 写sql语句
	$sql = "INSERT INTO `user` values(null,'$name','$pwd','$email','$phone')";
	// 执行sql语句
	$res = $pdo->exec($sql);
	// 是否成功
	if($res){
		echo "<script>alert('注册成功');location.href='login.html'</script>";
	}else{
		echo "<script>alert('注册失败');location.href='index.html'</script>";
	}
 ?>