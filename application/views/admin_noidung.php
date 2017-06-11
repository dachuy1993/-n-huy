<?php 
include 'admin_header.php';
 ?>

<div class="menu-right">
	<div>
		<div class="row">
			<div class="col-lg-5">
				<p style="font-size: 30px;font-weight: bold; padding: 0px 0 0 20px;">NỘI DUNG</p>
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

				<a href="<?php echo base_url()?>Noidung/viewadd" class="btn btn-success lien-he login-window button orange">
				<span class="glyphicon"></span>
				Thêm bài viết
				</a>
  			</div>
		</div>
		<div>
			<table class="table table-bordered">
    <thead>
      <tr>
        <th>STT</th>
        <th>Tên tiêu đề</th>
        <th>Nội dung</th>
        <th>Danh muc</th>
        <th>Hoạt động</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    $stt = 0;
	  				if(isset($noidung1)){
	  					foreach ($noidung1 as $key) { 
	  						$stt++;
					?>
      <tr>
        <td><?php echo $stt?></td>
        <td><?php echo $key->ten_tieu_de?></td>
        <td><?php echo $key->noi_dung?></td>
        <td><?php echo $key->danh_muc?></td>
        <td><a href="<?php echo base_url()?>Noidung/edit/<?php echo $key->noidung_id?>">Sửa</a>
        <a href="<?php echo base_url()?>Noidung/delete/<?php echo $key->noidung_id?>">Xóa</a>
        </td>
      </tr>
      <?php }}?>
    </tbody>
  </table>
		</div>
	</div>
</div>
	


	</div>
        
</body>
</html>