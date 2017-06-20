<!-- <?php 
// include 'admin_header.php';
 ?> -->
 <!DOCTYPE html>
<html> 
<head>
	<title>Admin</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script type="text/javascript" src = "<?php echo base_url()?>public/style/js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/style/css/style.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/style/js/cycle.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/style/js/javacript.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/style/plugin/tinymce/tinymce.min.js"></script>
<!--    <script>tinymce.init({ selector:'textarea' });</script>-->
<!--    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>-->
    <script type="text/javascript" src="<?php echo base_url();?>public/style/plugin/tinymce/init-tinymce.js"></script>

</head>
<body>

 <div class=" menu-left" style="margin-top: -10px;">

    <ul>

        <li>
            <a href="<?php echo base_url()?>admin">
                <span class=" glyphicon glyphicon-home icon"></span>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url()?>Dieukhien">
                <span class=" glyphicon glyphicon-dashboard icon"></span>
                <p style="color: white;">Bảng điều khiển</p>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url()?>order" style = "display: block;">
                <span class=" glyphicon glyphicon-usd icon" ></span>
                <p style="color: white;">Bán hàng</p>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url()?>product" style = "display: block;">
                <span class=" glyphicon glyphicon-book icon" ></span>
            
            <p style="color: white;">Các sản phẩm</p>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url()?>Noidung" style = "display: block;">
                <span class="  glyphicon glyphicon-heart icon" ></span>
            
            <p style="color: white;">Nội dung</p> 
            </a>
        </li>
        <li style="background: #524d49">
            <a href="<?php echo base_url()?>Admin_kho">
                <span class=" glyphicon glyphicon-book icon" ></span> 
            </a>
            <p style="color: white;">Quản lý kho</p>
        </li>
    </ul>
</div>
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
							<div class="input-group" style="width: 370px;">
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