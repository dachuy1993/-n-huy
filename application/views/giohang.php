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
<section id="header">
<div class="row max">
	<div class="col-lg-6">
		<h1>
			<a href="#">
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
			<li><a href="">GIỚI THIỆU</a></li>
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
<div>
	<table class="table table-bordered" style="text-align:center; width:900px;margin-top:50px; margin: 50px auto;">
	<caption style="text-align: center;font-size: 30px;color: blue;">Giỏ hàng của bạn</caption>
		<thead>
			<tr>
				<td>STT</td>
				<td>Ảnh sản phẩm</td>
				<td>Tên sản phẩm</td>
				<td>Giá sản phẩm</td>
				<td>Số sản phẩm</td>
				<td>Kích thước</td>
				<td>Màu sắc</td>
				<td>Chất liệu</td>
				<td>Bảo hành</td>
				<td>Thành tiền</td>
				<td>Hoạt động</td>
			</tr>
		</thead>
		<tbody>
			<?php $money = 0;
					$stt =0;
	  				if(isset($cart)){
	  					echo form_open('product/update_cart');
	  					foreach ($cart as $key) {
	  						$money +=$key['subtotal'];
	  						$stt +=1;
	  						// $img = $this->Product_model->getinfo($key['id']);
	  						// if(isset($img)){
	  						// 	foreach ($img as $title) {
	  						// 		# code...
	  						// 	}
	  						// }
	  						  echo form_hidden('cart[' . $key['id'] . '][id]', $key['id']);
	  						
            echo form_hidden('cart[' . $key['id'] . '][rowid]', $key['rowid']);
            echo form_hidden('cart[' . $key['id'] . '][name]', $key['name']);
            echo form_hidden('cart[' . $key['id'] . '][price]', $key['price']);
            echo form_hidden('cart[' . $key['id'] . '][qty]', $key['qty']);

					?>
			<tr>
				<td><?php echo $stt?></td>
				<td>
	        	<img src="<?php echo base_url()?>public/img/<?php echo $key['img']?>" width="
	        100%" height = "70px" style ="margin: 0 auto">
	        	</td>
	        	<td><?php echo $key['name']?></td>
	        	<td><?php echo number_format($key['price'])?> <sup>vnđ</sup></td>
	        	<td><?php echo form_input('cart[' . $key['id'] . '][qty]', $key['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?></td>
	        	<td><?php echo $key['kt']?></td>
	        	<td><?php echo $key['ms']?></td>
	        	<td><?php echo $key['cl']?></td>
	        	<td><?php echo $key['bh']?></td>
	        	<!-- <td><?php echo $key['sp']?></td> -->
	        	<td><?php echo number_format($key['subtotal']) ?> <sup>vnđ</sup></td>
	        	<td><a href="<?php echo base_url()?>product/remove/<?php echo $key['rowid']?>" class="btn btn-default">Xóa</a></td>
			</tr> 
			
        	<?php }}?>
        	<tr>
        		<td colspan="3" style="text-align: center;">Tổng tiền là: <?php echo number_format($money) ?> VNĐ</td>
        		<td colspan="8">
        			<a href="<?php echo base_url()?>product/remove/all" class="btn btn-default">Xóa giỏ hàng</a>
        			 <input class ='btn btn-info'  type="submit" value="Update giỏ hàng"/>
        <?php echo form_close(); ?>
        			<a href="#login-box" class="btn btn-success login-window" >Thanh toán</a></button>
        		</td>
        	</tr>
		</tbody>
	</table>
</div>


<div id="login-box" class="login">
            <p class="login_title"> Đặt mua <?php 
	  				if (isset($getinfo)) {
	  					foreach ($getinfo as $key) {
	  						echo $key->Ten_sp;}}
	  						?></p>
            <a href="#" class="close"><img src="close.png" class="img-close" title="Close Window" alt="Close" /></a>
            <!-- <form method="post" class="login-content" action="#"> -->
            <?php 
            $style = array('class'=>'login-content');
            echo form_open('giohang/save',$style);
             ?>
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
                		<td><label>Tổng giá trị là: </label></td>
                		<td><?php echo $money;?></td>
                		<!-- <td><input type="text" name="tongtien" value="<?php echo $money;?>"></td> -->
                	</tr>
                	<tr>
                		<td><label>Ghi chú</label></td>
                		<td><textarea rows="10" name="mytextarea"></textarea></td>
                	</tr>
                </table>
                <div class="text-center">
                	<button class="button submit-button" type="submit">Đặt hàng ngay</button>
                </div>
            <p>
            <ul class="dv" style="font-size: 12px;">
            	<li><a href="<?php echo base_url()?>Chinhsachvanchuyen">Chính sách vận chuyển</a></li>
            	<li><a href="<?php echo base_url()?>Chinhsachbaohanh">Chính sách bảo hành</a></li>
            	<li><a href="<?php echo base_url()?>Hình thức thanh toán">Hình thức thanh toán</a></li>
            	<li><a href="<?php echo base_url()?>Doitrahang">Đổi trả hàng, hoàn tiền</a></li>
            </ul>
            </p>         
            <?php 
            echo form_close();
             ?>
        </div>

