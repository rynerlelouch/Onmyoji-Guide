<!DOCTYPE html>
<html>
<head>
	<title>Thức thần</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
		.clear {
			clear: both;
		}
		table {
			border-collapse: collapse;
			width: 80%;
		}
		th, td {
			text-align: center;
			border: 2px solid black;
			padding: 10px;
			font-size: 20px;
			font-weight: bold;
		}
		.shikigami-list {
			padding-top: 30px;
			display: flex;
			justify-content: center;
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
		#tab-shikigami:hover{
			background-color: red;
			color: white;
		}
		.active #tab-shikigami {
			background-color: white;
			color: black;
		}
		.search-container {
			float: right;
			margin-right: 10px;
		}
		.search-container button {
			float: right;
			padding: 6px 10px;
			margin-top: 8px;
			margin-right: 16px;
			font-size: 17px;
			border: none;
			cursor: pointer;
			border-radius: 0 5px 5px 0;
		}
		.search-container button:hover {
			background: #ccc;
		}
		.search-container input[type=text] {
			padding: 6px;
			margin-top: 8px;
			font-size: 17px;
			border: none;
			outline: none;
			border-radius: 5px 0 0 5px;	
		}
		.shikigami-list img:hover {
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			border-radius: 35px;
			cursor: pointer;
		}
		a {
			color: black;
		}
		a:hover {
			color: #ff0000;
			text-decoration: none;
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
	
	<div class="container" style="width: 100%;">
		<div style="text-align: center;">
			<img src="images/shikigami-list.png" style="display: inline-block;">
		</div>	
		<ul class="nav nav-tabs" style="font-weight: bold;font-size: 17px;">
			<li class="active"><a data-toggle="tab" href="#all-list" id="tab-shikigami">Tất Cả</a></li>
			<li><a data-toggle="tab" href="#attack" id="tab-shikigami">Tấn Công</a></li>
			<li><a data-toggle="tab" href="#support" id="tab-shikigami">Hỗ Trợ</a></li>
			<li><a data-toggle="tab" href="#control" id="tab-shikigami">Khống Chế</a></li>
			<div class="search-container">
			<form method="GET" action="search-action.php">
				<input type="text" name="search" placeholder="Tìm kiếm thức thần...">
				<button type="submit"><i class="fa fa-search"></i></button>
			</form>		
		</div>	
		</ul>

		<div class="tab-content" style="border-top: 3px solid black;">
			<div id="all-list" class="tab-pane fade in active">
				<div class="shikigami-list">
				<table style="font-size: 17px;" id="myTable">
					<tr style="background-color: #ff0000;color: white;">
						<th>Thức thần</th>
						<th onclick="sortTable()">Tên</th>
						<th >Loại</th>
						<th>Xếp hạng</th>
						<th>Lồng tiếng</th>
						<th>Đánh giá của người sử dụng</th>
					</tr>
					 <?php			
					$conn = mysqli_connect('localhost', 'root', '', 'shikigami') or die ('Lỗi: Không thể kết nối tới cơ sở dữ liệu!!');
					mysqli_set_charset($conn, 'UTF8');
					$sql = 'SELECT * FROM shikigami_list';
					$result = mysqli_query($conn,$sql);
					if (!$result)
					{
						die('Lỗi: Chưa có cơ sở dữ liệu!!');
					}
					while ($row = mysqli_fetch_assoc($result))
					{
						
							echo "<tr style='color:black;'>";
								echo "<td>"."<img src='images/shikigami/".$row['hinh_anh']."' style='height: 60%;' title='".$row['ten']."'>"."</td>";
								echo "<td>"."<a href='shikigami-profile.php'>".$row['ten']."</a>"."</td>";
								echo "<td>".$row['loai']."</td>";
								echo "<td>"."<img src='images/rarity/".$row['xep_hang'].".png' style='height: 60%;box-shadow: none;cursor: default;'>"."</td>";
								echo "<td>".$row['long_tieng']."</td>";
								echo "<td>".$row['danh_gia_User']."/10"."</td>";
							echo "</tr>";
					}
					mysqli_close($conn);
					?>
				</table>
				</div>
			</div>
			<div id="attack" class="tab-pane fade">
				<h1>Chưa Cập Nhật...</h1>
			</div>
			<div id="support" class="tab-pane fade">
				<h1>Chưa Cập Nhật...</h1>
			</div>
			<div id="control" class="tab-pane fade">
				<h1>Chưa Cập Nhật...</h1>
			</div>	
		</div>
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

		function sortTable() 
		{
			var table, rows, switching, i, x, y, shouldSwitch;
			table = document.getElementById("myTable");
			switching = true;
			/*Make a loop that will continue until
			no switching has been done:*/
			while (switching) 
			{
				//start by saying: no switching is done:
				switching = false;
				rows = table.getElementsByTagName("TR");
				/*Loop through all table rows (except the
				first, which contains table headers):*/
				for (i = 1; i < (rows.length - 1); i++) 
				{
					//start by saying there should be no switching:
					shouldSwitch = false;
					/*Get the two elements you want to compare,
					one from current row and one from the next:*/
					x = rows[i].getElementsByTagName("TD")[0];
					y = rows[i + 1].getElementsByTagName("TD")[0];
					//check if the two rows should switch place:
					if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) 
					{
						//if so, mark as a switch and break the loop:
						shouldSwitch= true;
						break;
					}
				}
				if (shouldSwitch) 
				{
					/*If a switch has been marked, make the switch
					and mark that a switch has been done:*/
					rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
					switching = true;
				}
			}
		}
	</script>
</body>
</html>
<!--	

					$conn = mysqli_connect('localhost', 'root', '', 'shikigami') or die ('Lỗi: Không thể kết nối tới cơ sở dữ liệu!!');
					mysqli_set_charset($conn, 'UTF8');
					$sql = 'SELECT * FROM shikigami_list';
					$result = mysqli_query($conn,$sql);
					if (!$result)
					{
						die('Lỗi: Chưa có cơ sở dữ liệu!!');
					}
					while ($row = mysqli_fetch_assoc($result))
					{
						
							echo "<tr style='color:black;'>";
								echo "<td>"."<img src='images/shikigami/".$row['hinh_anh']."' style='height: 60%;' title='".$row['ten']."'>"."</td>";
								echo "<td>"."<a href='shikigami-profile.php'>".$row['ten']."</a>"."</td>";
								echo "<td>".$row['loai']."</td>";
								echo "<td>"."<img src='images/rarity/".$row['xep_hang'].".png' style='height: 60%;box-shadow: none;cursor: default;'>"."</td>";
								echo "<td>".$row['long_tieng']."</td>";
								echo "<td>".$row['danh_gia_User']."/10"."</td>";
							echo "</tr>";
					}
					mysqli_close($conn);
	-->