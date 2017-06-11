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
				        <th>ID</th>
				        <th>Tên danh mục</th>
				        <th>Hoạt động</th>
				      </tr>
				    </thead>
				    <tbody>
				    <?php 
					  				if(isset($danhmuc1)){
					  					foreach ($danhmuc1 as $key) {
									?>
				      <tr>
				        <td><?php echo $key->danhmuc_id?></td>
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
                		<a href="">
                			Lưu danh mục mới
                		</a>
                	</button>
                </div>
            <p>
            <a class="forgot" href="#">Quên mật khẩu?</a>
            </p>        
            <?php echo form_close()?>
        </div>

</body>
</html>