<?php


// $array = array('PHP', 'iOS', 'Android');

// $json = json_encode($array); //chuyển mảng thành chuỗi json
// $arr = json_decode($json); // chuyển chuỗi json thành mảng

// // echo $json;
// // var_dump($json);
// // print_r($array);
// // var_dump($array);


// // class chao{


// // 	function in_chao(){
// // 		echo 'Chào bạn';
// // 	}


// // }

// // $obj = new chao(); //$obj: là 1 đối tượng; class chao là lớp đối tượng
// // $obj->in_chao();


// //var_dump($obj);


// $a = (float)15;

// $chuoi = "Chào a";
// $arr = explode(' ', $chuoi );
// //var_dump($arr);



// define('pi',3.14); //tạo hằng số, tên pi, giá trị là 3.14
// $r = 10;
// echo 'Chu vi của hình tròn có r = '.$r.' là: '.(2*pi*$r);
// echo '<br>';
// echo "Diện tích của hình tròn có r = $r là: ".(pi*$r*$r);
// echo '<br>';
// echo pow($r, 3);
// echo '<br>';

// $a = 10;
// $b = 20;
// $c = $a+$b;
// echo $a;

// echo '<br>';
// $a%=$b; //$a = $a+$b


// //echo $a; //10


// echo '<br>';

//  $a--;
// echo $a;

$canh1 = 5;
$canh2= 6;
$canh3 = 4;

if($canh1+$canh2>$canh3 && $canh1+$canh3>$canh2 && $canh2+$canh3>$canh1){
	echo 'Đây là tam giác. ';
	if($canh1==$canh2 && $canh3==$canh2){
		echo 'Đây là tam giác đều';
	}
	elseif($canh1==$canh2 || $canh1==$canh3 || $canh3==$canh2){
		echo 'Đây là tam giác cân';
	}
	elseif(($canh1*$canh1 + $canh2*$canh2 == $canh3*$canh3) || $canh1*$canh1 + $canh3*$canh3 == $canh2*$canh2 || $canh3*$canh3 + $canh2*$canh2 == $canh1*$canh1){
		echo 'Đây là tam giác vuông';
	}
	else{
		echo 'Đây là tam giác thường';
	}

}
else{
	echo "đây ko phải là tam giác";
}




?>