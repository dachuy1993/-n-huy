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
	  						$style = array('class' => 'form-group');
	  						echo form_open('product/edit/'.$key->sanpham_id,$style);
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
								<input class="form-control" type="text" name="tensp" value="<?php echo $key->Ten_sp?>">
							</td>
						</tr>
						<tr>
							<td>Mã sản phẩm</td>
							<td>
								<input class="form-control" type="text" name="masp" value="<?php echo $key->ma_sp?>">
							</td>
						</tr>
						<tr>
							<td>Số lượng</td>
							<td>
								<input class="form-control" type="number" name="soluong" value="<?php echo $key->Soluong_sp?>">
							</td>
						</tr>
						<tr>
							<td>Giá sản phẩm</td>
							<td>
								<input class="form-control" type="number" name="giasp" value="<?php echo $key->Gia_sp?>">
							</td>
						</tr>
						<tr>
							<td>Kích thước sản phẩm</td>
							<td>
								<input class="form-control" type="text" name="kichthuoc" value="<?php echo $key->Kichthuoc_sp?>">
							</td>
						</tr>
						<tr>
							<td>Màu sắc</td>
							<td>
								<input class="form-control" type="text" name="mausac" value="<?php echo $key->Mausac_sp?>">
							</td>
						</tr>
						<tr>
							<td>Chất liệu</td>
							<td>
								<input class="form-control" type="text" name="chatlieu" value="<?php echo $key->Chatlieu_sp?>">
							</td>
						</tr>
						<tr>
							<td>Thời gian bảo hành</td>
							<td>
								<input class="form-control" type="text" name="baohanh" value="<?php echo $key->Baohanh_sp?>">
							</td>
						</tr>
						<tr>
							<td>Thông tin sản phẩm</td>
							<td>
								<textarea rows="15" name="thongtin" class="form-control"><?php echo $key->Thong_tin_sp?>
								</textarea>
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