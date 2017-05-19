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
				<div style="font-size: 25px;">
					NHÂN VIÊN
				</div>
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
		<div class="row" style="background: #ccc;margin: 20px 0 20px 0;">
			<div class="btn-group " role="group" aria-label="..." style="float: right; margin: 20px;">
				<a href="#login-box" class="btn btn-success lien-he login-window button orange">
				<span class="glyphicon"></span>
					Thêm nhân viên
				</a>
  			</div>
		</div>
		<div>
			<table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Họ tên</th>
        <th>Địa chỉ</th>
        <th>Số điện thoại</th>
        <th>Tài khoản</th>
        <th>Mật khẩu</th>
        <th>Hoạt động</th>
      </tr>
    </thead>
    <tbody>
    <?php 
	  				if(isset($nhanvien1)){
	  					foreach ($nhanvien1 as $key) {
	  						
					?>
      <tr>
        <td><?php echo $key->nhanvien_id?></td>
        <td><?php echo $key->ho_ten?></td>
        <td><?php echo $key->dia_chi?></td>
        <td><?php echo $key->sdt?></td>
        <td><?php echo $key->tai_khoan?></td>
        <td><?php echo $key->mat_khau?></td>
        <td><a href="<?php echo base_url()?>nhanvien/edit/<?php echo $key->nhanvien_id?>">Sửa</a>
        <a href="<?php echo base_url()?>nhanvien/delete/<?php echo $key->nhanvien_id?>">Xóa</a>
        </td>
      </tr>
      <?php }}?>
    </tbody>
  </table>
		</div>
	</div>
</div>
	


	</div>
        <div id="login-box" class="login">
            <p class="login_title"> Thêm nhân viên mới </p>
            <a href="#" class="close"><img src="close.png" class="img-close" title="Close Window" alt="Close" /></a>
            <?php 
            	$style = array(
            		'class' => 'login-content',
            		);
            	echo form_open('nhanvien/add',$style);
             ?>
                <table>
                	<tr>
                		<td colspan="2"><label>

						Thông tin nhân viên
				</label></td>
                	</tr>
                	<tr>
                		<td><label>Họ tên nhân viên (*)</label></td>
                		<td><input type="text" name="Tennv" required></td>
                	</tr>
                	<tr>
                		<td><label>Địa chỉ (*)</label></td>
                		<td>
                			<input type="text" name="Diachinv" required>
                		</td>
                	</tr>
                	<tr>
                		<td><label>Số điện thoại (*)</label></td>
                		<td><input type="text" name="Sdt" required></td>
                	</tr>
                	<tr>
                		<td><label>Tài khoản (*)</label></td>
                		<td><input type="text" name="Taikhoan" required></td>
                	</tr>
                	<tr>
                		<td><label>Mật khẩu (*)</label></td>
                		<td><input type="text" name="Matkhau"></td>
                	</tr>
                	
                </table>
                <div class="text-center">
                	<button class="btn btn-default" type="submit" style="margin: 10px;">
                		<a href="">
                			Lưu thông tin nhân viên
                		</a> 
                	</button>
                </div>
            <p>
            <a class="forgot" href="#">Quên mật khẩu?</a>
            </p>        
            <?php echo form_close() ?>
        </div>

</body>
</html>