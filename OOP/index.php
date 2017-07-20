<?php

interface HS{
	 public  function getChieuCao();
	 public  function getA();
	 /*public  function getB(){

	 }*///=>SAi
}
abstract class HS2{
	abstract public  function getChieuCao();
	abstract public  function getA();
	 public  function getB(){

	 }//=>ĐÚNG
}



class a implements HS{
	function getChieuCao(){
		echo 2323;
	}

	function getA(){
		echo 'A';
	}

	function getB(){
		echo 'B';
	}

}

$a = new a;
$a->getChieuCao();



// class HocSinh{


// 	protected static $chieucao;


// 	/*public function __destruct(){
// 		echo 'class HocSinh đã bị hủy';
// 	}

// 	public function __construct($a){ //hàm khởi tạo
// 		echo $a;
// 	}*/

// 	public static function getChieuCao(){
// 		return HocSinh::$chieucao; //152
// 	}


// 	public function setChieuCao($chieu_cao){
// 		HocSinh::$chieucao = $chieu_cao;
// 	}

// 	 function getName(){
// 		return HocSinh::getChieuCao();
// 	}

// 	// function getName(){
// 	// 	echo 234;
// 	// }


// }


// $hs = new HocSinh;
// $hs->setChieuCao(12);
// var_dump($hs->getName());

// class HS extends HocSinh{

// 	// function getName(){
// 	// 	echo 234;
// 	// }

// }


/*$hs = new HS('Hello');
echo $hs->getName();
$hs->setChieuCao(152);
var_dump($hs->getChieuCao());*/

// $sv = new HocSinh;

?>