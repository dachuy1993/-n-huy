<!DOCTYPE html>
<html>
<head> 
	<title></title>
</head>
<body>
	<div style="margin: 50px auto; width: 600px; border:1px blue solid">
		<div style="margin: 100px auto; width: 400px;">
		<?php 
		echo form_open('admin/login');

		 ?>
		 <fieldset style="background: #efefef; height: 150px;width: 400px;">
		 	<legend style="text-align: center;">ĐĂNG NHẬP HỆ THỐNG</legend><br>
		 	<?php 
		 	if(isset($err)){
		 		echo $err;
		 	}

		 	 ?> 
		 	<div style="float: left;">
			 	<table>
			 		<tr>
			 			<td>Tên đăng nhập (*)</td>
			 			<td><input type="text" name="user"></td>
			 		</tr>
			 		<tr>
			 			<td>Mật khẩu (*)</td>
			 			<td><input type="password" name="pass"></td>
			 		</tr>
			 		<tr>
			 			<td></td>
			 			<td><a href="<?php echo base_url()?>Admin_quenmk" style="">Quên mật khẩu</a></td>
			 		</tr>
			 		<tr>
			 			<td></td>
			 			<td><input type="submit" name="" value="ĐĂNG NHẬP" style="background: #00b7ff;width: 115px;height: 39px;font-weight: bold;font-size: 14px;color: white;"></td>
			 		</tr>
			 	</table>
			 </div>
			 <div><img src="<?php echo base_url();?>public/img/khoa.png"></div>
		 </fieldset>
			
		<?php echo form_close() ?>
		</div>
	</div>
</body>
</html>