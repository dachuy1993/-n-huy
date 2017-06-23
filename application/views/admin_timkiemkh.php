<!-- <?php 
// include 'admin_header.php';
 ?>
 -->
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


    
 <div class=" menu-left" style="margin-top: -10px;">

    <ul>

        <li>
            <a href="<?php echo base_url()?>admin">
                <span class=" glyphicon glyphicon-home icon"></span>
            </a>
        </li>
        <li style="background: #524d49">
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
<div class="menu-right" >
	<div>
		<div class="row" style="margin-top: 10px; margin-right: 0px;">
			<div class="col-lg-5">
				<div style="font-size: 25px;">
					<p style="font-size: 30px;font-weight: bold; padding: 0px 0 0 20px;">KHÁCH HÀNG</p>
				</div>
			</div>
			<div class="col-lg-7">
				<div class="icon-user"  style="float: right;">
					<ul>
						<li>
							<div class="input-group" style="width: 370px;">
					      		<input type="text" name="admin_tk_kh" class="form-control timkiem" placeholder="Search for...">
					      		<span class="input-group-btn">
					        		<button class="btn btn-default" type="button">Tìm Kiếm</button>
					      		</span>
					    	</div>
						</li>
						<li>
							<a href="">
								<span class=" glyphicon glyphicon-bell" style="margin: 0 10px 0 10px;"><sup>0</sup></span>
							</a>
						</li>
						<li>
							<div class="dropdown">
								  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								    	<a href="">
								    		<span class=" glyphicon glyphicon-user"><?php if(isset($user)){echo $user;} ?></span>
								    	</a>
								    <span class="caret" ></span>
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
		<div class="row" style="height: 76px; background: #ccc;margin: 20px 0 20px 0; ">
			<a href="<?php echo base_url()?>customer" class = "btn btn-default" style="float: right; margin-top: 23px; margin-right: 50px;">Trở về</a>
		</div>
		<div>
			<table class="table table-bordered">
    <thead>
      <tr>
        <th>STT</th>
        <th>Tên khách hàng</th>
        <th>Địa chỉ email</th>
        <th>Số điện thoại</th>
        <th>Địa chỉ giao hàng</th>
        <th>Ghi chú</th>
        <th>Hoạt động</th>
      </tr>
    </thead>
    <tbody>
    <?php 
        $stt = 0;
	  				if(isset($getinfo1)){
	  					foreach ($getinfo1 as $key) {
	  						$stt+=1;
					?>
      <tr>
        <td><?php echo $stt?></td>
        <td><?php echo $key->Ten_kh?></td>
        <td><?php echo $key->Diachi_email?></td>
        <td><?php echo $key->Sdt?></td>
        <td><?php echo $key->Diachi_giaohang?></td>
        <td><?php echo $key->Ghichu?></td>
        <td><a href="<?php echo base_url()?>customer/edit/<?php echo $key->Khachhang_id?>">Sửa</a>
        <a href="<?php echo base_url()?>customer/delete/<?php echo $key->Khachhang_id?>">Xóa</a>
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
            <p class="login_title"> Thêm khách hàng mới </p>
            <a href="#" class="close"><img src="close.png" class="img-close" title="Close Window" alt="Close" /></a>
            <?php 
            	$style = array(
            		'class' => 'login-content',
            		);
            	echo form_open('customer/add',$style);
             ?>
                <table>
                	<tr>
                		<td colspan="2"><label>

						Thông tin khách hàng
				</label></td>
                	</tr>
                	<tr>
                		<td><label>Tên khách hàng (*)</label></td>
                		<td><input type="text" name="Tenkh" required></td>
                	</tr>
                	<tr>
                		<td><label>Địa chỉ email (*)</label></td>
                		<td>
                			<input type="email" name="Diachiemail" required>
                		</td>
                	</tr>
                	<tr>
                		<td><label>Số điện thoại (*)</label></td>
                		<td><input type="text" name="Sdt" required></td>
                	</tr>
                	<tr>
                		<td><label>Địa chỉ giao hàng (*)</label></td>
                		<td><input type="text" name="Diachigiaohang" required></td>
                	</tr>
                	<tr>
                		<td><label>Ghi chú (*)</label></td>
                		<td><input type="text" name="Ghichu"></td>
                	</tr>
                	
                </table>
                <div class="text-center">
                	<button class="btn btn-default" type="submit" style="margin: 10px;">
                		<a href="">
                			Lưu thông tin khách hàng
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