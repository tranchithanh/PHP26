<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>VinaTAB EDU</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css" media="screen" />
	    <script type="text/javascript" src="jquery-2.1.1.min.js"></script>

	</head>
	<body>
		<h1>JQuery - ajax</h1>	
		
		<div class="jquery-demo-input">
			Tên hoa: Hoa hồng <br />
			Đơn giá: 200.000 VNĐ<br />			
			Số lượng hoa: 
			<input type="text" value="" id="soluong1" />
			<a href="javascript:void(0);" title="" onclick="return getMuaHoa();">Mua</a>
			
			<p class="ketqua">dữ liệu lấy từ file ajax</p>

			<script type="text/javascript">
				function getMuaHoa(){
					var tenHoa = "Hoa Hồng";
					var giaBan = 200000;
					var soLuong = $("#soluong1").val();
					//code ajax
					$.ajax({
							url: 'ajax/ajax.php',//muốn truyền dữ liệu sang trang ajax.php
							type: 'POST',//POST : để lấy dữ liệu, GET: k bảo mật như POST
							cache: false,//lưu dữ liệu ng dùng
							data: {aTenHoa:tenHoa,aGiaBan:giaBan,aSoLuong:soLuong},//những giá trị muốn truyền đi
							success: function(data){
								//alert(data);
								$(".ketqua").html(data);
							},
							error: function (){
								alert("Có Lỗi Xãy Ra !!!");
							}
					});
					return false;
					//end ajax
				}
			</script>		
		</div>		
		
	</body>
</html>