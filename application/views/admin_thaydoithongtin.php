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


	
<div class=" menu-left" style="margin-top: -10px;">

	<ul>

		<li>
			<a href="<?php echo base_url()?>admin">
				<span class=" glyphicon glyphicon-home icon"></span>
			</a>
		</li>
		<li  style="background: #524d49">
			<a href="<?php echo base_url()?>Dieukhien">
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
			<a href="<?php echo base_url()?>Noidung" style = "display: block;">
				<span class="  glyphicon glyphicon-heart icon" ></span>
			
			<p style="color: white;">Nội dung</p>
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
	<div class="row" style="margin-top: 10px; margin-right: 0px;">
		<div class="col-lg-5">
					<p style="font-size: 30px;font-weight: bold; padding: 0px 0 0 20px;">THAY ĐỔI THÔNG TIN</p>
		</div>
		<div class="col-lg-7"></div>
	</div>
	<?php 
		echo form_open('nhanvien/editnv');
	?>
	<div class="row" style="background: #ccc; height: 76px;">
		<div style="float: left;">
			<a href="<?php echo base_url()?>Dieukhien" class="btn btn-default" style="margin-top: 20px;margin-left: 30px;">Trở về</a>
		</div>
		<div style="float: right;">
			<button class="btn btn-default" type="submit" style="float: right;margin-right: 40px; margin-top: 20px;">Lưu thông tin</button>
		</div>
	</div>
	<div>
		<p style="font-size: 20px; text-align: center;margin-top: 20px;">THÔNG TIN NHÂN VIÊN</p>
		<?php if(isset($getinfo)){
			foreach ($getinfo as $key) {
			?>

		<table class="table" style="width: 350px; margin-left: 440px;">
			
			<tr>
				<td>Họ và tên</td>
				<td><input type="text" name="hoten" value="<?php echo $key->ho_ten?>"></input></td>
				
			</tr>
			<tr>
				<td>Địa chỉ</td>
				<td><input type="text" name="diachi" value="<?php echo $key->dia_chi?>"></input></td>
				
			</tr>
			<tr>
				<td>Số điện thoại</td>
				<td><input type="text" name="sdt" value="<?php echo $key->sdt?>"></td>
				
			</tr>
			<TR>
				<td>Mật khẩu cũ</td>
				<td><input type="text" name="mkcu" placeholder="Mời bạn nhập mật khẩu cũ"></td>
				
			</TR>
			<tr>
				<td>Mật khẩu mới</td>
				<td><input type="text" name="mkmoi" placeholder="Mời bạn nhập mật khẩu mới"></td>
			</tr>
			<tr>
				<td>Xác nhận mật khẩu</td>
				<td><input type="text" name="mkmoi2" placeholder="Mời bạn nhập lại mật khẩu mới"></td>
			</tr>
		</table>
		<?php }}
		else echo 1?>
	</div>
	<?php echo form_close();?>
</div>
 