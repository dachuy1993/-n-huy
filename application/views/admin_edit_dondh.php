<?php 
if(isset($err)){
	echo $err;
	die();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script type="text/javascript" src = "<?php echo base_url()?>public/style/js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/style/css/style.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/style/js/cycle.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/style/js/javacript.js"></script>
</head>
<body>


	
<div class=" menu-left">

	<ul>

		<li>
			<a href="<?php echo base_url()?>admin">
				<span class=" glyphicon glyphicon-home icon"></span>
			</a>
		</li>
		<li>
			<a href="<?php echo base_url()?>admin">
				<span class=" glyphicon glyphicon-dashboard icon"></span>
				<p style="color: white;">Bảng điều khiển</p>
			</a>
		</li>
		<li>
			<a href="<?php echo base_url()?>order" style = "display: block;">
				<span class=" glyphicon glyphicon-usd icon" ></span>
				<p style="color: white;">Bán hàng</p>
			</a>
		</li>
		<li>
			<a href="<?php echo base_url()?>product" style = "display: block;">
				<span class=" glyphicon glyphicon-book icon" ></span>
			
			<p style="color: white;">Các sản phẩm</p>
			</a>
		</li>
		<li>
			<a href="<?php echo base_url()?>customer" style = "display: block;">
				<span class="  glyphicon glyphicon-heart icon" ></span>
			
			<p style="color: white;">Khách hàng</p>
			</a>
		</li>
		<li>
			<a href="<?php echo base_url()?>nhanvien">
				<span class=" glyphicon glyphicon-book icon" ></span>
				<p style="color: white;">Nhân viên</p>
			</a>
		</li>
		<li>
			<a href="<?php echo base_url()?>Admin_kho">
				<span class=" glyphicon glyphicon-book icon" ></span>
			</a>
			<p style="color: white;">Quản lý kho</p>
		</li>
		
	</ul>
</div>

<div class="menu-right">
	<div>
		<div class="row">
			<div class="col-lg-5">
				<p style="font-size: 30px;font-weight: bold; padding: 0px 0 0 20px;">ĐƠN ĐẶT HÀNG</p>
			</div>
			<div class="col-lg-7">
				<div class="icon-user"  style="float: right;">
					<ul>
						<li>
							<div class="input-group">
					      		<input type="text" class="form-control timkiem" placeholder="Search for...">
					      		<span class="input-group-btn">
					        		<button class="btn btn-default" type="button">Tìm Kiếm</button>
					      		</span>
					    	</div>
						</li>
						<li>
							<a href="">
								<span class=" glyphicon glyphicon-bell"><sup>0</sup></span>
							</a>
						</li>
						<li>
							<div class="dropdown">
								  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								    	<a href="">
								    		<span class=" glyphicon glyphicon-user"><?php if(isset($user)){echo $user;} ?></span>
								    	</a>
								    <span class="caret"></span>
								  </button>
								  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
								    <li><a href="#">Chế độ xem khách hàng</a></li>
								    <li><a href="#">Đăng xuất</a></li>
								  </ul>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<?php 
		
	  				if (isset($getinfo)) {
	  					foreach ($getinfo as $key) {
	  						echo form_open('order/edit/'.$key->Dondh_id);
	  						?>
		<div class="row" style="background: #ccc;margin: 20px 0 20px 0;">
			<button type="submit" class="btn btn-default" style="margin: 20px; background: orange; float: right;">Lưu đơn đặt hàng</button>
		</div>
		<div class="row">
			<div class="col-lg-3"></div>
			<div class="col-lg-6">
				<table class="table_edit_sp">
					<tr>
						<td colspan="2" style="text-align: center;font-size: 25px;">Thông tin đơn đặt hàng</td>
					</tr>
					<tr>
						<td>Tên sản phẩm</td>
						<td>
							<input type="text" name="tenkh" value="<?php echo $key->Ten_sp?>">
						</td>
					</tr>
					<tr>
						<td>Ngày lập</td>
						<td>
							<input type="text" name="diachiemail" value="<?php echo $key->Ngay_lap?>">
						</td>
					</tr>
					<tr>
						<td>Tổng giá</td>
						<td>
							<input type="text" name="sodienthoai" value="<?php echo $key->Tong_gia?>">
						</td>
					</tr>
					<tr>
						<td>Tên khách hàng</td>
						<td>
							<input type="text" name="diachigiaohang" value="<?php echo $key->Ten_kh?>">
						</td>
					</tr>
					<tr>
						<td>Số điện thoại</td>
						<td>
							<input type="text" name="ghichu" value="<?php echo $key->Sodt?>">
						</td>
					</tr>
					<tr>
						<td>Địa chỉ giao hàng</td>
						<td>
							<input type="text" name="ghichu" value="<?php echo $key->Diachi_giaohang?>">
						</td>
					</tr>
					<tr>
						<td>Ghi chú</td>
						<td>
							<input type="text" name="ghichu" value="<?php echo $key->Ghi_chu?>">
						</td>
					</tr>
				</table>
			</div>
			<div class="col-lg-3"></div>
		</div>
		<?php }}?>
	</div>
</div>
</body>
</html>