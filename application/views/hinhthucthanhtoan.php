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
          <?php if($noidung2)
          {
            foreach ($noidung2 as $key) {
              if(($key->noidung_id) == 1)
              {?>
	  			<a href="" style = "color:green;">Hình thức thanh toán</a>
	  			</h3>
	  		</div>
	  		<div>
	  			  <p><?php echo $key->noi_dung?></p>
	  		</div>
        <?php }}}?>
 </div>