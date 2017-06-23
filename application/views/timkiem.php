 <?php 
include 'header.php';
 ?>
   <div class="col-lg-9">
  		 
	  	<div class="home-main row">
	  		<div class="home-taxonomi" style="-moz-border-radius-topleft:10px;
						-webkit-border-top-left-radius:10px;">
	  			<h3 class="home-cat-name" style="color:#85C126; font-size: 16px; text-transform: uppercase;background: #85C226; ">
	  		
	  			<a href="" style = "color:white; ">TÌM KIẾM: "<?php echo $timkiem?>"</a>
	  			</h3>
	  		</div>
	  			<?php 
	  			$dem = 0;
			if(isset($getinfo1)){ 
				foreach ($getinfo1 as $key) { 
					$dem+=1;
			?>
			<div style="height: 125px; border-bottom: 1px green solid;" class="table">
				<div style="float: left;">
					<img src="<?php echo base_url()?>public/img/<?php echo $key->Anh_sp?>" style="width: 210px; height: 120px;">

				</div>
				<div style="font-weight: bold; float: left; font-size: 20px; margin-left: 15px;">
					<a href="<?php echo base_url()?>product/view/<?php echo $key->sanpham_id?>" style="color: #85C226"><?php echo $key->Ten_sp;?></a> 
				</div>
			</div> 
			<?php }}?>
  		</div>
  			
  </div> 



<?php 
include 'footer.php';
 ?>
 
