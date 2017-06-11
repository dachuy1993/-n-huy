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
				<p style="font-size: 30px;font-weight: bold; padding: 0px 0 0 20px;">DANH MỤC</p>
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
	  						echo form_open('danhmuc/edit/'.$key->danhmuc_id);
	  						?>
		<div class="row" style="background: #ccc;margin: 20px 0 20px 0;">
			<button type="submit" class="btn btn-default" style="margin: 20px; background: orange; float: right;">Lưu danh mục</button>
		</div>
		<div class="row">
			<div class="col-lg-3">
			
				
			</div>
			<div class="col-lg-6">
			
				
					<table class="table_edit_sp">
						<tr>
							<td colspan="2" style="text-align: center;font-size: 25px;">Thông tin danh mục</td>
						</tr>
						<tr>
							<td>Tên danh mục</td>
							<td>
								<input type="text" name="tensp" value="<?php echo $key->tendanhmuc?>">
							</td>
						</tr>
					</table>
					<table class="table table-bordered">
				    <thead>
				      <tr>
				        <th>ID</th>
				        <th>Tên chi tiết danh mục</th>
				        <th>
				        	<button type="submit" class="">Thêm</button>
				        </th>
				      </tr>
				    </thead>
				    <tbody>
				    <?php 
	  				if(isset($danhmuc)){
	  					foreach ($danhmuc as $key) {
						?>
				      <tr>
				        <td><?php echo $key->chitiet_dm_id?></td>
				        <td><?php echo $key->ten_chitiet_dm?></td>
				        <td><button><a href="#login-box" class="login-window">Sửa</a></button>
				        <button><a href="<?php echo base_url()?>danhmuc/delete/<?php echo $key->danhmuc_id?>">Xóa</a></button>
				        </td>
				      </tr>
				      <?php }}?>
				    </tbody>
				</table>
			</div>
			<div class="col-lg-3"></div>
		</div>
		<?php }
		}?>
	</div>
</div>
</body>
</html>