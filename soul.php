<!DOCTYPE html>
<html>
<head>
	<title>Ngự hồn</title>
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
		table {
			border-collapse: collapse;
			width: 60%;
		}
		th, td {
			text-align: center;
			font-size: 20px;
			border: 2px solid black;
			padding: 10px;
			font-weight: bold;
		}
		h1,h2,h3,h4,h5,li,a,th,tr,td{
			font-family: none;
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
		.soul {
			padding-top: 100px;
			display: flex;
			justify-content: center;
		}
		.soul img:hover {
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			border-radius: 35px;
			cursor: pointer;
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
	<div class="soul">
		<table style="font-size: 17px;">
			<tr style="background-color: #ff0000;color: white;">
				<th style="width: 180px;">Ngự hồn</th>
				<th>Tên</th>
				<th>Loại</th>
			</tr>
			<?php
			$conn = mysqli_connect('localhost', 'root', '', 'shikigami') or die ('Lỗi: Không thể kết nối tới cơ sở dữ liệu!!');
			mysqli_set_charset($conn, 'UTF8');
			$sql = 'SELECT * FROM soul_list';
			$result = mysqli_query($conn,$sql);
			if (!$result)
			{
				die('Lỗi: Chưa có cơ sở dữ liệu!!');
			}
			while ($row = mysqli_fetch_assoc($result))
			{
				echo "<tr style='color:black;'>";
					echo "<td>"."<img src='images/soul/".$row['hinh_anh']."' style='height: 80%;' title='".$row['ten']."'>"."</td>";
					echo "<td>".$row['ten']."</td>";
					echo "<td>".$row['loai']."</td>";
				echo "</tr>";
			}
			mysqli_close($conn);
			?>
		</table>
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