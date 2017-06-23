<?php 
$id = $this->session->userdata('id');
if(isset($id)){
echo $id;
}

?>

<!-- <?php 
// include 'admin_header.php';
 ?>
 -->
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
					<p style="font-size: 30px;font-weight: bold; padding: 0px 0 0 20px;">NHẬP KHO SẢN PHẨM MỚI</p>
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
				<div class="btn-group" role="group" aria-label="..." style="float: right; margin: 20px;">
					<?php 
            	// $style = array(
            		// 'class' => 'login-content',
            		// 'enctype' =>'multipart/form-data'
            		// );
            	// echo form_open('Admin_kho/add',$style);
             ?>
             		<button><a href="<?php echo base_url()?>Admin_kho" style = 'color: black;'>Trở về</a></button>
					<!-- <button type="submit">
					<span class="glyphicon"></span>
					Lưu sản phẩm
					</button>
					<button><a href="<?php echo base_url()?>Admin_nhapkho/phieunk" style="color: black;">
					Phiếu nhập kho
					</a></button> -->
					 

	  			</div>
			</div>
			<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-5">
						
					<?php if(isset($list_chon))
							{
 
								?>
								<table class="table table-bordered" >
							<?php foreach($list_chon as $key){?>
			             <!-- <tr>
			             	<td colspan="2">Thông tin sản phẩm mới nhập</td>
			             </tr> -->
			             <?php echo form_open('Admin_nhapkho/add_spc/'.$key->sanpham_id)?>
			            <tr>
			            	<td colspan="2">THÔNG TIN SẢN PHẨM</td>
			            </tr>
						<tr>
							<td>Tên sản phẩm</td>
							<td style="text-align: center; width: 50%"><?php echo $key->Ten_sp ?></td>
						</tr>
						<tr>
							<td>Ảnh sản phẩm</td>
							<td style="text-align: center;">
								<img src="<?php echo base_url()?>">
							</td>
						</tr>
						<tr>
							<td>Giá nhập</td>
							<td style="text-align: center;"><input type="" name="gianhap"></td>
						</tr>
						<tr>
							<td>Số lượng nhập</td>
							<td style="text-align: center;"><input type="" name="soluongnhap"></td>
						</tr>
						<tr>
							<td>Kích thước</td>
							<td style="text-align: center;"><?php echo $key->Kichthuoc_sp ?></td>
						</tr>
						<tr>
							<td>Màu sắc</td>
							<td style="text-align: center;"><?php echo $key->Mausac_sp ?></td>
						</tr>
						<tr>
							<td>Chất liệu</td>
							<td style="text-align: center;"><?php echo $key->Chatlieu_sp ?></td>
						</tr>
						<tr>
							<td>Danh muc</td>
							<td style="text-align: center;">
				        		<?php 
				        		$danhmuc = $this->Danhmuc_model->getinfo($key->danhmuc_id);
				        		foreach ($danhmuc as $value) {
				        			echo $value->tendanhmuc;
				        		}

				        		?>
				        	

						        </td>
						</tr>
						<tr>
							<td>Mã chi tiết danh muc</td>
							<td style="text-align: center;">
							<?php echo $key->ma_sp?>
						        </td>
						</tr>
						<tr>
							<td colspan="2">
								<input type="submit" value="Thêm">
							</td>
						</tr>
						<?php echo form_close();}?>
						</table>
					<?php 
							}
							else{



					?>






						<table class="table table-bordered" >
							<?php 
			            	$style = array(
			            		// 'class' => 'login-content',
			            		'enctype' =>'multipart/form-data'
			            		);
			            	echo form_open('Admin_nhapkho/add',$style);
			             ?>  
			             <tr>
			             	<td colspan="2" style="text-align: center;">Thông tin sản phẩm mới nhập</td>
			             </tr>
						<tr>
							<td>Tên sản phẩm</td>
							<td style="text-align: center;"><input class="form-control" type="text" name="tensp" required></td>
						</tr>
						<tr>
							<td>Ảnh sản phẩm</td>
							<td style="text-align: center;"><input class="form-control" type="file" name="userfile" required></td>
						</tr>
						<tr>
							<td>Giá nhập</td>
							<td style="text-align: center;"><input class="form-control" type="text" name="gianhap" required placeholder="Gia nhap..."></td>
						</tr>
						<tr>
							<td>Số lượng nhập</td>
							<td style="text-align: center;"><input class="form-control" type="text" name="soluongnhap" required></td>
						</tr>
						<tr>
							<td>Kích thước</td>
							<td style="text-align: center;"><input class="form-control" type="text" name="kichthuoc" required></td>
						</tr>
						<tr>
							<td>Màu sắc</td>
							<td style="text-align: center;"><input class="form-control" type="text" name="mausac" required></td>
						</tr>
						<tr>
							<td>Chất liệu</td>
							<td style="text-align: center;"><input class="form-control" type="text" name="chatlieu" required></td>
						</tr>
						<tr>
							<td>Danh muc</td>
							<td style="text-align: center;">
						        	<select name="danhmuc" id="danhmuc" class="form-control">
						        		<option value="">-Chọn danh muc-</option>
						        		<?php 
						        			// $stt=0;
						        			if($danhmuc2){ 
						        				foreach ($danhmuc2 as $key) {
						        				
						        			?>
						        			<option value="<?php echo $key->danhmuc_id?>"><?php echo $key->tendanhmuc?></option>
						        			<?php }}?>
						        	</select>

						        </td>
						</tr>
						<tr>
							<td>Chi tiết danh muc</td>
							<td style="text-align: center;">
		
				        			<select name="masp" id="masp" disabled="" class="form-control">
				        				<option value="">-Chọn chi tiết dm1</option>
				        			</select>
						        </td>
						</tr>
						<tr>
							<td>Bảo hành</td>
							<td><input class="form-control" type="text" name="baohanh"></td>
						</tr>
						<tr>
							<td colspan="2">
								<input type="submit" value="Thêm">
							</td>
						</tr>
						<?php echo form_close();?>
						</table>

						<?php }?>
				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-5" style="border: 1px #ccc solid; padding: 10px">
					<!-- show tk -->
						<div>Sản phẩm trong kho</div>
							<?php 

							if(isset($list_tk)){
							?>
							<table class="table table-bordered">
								<tr>
									<td></td>
									<td>Sản phẩm</td>
									<td>Chất liệu</td>
									<td>Số lượng</td>
								</tr>
								<?php 
								foreach ($list_tk as $key) {
								?>
								<tr>
									<td><a href="<?php echo base_url()?>Admin_nhapkho/chon/<?php echo$key->sanpham_id?>">chọn</a></td>
									<td>
										<img src="<?php echo base_url() ?>public/img/<?php echo $key->Anh_sp ?>" style="width: 50px; height: 50px; float: left">
										<p style=""><?php echo $key->Ten_sp;?></p>
									</td>
									<td>
										<?php echo $key->Chatlieu_sp ?>
									</td>
									<td>
										<?php echo $key->Soluong_kho ?>
									</td>
								</tr>
								<?php
								}
								 ?>
							</table>
							<?php
							}else{

									 ?>
							 <!-- end -->
								<?php 
									echo form_open('Admin_nhapkho/timkiem')
								?>
								<?php 
								if(isset($err_tk)){
									echo $err_tk;
								}
								 ?>
					
								<div class="input-group">
							      <input type="text" class="form-control" name="ndtimkiem" placeholder="Search for...">
							      <span class="input-group-btn">
							        <button class="btn btn-secondary" type="submit">Go!</button>
							      </span>
							    </div>
							    <?php echo form_close();?>
							    <?php } ?>
					</div>
			</div>
					<?php
					 echo form_close(); 
					 ?>
				<div style=" width: 90%;height: 600px; background-color: white; box-shadow: 5px 5px 15px #ccc; margin: 0 auto; padding: 0 20px 0 20px;">
			    	<p style="text-align: center; font-weight: bold; font-size: 30px">PHIẾU NHẬP KHO</p><br/>
			    	<div>
			    		<p style="float: left;">Ngày nhập:<?php echo date("d/m/Y")?></p>
			    		<p style="float: right;">Người nhập:<?php if(isset($user)){echo $user;} ?></p>
			    	</div>	
			    	<div class="col-lg-12" style="margin-top: 50px;height: 400px; overflow-x: hidden">
			    		<table class="table table-bordered">
			    			<thead>
			    				<tr>
									<td style="padding-right-right: ">STT</td>
									<td style="text-align: center;">Tên sản phẩm</td>
									<td style="text-align: center;">Giá nhập</td> 
									<td style="text-align: center;">Số lượng nhập</td>
									<td style="text-align: center;">Chất liệu</td>
									<td style="text-align: center;">Bảo hành</td>
									<td style="text-align: center;">Thành tiền</td>
								</tr>
							</thead>
							<tbody> 
							<?php 
							  echo form_open('product/save_nhapkho');
							?>

			    				<?php 
			    				if(isset($hdnhap)){
			    					$i=0;
			    					$s=0;
			    					foreach ($hdnhap as $key => $value) {
			    						$i++; 
			    						$s+=$value['price']*$value['qty'];
			    					?>
			    					<tr>
			    						<td style="text-align: center;"><?php echo $i ?></td>
			    						<td style="text-align: center;"><?php echo $value['name'] ?></td>
			    						<td style="text-align: center;"><?php echo number_format($value['price'])?></td>
			    						<td style="text-align: center;"><?php echo $value['qty']?></td>
			    						<td style="text-align: center;"><?php echo $value['Chatlieu_sp']?></td>
			    						<td style="text-align: center;"><?php echo $value['Baohanh']?></td>
			    						<td style="text-align: center;"><?php echo number_format($value['price']*$value['qty'])?> VNĐ</td>
			    					</tr>

			    					<?php
			    					}
			    				}
			    				 ?>
			    				 <tr>
			    				 	<td colspan="6">Tổng</td>
			    				 	<td><?php echo number_format($s);?> VNĐ</td>
			    				 </tr>
				        		
				        	        <td colspan="12">
					        			<button type="submit" class="btn btn-default">Lưu
					        			
										</button>
										<a href="<?php echo base_url() ?>Admin_nhapkho/inphieu" class="btn btn-default" style="float:right;">In phieu</a>
								    </td>
				        		</tr>
				        		<?php echo form_close(); ?>
							</tbody>
			    		</table>
			    	</div>
    		</div>
		</div> 
	</div>
</div>
<script src="<?php echo base_url() ?>public/style/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript
    <script src="<?php echo base_url() ?>public/style/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript">
    	$(document).ready(function(){
    		$('#danhmuc').on('change', function(){
    			var danhmuc_id = $(this).val();
    			if(danhmuc_id == '')
    			{
    				$('#masp').prop('disabled', true);
    			}
    			else
    			{
    				$('#masp').prop('disabled', false);

    				jQuery.ajax({
    					url:"<?php echo base_url()?>Admin_kho/get_masp1",
    					type:"POST",
    					data:{'danhmuc_id' : danhmuc_id},
    					dataType: 'json',

    					success: function(data){
    						$('#masp').html(data);
    					},
    					error: function(){
    						alert('Loi');
    					}
    				});
    			}
    		});
    	}
    	);
    </script>
</body>
</html>