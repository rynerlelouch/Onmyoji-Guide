<!DOCTYPE html>
<html>
<head>
	<title>Liên Hệ</title>
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
		h1,h2,h3,h4,h5,li,a,th,tr,td,p{
			font-family: none;
		}
		.information {
			color: black;
			margin-left: 50px;
			margin-right: 50px;
		}
		.contact-form {
			color: black;
			border:1px solid black;
			margin-left: 50px;
			margin-right: 50px;
		}
		.container {
			border-radius: 5px;
			color: black;
			padding: 20px;
		}
		input[type=text], select, textarea {
			width: 100%;
			padding: 12px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			margin-top: 6px;
			margin-bottom: 16px;
			resize: vertical;
		}

		input[type=submit] {
			background-color: #ff0000;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		input[type=submit]:hover {
			background-color: #cc0000;
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
	<div style="padding-top: 80px;"></div>
	<div style="text-align: center;">
		<img src="images/contact-background.jpg" height="600px" style="display: inline-block;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
	</div>
	<div class="information">
		<h1 style="border-bottom: 1px solid black;">Liên Hệ Với Chúng Tôi</h1>
		<p style="font-size: 20px;">Nếu bạn có bất kỳ vấn đề gì đối với trang web hoặc những thông tin mà chúng tôi cung cấp, xin hãy liên hệ với chúng tôi ở phía dưới.</p>
	</div>
	<div class="container">
		<form action="/action_page.php">
		<label for="yname">Họ Tên</label>
		<input type="text" id="yname" name="YourName" placeholder="Tên của bạn...">

		<label for="yemail">Email</label>
		<input type="text" id="yemail" name="YourEmail" placeholder="Email của bạn...">

		<label for="subject">Ý kiến của bạn</label>
		<textarea id="subject" name="subject" placeholder="Hãy viết gì đó..." style="height:200px"></textarea>

		<input type="submit" value="Gửi Ý Kiến">
		</form>
	</div>

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