<?php

$a = 12;
if(is_int($a)){
	echo 'Đây là số';
}
else{
	echo 'Đây ko phải số';
}

// if(empty($a)){
// 	echo 'Không có a';

// }
// else{
// 	echo 'có a';
// }


echo is_int($a)?'Đây là số':'Đây ko phải số';
echo '<br>';
/*Cho số a=3 và $b = 5. Dùng toán tử 3 ngôi in ra màn hình số lớn hơn*/

$a = 17;
$b = 15;
$c = 20;
echo "Max là: ". ($a>$b?$a:$b);
echo '<br>';
/*Cho số a=3 và $b = 5, $c = 8 . Dùng toán tử 3 ngôi in ra màn hình số lớn nhất*/
echo "Max là:". (($a>$b&&$a>$c)?$a:(($b>$c)?$b:$c));
echo '<br>';
echo "Max là:". (($a>$b?$a:$b)>$c?($a>$b?$a:$b):$c);
echo '<br>';


$d = 'Chào bạn';
switch($d){
	case 1:echo 'Một'; break;
	case 2:echo 'Hai'; break;
	case 3:echo 'Ba'; break;
	default: echo 'Đây không phải số'; break;
}
echo '<br>';


$arr = array(1,3,4,5,'khoa7'=>7,10);
//echo $arr[3];
//echo count($arr); //6
//$e = 10;
// for($i=0;$i<count($arr);$i++){
// 	echo $arr[$i].' ';
// }

foreach($arr as $ptu){
	echo $ptu.' ';
}


echo '<br>';
$k = 10;
$j = 1;
// while($j<=$k){
// 	echo $j.' ';
// 	$j++; //$j=$j+1
// }

do{
	echo $j.' ';
	$j++; //$j=$j+1
}
while($j<=$k);



$tong = 0;
$t = 1;
while($t<10){
	$tong+=$t;
	$t++;
}
echo $tong;



$year = 2020;
switch(($year%10)){
	case 0: $can = "Canh"; break;
	case 1: $can = "Tân"; break;
	case 2: $can = "Nhâm"; break;
	case 3: $can = "Quý"; break;
	case 4: $can = "Giáp"; break;
	case 5: $can = "Ất"; break;
	case 6: $can = "Bính"; break;
	case 7: $can = "Đinh"; break;
	case 8: $can = "Mậu"; break;
	case 9: $can = "Kỷ"; break;
}
switch(($year%12)){
	case 0: $chi = "Thân"; break;
	case 1: $chi = "Dậu"; break;
	case 2: $chi = "Tuất"; break;
	case 3: $chi = "Hợi"; break;
	case 4: $chi = "Tí"; break;
	case 5: $chi = "Sửu"; break;
	case 6: $chi = "Dần"; break;
	case 7: $chi = "Mão"; break;
	case 8: $chi = "Thìn"; break;
	case 9: $chi = "Tị"; break;
	case 10: $chi = "Ngọ"; break;
	case 11: $chi = "Mùi"; break;
}
echo 'Năm nay là năm '.$can.' '.$chi; 
?>