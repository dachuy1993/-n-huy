<?php 
if(isset($err)){
	echo $err;
	die();
}
?>
<?php 
include 'admin_header.php';
 ?>

<div class="menu-right">
	<div>
		<div class="row">
			<div class="col-lg-5">
				<p style="font-size: 30px;font-weight: bold; padding: 0px 0 0 20px;">NHÂN VIÊN</p>
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
		<?php 
		
	  				if (isset($getinfo)) {
	  					foreach ($getinfo as $key) {
	  						echo form_open('nhanvien/edit/'.$key->nhanvien_id);
	  						?>
		<div class="row" style="background: #ccc;margin: 20px 0 20px 0;">
			<button type="submit" class="btn btn-default" style="margin: 20px; background: orange; float: right;">Lưu nhân viên</button>
		</div>
		<div class="row">
			<div >
				<table class="table_edit_sp">
					<tr>
						<td colspan="2" style="text-align: center;font-size: 25px;">Thông tin nhân viên</td>
					</tr>
					<tr>
						<td>Họ tên </td>
						<td>
							<input type="text" name="tennv" value="<?php echo $key->ho_ten?>">
						</td>
					</tr>
					<tr>
						<td>Địa chỉ </td>
						<td>
							<input type="text" name="diachi" value="<?php echo $key->dia_chi?>">
						</td>
					</tr>
					<tr>
						<td>Số điện thoại</td>
						<td>
							<input type="text" name="sodienthoai" value="<?php echo $key->sdt?>">
						</td>
					</tr>
					<tr>
						<td>Tài khoản</td>
						<td>
							<input type="text" name="taikhoan" value="<?php echo $key->tai_khoan?>">
						</td>
					</tr>
					<tr>
						<td>Mật khẩu</td>
						<td>
							<input type="text" name="matkhau" value="<?php echo $key->mat_khau?>">
						</td>
					</tr>
				</table>
			</div>
		</div>
		<?php }}?>
	</div>
</div>
</body>
</html>