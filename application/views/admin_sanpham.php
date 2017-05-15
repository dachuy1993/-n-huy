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
			<a href="">
				<span class=" glyphicon glyphicon-home icon"></span>
			</a>
		</li>
		<li>
			<a href="">
				<span class=" glyphicon glyphicon-dashboard icon"></span>
			</a>
			<p style="color: white;">Bảng điều khiển</p>
		</li>
		<li>
			<a href="">
				<span class=" glyphicon glyphicon-usd icon" ></span>
			</a>
			<p style="color: white;">Bán hàng</p>
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

				<a href="<?php echo base_url()?>catalog" class="btn btn-info lien-he login-window button orange">
				<span class="glyphicon"></span>
				Danh mục
				</a>
  			</div>
			<div class="btn-group" role="group" aria-label="..." style="float: right; margin: 20px;">

				<a href="#login-box" class="btn btn-success lien-he login-window button orange">
				<span class="glyphicon"></span>
				Thêm sản phẩm
				</a>
  			</div>
		</div>
		<div>
			<table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Ảnh sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Loại sản phẩm</th>
        <th>Số sản phẩm</th>
        <th>Giá sản phẩm</th>
        <th>Kích thước sản phẩm</th>
        <th>Màu sắc sản phẩm</th>
        <th>Chất liệu sản phẩm</th>
        <th>Bảo hành sản phẩm</th>
        <th>Hoạt động</th>
      </tr>
    </thead>
    <tbody>
    <?php 
	  				if(isset($product1)){
	  					foreach ($product1 as $key) {
					?>
      <tr>
        <td><?php echo $key->sanpham_id?></td>
        <td>
        	<img src="<?php echo base_url()?>public/img/<?php echo $key->Anh_sp?>" width="
        100%" height = "70px" style ="margin: 0 auto">
        </td>
        <td><?php echo $key->Ten_sp?></td>
        <td><?php echo $key->maloai_sp?></td>
        <td><?php echo $key->Soluong_sp?></td>
        <td><?php echo $key->Gia_sp?></td>
        <td><?php echo $key->Kichthuoc_sp?></td>
        <td><?php echo $key->Mausac_sp?></td>
        <td><?php echo $key->Chatlieu_sp?></td>
        <td><?php echo $key->Baohanh_sp?></td>
        <td><a href="<?php echo base_url()?>product/edit/<?php echo $key->sanpham_id?>">Sửa</a>
        <a href="<?php echo base_url()?>product/delete/<?php echo $key->sanpham_id?>">Xóa</a>
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
            <p class="login_title"> Thêm sản phẩm <?php 
	  				if (isset($getinfo)) {
	  					foreach ($getinfo as $key) {
	  						echo $key->Ten_sp;}}
	  						?></p>
            <a href="#" class="close"><img src="close.png" class="img-close" title="Close Window" alt="Close" /></a>
            <form method="post" class="login-content" action="#">
                <table>
                	<tr>
                		<td colspan="2"><label>

						Thông tin sản phẩm
				</label></td>
                	</tr>
                	<tr>
                		<td><label>Tên (*)</label></td>
                		<td><input type="text" name="ten"></td>
                	</tr>
                	<tr>
                		<td><label>Loại sản phẩm (*)</label></td>
                		<td><form name=myform>
							<select name=mytextarea>
							<option name=one value=one> one </option>
							<option name=two value=two> two </option>
							<option name=three value=three> three </option>
							</select>
							</form>
						</td>
                	</tr>
                	<tr>
                		<td><label>Ảnh sản phẩm (*)</label></td>
                		<td>
                			
                		</td>
                	</tr>
                	<tr>
                		<td><label>Số lượng (*)</label></td>
                		<td><input type="text" name="Soluong"></td>
                	</tr>
                	<tr>
                		<td><label>Giá bán (*)</label></td>
                		<td><input type="text" name="Giaban"></td>
                	</tr>
                	<tr>
                		<td><label>Kích thước (*)</label></td>
                		<td><input type="text" name="Kichthuoc"></td>
                	</tr>
                	<tr>
                		<td><label>Màu sắc (*)</label></td>
                		<td><input type="text" name="Mausac"></td>
                	</tr>
                	<tr>
                		<td><label>Chất liệu (*)</label></td>
                		<td><input type="text" name="Chatlieu"></td>
                	</tr>
                	<tr>
                		<td><label>Bảo hành (*)</label></td>
                		<td>
                			<form name=myform>
							<select name=mytextarea>
							<option name=one value=one> 12 tháng </option>
							<option name=two value=two> 24 tháng </option>
							<option name=three value=three> 36 tháng </option>
							</select>
							</form>
                		</td>
                	</tr>
                </table>
                <div class="text-center">
                	<button class="button submit-button" type="button">Đặt hàng ngay</button>
                </div>
            <p>
            <a class="forgot" href="#">Quên mật khẩu?</a>
            </p>        
            </form>
        </div>

</body>
</html>