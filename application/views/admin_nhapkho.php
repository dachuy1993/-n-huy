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

<div>
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
					<p style="font-size: 30px;font-weight: bold; padding: 0px 0 0 20px;">NHẬP KHO SẢN PHẨM MỚI</p>
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
				<div class="btn-group" role="group" aria-label="..." style="float: right; margin: 20px;">
					<?php 
            	$style = array(
            		// 'class' => 'login-content',
            		'enctype' =>'multipart/form-data'
            		);
            	echo form_open('Admin_kho/add',$style);
             ?>
             		<button><a href="<?php echo base_url()?>Admin_kho" style = 'color: black;'>Trở về</a></button>
					<button type="submit">
					<span class="glyphicon"></span>
					Lưu sản phẩm
					</button>
					<button><a href="<?php echo base_url()?>Admin_nhapkho" style="color: black;">
					Phiếu nhập kho
					</a></button>
					

	  			</div>
			</div>
			<div>
				
				<table class="table table-bordered">
				    <thead>
				      <tr>
				        <th style="text-align: center;">STT</th>
				        <th style="text-align: center;">Tên sản phẩm</th>
				        <th style="text-align: center;">Ảnh sản phẩm</th>
				        <th style="text-align: center;">Giá nhập</th>
				        <th style="text-align: center;">Giá bán></th>
				        <th style="text-align: center;">Số lượng nhập</th>
				        <th style="text-align: center;">Kích thước</th>
				        <th style="text-align: center;">Màu sắc</th>
				        <th style="text-align: center;">Chất liệu</th>
				        <th style="text-align: center;">Mã sản phẩm</th>
				        <th style="text-align: center;">Danh mục id</th>
				        <th style="text-align: center;">Bảo hành</th>
				      </tr>
				    </thead>

	    			<tbody>
	    				
	      				<tr>
					        <td style="text-align: center;"></td>
					        <td style="text-align: center;"><input type="text" name="tensp"></td>
					        <td style="text-align: center;"><input type="file" name="userfile"></td> 
					        <td style="text-align: center;"><input type="text" name="gianhap"></ins></td>
					        
					        <td style="text-align: center;"><input type="text" name="giaban"></td>
					        <td style="text-align: center;"><input  type="text" name="soluongnhap"></td>
					        <td style="text-align: center;"><input class="form-control" type="text" name="kichthuoc"></td>
					        <td style="text-align: center;"><input class="form-control" type="text" name="mausac"></td>
					        <td style="text-align: center;"><input class="form-control" type="text" name="chatlieu"></td>
					        <td style="text-align: center;"><input class="form-control" type="text" name="masanpham"></td>
					        <td style="text-align: center;"><input class="form-control" type="text" name="danhmuc"></td>
					        <td style="text-align: center;"><input class="form-control" type="text" name="baohanh"></td>
	      				</tr>
	      			
	    			</tbody>
	    			<tbody>
					<?php 
	  				if(isset($cart)){
	  					echo form_open('product/update_cart');
	  					foreach ($cart as $key) {
	  						$money +=$key['subtotal'];
	  						$stt +=1;
	  						// $img = $this->Product_model->getinfo($key['id']);
	  						// if(isset($img)){
	  						// 	foreach ($img as $title) {
	  						// 		# code...
	  						// 	}
	  						// }
	  						  echo form_hidden('cart[' . $key['id'] . '][id]', $key['id']);
	  						
            echo form_hidden('cart[' . $key['id'] . '][rowid]', $key['rowid']);
            echo form_hidden('cart[' . $key['id'] . '][name]', $key['name']);
            echo form_hidden('cart[' . $key['id'] . '][price]', $key['price']);
            echo form_hidden('cart[' . $key['id'] . '][qty]', $key['qty']);

					?>
			<tr>
				<td><?php echo $stt?></td>
				<td>
	        	<img src="<?php echo base_url()?>public/img/<?php echo $key['img']?>" width="
	        100%" height = "70px" style ="margin: 0 auto">
	        	</td>
	        	<td><?php echo $key['name']?></td>
	        	<td><?php echo number_format($key['price'])?> <sup>vnđ</sup></td>
	        	<td><?php echo form_input('cart[' . $key['id'] . '][qty]', $key['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?></td>
	        	<td><?php echo $key['kt']?></td>
	        	<td><?php echo $key['ms']?></td>
	        	<td><?php echo $key['cl']?></td>
	        	<td><?php echo $key['bh']?></td>
	        	<td><?php echo number_format($key['subtotal']) ?> <sup>vnđ</sup></td>
	        	<td><a href="<?php echo base_url()?>product/remove/<?php echo $key['rowid']?>" class="btn btn-default">Xóa</a></td>
			</tr>
			
        	<?php }}?>
        	<tr>
        		<td colspan="3" style="text-align: center;">Tổng tiền là: <?php echo number_format($money) ?> VNĐ</td>
        		<td colspan="8">
        			<a href="<?php echo base_url()?>product/remove/all" class="btn btn-default">Xóa giỏ hàng</a>
        			 <input class ='btn btn-info'  type="submit" value="Update giỏ hàng"/>
        <?php echo form_close(); ?>
        			<a href="#login-box" class="btn btn-success login-window" >Thanh toán</a></button>
        			<button><a href="<?php echo base_url()?>Admin_nhapkho/add?>" style="color: black;">Thêm</a>
				</button>
        		</td>
        	</tr>
		</tbody>
				
	    			
	  			</table>
			</div>
			
		</div>
	</div>
</div>

</body>
</html>