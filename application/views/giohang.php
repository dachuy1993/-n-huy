<!DOCTYPE html>
<html>
<head>
	<title>Đồ gỗ nội thất Hùng Thúy</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script type="text/javascript" src = "<?php echo base_url()?>public/style/js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/style/css/style.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/style/js/cycle.js"></script>
</head>
<body>
<section id="header">
<div class="row max">
	<div class="col-lg-6">
		<h1>
			<a href="#">
				<img src="<?php echo base_url()?>public/img/logo.png">
			</a>
		</h1>
	</div>
	<div class="col-lg-6">

		<div class="input-group">
      		<input type="text" class="form-control" placeholder="Search for...">
      		<span class="input-group-btn">
        		<button class="btn btn-default" type="button">Tìm Kiếm</button>
      		</span>
    	</div>
    	<div class="input-group" style = "float: right;">
	    	<h1>
				<a href="#">
					<img src="<?php echo base_url()?>public/img/HOTLINE.jpg">
				</a>
			</h1>
    	</div>

	</div>
</div>

</section>
<section id="menu">
	<div class="main_menu" style="font-weight: bold;font-size: 13px;">
		<ul>
			<li><a href="<?php echo base_url()?>">TRANG CHỦ</a></li>
			<li><a href="">GIỚI THIỆU</a></li>
			<?php 
			if(isset($danhmuc)){
				foreach ($danhmuc as $key) {
			?>
			<li><a href="<?php echo base_url()?>danhmuc/view/<?php echo $key->danhmuc_id?>"><?php echo $key->tendanhmuc ?></a>
				<ul>
			<?php 
			$chitiet_model = $this->Chitiet_dm_model->getinfo($key->danhmuc_id);
			if(isset($chitiet_model)){
				foreach ($chitiet_model as $row) {
			?>
				
					<li><a href="<?php echo base_url()?>danhmuc/view2/<?php echo $row->ma_sp?>"><?php echo $row->ten_chitiet_dm ?></li>
			<?php
				}

			}
			 ?>
			 	</ul>
			</li>
			<?php
				}

			}

			 ?>
			 <li><a href="">ĐẶT HÀNG</a></li>
		</ul>
	</div>
</section>
<div>
	<table class="table table-bordered" style="text-align:center; width:900px;margin-top:50px;">
		<thead>
			<tr>
				<td>STT</td>
				<td>Ảnh sản phẩm</td>
				<td>Tên sản phẩm</td>
				<td>Giá sản phẩm</td>
				<td>Số sản phẩm</td>
				<td>Thành tiền</td>
				<td>Hoạt động</td>
			</tr>
		</thead>
		<tbody>
			
		</tbody>
	</table>
</div>