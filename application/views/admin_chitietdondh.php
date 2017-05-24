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
				CHI TIẾT ĐƠN HÀNG
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
								    		<span class=" glyphicon glyphicon-user">huy</span>
								    	</a>
								    <span class="caret"></span>
								  </button>
								  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
								    <li><a href="#">Chế độ xem khách hàng</a></li>
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

				<a href="<?php echo base_url()?>hoadonban" class="btn btn-info lien-he login-window button orange">
				<span class="glyphicon"></span>
				Hóa đơn bán hàng
				</a>
  			</div>
			<div class="btn-group" role="group" aria-label="..." style="float: right; margin: 20px;">

				<a href="#login-box" class="btn btn-success lien-he login-window button orange">
				<span class="glyphicon"></span>
				Thêm đơn mua hàng
				</a>
  			</div>
		</div>
		<p class="text-center" style="font-size: 20px; color: blue;">CHI TIẾT ĐƠN MUA HÀNG</p>
		<div class="col-md-12"  style="height: 250px;overflow-x: hidden;">
			<table class="table table-bordered" >
			    <thead>
			      <tr>
			      	<td>STT</td>
			        <th>Tên sản phẩm</th>
			        <th>Ảnh sản phẩm</th>
			        <th>Giá sản phẩm</th>
			        <th>Kích thước</th>
			        <th>Màu sắc</th>
			        <th>Chất liệu</th>
			        <th>Số lượng</th>
			        <th>Bảo hành</th>
			        <td>Hoạt động</td>
			      </tr> 
			    </thead>
			    <tbody>
					    <?php 
			  				if(isset($chitiet1)){
			  					foreach ($chitiet1 as $key) {
							?>
			      	<tr>
			      		<td>1</td>
			      		<td><?php echo $key->Ten_sp?></td>
				        <td><?php echo $key->Anh_sp?></td>
				        <td><?php echo $key->Gia_sp?></td>
				        <td><?php echo $key->Kichthuoc_sp?></td>
				        <td><?php echo $key->Mausac_sp?></td>
				        <td><?php echo $key->Chatlieu_sp?></td>
				        <td><?php echo $key->Soluongmua?></td>
				        <td><?php echo $key->Baohanh_sp?></td>
				        <!-- <td>
						<?php 
					        if($key->Tinh_trang === "Chưa chuyển hàng" ){
				    	?>
				    	<a href="<?php echo base_url()?>order/edit/<?php echo $key->Dondh_id?>">giao hàng</a>
				    	<?php
				        	}else{
						?>
						<a href="<?php echo base_url()?>order/delete/<?php echo $key->Dondh_id?>">Xóa</a>
						<?php
					        	}
				    	?>
				         
				        </td> -->

				        
			      </tr>
	      			<?php }}?>
			    </tbody>
		 	</table>
		</div>
		</div>
</div>

</body>
</html>