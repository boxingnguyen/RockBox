<!DOCTYPE html>
<html>
<head>
	<title>PlayingTime</title>
  	<link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="main.js" type="text/javascript"></script>
	<style type="text/css">
		h1 {
			text-align: center;
		}
		.group-btn {
			margin: 15% 32%;
			position: relative;
		}
		.btn1 {
			position: absolute;
			margin: -45px 0 0 71px; /* top right bottom left*/
		} 
		.btn2 {
			position: absolute;
			margin: 102px 0 0 72px;
		}
		.btn3 {
			position: absolute;
			margin: 27px 0 0 157px;
		}
		.btn4 {
			margin: 27px 0 0 -17px;
		}
		button.btn-stop	{
			position: absolute;
			margin: 28px 0px 0 247px;
			width: 90px;
			height: 62px;
			border-radius: 5px;
		}
		button {
			width: 83px;
			height: 62px;
			border-radius: 8px;
		}
	</style>
</head>
<body>
	<h1>Đi Chơi Tham Mự</h1>
	<div class="group-btn">
		<button class="btn btn-success btn1">forward</button>
		<button class="btn btn-success btn2">backward</button>
		<button class="btn btn-success btn3">right</button>
		<button class="btn btn-success btn4">left</button>
		<button class="btn btn-danger btn-stop">Stop</button>
	</div>
</body>
</html>
