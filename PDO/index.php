<?php

try{

	$dbh = new PDO('mysql:host=localhost;dbname=php_3_6', 'root', '');

	$dbh->exec("set names utf8"); 


	// $d = $dbh->exec('DELETE FROM tintuc WHERE id = 1001');
	// if($d){
	// 	echo "thực thi thành công";
	// }
	// else{
	// 	echo 'thất bại';
	// }
	/*$sql = "SELECT * FROM theloai";
	$stmt = $dbh->prepare($sql);//
	if($stmt->execute()){ //thực thi thnahf công
		$data = $stmt->fetchAll(PDO::FETCH_OBJ); //lấy về dữ liệu
		//print_r($data);
		foreach($data as $value){
			//echo $value['name']. '<br>';
			echo $value->name. '<br>';
		}
	}
	else{
		//thất bại
		echo 'Lỗi SQL';
	}*/
	//$name = $_GET['name'];

	$sql = "INSERT INTO theloai(name,alias,image) VALUES (?,?,?)";

	$sth = $dbh->prepare($sql);
	//1
	$sth->bindParam(1,$name);
	$sth->bindParam(2,$alias);
	$sth->bindParam(3,$hinh);
	
	$name = 'Thể loại 3';
	$alias = 'The-loai-3';
	$hinh = '3.png';

	$sth->execute();



	//2
	
	$sth->bindParam(1,$name);
	$sth->bindParam(2,$alias);
	$sth->bindParam(3,$hinh);

	$name = 'Thể loại 4';
	$alias = 'The-loai-4';
	$hinh = '4.png';

	$sth->execute();

	echo 'thành công';

}
catch(PDOException  $e){
	echo "Lỗi kết nối: ".$e->getMessage();
	die;
}







?>