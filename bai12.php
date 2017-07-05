<?php
//echo rand(11,20); //[1->10]
$c = 'Chào cả lớp';
// echo $c = str_replace( 'cả lớp','các bạn', $c);

// echo substr($c, 6);


// var_dump(checkdate(2,32,2017));
// date_default_timezone_set('Asia/Ho_chi_minh');

// echo date('Y-m-d H:i:s');

// print_r(getdate());


// 2017-2-13
function getThu($date){
	$day = date('d',strtotime($date));
	$month = date('m',strtotime($date));
	$year = date('Y',strtotime($date));
	$jd = gregoriantojd($month, $day, $year);
	$thu = jddayofweek($jd,0);
	switch($thu){
		case 0 : $thu = 'Chủ nhật'; break;
		case 1 : $thu = 'Thứ hai'; break;
		case 2 : $thu = 'Thứ ba'; break;
		case 3 : $thu = 'Thứ tư'; break;
		case 4 : $thu = 'Thứ năm'; break;
		case 5 : $thu = 'Thứ sáu'; break;
		case 6 : $thu = 'Thứ bảy'; break;
	}
	return $thu;
}

echo getThu('2018-7-26')



?>