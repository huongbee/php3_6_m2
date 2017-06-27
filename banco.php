<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Bàn cờ vua</title>
	<link rel="stylesheet" href="">
</head>
<style>
	.oco{
		width: 50px;
		height: 50px;
		float: left;
	}
	.banco{
		width: 400px;
	}
	.trang{
		background-color: #fff 
	}
	.den{
		background-color: #000
	}
</style>
<body>
	<div class="banco">
		<?php
		for($y=1;$y<=8;$y++){
			for($x=1;$x<=8;$x++){
				if(($y+$x)%2==0){
					echo '<div class="oco trang"></div>';
				}
				else{
					echo '<div class="oco den"></div>';
				}
			}
		}
		?>
		
	</div>
</body>
</html>