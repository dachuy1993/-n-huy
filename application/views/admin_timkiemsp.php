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
        <li >
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
        <li style="background: #524d49">
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
        <li>
            <a href="<?php echo base_url()?>Admin_kho">
                <span class=" glyphicon glyphicon-book icon" ></span> 
            </a>
            <p style="color: white;">Quản lý kho</p>
        </li>
    </ul>
</div>
<div class="menu-right">
	<div>
		<div class="row" style="margin-top: 10px; margin-right: 0px;">
			<div class="col-lg-5">
				<p style="font-size: 30px;font-weight: bold; padding: 0px 0 0 20px;">SẢN PHẨM</p>
			</div>
			<div class="col-lg-7">
				<div class="icon-user"  style="float: right;">
					<ul>
						<li>
                        <?php echo form_open('Product/admin_tk');?>
							<div class="input-group" style="width: 370px;">
					      		<input type="text" name="timkiemsp" class="form-control timkiem" placeholder="Search for...">
					      		<span class="input-group-btn">
					        		<button class="btn btn-default" type="submit">Tìm Kiếm</button>
					      		</span>
					    	</div>
                            <?php echo form_close();?>
						</li>
						<li style="margin:  0 5px;">
							<a href="">
								<span class=" glyphicon glyphicon-bell"><sup>0</sup></span>
							</a>
						</li>
						<li style="margin: 0 20px 0 5px;">
							<div class="dropdown">
                                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <a href="">
                                            <span class=" glyphicon glyphicon-user"><?php if(isset($user)){echo $user;} ?></span>
                                        </a>
                                    <span class="caret"></span> 
                                  </button> 
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="<?php echo base_url()?>nhanvien/change/">Thay đổi thông tin</a></li>
                                    <li><a href="<?php echo base_url()?>admin/logout">Đăng xuất</a></li> 
                                  </ul>
                            </div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row" style="height: 76px; background: #ccc;margin: 20px 0 20px 0; ">
			
			<a href="<?php echo base_url()?>product" class = "btn btn-default" style="float: right; margin-top: 23px; margin-right: 50px;">Trở về</a>
		</div>
		<div>
			<table class="table table-bordered" style="text-align: center;">
                <thead>
                  <tr>
                    <th style="text-align: center;">STT</th>
                    <th style="text-align: center;width: 100px;">Ảnh sản phẩm</th>
                    <th style="text-align: center;">Tên sản phẩm</th>
                    <th style="text-align: center;">Mã sản phẩm</th>
                    <th style="text-align: center;">Mã danh mục</th>
                    <th style="text-align: center;">Số sản phẩm</th>
                    <th style="text-align: center;">Giá sản phẩm</th>
                    <th style="text-align: center;">Kích thước sản phẩm</th>
                    <th style="text-align: center;">Màu sắc sản phẩm</th>
                    <th style="text-align: center;">Chất liệu sản phẩm</th>
                    <th style="text-align: center;">Thông tin sản phẩm</th>
                    <th style="text-align: center;">Bảo hành sản phẩm</th>
                    <th style="text-align: center;">Lượt mua</th>
                    <th style="text-align: center;">Lượt xem</th>
                    <th style="text-align: center;">Hoạt động</th> 
                  </tr>
                </thead><?php $stt = 0;?>
                <tbody>
                <?php 
            	  				if(isset($getinfo1)){
            	  					foreach ($getinfo1 as $key) { 
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
                    <td style="text-align: center;"><?php echo number_format($key->Gia_sp)?> VNĐ</td>
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