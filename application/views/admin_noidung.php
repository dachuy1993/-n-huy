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
				<p style="font-size: 30px;font-weight: bold; padding: 0px 0 0 20px;">SẢN PHẨM</p>
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

				<a href="<?php echo base_url()?>danhmuc" class="btn btn-info lien-he login-window button orange">
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
        <th>STT</th>
        <th>Tên tiêu đề</th>
        <th>Nội dung</th>
        <th>Hoạt động</th>
      </tr>
    </thead>
    <tbody>
    <?php 
	  				if(isset($noidung1)){
	  					foreach ($noidung1 as $key) { 
					?>
      <tr>
        <td><?php echo $key->noidung_id?></td>
        <td><?php echo $key->ten_tieu_de?></td>
        <td><?php echo $key->noi_dung?></td>
        <td><a href="<?php echo base_url()?>Noidung/edit/<?php echo $key->noidung_id?>">Sửa</a>
        <a href="">Xóa</a>
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
            <p class="login_title"> Thêm sản phẩm mới</p>
            <a href="#" class="close"><img src="close.png" class="img-close" title="Close Window" alt="Close" /></a>
            <?php 
            	$style = array(
            		'class' => 'login-content',
            		'enctype' =>'multipart/form-data'
            		);
            	echo form_open('product/add',$style);
             ?>
                <table>
                	<tr>
                		<td colspan="2">
                		<label>
						Thông tin sản phẩm
						</label>
						</td>
                	</tr>
                	<tr>
                		<td><label>Tên sản phẩm (*)</label></td>
                		<td><input type="text" name="Ten"></td>
                	</tr>
                	<tr>
                		<td><label>Mã loại danh mục (*)</label></td>
                		<td>
							<select name=mytextarea>
							<option name=one value='1'>Phòng khách</option>
							<option name=two value='2'>Phòng ngủ</option>
							<option name=three value='3'>Phòng ăn</option>
							<option name=four value='4'>Phòng thờ</option>
							<option name=five value='5'>Nội thất văn phòng</option>
							<option name=six value='6'>Đồ gỗ trang trí</option>
							</select>
							
						</td>
                	</tr>
                	<tr>
                		<td><label>Mã sản phẩm (*)</label></td>
                		<td><input type="text" name="masp"></td>
                	</tr>
                	<tr>
                		<td><label>Ảnh sản phẩm (*)</label></td>
                		<td>
                			<input type="file" name="userfile">
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
                			
							<select name=mytextarea>
							<option name=one value=one> 12 tháng </option>
							<option name=two value=two> 24 tháng </option>
							<option name=three value=three> 36 tháng </option>
							</select>
					
                		</td>
                	</tr>
                	<tr>
                		<td><label>Thông tin sản phẩm</label></td>
                		<td><input type="text" name="thongtin"></td>
                	</tr>
                </table>
                <div class="text-center">
                	<button class="button submit-button" type="submit">Lưu thông tin khách hàng</button>
                </div>
            <p>
            <a class="forgot" href="#">Quên mật khẩu?</a>
            </p>    
            <?php echo form_close() ?>    
            </form>
        </div>

</body>
</html>