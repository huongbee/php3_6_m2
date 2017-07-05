
<?php
if(isset($_POST['gui'])){

	$username = $_POST['username'];
	$password = $_POST['password'];
	//echo $username . $password;
	//die;
	if($username == "admin" && $password == 123){
		echo 'đây là trang quản trị';
	}
	else{ 
		header('Location:bai13.php');
	}

}
else
	header('Location:bai13.php');




?>