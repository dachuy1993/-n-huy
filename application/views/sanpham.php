<?php 
if(isset($err)){
	echo $err;
	die();
}
 ?>
<?php 
include 'header.php';
 ?>

<section id="wapper"></section>
 	<div class="row max color" >
		<div class="col-lg-3">
	  		<section class="menu_height">
	  			<div>
	  				<h3>CHUYÊN MỤC TƯ VẤN</h3> 
	  				<div>
	  					<ul id="menu-sidebar" class="menu">
	  						<li>
	  							<a href="#">Cách chọn bàn trà đẹp và bền cho phòng khách của gia đình</a>

	  						</li>
	  					</ul>
	  				</div>
	  			</div>
	  		</section>
		</div>
<div class="col-lg-9">
	<h3 class="home-product">
	  			<?php 
	  				if (isset($getinfo)) {
	  					foreach ($getinfo as $key) {
	  						echo $key->Ten_sp." 0".$key->sanpham_id;
	  						?>
	</h3>
	<div>
		<div>
			<div class="col-lg-6"><!-- chia làm 3 sp trên 1 dòng -->
				<div class = "sp-list">
					<div class="sp-view">
						<a href="<?php echo base_url()?>product/view/<?php echo $key->sanpham_id?>"><img src="<?php echo base_url()?>public/img/<?php echo $key->Anh_sp?>"></a>
					</div>
				</div>
			</div> 
			<div class="col-lg-6">
				<p style="font-weight: bold;font-size: 14px;padding: 2px;">	Giá: <span style="color: red;font-size: 24px;"><?php echo number_format($key->Gia_sp)?></span><br/>
					Mã sản phẩm: <?php echo $key->ma_sp?><br/>
					Kích thước: <?php echo $key->Kichthuoc_sp?><br/>
					Bảo Hành: <?php echo $key->Baohanh_sp?><br/>
				</p>
				
				<a href="<?php echo base_url()?>product/buy/<?php echo $key->sanpham_id?>" class = 'btn btn-default'>Mua hàng</a>
			</div>

		</div>
	</div>
	<div class="sp-tab col-md-12">
		<ul class="nav nav-tabs">
		  <li role="presentation" class="active1"><a href="#">Thông tin sản phẩm</a></li>
		  <li role="presentation"><a href="#">Đặt hàng</a></li>
		  <li role="presentation"><a href="#">Xem địa chỉ</a></li>
</ul>
	</div>
	<?php
	  					}
	  				}
	  			?>

	  			
	  			<!-- <?php 
	  				if(isset($getinfo)){
	  					foreach ($getinfo as $key) {
					?>
					<div class="col-lg-4">chia làm 3 sp trên 1 dòng
  						<div class = "sp-list">
  							<div class="sp-view">
		  						<a href="<?php echo base_url()?>product/view/<?php echo $key->sanpham_id?>"><img src="<?php echo base_url()?>public/img/<?php echo $key->Anh_sp?>"></a>
		  					</div>
		  					<h2 class="name"><a href="/sanpham.php" style="color: black;"><?php echo $key->Ten_sp ?></a></h2>
		  					<div style="display: table; width: 100%">
			  					<p class="giasp" style="float: left;"><?php echo number_format($key->Gia_sp)?></p>
		  						<a href="#" class = "btn btn-success dat-mua">
		  							<span class="glyphicon glyphicon-shopping-cart"></span>
		  							Đặt mua
		  						</a>
		  					</div>
  						</div>
  					</div>
					<?php
	  					}
	  				}
	  				?> -->

</div>
        <div id="login-box" class="login">
            <p class="login_title"> Đặt mua <?php 
	  				if (isset($getinfo)) {
	  					foreach ($getinfo as $key) {
	  						echo $key->Ten_sp;}}
	  						?></p>
            <a href="#" class="close"><img src="close.png" class="img-close" title="Close Window" alt="Close" /></a>
            <form method="post" class="login-content" action="#">
                <table>
                	<tr>
                		<td colspan="2"><label>

Vui lòng cung cấp đầy đủ thông tin sau. Chúng tôi sẽ gọi điện thoại cho Anh/Chị để xác nhận và gửi sản phẩm đến địa chỉ Anh/Chị cung cấp.</label></td>
                	</tr>
                	<tr>
                		<td><label>Họ và tên (*)</label></td>
                		<td><input type="text" name="hoten"></td>
                	</tr>
                	<tr>
                		<td><label>Địa chỉ email (*)</label></td>
                		<td><input type="email" name="email"></td>
                	</tr>
                	<tr>
                		<td><label>Số điện thoại (*)</label></td>
                		<td><input type="text" name="sdt"></td>
                	</tr>
                	<tr>
                		<td><label>Địa chỉ giao hàng (*)</label></td>
                		<td><input type="text" name="diachi"></td>
                	</tr>
                	<tr>
                		<td><label>Ghi chú</label></td>
                		<td><textarea rows="10"></textarea></td>
                	</tr>
                </table>
                <div class="text-center">
                	<button class="button submit-button" type="button">Đặt hàng ngay</button>
                </div>
            <p>
            <a class="forgot" href="#">Quên mật khẩu?</a>
            </p>        
            </form>
        </div>
