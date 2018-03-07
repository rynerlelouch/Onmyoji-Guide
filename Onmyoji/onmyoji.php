<!DOCTYPE html>
<html>
<head>
	<title>Âm dương sư</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		body {
			margin-left: 40px;
			margin-right: 40px;
			background: url("images/background3.png") no-repeat fixed center;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			height: 100%;
		}
		.topnav {
			background-color: black;;
			position: fixed;
			width: 94.3%;
			z-index: 1;
			border-radius: 0 0 20px 20px;
		}
		.topnav-icon {
			position: relative;
			float: right;
			margin-top: 4px;
			margin-right: 5px;
			height: 40px;
			width: 40px;
			margin-right: 10px;
		}
		.topnav-icon:hover {
			opacity: 0.7;
			transition-duration: 1s;
			cursor: pointer;
		}
		.topnav a {
			float: left;
			display: block;
			color: #f2f2f2;
			text-align: center;
			padding: 20px 30px;
			text-decoration: none;
			font-size: 20px;
		}
		.topnav a:hover {
			background-color: #ff0000;
			color: black;
		}
		.clear {
			clear: both;
		}
		.logo-page {
			right: 20px;
			z-index: 3;
			position: absolute;
			cursor: pointer;
		}
		#index-page:hover{
			border-radius: 0 0 0 20px;
		}
		.information-introduction {
			color: black;
			font-size: 20px;
			margin-left: 50px;
			margin-right: 50px;
			margin-top: 50px;
		}
		.information-levelling {
			color: black;
			margin-top: 60px;
			margin-left: 50px;
			margin-right: 50px;
		}
		h1,h2,h3,h4,h5,li,a,th,tr,td,p{
			font-family: none;
		}
		#tab-shikigami:hover {
			background-color: red;
			color: white;
		}
		.active #tab-shikigami {
			background-color: white;
			color: black;
		}
	</style>
</head>
<body>
	<div class="topnav" id="mytopnav">
		<a href="index.php" id="index-page">Trang chủ</a>
		<a href="onmyoji.php">Âm dương sư</a>
		<a href="shikigami.php">Thức thần</a>
		<a href="soul.php">Ngự hồn</a>
		<a href="contact.php">Liên hệ</a>
		<img src="images/Onmyoji-logo.png" height="100px" class="logo-page" onclick="redirect_index()">
	</div>
	<div class="clear"></div>
	<div style="padding-top: 100px;"></div>
	<div>
		<h2 style="text-align: center;">Tiêu đề âm dương sư tại đây!!!!!!</h2>
		<div style="text-align: center;">
			<img src="images/onmyoji-page.png" style="display: inline-block;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius: 10px;">
		</div>	
	<div class="information-introduction">
		<h2 style="margin-left: 10px; border-bottom: 1px solid black">Giới thiệu</h2>
		<p style="margin-left: 10px;">Âm dương sư là nhân vật chính của câu chuyện, là người hiểu rõ sự vận động của trời đất và vận mệnh, âm dương ngũ hành. Cùng với những hiểu biết và kỹ năng của mình, họ mạo hiểm tính mạng để phục hồi và duy trì sự cân bằng của nhân gian và âm giới. </p>
	</div>
	<div class="information-levelling">
		<h2 style="margin-left: 10px; border-bottom: 1px solid black">Các cấp độ trong game</h2>
		<div class="container" style="width: 100%;">
			<ul class="nav nav-tabs" style="font-weight: bold;font-size: 17px;">
			<li class="active"><a data-toggle="tab" href="#experience" id="tab-shikigami">Kinh Nghiệm</a></li>
			<li><a data-toggle="tab" href="#attack" id="tab-shikigami">Tấn Công</a></li>
			<li><a data-toggle="tab" href="#health" id="tab-shikigami">Máu</a></li>
			<li><a data-toggle="tab" href="#defense" id="tab-shikigami">Phòng Thủ</a></li>
			</ul>
		</div>	
		<div class="tab-content" style="border-top: 3px solid black;">
			<div id="experience" class="tab-pane fade in active">
				<h1>Đợi cơ sở dữ liệu</h1>
			</div>
			<div id="attack" class="tab-pane fade">
				<h1>Đợi cơ sở dữ liệu</h1>
			</div>
			<div id="health" class="tab-pane fade">
				<h1>Đợi cơ sở dữ liệu</h1>
			</div>
			<div id="defense" class="tab-pane fade">
				<h1>Đợi cơ sở dữ liệu</h1>
			</div>
		</div>
	</div>
	</div>
	<div class="clear"></div>
	<div style="padding-top: 50px;border-bottom: 1px solid #4d4d4d;margin: 0 50px;"></div>
	<div style="position: relative;display: inline-block; width: 100%;margin-top: 20px;">
		<img title="Facebook" class="topnav-icon" src="images/contact/facebook.png" style="margin-right: 50px;">
		<img title="Twitter" class="topnav-icon" src="images/contact/twitter.png">
		<img title="Pinterest" class="topnav-icon" src="images/contact/pinterest.png">		
	</div>
	<script type="text/javascript">
		function redirect_index()
		{
			window.location.replace("index.php");
		}
	</script>
</body>
</html>