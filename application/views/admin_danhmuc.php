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
<script type="text/javascript" src="<?php echo base_url();?>public/style/plugin/tinymce/tinymce.min.js"></script>
<!--    <script>tinymce.init({ selector:'textarea' });</script>-->
<!--    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>-->
    <script type="text/javascript" src="<?php echo base_url();?>public/style/plugin/tinymce/init-tinymce.js"></script>

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
			<a href="<?php echo base_url()?>dieukhien" style = "display: block;">
				<span class=" glyphicon glyphicon-usd icon" ></span>
				<p style="color: white;">Bán hàng</p>
			</a>
		</li>
		<li style="background: #524d49">
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
				<p style="font-size: 30px;font-weight: bold; padding: 0px 0 0 20px;">DANH MỤC</p>
			</div>
			<div class="col-lg-7">
				<div class="icon-user"  style="float: right;">
					<ul>
						<li>
							<div class="input-group" style="width: 370px;">
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
		<div class="row" style="background: #ccc;margin: 20px 0 20px 0; ">
			<div class="btn-group" role="group" aria-label="..." style="float: right; margin: 20px;">

				<a href="<?php echo base_url()?>product" class="btn btn-success lien-he login-window button orange">
				<span class="glyphicon"></span>
				Trở về
				</a>
  			</div>			
  			<div class="btn-group" role="group" aria-label="..." style="float: right; margin: 20px;">
				<a href="#login-box" class="btn btn-success lien-he login-window button orange">
				<span class="glyphicon"></span>
				Thêm danh mục
				</a>
  			</div>
		</div>
		<div class="row">
			<div class="col-lg-3"></div>
			<div class="col-lg-6">
				<table class="table table-bordered">
				    <thead>
				      <tr>
				        <th>STT</th>
				        <th>Tên danh mục</th>
				        <th>Hoạt động</th>
				      </tr>
				    </thead>
				    <tbody>
				    <?php 
				    $i = 0;
					  				if(isset($danhmuc1)){
					  					foreach ($danhmuc1 as $key) {
					  						$i+=1;
									?>
				      <tr>
				        <td><?php echo $i?></td>
				        <td><?php echo $key->tendanhmuc?></td>
				        <td><a href="<?php echo base_url()?>danhmuc/edit/<?php echo $key->danhmuc_id?>">Sửa</a>
				        <a href="<?php echo base_url()?>danhmuc/delete/<?php echo $key->danhmuc_id?>">Xóa</a>
				        </td>
				      </tr>
				      <?php }}?>
				    </tbody>
				</table>
			</div>
			<div class="col-lg-3"></div>
		</div>
	</div>
</div>
	


	</div>
        <div id="login-box" class="login">
            <p class="login_title"> Thêm danh mục mới </p>
            <a href="#" class="close"><img src="close.png" class="img-close" title="Close Window" alt="Close" /></a>
            <?php 
            	$style = array(
            		'class' => 'login-content',
            		);
            	echo form_open('danhmuc/add',$style);
             ?>
                <table>
                	<tr>
                		<td colspan="2"><label>

						Thông tin danh mục
				</label></td>
                	</tr>
                	<tr>
                		<td><label>Tên danh muc (*)</label></td>
                		<td><input type="text" name="tendm"></td>
                	</tr>
                </table>
                <div class="text-center">
                	<button class="btn btn-default" type="submit" style="margin: 10px;">
                			Lưu danh mục mới
                	</button>
                </div>
            <p>
            <a class="forgot" href="#">Quên mật khẩu?</a>
            </p>        
            <?php echo form_close()?>
        </div>

</body>
</html>