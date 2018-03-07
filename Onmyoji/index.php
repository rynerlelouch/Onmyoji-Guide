<!DOCTYPE html>
<html>
<head>
	<title>Trang Chủ Âm Dương Sư</title>
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
		}
		.topnav {
			background-color: black;
			position: fixed;
			width: 94.3%;
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
		.topnav .search-container {
			float: right;
		}
		.topnav .search-container button {
			float: right;
			padding: 6px 10px;
			margin-top: 8px;
			margin-right: 16px;
			font-size: 17px;
			border: none;
			cursor: pointer;
			border-radius: 0 5px 5px 0;
		}
		.topnav input[type=text] {
			padding: 6px;
			margin-top: 8px;
			font-size: 17px;
			border: none;
			outline: none;
			border-radius: 5px 0 0 5px;	
		}
		.topnav .search-container button:hover {
			background: #ccc;
		}
		.title-page {
			padding-top: 80px;
			text-align: center;
		}
		.home-page-image {
			text-align: center;
			display: inline-block;
			padding-bottom: 10px;
			
		}
		.info {
			width: 100%;
			height: 100%;
			display: inline-block;
			position: relative;

		}
		.info-game {
			position: relative;
			float: left;
			width: 40%;						
			border-width: 5px;
			border-style: solid;
			border-color: black;
			border-radius: 10px;
			margin-top: 20px;
			margin-left: 20px;	
		}
		.intro-game {
			position: relative;
			margin-right: 10px;
			float: right;
		}
		.clear {
			clear: both;
		}
		h1,h2,h3,h4,h5,li,a,th,tr,td,p{
			font-family: none;
		}
		.logo-page {
			right: 20px;
			z-index: 2;
			position: absolute;
			cursor: pointer;
		}
		#index-page:hover{
			border-radius: 0 0 0 20px;
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
	<div class="title-page">
		<img src="images/title-page3.png" style="display:inline-flex;">
	</div>	
	<div class="home-page-image">
		<img src="images/home-page.png" style="width: 80%;height: 70%; ">
	</div>
	<div class="clear"></div>
	<div style="border-radius: 20px 20px;border:10px solid black; margin: 0 20px;"></div>
	<div class="info">
		<div class="info-game">
			<h2 style="font-size: 30px;border-bottom: 5px solid black; text-align: center; padding-bottom: 10px;">Đôi nét về game Onmyoji</h2>
			<div style="margin: 0 10px;">
				<p style="font-size: 20px;color: #1a1a1a;word-spacing: -1px;"><strong style="color: black;">Onmyoji</strong> là một game RPG 3D được phát triển bởi hãng NetEase Games. Bối cảnh được xây dựng trong game là thời kỳ Heian, nói về một âm dương sư là Abe no Seimei trong hành trình tìm kiếm lại những ký ức đã mất của mình. Nhiệm vụ của người chơi là triệu hồi các Shikigami, lập khế ước và cùng nhau đánh bại kẻ thù! Trò chơi hiện đã có phiên bản Beta dành cho PC, Android và iOS</p>
			</div>			
		</div>	
		<div class="intro-game">
			<p style="font-size: 20px;text-align: center;background-color:black;color: white;padding-top: 7px;padding-bottom: 7px;border-radius: 20px;margin:10px 100px;"><strong>Intro Game Onmyoji</strong></p>
			<iframe width="730px" height="380px" src="https://www.youtube.com/embed/4eJn3ASptC0?autoplay=0" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"></iframe>
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
<!--
	<div class="search-container">
			<form action="/action_page.php">
				<input type="text" name="search" placeholder="Search...">
				<button type="submit"><i class="fa fa-search"></i></button>
			</form>		
		</div>		
	-->
