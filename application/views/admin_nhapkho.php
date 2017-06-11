<?php 
$id = $this->session->userdata('id');
if(isset($id)){
echo $id;
}
?>
<?php 
include 'admin_header.php';
 ?>

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
								<div class="input-group">
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
					<button type="submit">
					<span class="glyphicon"></span>
					Lưu sản phẩm
					</button>
					<button><a href="<?php echo base_url()?>Admin_nhapkho" style="color: black;">
					Phiếu nhập kho
					</a></button>
					

	  			</div>
			</div>
			<div>
				<div style="margin: 0 auto; width: 520px;">
				<table class="table table-bordered" >
						<?php 
		            	$style = array(
		            		// 'class' => 'login-content',
		            		'enctype' =>'multipart/form-data'
		            		);
		            	echo form_open('Admin_nhapkho/add',$style);
		             ?>
		             <tr>
		             	<td colspan="2">Thông tin sản phẩm mới nhập</td>
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
						<td style="text-align: center;"><input class="form-control" type="text" name="gianhap" required></td>
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
					</table>
				</div>
					<table class="table table-hover">
						<thead>
							<tr>
								<td>STT</td>
								<td>Tên sản phẩm</td>
								<td>Ảnh sản phẩm</td>
								<td>Giá nhập</td>
								<td>Số lượng nhập</td>
								<td>Kích thước</td>
								<td>Màu sắc</td>
								<td>Chất liệu</td>
								<td>Danh mục</td>
								<td>Chi tiết danh mục</td>
								<td>Bảo hành</td>
								<td>Thành tiền</td>
							</tr>
						</thead>
		    			<tbody>
		      				<?php
		      				if(isset($cart1)){
		      					$i = 1;
	      						foreach($cart1 as $item){
							?>
							<tr>
		      					<td><?php echo $i ?></td>
		      					<td><?php echo $item['name'] ?></td>
		      					<td><img src="<?php echo base_url()?>public/img/<?php echo $item['Anh_sp'] ?>" width="50px" height="50px"></td>
		      					<td><?php echo $item['price'] ?></td>
		      					<!-- <td><?php echo $item->name ?></td> -->
		      					<td><?php echo $item['qty'] ?></td>
		      					<td><?php echo $item['Kichthuoc_sp'] ?></td>
		      					<td><?php echo $item['Mausac_sp'] ?></td>
		      					<td><?php echo $item['Chatlieu_sp'] ?></td>
		      					<td><?php echo $item['Danhmuc_id']?></td>
		      					<td><?php echo $item['masanpham'] ?></td>
		      					<td><?php echo $item['Baohanh']?></td>
		      					<td><?php echo $item['subtotal'] ?></td>
		      				</tr>

							<?php
							$i++;
	      						}
	      					} ?>
		    			</tbody>
		    			<tbody>
			        		<tr>
			        	        <td colspan="8">
				        			<a href="<?php echo base_url()?>product/remove/all" class="btn btn-default">Xóa giỏ hàng</a>
				        			 <!-- <input class ='btn btn-info'  type="submit" value="Update giỏ hàng"/> -->
				        
				        			<a href="#login-box" class="btn btn-success login-window" >Thanh toán</a></button>
				        			<button type="submit">Thêm
				        			
									</button>
									<?php echo form_close();?>
							    </td>
			        		</tr>
						</tbody>
	  			</table>
			</div>
			<?php
			 // echo form_close(); 
			 ?>

		</div>
	</div>
</div>
<!-- <script language=”javascript”>
 $(document).ready(function() {
  $('#danhmuc').change(function() {
   giatri = $('#danhmuc').val();
   $post("admin_laychitietdm.php",{id:id},function($data)){
   	
   }
  });
 });
</script> -->
<script src="<?php echo base_url() ?>public/style/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
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