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
	  			if(isset($getinfo)){
	  				foreach ($getinfo as $key1) { 
	  				
	  			?>
	  			<?php echo $key1->tendanhmuc?>
	  			<?php }}?>
	  			</h3>
	  			<div class="sp-list-home"><!-- khung toàn bộ bàn ghê -->
	  				<div class="row"><!-- khung trên 1 dòng -->
	  				<!-- product -->
	  				<?php 

	  				if(isset($getdm)){
	  					foreach ($getdm as $key) { 
					?>
					<div class="col-lg-4" style="padding-top: 5px;"><!-- chia làm 3 sp trên 1 dòng -->
	  						<div class = "sp-list">
	  							<div class="sp-view"> 
			  						<a href="<?php echo base_url()?>product/view/<?php echo $key->sanpham_id?>"><img  style="margin: 0 auto; width: 275px; height: 157px;" src="<?php echo base_url()?>public/img/<?php echo $key->Anh_sp?>"></a>
			  					</div>
			  					<div style="">
					  					<p class="name"><a href="<?php echo base_url()?>product/view/<?php echo $key->sanpham_id?>" style="color: #3B5998;font-weight: bold;"><?php echo $key->Ten_sp." 0".$key->sanpham_id?></a></p> 
					  					<div style="display: table; width: 100%;">
						  					<p class="giasp" style=" font-size: 15px; font-weight: bold;color: black;"><strike>Giá: <?php echo number_format(($key->Gia_sp)*1.1)?> vnđ</strike></p><br/>
						  					<div>
							  					<p class="" style="float: left; font-size: 15px; color: black;font-weight: bold;">Giá khuyến mại:<span style="color: red;"><?php echo number_format($key->Gia_sp)?> vnđ</span></p>
						  						<a href="<?php echo base_url()?>product/view/<?php echo $key->sanpham_id?>" class = "btn btn-success lien_he" style="float: right; background: #67c62e; font-weight: bold;height: 30px;width: 96px;">
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
	  				}
	  				?>
  					<!-- end -->
	  				</div>
	  			</div>
	  		</div>
  		</div>
  		

  </div>
</div>
</body>
</html>