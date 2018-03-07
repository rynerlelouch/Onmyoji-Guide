<!DOCTYPE html>
<html>
<head>
	<title>[Tên shikigami here!!!!]</title>
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
		table{
			border-collapse: collapse;
			width: 90%;
		}
		th,td {
			height: 40px;
			color: black;
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
			color: black;
		}
		.shikigami-parameter-table {
			margin-left: 50px;
			margin-right: 50px;
			text-align: left;
			height: 100%;
			font-size: 18px;
		}
		.shikigami-parameter-element-img {
			text-align: center;
		}
		.shikigami-parameter-element-text {
			text-align: left;
		}
		.shikigami-parameter {
			text-align: center;
		}
		.shikigami-materials {
			margin-left: 20px;
		}
		.shikigami-skill {
			margin-right: 50px;
			margin-left: 50px;
		}
		.shikigami-event-unclock {
			margin-right: 50px;
			margin-left: 50px;
			font-size: 18px;
		}
		p span{
			color: black;
		}
	</style>
</head>
<body>
<div>
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
	<div style="height: 700px;">
		<div style="position: absolute;margin-left: 50px;width: 40%;">
			<h1 style="text-align: center;font-weight: bold;">Momo</h1>
			<h2 style="border-bottom: 1px solid black;color: ">Thông Tin</h2>
			<h3>Tên gọi khác</h3>
			<p>Táohuā yāo 桃花妖, Momo no sei 桃の精, Momoka</p>
			<h3>Lồng tiếng</h3>
			<p>Mizuki Nana</p>
			<h2 style="border-bottom: 1px solid black;margin-top: 50px;">Giới Thiệu</h2>
			<p style="font-size: 18px;">Momo is a spirit formed from peach blossoms. She is cheerful and kind. Her closest and dearest friend is Sakura. Mom witnessed the intensity of Sakura's love and was worried that she would get hurt. Since Sakura lost her beloved, Momo has lived with her and supported her in her grief. Anyone would be lucky to have a friend like Momo. And as for Momo, she is just happy that she can be there to protect Sakura.</p>
			<h2 style="border-bottom: 1px solid black;margin-top: 50px;">Nguyên Liệu Thức Tỉnh</h2>
			<p style="font-weight: bold;font-size: 20px;"><img src="images/materials/Water2.png" class="shikigami-materials">x16
			<img src="images/materials/Water3.png" class="shikigami-materials">x8
			<img src="images/materials/Thunder2.png" class="shikigami-materials">x16
			<img src="images/materials/Thunder3.png" class="shikigami-materials">x8</p>
		</div>
		<img src="images/rarity/SR.png" height="70px" style="position: absolute;right: 550px;">
		<img src="images/shikigami skin/Default/Momo.png" style="right: 100px;position: absolute;">
	</div>
	<h2 style="margin-left: 50px; border-bottom: 1px solid black;margin-right: 50px;margin-top: 50px;">Thuộc Tính</h2>
	<div style="text-align: center;">
		<table class="shikigami-parameter-table">
			<tr>
				<td colspan="2" style="padding-top: 100px;"></td>
				<th style="text-align: center;">Mặc Định</th>
				<th style="text-align: center;">Thức Tỉnh</th>
			</tr>
			<tr>
				<td class="shikigami-parameter-element-img"><img src="images/attributes/Health.png"></td>
				<th class="shikigami-parameter-element-text" style="width: 200px;">Máu/Hồi Phục</th>
				<td class="shikigami-parameter">thông số ở đây</td>
				<td class="shikigami-parameter">thông số ở đây</td>
			</tr>
			<tr>
				<td class="shikigami-parameter-element-img"><img src="images/attributes/Attack.png"></td>
				<th class="shikigami-parameter-element-text">Tấn Công</th>
				<td class="shikigami-parameter">thông số ở đây</td>
				<td class="shikigami-parameter">thông số ở đây</td>
			</tr>
			<tr>
				<td class="shikigami-parameter-element-img"><img src="images/attributes/Defense.png"></td>
				<th class="shikigami-parameter-element-text">Phòng Thủ</th>
				<td class="shikigami-parameter">thông số ở đây</td>
				<td class="shikigami-parameter">thông số ở đây</td>
			</tr>
			<tr>
				<td class="shikigami-parameter-element-img"><img src="images/attributes/Critical.png"></td>
				<th class="shikigami-parameter-element-text">Chí Mạng</th>
				<td class="shikigami-parameter">thông số ở đây</td>
				<td class="shikigami-parameter">thông số ở đây</td>
			</tr>
			<tr>
				<td class="shikigami-parameter-element-img"><img src="images/attributes/Speed.png"></td>
				<th class="shikigami-parameter-element-text">Tốc Độ</th>
				<td class="shikigami-parameter">thông số ở đây</td>
				<td class="shikigami-parameter">thông số ở đây</td>
			</tr>
			<tr>
				<td></td>
				<th class="shikigami-parameter-element-text">Sát Thương Chí Mạng</th>
				<td class="shikigami-parameter">thông số ở đây</td>
				<td class="shikigami-parameter">thông số ở đây</td>
			</tr>
			<tr>
				<td></td>
				<th class="shikigami-parameter-element-text">Chính Xác</th>
				<td class="shikigami-parameter">thông số ở đây</td>
				<td class="shikigami-parameter">thông số ở đây</td>
			</tr>
			<tr>
				<td></td>
				<th class="shikigami-parameter-element-text">Kháng Hiệu Ứng</th>
				<td class="shikigami-parameter">thông số ở đây</td>
				<td class="shikigami-parameter">thông số ở đây</td>
			</tr>
		</table>
	</div>
	<h2 style="margin-left: 50px; border-bottom: 1px solid black;margin-right: 50px;margin-top: 100px;">Kỹ Năng</h2>
	<div class="shikigami-skill">

		<!-- Skill 1-->
		<div class="clear"></div>
		<img src="images/shikigami skill/Momo/Flower Dance.png" style="position: absolute;left: 100px;">
		<div style="height: 25px;"></div>
		<div style="margin-left: 50px;">	
			<span style="font-weight: bold;margin-left: 20px;font-size: 25px;margin-left: 50px;border-bottom: 1px solid black;color: black;font-family: none;">Flower Dance (花舞/花舞い)</span>
			<p style="margin-left: 50px;font-size: 17px;font-weight: bold;margin-top: 10px;"><span>Type: Normal</span> <span style="margin-left: 10px;">Onibi: 0</span> <span  style="margin-left: 10px;">Cooldown: 0</span></p>
			<div style="border-top: 1px solid black;margin: 0 50px;"></div>
			<p style="margin-left: 50px;font-size: 20px;color: black;">Forms a flurry of petals into a flower to attack 1 enemy, dealing damage equal to 100% of Momo's ATK.</p>
			<table style="width: 600px;font-size: 18px;margin-left: 20px;">
				<tr>
					<th style="text-align: center;">Cấp Độ</th>
					<th>Hiệu Ứng</th>
				</tr>
				<tr>
					<th style="text-align: center;">2</th>
					<td>Skill damage increases by 5%</td>
				</tr>
				<tr>
					<th style="text-align: center;">3</th>
					<td>Skill damage increases by 5%</td>
				</tr>
				<tr>
					<th style="text-align: center;">4</th>
					<td>Skill damage increases by 5%</td>
				</tr>
				<tr>
					<th style="text-align: center;">5</th>
					<td>Skill damage increases by 5%</td>
				</tr>
			</table>	
		</div>
		
		<!-- Skill 2-->
		<div class="clear"></div>
		<img src="images/shikigami skill/Momo/Healing Fragrance.png" style="position: absolute;left: 100px;margin-top: 50px;">
		<div style="margin-left: 50px;margin-top: 70px;">	
			<span style="font-weight: bold;margin-left: 20px;font-size: 25px;margin-left: 50px;border-bottom: 1px solid black;color: black;font-family: none;">Healing Fragrance（花之馨息/花の息吹)</span>
			<p style="margin-left: 50px;font-size: 17px;font-weight: bold;margin-top: 10px;"><span>Type: Special</span> <span style="margin-left: 10px;">Onibi: 2</span> <span  style="margin-left: 10px;">Cooldown: 0</span></p>
			<div style="border-top: 1px solid black;margin: 0 50px;"></div>
			<p style="margin-left: 50px;font-size: 20px;color: black;">Gathers the nectar of flowers into a genle breeze to heal 1 ally, restoring its HP equal to 20% of Momo's max HP, and has a chance of restoring other allies by 30% of the HP restored when launching a critical hit.</p>
			<table style="width: 600px;font-size: 18px;margin-left: 20px;">
				<tr>
					<th style="text-align: center;">Cấp Độ</th>
					<th>Hiệu Ứng</th>
				</tr>
				<tr>
					<th style="text-align: center;">2</th>
					<td>HP restored increases by 5%</td>
				</tr>
				<tr>
					<th style="text-align: center;">3</th>
					<td>HP restored increases by 5%</td>
				</tr>
				<tr>
					<th style="text-align: center;">4</th>
					<td>HP restored increases by 5%</td>
				</tr>
				<tr>
					<th style="text-align: center;">5</th>
					<td>HP restored increases by 5%</td>
				</tr>
			</table>	
		</div>

		<!-- Skill 3-->
		<div class="clear"></div>
		<img src="images/shikigami skill/Momo/Revival Blossoms.png" style="position: absolute;left: 100px;margin-top: 50px;">
		<div style="margin-left: 50px;margin-top: 70px;">		
			<span style="font-weight: bold;margin-left: 20px;font-size: 25px;margin-left: 50px;border-bottom: 1px solid black;color: black;font-family: none;">Revival Blossoms （桃花灼灼/輝く桃花)</span>
			<p style="margin-left: 50px;font-size: 17px;font-weight: bold;margin-top: 10px;"><span>Type: Special</span> <span style="margin-left: 10px;">Onibi: 3</span> <span  style="margin-left: 10px;">Cooldown: 2</span></p>
			<div style="border-top: 1px solid black;margin: 0 50px;"></div>
			<p style="margin-left: 50px;font-size: 20px;color: black;">Manipulates peach blossoms into a life-giving field to revive 1 KO'd ally, restoring its HP equal to 20% of Momo's max HP. Cooldown: 2 turns.</p>
			<table style="width: 600px;font-size: 18px;margin-left: 20px;">
				<tr>
					<th style="text-align: center;">Cấp Độ</th>
					<th>Hiệu Ứng</th>
				</tr>
				<tr>
					<th style="text-align: center;">2</th>
					<td>HP restored increases by 5%</td>
				</tr>
				<tr>
					<th style="text-align: center;">3</th>
					<td>HP restored increases by 5%</td>
				</tr>
				<tr>
					<th style="text-align: center;">4</th>
					<td>HP restored increases by 5%</td>
				</tr>
				<tr>
					<th style="text-align: center;">5</th>
					<td>HP restored increases by 5%</td>
				</tr>
			</table>	
		</div>	
	</div>
	<h2 style="margin-left: 50px; border-bottom: 1px solid black;margin-right: 50px;margin-top: 100px;">Mở Khóa Sự Kiện Tiểu Sử</h2>
	<div class="shikigami-event-unclock">
		<table>
			<tr>
				<th style="text-align: center;border:1px solid black;">Thứ tự</th>
				<th style="text-align: center;border:1px solid black;">Điều kiện mở khóa</th>
				<th style="text-align: center;border:1px solid black;">Phần thưởng</th>
			</tr>
			<tr>
				<th style="text-align: center;border:1px solid black;">1</th>
				<td style="text-align: center;border:1px solid black;"><p style="margin-left: 10px;">Awaken Momo no Sei.</p></td>
				<td style="text-align: center;border:1px solid black;"><img src="images/Items/Gold.png">5000</td>
			</tr>
			<tr>
				<th style="text-align: center;border:1px solid black;">2</th>
				<td style="text-align: center;border:1px solid black;"><p style="margin-left: 10px;">Fight in Kekkai Toppa with Momo no Sei 60 times.</p></td>
				<td style="text-align: center;border:1px solid black;""><img src="images/shikigami/Momo.png" style="height: 80px;">10</td>
			</tr>
			<tr>
				<th style="text-align: center;border:1px solid black;"">3</th>
				<td style="text-align: center;border:1px solid black;"><p style="margin-left: 10px;">Clear Mitama Dungeon 7 (Solo) with Momo no Sei.</p></td>
				<td style="text-align: center;border:1px solid black;""><img src="images/Items/Magatama.png">10</td>
			</tr>
		</table>
	</div>
	<div style="padding-top: 50px;border-bottom: 1px solid #4d4d4d;margin: 0 50px;"></div>
	<div style="position: relative;display: inline-block; width: 100%;margin-top: 20px;">
		<img title="Facebook" class="topnav-icon" src="images/contact/facebook.png" style="margin-right: 50px;">
		<img title="Twitter" class="topnav-icon" src="images/contact/twitter.png">
		<img title="Pinterest" class="topnav-icon" src="images/contact/pinterest.png">		
	</div>
</div>
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
	
	-->