<!DOCTYPE html>
<html>
<head>
	<title>Đồ gỗ nội thất Hùng Thúy</title>
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
<nav class="navbar navbar-fixed-top">

<section id="header">
<div class="row max" style="">
	<div class="col-lg-6">
		<h1>
			<a href="<?php echo base_url()?>">
				<img src="<?php echo base_url()?>public/img/logo.png">
			</a>
		</h1>
	</div>
	<div class="col-lg-6">

		<div class="input-group">
      		<input type="text" class="form-control" placeholder="Search for...">
      		<span class="input-group-btn">
        		<button class="btn btn-default" type="button">Tìm Kiếm</button>
      		</span>
    	</div>
    	<div class="input-group" style = "float: right;">
	    	<h1>
				<a href="#">
					<img src="<?php echo base_url()?>public/img/HOTLINE.jpg">
				</a>
			</h1>
    	</div>
	</div>
</div>
</section> 
<section id="menu"> 
	<div class="main_menu" style="font-weight: bold;font-size: 13px;">
		<ul>
			<li><a href="<?php echo base_url()?>">TRANG CHỦ</a></li>
			<li><a href="<?php echo base_url()?>Gioithieu">GIỚI THIỆU</a></li>
			<?php 
			if(isset($danhmuc)){
				foreach ($danhmuc as $key) { 
			?>
			<li><a href="<?php echo base_url()?>danhmuc/view/<?php echo $key->danhmuc_id?>"><?php echo $key->tendanhmuc ?></a>
				<ul>
			<?php 
			$chitiet_model = $this->Chitiet_dm_model->getinfo($key->danhmuc_id);
			if(isset($chitiet_model)){
				foreach ($chitiet_model as $row) {
			?>
				
					<li><a href="<?php echo base_url()?>danhmuc/view2/<?php echo $row->ma_sp?>"><?php echo $row->ten_chitiet_dm ?></li>
			<?php
				}

			}
			 ?>
			 	</ul>
			</li>
			<?php
				}
			}
			 ?>
			 <li>
				<a href="#login-box" class=" login-window">
				ĐẶT HÀNG
				</a>
  			</li>
  			<li><a href="<?php echo base_url()?>giohang">GIỎ HÀNG</a></li>
		</ul>
	</div>
</section>
	
</nav>
<section class = "max" style="margin-top:177px ">
	<div class="slide">
            <div id="slideshow" class="cycle-slideshow"
            data-cycle-fx="scrollHorz"
            data-cycle-speed = "600"
            data-cycle-timeout = "1500"
            data-cycle-next = "#next"
            data-cycle-prev = "#prev">

                    <img src="<?php echo base_url(); ?>public/img/do-go-my-nghe-tam-da.jpg" alt="iphone" class="img_slide">

                    <img src="<?php echo base_url(); ?>public/img/banphan3.jpg" alt="tainghe" class="img_slide">

                    <img src="<?php echo base_url(); ?>public/img/tranhgo5.jpg" alt="smartwatch" class="img_slide">
                    
                    <img src="<?php echo base_url(); ?>public/img/banghe6.jpg" alt="smartwatch" class="img_slide">

            </div>
            <img id="prev" src="<?php echo base_url(); ?>public/img/prev.png" alt="prev">
            <img id="next" src="<?php echo base_url(); ?>public/img/next.png" alt="next">
        </div>

</section>
<div class="row max color" >
  <div class="col-lg-3" style="padding-top: 20px; "> 
  		<section class="menu_height">
  			<div style="background: #a0d783;border: 1px #2abc79 solid -moz-border-radius: 5px;
					-webkit-border-radius: 5px;">
  				<div style="width: 203px; height: 30px; background: url(<?php echo base_url() ?>public/img/sidebar-h3.png); color: white;">
  					<p style="text-align: center;padding: 5px; padding-left: 30px;">CHUYÊN MỤC TƯ VẤN</p> 
  				</div>
  				<div style="padding-top: 20px;">
  				
  					<ul id="menu-sidebar" class="menu" > 
  						<?php  
  							if(isset($noidung1))
  							{
  								foreach ($noidung1 as $key) {
  							
  						?>
  						<li style="list-style: none; color: black;">
  							<a href="<?php echo base_url()?>Noidung/viewtt/<?php echo $key->noidung_id?>" style = "color: black;"><?php echo $key->ten_tieu_de?></a><?php echo " ".substr(date($key->thoi_gian),0,10)?> 

  						</li>
  						<?php }}?>
  					</ul>
  				</div>
  			</div>
  		</section>
  </div>
  

        <div id="login-box" class="login">
            <p class="login_title"> Đặt sản phẩm mới </p>
            <a href="#" class="close"><img src="close.png" class="img-close" title="Close Window" alt="Close" /></a>
            <?php 
            	$style = array(
            		'class' => 'login-content',
            		);
            	echo form_open('customer/add',$style);
             ?> 
                <table>
                	<tr>
                		<td colspan="2"><label>

							Thông tin sản phẩm đặt hàng 
							</label>
						</td>
                	</tr>
                	<tr>
                		<td><label>Tên khách hàng (*)</label></td>
                		<td><input type="text" name="Tenkh" required></td>
                	</tr>
                	<tr>
                		<td><label>Địa chỉ email (*)</label></td>
                		<td>
                			<input type="email" name="Diachiemail" required>
                		</td>
                	</tr>
                	<tr>
                		<td><label>Số điện thoại (*)</label></td>
                		<td><input type="text" name="Sdt" required></td>
                	</tr>
                	<tr>
                		<td><label>Tên sản phẩm (*)</label></td>
                		<td><input type="text" name="Tensp" required></td>
                	</tr>
                	<tr>
						<td><label>Các yêu cầu đặc biệt</label></td>
						<td><textarea name="noidung" cols="15" required></textarea></td>
					</tr>
	                </table>
	                <tr>
						<td>Hình ảnh nếu có</td>
					</tr>
					<tr>
						<td>
							<!-- <input type="file" accept="image/*" onchange="loadFile(event)"> -->
						
						</td>
						
					</tr>
				</table>	
	
			<div style="text-align:center;">
			<!-- view img -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
			<input type="file" multiple id="gallery-photo-add">
			<div class="gallery">
						<script>
						  $(function() {
			    // Multiple images preview in browser
			    var imagesPreview = function(input, placeToInsertImagePreview) {

			        if (input.files) {
			            var filesAmount = input.files.length;

			            for (i = 0; i < filesAmount; i++) {
			                var reader = new FileReader();

			                reader.onload = function(event) {
			                    $($.parseHTML('<img width="200px" height="200px">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
			                }

			                reader.readAsDataURL(input.files[i]);
			            }
			        }

			    };

			    $('#gallery-photo-add').on('change', function() {
			        imagesPreview(this, 'div.gallery');
			    });
			});
						</script>
			</div>
			</div>  


                <div class="text-center">
                	<button class="btn btn-default" type="submit" style="margin: 10px;">
                		<a href="">
                			GỬI
                		</a> 
                	</button>
                </div>
            <p>
            <ul class="dv" style="font-size: 12px;">
            	<li><a href="<?php echo base_url()?>Chinhsachvanchuyen">Chính sách vận chuyển</a></li>
            	<li><a href="<?php echo base_url()?>Chinhsachbaohanh">Chính sách bảo hành</a></li>
            	<li><a href="<?php echo base_url()?>Hinhthucthanhtoan">Hình thức thanh toán</a></li>
            	<li><a href="<?php echo base_url()?>Doitrahang">Đổi trả hàng, hoàn tiền</a></li>
            </ul>
            </p>         
            <?php echo form_close() ?>
        </div>