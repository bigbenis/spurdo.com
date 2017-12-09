<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>spurdo</title>
	<link rel="stylesheet" type="text/css" href="/style/style.css">
	<script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script> 
	<script type="text/javascript" src="/js/script.js"></script>
</head>

<body>
	<h2>ha-ha</h2>
	<h1>benis</h1>
	<style type="text/css">
		<?php $card1=0;
		$card2=0;
		$card3=0;

		$card1=mt_rand(0, 7);
		$card2=mt_rand(0, 7);
		$card3=mt_rand(0, 7);

		while ($card2==$card1) { //цикл, который будет крутиться, если вторая и первая карта совпадают

			$card2=mt_rand(0, 7);
		}

		while ($card3==$card1 OR $card3==$card2) { //цикл, который будет крутиться, если 3 и 1 или 3 и 2 карта совпадают


			$card3=mt_rand(0, 7);
		}

		?>#liniya1 {

			width: 300px;
			height: 550px;
			margin: 30px;
			background: url(images/<?php echo $card1; ?>.png) no-repeat center top;
			background-size:100%;
			float: left;
			text-align: center;

		}

		#liniya2 {

			width: 300px;
			height: 550px;
			margin: 30px;
			background: url(images/<?php echo $card2; ?>.png) no-repeat center top; /*кусок пхп, генерящий название пикчи*/
			background-size:100%;
			float: left;
			text-align: center;
		}

		#liniya3 {

			width: 300px;
			height: 550px;
			margin: 30px;
			background: url(images/<?php echo $card3; ?>.png) no-repeat center top;
			background-size:100%;
			float: left;
			text-align: center;
		}
	</style>
<div align="center">
	<div id="liniya1"></div>
	<div id="liniya2"></div>
	<div id="liniya3"></div>
	</body>
</div>
</html>