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
				<p style="font-size: 30px;font-weight: bold; padding: 0px 0 0 20px;">KHÁCH HÀNG</p>
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
	  						echo form_open('customer/edit/'.$key->Khachhang_id);
	  						?>
		<div class="row" style="background: #ccc;margin: 20px 0 20px 0;">
			<button type="submit" class="btn btn-default" style="margin: 20px; background: orange; float: right;">Lưu khách hàng</button>
		</div>
		<div class="row">
			<div >
				<table class="table_edit_sp">
					<tr>
						<td colspan="2" style="text-align: center;font-size: 25px;">Thông tin khách hàng</td>
					</tr>
					<tr>
						<td>Tên khách hàng</td>
						<td>
							<input type="text" name="tenkh" value="<?php echo $key->Ten_kh?>">
						</td>
					</tr>
					<tr>
						<td>Địa chỉ email</td>
						<td>
							<input type="text" name="diachiemail" value="<?php echo $key->Diachi_email?>">
						</td>
					</tr>
					<tr>
						<td>Số điện thoại</td>
						<td>
							<input type="text" name="sodienthoai" value="<?php echo $key->Sdt?>">
						</td>
					</tr>
					<tr>
						<td>Địa chỉ giao hàng</td>
						<td>
							<input type="text" name="diachigiaohang" value="<?php echo $key->Diachi_giaohang?>">
						</td>
					</tr>
					<tr>
						<td>Ghi chú</td>
						<td>
							<input type="text" name="ghichu" value="<?php echo $key->Ghichu?>">
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