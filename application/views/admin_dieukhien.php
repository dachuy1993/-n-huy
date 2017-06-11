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
			<a href="<?php echo base_url()?>dieukhien">
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
				<p style="font-size: 30px;font-weight: bold; padding: 0px 0 0 20px;">BẢNG ĐIỀU KHIỂN</p>
			</div>
			<div class="col-lg-7">
				<div class="icon-user"  style="float: right;">
					<ul>
						<li style="margin: 0 5px;">
							<div class="input-group">
					      		<input type="text" class="form-control timkiem" placeholder="Search for...">
					      		<span class="input-group-btn">
					        		<button class="btn btn-default" type="button">Tìm Kiếm</button>
					      		</span>
					    	</div>
						</li>
						<li style="margin:  0 5px;">
							<a href="">
								<span class=" glyphicon glyphicon-bell"><sup>0</sup></span>
							</a>
						</li>
						<li style="margin: 0 20px 0 5px;">
							<div class="dropdown">
								  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								    	<a href="">
								    		<span class=" glyphicon glyphicon-user"><?php if(isset($user)){echo $user;} ?></span>
								    	</a>
								    <span class="caret"></span>
								  </button>
								  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
								    <li><a href="<?php echo base_url()?>nhanvien/change">Thay đổi thông tin</a></li>
								    <li><a href="<?php echo base_url()?>admin/logout">Đăng xuất</a></li> 
								  </ul>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row" style="background: #ccc;margin: 20px 0 20px 0; ">
			<div class="btn-group" role="group" aria-label="..." style="float: left; margin: 20px;">

				<a href="<?php echo base_url()?>nhanvien" class="btn btn-info lien-he login-window button orange">
				<span class="glyphicon"></span>
				Nhân viên
				</a>
  			</div>
  			<div class="btn-group" role="group" aria-label="..." style="float: left; margin: 20px;">

				<a href="<?php echo base_url()?>customer" class="btn btn-info lien-he login-window button orange">
				<span class="glyphicon"></span>
				Khách hàng
				</a>
  			</div>

			<div class="btn-group" role="group" aria-label="..." style="float: right; margin: 20px;">

				<a href="#login-box" class="btn btn-success lien-he login-window button orange">
				<span class="glyphicon"></span>
				Thêm đơn mua hàng
				</a>
  			</div>
		</div>
		<div class="col-lg-12">
			<div class="col-lg-4">
			
				<div>
					<tr>
						<td>Ngày bắt đầu</td>
						<td><input type="date" name="ngaybd"></td>
					</tr><br/><br/>
					<tr>
						<td>Ngày kết thúc</td>
						<td><input type="date" name="ngaykt"></td>
					</tr><br/><br/>
					<p>Thống kê doanh thu</p><br/>
					<p>120k</p>
				</div>
				
				<div>
					<p>Lần đặt hàng cuối cùng</p>
					<div>
						<table class="table">
							<thead>
								<td>Khách hàng</td>
								<td>Số điện thoại</td>
								<td>Thành tiền</td>
							</thead>
							<?php 
								if(isset($order1))
								{
									$number = 0;
									
									foreach ($order1 as $key) {
									
								?>
							<tbody>
								<td><?php echo $key->Ten_kh?></td>
								<td><?php echo $key->Sodt?></td>
								<td><?php echo $key->Tong_gia?></td>
								<?php }?>
							</tbody>
							<?php }?>
						</table>
					</div>
				</div>
				 
			</div>
			<div class="col-lg-8">
				<?php echo 'duc'?>
			</div>
		</div>