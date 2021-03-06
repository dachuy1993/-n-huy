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


	
<div class=" menu-left" style="margin-top: -10px;">

	<ul>

		<li>
			<a href="<?php echo base_url()?>admin">
				<span class=" glyphicon glyphicon-home icon"></span>
			</a>
		</li>
		<li>
			<a href="<?php echo base_url()?>Dieukhien">
				<span class=" glyphicon glyphicon-dashboard icon"></span>
				<p style="color: white;">Bảng điều khiển</p>
			</a>
		</li>
		<li style="background: #524d49">
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

<div class="menu-right">
	<div>
		<div class="row" style="margin-top: 10px; margin-right: 0px;">
			<div class="col-lg-5">
				<p style="font-size: 30px;font-weight: bold; padding: 0px 0 0 20px;">ĐƠN ĐẶT HÀNG</p>
			</div>
			<div class="col-lg-7">
				<div class="icon-user"  style="float: right;margin-right: 36px;">
					<ul>
						<li style="margin: 0 5px;">
							<div class="input-group" style="width: 370px;">
					      		<input type="text" class="form-control timkiem" placeholder="Search for...">
					      		<span class="input-group-btn">
					        		<button class="btn btn-default" type="button">Tìm Kiếm</button>
					      		</span>
					    	</div>
						</li>
						<li style="margin:  0 5px;">
							<a href="">
								<span class=" glyphicon glyphicon-bell"><sup>0</sup></span>
							</a>
						</li>
						<li style="margin: 0 20px 0 5px;">
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

				<a href="<?php echo base_url()?>Hoadonban" class="btn btn-info lien-he login-window button orange">
				<span class="glyphicon"></span>
				Hóa đơn bán hàng
				</a>
  			</div>
			<div class="btn-group" role="group" aria-label="..." style="float: right; margin: 20px;">

				<a href="#login-box" class="btn btn-success lien-he login-window button orange">
				<span class="glyphicon"></span>
				Thêm đơn mua hàng
				</a>
  			</div>
		</div>
		<p class="text-center" style="font-size: 20px; color: blue;">CÁC ĐƠN MUA HÀNG</p>
		<div class="col-md-12"  style="height: 250px;overflow-x: hidden;">
			<table class="table table-bordered" >
			    <thead>
			      <tr>
			      	<th>STT</th>
			      	<td>Xem chi tiết</td>
			        <th>Ngày đặt hàng</th>
			        <th>Tên khách hàng</th>
			        <th>Số điện thoại</th>
			        <th>Số tiền</th>
			        <th>Ghi chú</th>
			        <th>Trạng thái</th>
			        <td>Hoạt động</td>
			      </tr>
			    </thead> 
			    <?php $stt = 0;?>
			    <tbody>
					<?php 
					    
			  				if(isset($order1)){
			  					foreach ($order1 as $key) { 
			  						$stt+=1;
							?>
			      	<tr>
			      		<td><?php echo $stt?></td>
			      		<td><a href="<?php echo base_url()?>chitiet_dondh/view/<?php echo $key->Dondh_id?>">Xem chi tiết đơn hàng</a></td>
				        <td><?php echo $key->Ngay_lap?></td>
				        <td><?php echo $key->Ten_kh?></td>
				        <td><?php echo $key->Sodt?></td>
				        <td><?php echo number_format($key->Tong_gia)?> VNĐ</td>
				  		<td><?php echo $key->Ghi_chu?></td>
				        <td><?php echo "Chờ giao hàng"?></td>
				        <td>
						<?php 
					        if($key->Tinh_trang === "0" ){
				    	?>
				    	<a href="<?php echo base_url()?>order/giaohang/<?php echo $key->Dondh_id?>">Giao hàng</a>
				    	<a href="<?php echo base_url()?>order/huy/<?php echo $key->Dondh_id?>">Hủy</a>
				    	<?php
				        	}
				        	if($key->Tinh_trang === "2"){
						?>
						<a href="<?php echo base_url()?>order/delete/<?php echo $key->Dondh_id?>">Xác nhận</a>
						<a href="<?php echo base_url()?>order/delete/<?php echo $key->Dondh_id?>">Xóa</a>
						<?php
					        	}
				    	?>
				         
				        </td>

				        
			      </tr>
	      			<?php }}?>
	      			<?php 
			  				if(isset($order2)){
			  					foreach ($order2 as $key) { 
			  						$stt+=1;
							?>
			      	<tr>
			      		<td><?php echo $stt?></td>
			      		<td><a href="<?php echo base_url()?>chitiet_dondh/view/<?php echo $key->Dondh_id?>">Xem chi tiết đơn hàng</a></td>
				        <td><?php echo $key->Ngay_lap?></td>
				        <td><?php echo $key->Ten_kh?></td>
				        <td><?php echo $key->Sodt?></td>
				        <td><?php echo $key->Tong_gia?></td>
				  		<td><?php echo $key->Ghi_chu?></td>
				        <td><?php echo "Hàng đặt riêng"?></td>
				        <td>
						<?php 
					        if($key->Tinh_trang === "0" ){
				    	?>
				    	<a href="<?php echo base_url()?>order/edit/<?php echo $key->Dondh_id?>">giao hàng</a>
				    	<?php
				        	} 
				        	if($key->Tinh_trang === "2"){
						?>
						<a href="<?php echo base_url()?>order/delete/<?php echo $key->Dondh_id?>">Xác nhận</a>
						<a href="<?php echo base_url()?>order/delete/<?php echo $key->Dondh_id?>">Xóa</a>
						<?php
					        	}
				    	?>
				         
				        </td>

				        
			      </tr>
	      			<?php }}?>
			    </tbody>
		 	</table>
		</div>
		
	</div>
</div>
	


	<!-- </div> -->
        <div id="login-box" class="login">
            <p class="login_title"> Thêm đơn đặt hàng </p>  
            <a href="#" class="close"><img src="close.png" class="img-close" title="Close Window" alt="Close" /></a>
            <?php 
            	$style = array(
            		'class' => 'login-content',
            		);
            	echo form_open('order/add',$style);
             ?>
                <table>
                	<tr>
                		<td colspan="2"><label> 

						Thông tin đơn đặt hàng
				</label></td>
                	</tr>
                	<!-- <tr>
                		<td><label>Tên sản phẩm (*)</label></td>
                		<td><input type="text" name="tensp"></td>
                	</tr> -->
                <!-- 	<tr>
                		<td><label>Ngày mua (*)</label></td>
                		<td><input type="text" name="ngaymua"></td>
                	</tr> -->
                	<tr>
                		<td><label>Giá sản phẩm (*)</label></td>
                		<td><input type="text" name="giasp"></td>
                	</tr>
                	<tr>
                		<td><label>Tên khách hàng (*)</label></td>
                		<td><input type="text" name="tenkh"></td>
                	</tr>
                	<tr>
                		<td><label>Số điện thoại(*)</label></td>
                		<td><input type="text" name="sodt"></td>
                	</tr>
                	<tr>
                		<td><label>Địa chỉ giao hàng (*)</label></td>
                		<td><input type="text" name="diachigh"></td>
                	</tr>
                	<tr>
                		<td><label>Ghi chú (*)</label></td>
                		<td><input type="text" name="ghichu"></td>
                	</tr>
                	<tr>
                		<td><label>Trạng thái (*)</label></td>
                		<td>
                			<form name=myform>
							<select name=mytextarea>
							<option name=one value=one> Đang chờ xử lý</option>
							<option name=two value=two> Hoàn thành </option>
							</select>
							</form>
                		</td>
                	</tr>
                </table>
                <div class="text-center">
                	<button class="button submit-button" type="submit" style="width: 50%;">Lưu thông tin đơn đặt hàng</button>
                </div>
            <p>
            <a class="forgot" href="#">Quên mật khẩu?</a>
            </p>         
            <?php echo form_close() ?>       
        </div>
        

</body>
</html>