<?php 
include 'admin_header.php';
 ?>
<div class="menu-right">
	<div>
		<div class="row">
			<div class="col-lg-5">
				<p style="font-size: 30px;font-weight: bold; padding: 0px 0 0 20px;">THÊM BÀI VIẾT</p>
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
            	$style = array(
            		'class' => 'login-content',
            		);
            	echo form_open('Noidung/add',$style);
             ?>
		<div class="row" style="background: #ccc;margin: 20px 0 20px 0;">
			<button type="submit" class="btn btn-default" style="margin: 20px; background: orange; float: right;">Lưu bài viết</button>
		</div>
		<div class="row">
			<div style="width: 1000px;margin: 0 auto;">
				<table class="table_edit_sp">
					<tr>
						<td colspan="2" style="text-align: center;font-size: 25px;">Thông tin bài viết</td>
					</tr>
					<tr>
						<td  style="width: 150px;">Danh mục</td>
						<td><select name="danhmuc">
							<option value="Bài viết tư vấn">Bài viết tư vấn</option>
							<option value="Giới thiệu">Giới thiệu</option>	
							<option value="Chính sách vận chuyển">Chính sách vận chuyển</option>
							<option value="Chính sách bảo hành">Chính sách bảo hành</option>
							<option value="Hình thức thanh toán">Hình thức thanh toán</option>
							<option value="Đổi trả hàng">Đổi trả hàng</option>
						</select></td>
					</tr>
					<tr>
						<td>Tên tiêu đề</td>
						<td>
							<input class="form-control" type="text" name="tentieude" value="">
						</td>
					</tr>
					<tr>
						<td>Nội dung</td>
						<td>
							<textarea rows="20" name="noidung" class="form-control tinymce"></textarea>
						</td>
					</tr>
				</table>
			</div>
		</div>
		 <?php echo form_close() ?>
		}?>
	</div>
</div>
</body>
</html>