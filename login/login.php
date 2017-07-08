<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Đăng nhập</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<?php

if(isset($_POST['dangnhap'])){
	
	$_SESSION['username'] =  $_POST['username'];
	$_SESSION['password'] = $_POST['password'];
	if($_SESSION['username'] == 'admin' && $_SESSION['password'] == 123){


		if(isset($_POST['nhodangnhap']) && ($_POST['nhodangnhap']=='on'  || $_POST['nhodangnhap']==1)){
			setcookie('username','admin',time()+60);
			setcookie('password',123,time()+60);

		}


		unset($_SESSION['loi']);
		$_SESSION['thanhcong'] = 'Đăng nhập thành công';
		header('Location:admin.php');
	}
	else{
		$_SESSION['loi'] = "Sai thông tin đăng nhập";

	}
}



?>

<body>
	<div class="container">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<h2>Đăng nhập</h2>
			<?php if(isset($_SESSION['loi'])): ?>
			<div class="alert alert-danger"><?=$_SESSION['loi']?></div>
			<?php endif ?>
			<form method="POST">
				<div class="form-group">
					<label>Username:</label>
					<input class="form-control" name="username" placeholder="Nhập username" type="text">
				</div>
				<div class="form-group">
					<label>Password:</label>
					<input class="form-control" name="password" placeholder="Nhập mật khẩu" type="password">
				</div>
				<div class="checkbox">
				    <label><input type="checkbox" name="nhodangnhap"> Remember me</label>
				</div>
				<div class="form-group">
					<button class="btn btn-success" name="dangnhap" type="submit">Login</button>
				</div>
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</body>
</html>