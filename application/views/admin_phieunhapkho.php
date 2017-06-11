<?php 
include 'admin_header.php';
 ?>

<div class="menu-right">
	<div>
		<div class="row">
			<div class="col-lg-5">
				<p style="font-size: 30px;font-weight: bold; padding: 0px 0 0 20px;">PHIẾU NHẬP KHO</p>
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
			<!-- <div class="btn-group" role="group" aria-label="..." style="float: left; margin: 20px;">

				<a href="<?php echo base_url()?>danhmuc" class="btn btn-info lien-he login-window button orange">
				<span class="glyphicon"></span>
				Xuất kho
				</a>
  			</div>
  			<div class="btn-group" role="group" aria-label="..." style="float: left; margin: 20px;">

				<a href="<?php echo base_url()?>danhmuc" class="btn btn-info lien-he login-window button orange">
				<span class="glyphicon"></span>
				Nhập kho
				</a>
  			</div> -->
			<div class="btn-group" role="group" aria-label="..." style="float: right; margin: 20px;">

				<a href="#login-box" class="btn btn-success lien-he login-window button orange">
				<span class="glyphicon"></span>
				Thêm sản phẩm
				</a>
  			</div>
		</div>
		<div>
			<!-- <table class="table table-bordered"> -->
    	<div style=" width: 90%;background-color: white; box-shadow: 5px 5px 15px #ccc; margin: 0 auto; padding: 0 20px 0 20px;">
    		<div >
    			<p style="text-align: center; font-weight: bold;">PHIẾU NHẬP KHO</p><br/>
    			<?php if(isset($gettt1)){
			  					foreach ($gettt1 as $key) {
							?>
    			<div><p style="float: left;">Khách hàng: <?php echo $key->Ten_kh?></p>
    			<p style="text-align: right;">Người tạo:<?php if(isset($user)){echo $user;} ?></p></div>
    			<div><p style="float: left;">Ngày lập: <?php echo date("d/m/Y"),'<br>';?></p>
    			<p style="float: right;">Mã đơn hàng:<?php echo "00000".$key->Dondh_id?></p></div><br/><br/>
    			<div>
    				<?php}}?>
    				<table class="table table-bordered" >
					    <thead>
					      <tr>
					      	<td>STT</td>
							<td>Tên sản phẩm</td>
							<td>Kích thước</td>
							<td>Màu sắc</td>
							<td>Chất liệu</td> 
							<td>Giá sản phẩm</td>
							<td>Số lượng</td>
							<td>Thành tiền</td>
					      </tr> 
					    </thead>
					    <tbody> 
					    <?php $stt=0; $money =0;?>
							    <?php 
					  				if(isset($gettt2)){
					  					foreach ($gettt2 as $key) {
					  						$stt+=1;
					  						$money +=($key->Gia_sp)*($key->Soluongmua);
									?>
					      	<tr>
					      		<td><?php echo $stt?></td>
					      		<td><?php echo $key->Ten_sp?></td>
						        <td><?php echo $key->Kichthuoc_sp?></td>
						        <td><?php echo $key->Mausac_sp?></td>
						        <td><?php echo $key->Chatlieu_sp?></td>
						        <td><?php echo $key->Gia_sp?></td>
						        <td><?php echo $key->Soluongmua?></td>
						        <td><?php echo ($key->Gia_sp)*($key->Soluongmua)?></td>

					      </tr>
			      			<?php }}?>
					    </tbody>
		 	</table>
    			</div>
    			<div><p>Tổng tiền: <?php echo $money;?></p>
    				<p class="button" style="float: left;">Xuất</p>
    				<p class="button" style="float: right;"> In hóa đơn </p>
    			</div>
    			<!-- <?php }}?> -->
    		</div>
    	</div>
  <!-- </table> -->
		</div>
	</div>
</div>
</div>

</body>
</html>