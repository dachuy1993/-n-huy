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
			<a href="<?php echo base_url()?>product">
				<span class=" glyphicon glyphicon-book icon" ></span>
			<p style="color: white;">Các sản phẩm</p>
			</a>
		</li>
		<li>
			<a href="">
				<span class=" glyphicon glyphicon-book icon" ></span>
			</a>
			<p style="color: white;">Các sản phẩm</p>
		</li>
		<li>
			<a href="">
				<span class=" glyphicon glyphicon-book icon" ></span>
			</a>
			<p style="color: white;">Các sản phẩm</p>
		</li>
		<li>
			<a href="">
				<span class=" glyphicon glyphicon-book icon" ></span>
			</a>
			<p style="color: white;">Các sản phẩm</p>
		</li>
	</ul>
</div>

<div class="menu-right">
	<div>
		<div class="row">
			<div class="col-lg-5">
				SẢN PHẨM
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
								    		<span class=" glyphicon glyphicon-user">huy</span>
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
	  						echo form_open('product/edit/'.$key->sanpham_id);
	  						?>
		<div class="row" style="background: #ccc;margin: 20px 0 20px 0;">
			<button type="submit" class="btn btn-default" style="margin: 20px; background: orange; float: right;">Lưu sản phẩm</button>
		</div>
		<div class="row">
			<div class="col-lg-6">
			
				<input type="file" name="userfile"><br>
				<div style="border: 2px solid red ;padding: 10px;margin-left: 10px; ">
					<img src="<?php echo base_url()?>public/img/<?php echo $key->Anh_sp?>" width="
        100%">
				</div>
				
			</div>
			<div class="col-lg-6">
			
				
					<table class="table_edit_sp">
						<tr>
							<td colspan="2" style="text-align: center;font-size: 25px;">Thông tin sản phẩm</td>
						</tr>
						<tr>
							<td>Tên sản phẩm</td>
							<td>
								<input type="text" name="tensp" value="<?php echo $key->Ten_sp?>">
							</td>
						</tr>
						<tr>
							<td>Loại sản phẩm</td>
							<td>
								<input type="text" name="loaisp" value="<?php echo $key->maloai_sp?>">
							</td>
						</tr>
						<tr>
							<td>Số lượng</td>
							<td>
								<input type="text" name="soluong" value="<?php echo $key->Soluong_sp?>">
							</td>
						</tr>
						<tr>
							<td>Giá sản phẩm</td>
							<td>
								<input type="text" name="giasp" value="<?php echo $key->Gia_sp?>">
							</td>
						</tr>
						<tr>
							<td>Kích thước sản phẩm</td>
							<td>
								<input type="text" name="kichthuoc" value="<?php echo $key->Kichthuoc_sp?>">
							</td>
						</tr>
						<tr>
							<td>Màu sắc</td>
							<td>
								<input type="text" name="mausac" value="<?php echo $key->Mausac_sp?>">
							</td>
						</tr>
						<tr>
							<td>Chất liệu</td>
							<td>
								<input type="text" name="chatlieu" value="<?php echo $key->Chatlieu_sp?>">
							</td>
						</tr>
						<tr>
							<td>Thời gian bảo hành</td>
							<td>
								<input type="text" name="baohanh" value="<?php echo $key->Baohanh_sp?>">
							</td>
						</tr>
						
					</table>
			</div>
		</div>
		<?php }
		}?>
	</div>
</div>
</body>
</html>