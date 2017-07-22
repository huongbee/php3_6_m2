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

	$sql = "DELETE FROM theloai WHERE id>=10";
	
	$dem = $dbh->exec($sql);
	echo $dem;

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

	/*$sql = "INSERT INTO theloai(name,alias,image) VALUES (?,?,?)";

	$sth = $dbh->prepare($sql);
	//1
	$sth->bindParam(1,$name);
	$sth->bindParam(2,$alias);
	$sth->bindParam(3,$hinh);
	
	$name = 'Thể loại 5';
	$alias = 'The-loai-5';
	$hinh = '3.png';

	$sth->execute();



	//2
	
	$sth->bindParam(1,$name);
	$sth->bindParam(2,$alias);
	$sth->bindParam(3,$hinh);

	$name = 'Thể loại 6';
	$alias = 'The-loai-6';
	$hinh = '4.png';

	$sth->execute();

	echo 'thành công';*/
	//UPDATE
	//không tham số
	/*$sql = "UPDATE theloai SET name='thể loại 7', alias='the-loai-7' WHERE id=13";
	$dbh->exec($sql);
	echo 'Thành công';*/

	/*//có tham số
	$sql ="UPDATE users SET password=?";
	$sth = $dbh->prepare($sql);

	$sth->bindParam(1,$password);
	//$sth->bindParam(2,$id);

	$password = md5('000000');
	//$id = 14;

	$sth->execute();

	echo $sth->rowCount();*/




}
catch(PDOException  $e){
	echo "Lỗi kết nối: ".$e->getMessage();
	die;
}







?>