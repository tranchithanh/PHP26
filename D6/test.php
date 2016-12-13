<?php include 'inc/header.php';?>
			<div class="content-left fl">
				<?php include 'inc/left_bar.php';?>
			</div>
			<div class="content-right fr">
				<?php
					$mysqli = new mysqli("127.0.0.1","root","","tintuc");

					$mysqli -> set_charset("utf8");

					if (mysqli_connect_errno()) {
						echo "can't connect to database <br />".mysqli_connect_errno();
						exit();
					}

					$query = "SELECT * FROM danhmuctin WHERE ID_DanhMucTin = 2";

					$result = $mysqli->query($query);//tra ve result la obj

					$arDanhMucTin = mysqli_fetch_assoc($result);//ep kieu obj sang kieu mang

					$tenDanhMucTin2 = $arDanhMucTin['TenDanhMucTin'];

					echo 'ten danh muc tin co id danh muc tin = 2 la : '.$tenDanhMucTin2.'<br />';

					//2.

					$query2 = "SELECT TenTinTuc,MoTa,HinhAnh FROM tintuc WHERE ID_TinTuc = 4";

					$result2 = $mysqli->query($query2);

					$arTinTuc = mysqli_fetch_assoc($result2);

					echo 'Ten Tin Tuc : '.$arTinTuc['TenTinTuc'].'<br />';
					echo 'Mo Ta : '.$arTinTuc['MoTa'].'<br />';
					echo 'Hinh Anh : '.$arTinTuc['HinhAnh'].'<br />';

					$mysqli->close();
				?>
			</div>
<?php include 'inc/footer.php';?>