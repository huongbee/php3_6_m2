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
	/*$hinh = $_FILES['hinh'];


	$size = $hinh['size'];
	if($size>95*1024){ //95kb
		echo "file quá lớn";
	}
	else{
		$tmp_name =  $hinh['tmp_name']; 
		$name_basic = $hinh['name'];

		//c1
		//1.jpg
		$name = pathinfo($name_basic, PATHINFO_FILENAME).'-'.rand(55555,99999).'-'.time();
		
		//c2
		// $vitri = strripos($name_basic, '.');
		// $name = substr($name_basic, 0,$vitri);

		$ext = pathinfo($name_basic, PATHINFO_EXTENSION);//PNG


		$arr_ext = array('png','jpg','gif','jpeg','PNG');

		if(in_array($ext, $arr_ext)){

			move_uploaded_file($tmp_name, "images/".$name.'.'.$ext);
			echo 'Thành công';
		}
		else{
			echo 'File không được phép';
		}
	}
	//đổi tên hình
	//chỉ cho phép upload hình
	// kiểm tra file size


	//upload nhiều file

	


	//2-87670-1499338791.PNG*/

	$hinh = $_FILES['hinh'];

	$arr_ext = array('png','jpg','gif','jpeg','PNG');

	foreach ($hinh['name'] as $value) {
		$ext = pathinfo($value, PATHINFO_EXTENSION);
		if(!in_array($ext, $arr_ext)){
			echo 'File không được phép';
			die;
		}
	}
	foreach ($hinh['size'] as $size) {
		if($size>95*1024){
			echo 'File quá lớn';
			die;
		}
	}
	foreach ($hinh['name'] as $key => $value) {
		//tmp_name
		//name
		$name = pathinfo($value, PATHINFO_FILENAME).'-'.rand(55555,99999).'-'.time();
		$ext = pathinfo($value, PATHINFO_EXTENSION);

		if(!in_array($ext, $arr_ext)){
			echo 'File không được phép';
			die;
		}
		move_uploaded_file($hinh['tmp_name'][$key], "images/".$name.'.'.$ext);
		
	}
	echo 'Thành công';


}

?>

<body>
	<form method="POST" enctype="multipart/form-data" >
		<input type="file" name="hinh[]" accept="image/*" multiple>
		<button type="submit" name="guihinh">Upload</button>
	</form>
</body>
</html>