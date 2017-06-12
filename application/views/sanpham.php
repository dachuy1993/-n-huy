<?php 
if(isset($err)){
	echo $err;
	die();
}
 ?>
<?php 
include 'header.php';
 ?>

<!-- <section id="wapper"></section>
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
		</div> -->
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
						<a href="<?php echo base_url()?>product/view/<?php echo $key->sanpham_id?>"><img src="<?php echo base_url()?>public/img/<?php echo $key->Anh_sp?>" style = "width: 393px;height: 247.017px;"></a>
					</div>
				</div>
			</div> 
			<div class="col-lg-6">
				<p style="font-weight: bold;font-size: 14px;padding: 2px;">	Giá: <span style="color: red;font-size: 24px;"><?php echo number_format($key->Gia_sp)?> vnđ</span><br/>
					Mã sản phẩm: <?php echo $key->ma_sp." 0".$key->sanpham_id?><br/>
					Kích thước: <?php echo $key->Kichthuoc_sp?><br/>
					Bảo Hành: <?php echo $key->Baohanh_sp?><br/>
				</p>
				<div>
					<a href="<?php echo base_url()?>product/buy/<?php echo $key->sanpham_id?>" class = 'btn green muahang'>MUA HÀNG</a>
				</div>
				<div style="padding-top: 10px;margin-top: 10px; border: 1px green dashed; background-color: #fdfdcb">
					<p style="font-weight: bold;color: inherit; text-align: center;">Nếu bạn ngại hãy gọi. Nhân viên chúng tôi sẽ giúp bạn!</p>
					<p style="font-size: 20px; margin-left: 10px; text-align: center; color: red;" class=" glyphicon glyphicon-earphone"> 0966.59.94.93</p>
				</div>
			</div>
 
		</div>  
	</div>
	<div class="sp-tab col-md-12" style="padding-top: 20px;border: 1px green solid;margin-top: 40px">
		<div style="margin-top:-47px;">
		
		<span style="text-align: left; background:inherit; font-size: 20px; color: green;border-bottom: 1px #d5d5d5 solid; padding:0 ">THÔNG TIN SẢN PHẨM</span>
		</div>

		<div style=""><?php echo $key->Thong_tin_sp?></div>
	</div>
	
	<?php
			}
		}
	?>
	<div class="col-md-12">
		<div style="background-color: black;height: 40px;-moz-border-radius-topleft:5px;
								-webkit-border-top-left-radius:5px;">
		 	<h4 style="padding-left: 10px;padding-top: 5px; color: #67c62e;">
		  			Sản phẩm cùng loại
		  			</h4>
		</div>
		<div>
			<?php 
	  				$product1 = $this->Product_model->get_dm_home($key->danhmuc_id); 
	  				if($product1){
	  					foreach ($product1 as $key) { 
					?>
					<div class="col-lg-4"><!-- chia làm 3 sp trên 1 dòng -->
	  						<div class = "sp-list" >
	  							<div class="sp-view"> 
			  						<a href="<?php echo base_url()?>product/view/<?php echo $key->sanpham_id?>">
			  						<!-- <div style="background: url('./public/img/<?php echo $key->Anh_sp?>') center,;">
			  							
			  						</div> -->
			  						
			  						<img style="margin: 0 auto; width: 250px; height: 157px;" src="<?php echo base_url()?>public/img/<?php echo $key->Anh_sp?>"></a>
			  					</div>
			  					<div style="">
				  					<p class="name"><a href="/sanpham.php" style="color: black;font-weight: bold;"><?php echo $key->Ten_sp." 0".$key->sanpham_id?></a></p>
				  					<div style="display: table; width: 100%;">
					  					<p class="giasp" style="float: left; font-size: 20px;"><?php echo number_format($key->Gia_sp)?> vnđ</p>
				  						<a href="<?php echo base_url()?>product/view/<?php echo $key->sanpham_id?>" class = "btn btn-success lien_he" style="float: right; background: #67c62e; font-weight: bold;">
				  							<span class="glyphicon glyphicon-shopping-cart"></span>
				  							Đặt mua
				  						</a>
				  					</div>
 
			  					</div>
	  						</div>
	  					</div> 

					<?php
	  					}
	  				}
	  				?>
		</div>
	</div>

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

<?php 
include 'footer.php';
 ?>


