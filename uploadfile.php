<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Upload file</title>
	<link rel="stylesheet" href="">
</head>

<?php

if(isset($_POST['guihinh'])){
	$hinh = $_FILES['hinh'];
	$tmp_name =  $hinh['tmp_name']; 
	$name = $hinh['name'];
	move_uploaded_file($tmp_name, "images/$name");
	echo 'Thành công';
}
//đổi tên hình
//chỉ cho phép upload hình
// kiểm tra file size


//upload nhiều file
?>

<body>
	<form method="POST" enctype="multipart/form-data">
		<input type="file" name="hinh">
		<button type="submit" name="guihinh">Upload</button>
	</form>
</body>
</html>