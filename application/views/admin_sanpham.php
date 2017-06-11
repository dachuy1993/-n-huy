<?php 
include 'admin_header.php';
 ?>

<div class="menu-right">
	<div>
		<div class="row">
			<div class="col-lg-5">
				<p style="font-size: 30px;font-weight: bold; padding: 0px 0 0 20px;">SẢN PHẨM</p>
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
			<div class="btn-group" role="group" aria-label="..." style="float: left; margin: 20px;">

				<a href="<?php echo base_url()?>danhmuc" class="btn btn-info lien-he login-window button orange">
				<span class="glyphicon"></span>
				Danh mục
				</a>
  			</div>
			<div class="btn-group" role="group" aria-label="..." style="float: right; margin: 20px;">

				<a href="#login-box" class="btn btn-success lien-he login-window button orange">
				<span class="glyphicon"></span>
				Thêm sản phẩm
				</a>
  			</div>
		</div>
		<div>
			<table class="table table-bordered">
    <thead>
      <tr>
        <th>STT</th>
        <th>Ảnh sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Mã sản phẩm</th>
        <th>Mã danh mục</th>
        <th>Số sản phẩm</th>
        <th>Giá sản phẩm</th>
        <th>Kích thước sản phẩm</th>
        <th>Màu sắc sản phẩm</th>
        <th>Chất liệu sản phẩm</th>
        <th>Thông tin sản phẩm</th>
        <th>Bảo hành sản phẩm</th>
        <th>Lượt mua</th>
        <th>Lượt xem</th>
        <th>Hoạt động</th> 
      </tr>
    </thead><?php $stt = 0;?>
    <tbody>
    <?php 
	  				if(isset($product1)){
	  					foreach ($product1 as $key) { 
	  						$stt +=1;
					?>
      <tr>
        <td style="text-align: center;"><?php echo $stt?></td>

        <td>
        	<img src="<?php echo base_url()?>public/img/<?php echo $key->Anh_sp?>" width="
        100%" height = "70px" style ="margin: 0 auto">
        </td>
        <td style="text-align: center;"><?php echo $key->Ten_sp." 0".$key->sanpham_id?></td>
        <td style="text-align: center;"><?php echo $key->ma_sp?></td>
        <td style="text-align: center;"><?php echo $key->danhmuc_id?></td>
        <td style="text-align: center;"><?php echo $key->Soluong_sp?></td>  
        <td style="text-align: center;"><?php echo $key->Gia_sp?></td>
        <td style="text-align: center;"><?php echo $key->Kichthuoc_sp?></td>
        <td style="text-align: center;"><?php echo $key->Mausac_sp?></td>
        <td style="text-align: center;"><?php echo $key->Chatlieu_sp?></td>
        <td style="text-align: center;"><?php echo $key->Thong_tin_sp?></td>
        <td style="text-align: center;"><?php echo $key->Baohanh_sp?></td>
        <td style="text-align: center;"><?php echo $key->Luot_mua?></td>
        <td style="text-align: center;"><?php echo $key->Luot_xem?></td>
        <td><a href="<?php echo base_url()?>product/edit/<?php echo $key->sanpham_id?>">Sửa</a>
        <a href="<?php echo base_url()?>product/delete/<?php echo $key->sanpham_id?>">Xóa</a>
        </td>
      </tr>
      <?php }}?>
    </tbody>
  </table>
		</div>
	</div>
</div>
	


	</div>
        <div id="login-box" class="login">
            <p class="login_title"> Thêm sản phẩm mới</p>
            <a href="#" class="close"><img src="close.png" class="img-close" title="Close Window" alt="Close" /></a>
            <?php 
            	$style = array(
            		'class' => 'login-content',
            		'enctype' =>'multipart/form-data'
            		);
            	echo form_open('product/add',$style);
             ?>
                <table> 
                	<tr>
                		<td colspan="2"><label>

							Thông tin sản phẩm
							</label>
						</td>
                	</tr>
                	<tr>
                		<td><label>Tên sản phẩm (*)</label></td>
                		<td><input type="text" name="Ten"></td>
                	</tr>
                	<tr>
                		<td><label>Mã loại danh mục (*)</label></td>
                		<td>
							<select name=mytextarea>
							<option name=one value='2'>Phòng khách</option>
							<option name=two value='3'>Phòng ngủ</option>
							<option name=three value='4'>Phòng ăn</option>
							<option name=four value='5'>Phòng thờ</option>
							<option name=five value='6'>Nội thất văn phòng</option>
							<option name=six value='9'>Đồ gỗ trang trí</option>
							</select>
							
						</td>
                	</tr>
                	<tr>
                		<td><label>Mã sản phẩm (*)</label></td>
                		<td><input type="text" name="masp"></td>
                	</tr>
                	<tr>
                		<td><label>Ảnh sản phẩm (*)</label></td>
                		<td>
                			<input type="file" name="userfile">
                		</td>
                	</tr>
                	<tr>
                		<td><label>Số lượng (*)</label></td>
                		<td><input type="text" name="Soluong"></td>
                	</tr>
                	<tr>
                		<td><label>Giá bán (*)</label></td>
                		<td><input type="text" name="Giaban"></td>
                	</tr>
                	<tr>
                		<td><label>Kích thước (*)</label></td>
                		<td><input type="text" name="Kichthuoc"></td>
                	</tr>
                	<tr>
                		<td><label>Màu sắc (*)</label></td>
                		<td><input type="text" name="Mausac"></td>
                	</tr>
                	<tr>
                		<td><label>Chất liệu (*)</label></td>
                		<td><input type="text" name="Chatlieu"></td>
                	</tr>
                	<tr>
                		<td><label>Bảo hành (*)</label></td>
                		<td>
                			
							<select name=mytextarea1>
							<option name=one value="3 năm"> 3 năm </option> 
							<option name=two value="5 năm"> 5 năm </option>
							<option name=three value="7 năm"> 7 năm </option>
							<option name=four value="10 năm"> 10 năm </option>
							</select>
					
                		</td>
                	</tr>
                	<tr>
                		<td><label>Thông tin sản phẩm</label></td>
                		<td><input type="text" name="thongtin"></td>
                	</tr>
                </table>
                <div class="text-center">
                	<button class="button submit-button" type="submit" style="width: 50%;">Lưu thông tin sản phẩm</button>
                </div>
            <p>
            <a class="forgot" href="#">Quên mật khẩu?</a>
            </p>    
            <?php echo form_close() ?>    
            </form>
        </div>

</body>
</html>