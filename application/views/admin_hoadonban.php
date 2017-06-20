<?php 
include 'admin_header.php';
 ?>

<div class="menu-right">
	<div>
		<div class="row">
			<div class="col-lg-5">
				<p style="font-size: 30px;font-weight: bold; padding: 0px 0 0 20px;">HÓA ĐƠN BÁN</p>
			</div>
			<div class="col-lg-7">
				<div class="icon-user"  style="float: right;">
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
			<div class="btn-group" role="group" aria-label="..." style="float: right; margin: 20px;">

				<a href="#login-box" class="btn btn-success lien-he login-window button orange">
				<span class="glyphicon"></span>
				Thêm đơn mua hàng
				</a>
  			</div>
		</div>
		<p class="text-center" style="font-size: 20px; color: blue;">HÓA ĐƠN BÁN HÀNG</p>
		<div class="col-md-12"  style="height: 250px;overflow-x: hidden;">
			<table class="table table-bordered" >
			    <thead>
			      <tr>
			      	<td>Xem chi tiết</td>
			        <th>ID</th>
			        <th>Ngày mua</th>
			        <th>Tổng giá trị</th>
			        <th>Tên khách hàng</th>
			        <th>Số điện thoại</th>
			        <th>Địa chỉ giao hàng</th>
			        <th>Ghi chú</th>
			        <th>Trạng thái</th>
			        <td>Hoạt động1</td>
			      </tr>
			    </thead> 
			    <tbody>
					    <?php 
			  				if(isset($hoadonban1)){
			  					foreach ($hoadonban1 as $key) {  
							?>
			      	<tr>
			      		<td><a href="<?php echo base_url()?>chitiet_dondh/view/<?php echo $key->Dondh_id?>">Xem chi tiết đơn hàng</a></td>
			      		<td><?php echo $key->Dondh_id?></td>
				        <td><?php echo $key->Ngay_lap?></td>
				        <td><?php echo $key->Tong_gia?></td>
				        <td><?php echo $key->Ten_kh?></td>
				        <td><?php echo $key->Sodt?></td>
				        <td><?php echo $key->Diachi_giaohang?></td>
				        <td><?php echo $key->Ghi_chu?></td>
				        <td><?php echo "Đã giao hàng"?></td>
				        <td>
						<?php 
					        if($key->Tinh_trang === "Chưa chuyển hàng" ){
				    	?>
				    	<a href="<?php echo base_url()?>order/giaohang/<?php echo $key->Dondh_id?>">giao hàng</a>
				    	<?php
				        	}else{
						?>
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