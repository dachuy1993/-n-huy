<!DOCTYPE html>
<html>
<head> 
	<title></title>
</head>
<body>
<div style="margin: 200px auto; width: 400px;">
<?php 
echo form_open('admin/login');

 ?>
 <fieldset style="background: #efefef; height: 250px;">
 	<legend style="text-align: center;">TRỢ GIÚP MẬT KHẨU</legend><br>
 	<?php 
 	if(isset($err)){
 		echo $err;
 	}

 	 ?>
 	<div style="float: left;">
 		<P>Nhập địa chỉ email của bạn. Bạn sẽ nhận được một email với một liên kết để đặt lại mật khẩu.</P>
	 	<table>
	 		
	 		<tr>
	 			<td>Địa chỉ email (*)</td>
	 			<td><input type="email" name="email" style="width: 175px;"></td>
	 		</tr> 
	 		<tr>
	 			<td></td>
	 			<td><input type="submit" name="" value="TRUY XUẤT MẬT KHẨU" style="background: #00b7ff;width: 182px;height: 44px;font-weight: bold;font-size: 14px;color: white;margin-top: 20px;"></td>
	 		</tr>
	 		<tr>
	 			<td><a href="<?php echo base_url()?>admin/login" style="">Quay lại đăng nhập</a></td>
	 		</tr>
	 	</table>
	 </div>
 </fieldset>
	
<?php echo form_close() ?>
</div>
</body>
</html>