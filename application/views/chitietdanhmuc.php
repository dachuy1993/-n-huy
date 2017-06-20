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
	  	<div class="home-main row">
	  		<div class="home-taxonomi">
	  			<h3 class="home-cat-name" style="color:#85C126; font-size: 16px; text-transform: uppercase; ">
	  			<img src="public/img/oto.png" width="30px;">
	  			<?php 
	  			if(isset($getctdm)){ 
	  				foreach ($getctdm as $key1) {
	  				
	  			?>
	  			<?php echo $key1->ten_chitiet_dm?>
	  			<?php }}?>
	  			</h3>
	  			<div class="sp-list-home"><!-- khung toàn bộ bàn ghê -->
	  				<div class="row"><!-- khung trên 1 dòng -->
	  				<!-- product -->
	  				<?php 

	  				if(isset($sanpham)){
	  					foreach ($sanpham as $key) {
					?>
					<div class="col-lg-4" style="padding-top: 5px;"><!-- chia làm 3 sp trên 1 dòng -->
	  						<div class = "sp-list">
	  							<div class="sp-view"> 
			  						<a href="<?php echo base_url()?>product/view/<?php echo $key->sanpham_id?>"><img  style="margin: 0 auto; width: 250px; height: 157px;" src="<?php echo base_url()?>public/img/<?php echo $key->Anh_sp?>"></a>
			  					</div>
			  					<div style="">
					  					<p class="name"><a href="/sanpham.php" style="color: black;font-weight: bold;"><?php echo $key->Ten_sp." 0".$key->sanpham_id?></a></p>
					  					<div style="display: table; width: 100%;">
						  					<p class="giasp" style=" font-size: 15px; font-weight: bold;"><?php echo number_format($key->Gia_sp)?> vnđ</p><br/>
						  					<div>
							  					<p class="" style="float: left; font-size: 15px; color: #8e8e8e;font-weight: bold;"><strike><?php echo number_format($key->Gia_cu)?> vnđ</strike></p>
						  						<a href="<?php echo base_url()?>product/view/<?php echo $key->sanpham_id?>" class = "btn btn-success lien_he" style="float: right; background: #67c62e; font-weight: bold;">
						  							<span class="glyphicon glyphicon-shopping-cart"></span>
						  							Đặt mua
						  						</a> 
					  						</div>
					  					</div>
	 
				  					</div>
	  						</div>
	  					</div>
					<?php
	  					}
	  				}else echo 11;
	  				?>
  					<!-- end -->
	  				</div>
	  			</div>
	  		</div>
  		</div>

  </div>
</div>
<?php 
include 'footer.php';
 ?>
