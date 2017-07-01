<?php

// $array = array('PHP', 'iOS', 'NodeJS');
// $arr = array(
// 			'khoaphp'	=>	'PHP',
// 				1		=>	'iOS', 
// 			'khoaNode'	=>	'NodeJS'
// 		);

// array_splice($arr, 6, 1, array('khoaReact'=>'ReactJS'));

// print_r($arr);

// foreach($arr as $key => $value){
// 	if($value == 'iOS'){
// 		$arr[$key] = 'Android';
// 	}	
// }





//print_r($arr);


//echo array_search('PHP', $arr);


//echo array_key_exists('khoa',$arr);

// print_r($array);
// print_r($arr);

// echo $array[1];
// echo $arr['khoaNode'];

// for($i=0; $i<count($array); $i++){
// 	echo $array[$i].'<br>';
// }
// foreach($arr as $key => $value){
// 	echo $key. ' '.$value.'<br>';
// }



// $text = "Lớp PHP 3/6";

// $mang = explode(' ', $text);

// print_r($mang);


// $chuoi = implode(' ',$mang);
// echo $chuoi;



// $url = "https://www.youtube.com/watch?v=rRVdJXHaYss";

// $ch = explode('?v=', $url);
// print_r($ch);

// $result = explode('&t=', $ch[1]);
// echo ($result[0]);

function incauchao(){
	$arr = array("Chào bạn",'Chào cả lớp');
	return $arr;
	//return 'Chào cả lớp';
}

$chao =  incauchao(); //array

$text = '12345678';
//echo $text;
//print_r($chao);



function tinhtong(&$a){ //tham biến
	return $a+=1; // $a = $a+1
}


$a = 10;

// echo tinhtong($a);
// echo '<br>';
// echo $a;

// try{
// 	echo $A;
// }
// catch(\Exception $e){
// 	echo $e->getMessage('Lỗi');
// }


// function checkNum($a){
// 	if($a>10){
// 		throw new Exception("Số phải bé hơn hoặc bằng 10");
// 	}
// 	return true;
	
// }

// try{
// 	checkNum(15);
// }
// catch(Exception $e){
// 	echo  'Message: ' .$e->getMessage();
// }


//ax+b=0, tìm x khi biết 2 số a và b

function PTB1($a ,$b){
	$kq = '';
	if($b==0){
		
		if($a==0){
			return $kq = "PT vô nghiệm";
		}
		else{
			return $kq = 0;
		}
	}

	else{
		return $kq = round(-($b/$a),2);
	}
}

//3x+5=0
//echo PTB1(3,5);


// ax^2 + bx + c = 0
function PTB2($a,$b,$c){
	$kq = '';
	if($a == 0){ //PTB1
		$kq = PTB1($b,$c);
	}
	else{
		$delta = (pow($b,2)-(4*$a*$c));
		if($delta==0){
			$kq = -($b/(2*$a));
		}
		elseif($delta>0){
			$kq = "PT có 2 nghiệm pb: x1=".round(((-$b+sqrt($delta))/(2*$a)),2).' và x2='.round(((-$b-sqrt($delta))/(2*$a)),2);
		}
		else{
			$kq = 'PT vô nghiệm';
		}
	}
	return $kq;
}

//2x^2 +3x+5=0
// echo PTB2(-6,3,0);

// echo PTB2(-6,9,0);


function kiemtraSNT($a){
	if($a<=1){
		return "Nhập số >= 2";
	}
	else{
		for($i=2;$i<=sqrt($a);$i++){
			if($a%$i == 0){
				return false;
			}

		}
		return true;
	}
	
}

$so = 9999;
$kq = 'Các số nguyên tố là: ';
for($i=2;$i<$so;$i++){
	if(kiemtraSNT($i)){
		$kq .= $i.' ';
	}
}
echo $kq;

?>