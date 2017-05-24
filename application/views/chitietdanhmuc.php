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
	  	<div class="home-main row">
	  		<div class="home-taxonomi">
	  			<h3 class="home-cat-name" style="color:#85C126; font-size: 16px; text-transform: uppercase; ">
	  			<img src="public/img/oto.png" width="30px;">
	  			<?php 
	  			if(isset($getinfo)){ 
	  				foreach ($getinfo as $key1) {
	  				
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
					<div class="col-lg-4"><!-- chia làm 3 sp trên 1 dòng -->
	  						<div class = "sp-list">
	  							<div class="sp-view">
			  						<a href="<?php echo base_url()?>product/view/<?php echo $key->sanpham_id?>"><img src="<?php echo base_url()?>public/img/<?php echo $key->Anh_sp?>"></a>
			  					</div>
			  					<h2 class="name"><a href="/sanpham.php" style="color: black;"><?php echo $key->Ten_sp ?></a></h2>
			  					<div style="display: table; width: 100%">
				  					<p class="giasp" style="float: left;"><?php echo number_format($key->Gia_sp)?></p>
			  						<a href="#" class = "btn btn-success lien_he">
			  							<span class="glyphicon glyphicon-shopping-cart"></span>
			  							Đặt mua
			  						</a>
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
  		<div class="home-main row">
	  		<div class="home-taxonomi">
	  			<h3 class="home-cat-name" style="color:#85C126; font-size: 16px; text-transform: uppercase; ">
	  			<img src="public/img/oto.png" width="30px;">
	  			MẪU BÀN GHẾ ĐẸP
	  			</h3>
	  			<div class="sp-list-home"><!-- khung toàn bộ bàn ghê -->
	  				<div class="row row-fluid"><!-- khung trên 1 dòng -->
	  					<div class="col-lg-4"><!-- chia làm 3 sp trên 1 dòng -->
	  						<div class = "sp-list">
	  							<div class="sp-view">
			  						<a href="#"><img src="public/img/giuong1.png"></a>
			  					</div>
			  					<h2 class="name"><a href="#" style="color: black;">bộ phòng ngủ</a></h2>
			  					<div style="display: table; width: 100%">
				  					<p class="giasp" style="float: left;">12000</p>
			  						<a href="#" class = "btn btn-success dat-mua">
			  							<span class="glyphicon glyphicon-shopping-cart"></span>
			  							Đặt mua
			  						</a>
			  					</div>
	  						</div>
	  					</div>
	  					<div class="col-lg-4"><!-- chia làm 3 sp trên 1 dòng -->
	  						<div class = "sp-list">
	  							<div class="sp-view">
			  						<a href="#"><img src="public/img/giuong1.png"></a>
			  					</div>
			  					<h2 class="name"><a href="#" style="color: black;">bộ phòng ngủ</a></h2>
			  					<div style="display: table; width: 100%">
				  					<p class="giasp" style="float: left;">12000</p>
			  						<a href="#" class = "btn btn-success dat-mua">
			  							<span class="glyphicon glyphicon-shopping-cart"></span>
			  							Đặt mua
			  						</a>
			  					</div>
	  						</div>
	  					</div>
	  					<div class="col-lg-4"><!-- chia làm 3 sp trên 1 dòng -->
	  						<div class = "sp-list">
	  							<div class="sp-view">
			  						<a href="#"><img src="public/img/giuong1.png"></a>
			  					</div>
			  					<h2 class="name"><a href="#" style="color: black;">bộ phòng ngủ</a></h2>
			  					<div style="display: table; width: 100%">
				  					<p class="giasp" style="float: left;">12000</p>
			  						<a href="#" class = "btn btn-success dat-mua">
			  							<span class="glyphicon glyphicon-shopping-cart"></span>
			  							Đặt mua
			  						</a>
			  					</div>
	  						</div>
	  					</div>
	  				</div>
	  				<div class="row row-fluid"><!-- khung trên 1 dòng -->
	  					<div class="col-lg-4"><!-- chia làm 3 sp trên 1 dòng -->
	  						<div class = "sp-list">
	  							<div class="sp-view">
			  						<a href="#"><img src="public/img/giuong1.png"></a>
			  					</div>
			  					<h2 class="name"><a href="#" style="color: black;">bộ phòng ngủ</a></h2>
			  					<div style="display: table; width: 100%">
				  					<p class="giasp" style="float: left;">12000</p>
			  						<a href="#" class = "btn btn-success dat-mua">
			  							<span class="glyphicon glyphicon-shopping-cart"></span>
			  							Đặt mua
			  						</a>
			  					</div>
	  						</div>
	  					</div>
	  					<div class="col-lg-4"><!-- chia làm 3 sp trên 1 dòng -->
	  						<div class = "sp-list">
	  							<div class="sp-view">
			  						<a href="#"><img src="public/img/giuong1.png"></a>
			  					</div>
			  					<h2 class="name"><a href="#" style="color: black;">bộ phòng ngủ</a></h2>
			  					<div style="display: table; width: 100%">
				  					<p class="giasp" style="float: left;">12000</p>
			  						<a href="#" class = "btn btn-success dat-mua">
			  							<span class="glyphicon glyphicon-shopping-cart"></span>
			  							Đặt mua
			  						</a>
			  					</div>
	  						</div>
	  					</div>
	  					<div class="col-lg-4"><!-- chia làm 3 sp trên 1 dòng -->
	  						<div class = "sp-list">
	  							<div class="sp-view">
			  						<a href="#"><img src="public/img/giuong1.png"></a>
			  					</div>
			  					<h2 class="name"><a href="#" style="color: black;">bộ phòng ngủ</a></h2>
			  					<div style="display: table; width: 100%">
				  					<p class="giasp" style="float: left;">12000</p>
			  						<a href="#" class = "btn btn-success dat-mua">
			  							<span class="glyphicon glyphicon-shopping-cart"></span>
			  							Đặt mua
			  						</a>
			  					</div>
	  						</div>
	  					</div>
	  				</div>
	  			</div>
	  		</div>
  		</div>

  </div>
</div>
</body>
</html>