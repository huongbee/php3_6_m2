<?php
session_start();




if(isset($_SESSION['username']) && isset($_SESSION['password'])){
	if($_SESSION['username'] == 'admin' && $_SESSION['password'] == 123){
		echo $_SESSION['thanhcong'].'<br/>';
		echo 'Chào bạn, '.$_SESSION['username'];

	}
	else{
		header('Location:login.php');
	}


}
elseif(isset($_COOKIE['username']) && isset($_COOKIE['password'])){
	if($_COOKIE['username'] == 'admin' && $_COOKIE['password'] == 123){
		setcookie('username','admin',time()+60);
		setcookie('password',123,time()+60);
		echo 'Chào bạn, '.$_COOKIE['username'];

	}
	else{
		header('Location:login.php');
	}


}
else{
	header('Location:login.php');
}
?>

<div>
	<a href="dangxuat.php">Đăng xuất</a>
</div>


<div>
	<form method="POST">
		<button type="submit" name="logout">Đăng xuất</button>
	</form>
</div>
<?php


if(isset($_POST['logout'])){
	session_destroy();
	header('Location:login.php');
}


?>