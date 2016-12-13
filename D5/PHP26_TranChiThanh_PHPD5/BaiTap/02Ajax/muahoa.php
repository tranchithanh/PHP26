<?php session_start();?>
<!DOCTYPE html>
	<html>
	<head>
		<title>Bài Tập Ajax Mua Hoa</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/reset.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
		<script type="text/javascript" src="js/jquery-validation/jquery.validate.min.js"></script>
	</head>
	<body>
		<div class="wrapper">
			<h2 class="title">Mua hoa</h2>
			<?php
				$id = "";
				$tenhoa = "";
				$soluong = "";
				$gia = "";

				if (isset($_POST['mua'])) {
					$id = $_POST['id'];
					$tenhoa = $_POST['tenhoa'];
					$soluong = $_POST['soluong'];
					$gia = $_POST['gia'];
				}
			?>
			<div class="cont">
				<form action="javascript:void(0);" method="post" name="formMuaHoa" id="formMuaHoa" onsubmit="return getBasket();">
					Id hoa: <input type="text" id="id" name="id" value="<?php echo $id; ?>" /><br />
					Tên hoa: <input type="text" id="tenhoa" name="tenhoa" value="<?php echo $tenhoa; ?>" /><br />
					Số lượng: <input type="text" id="soluong" name="soluong" value="<?php echo $soluong; ?>" /><br />
					Giá: <input type="text" id="gia" name="gia" value="<?php echo $gia; ?>" /><br />
					<input type="submit" name="mua" value="Mua hoa" />
				</form>
				<!-- validate cho form -->
				<script type="text/javascript">
					$(document).ready(function(){
						$('#formMuaHoa').validate({
							ignore:[],
							debug:false,
							rules:{
								"id":{
									required : true,
									min : 1,
									digits : true,
								},
								"tenhoa":{
									required : true,
								},
								"soluong":{
									required : true,
									min : 1,
									digits : true,
								},
								"gia":{
									required : true,
									number : true,
									min : 1,
								},
							},
							messages:{
								"id":{
									required : "Vui lòng nhập Id hoa",
									min : "Id hoa phải là số nguyên dương",
									digits : "Id hoa phải là số nguyên",
								},
								"tenhoa":{
									required : "Vui lòng nhập Tên hoa",
								},
								"soluong":{
									required : "Vui lòng nhập Số lượng",
									min : "Số lượng phải là số nguyên dương",
									digits : "Số lượng phải là số nguyên",
								},
								"gia":{
									required : "Vui lòng nhập Giá bán",
									number : "Giá bán phải là số",
									min : "Giá bán phải là số nguyên dương",
								},
							},
						});
					});
				</script>
			</div>
			
			<div>
				<h4 class="title">Giỏ hàng</h4>
				<div class="basket">
					<!-- return basket -->
					<?php
						//kiểm tra giỏ hàng
						if (isset($_SESSION['arHoa'])) {
					?>
							<table style="width:425px;line-height:30px;border:1px solid gray;">
								<tr style="background-color:gray;">
									<th>Tên Sản Phẩm</th>
									<th>Giá</th>
									<th>Số Lượng</th>
									<th>Tổng Tiền</th>
								</tr>
								<?php
								$thanhtien = 0;
								if (isset($_SESSION['arHoa'])) {
									foreach ($_SESSION['arHoa'] as $k => $id) {
										echo "<tr>";
											echo '<td><a style="padding-left:10px;" href="" title="">'.$id['tenhoa'].'</a></td>';
											echo '<td style="text-align:right;">'.number_format($id['gia'],0,',','.').'</td>';
											echo '<td style="text-align:right;">'.$id['soluong'].'</td>';
											echo '<td style="text-align:right;padding-right:10px;">'.number_format(($id['gia']*$id['soluong']),0,',','.').'</td>';
											$thanhtien += $id['gia']*$id['soluong'];
										echo "</tr>";
									}
								}
								?>
								<tr style="border-top:1px solid gray;">
									<td colspan="3" style="text-align:right;"><strong>Thành tiền:<strong></td>
									<td style="text-align:right;padding-right:10px;"><?php echo number_format($thanhtien,0,',','.'); ?></td>
								</tr>
							</table>
							<div class="del-basket">
								<a href="javascript:void(0);" title="" onclick="return delBasket();">Xóa giỏ hàng</a>
							</div>
					<?php
						}else{
							echo "<p class='basket-emtry'>Giỏ hàng rỗng</p>";
						}
					?>
				</div>
				<script type="text/javascript">
					//function kiểm tra dữ liệu đã hợp lệ chưa
					function checkValidate(){
						var form = $('#formMuaHoa');
						form.validate();
						return form.valid();
					}

					function getBasket(){
						var id = $('#id').val();
						var tenhoa = $('#tenhoa').val();
						var soluong = $('#soluong').val();
						var gia = $('#gia').val();

						if (checkValidate()) {//kiểm tra tính hợp lệ của dữ liệu, true thì đưa vào SESSION
							$.ajax({
								url: 'ajax/getBasketAjax.php',
								type: 'POST',
								cache: false,
								data: {aID:id,aTenHoa:tenhoa,aSoLuong:soluong,aGia:gia},
								success: function(data){
									$(".basket").html(data);
								},
								error: function (){
									alert("Có Lỗi Xãy Ra !!!");
								}
							});
							return false;
						}
					}

					function delBasket(){
						$.ajax({
							url: 'ajax/delBasket.php',
							type: 'POST',
							cache: false,
							data: {},
							success: function(data){
								$(".basket").html(data);
							},
							error: function (){
								alert("Có Lỗi Xãy Ra Khi Xóa !!!");
							}
						});
						return false;
					}
				</script>
			</div>
		</div>
	</body>
</html>