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
                <p style="font-size: 30px;font-weight: bold; padding: 0px 0 0 20px;">NHẬP KHO SẢN PHẨM</p>
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
           <?php   
                    if(isset($getinfo)){
                        foreach ($getinfo as $key) { 
                    ?> 
            <div class="btn-group" role="group" aria-label="..." style="float: right; margin: 20px;">
                <?php 
                $style = array(
                    // 'class' => 'login-content',
                    'enctype' =>'multipart/form-data'
                    );
                echo form_open('product/editsl/'.$key->sanpham_id,$style); 
             ?>
                <button><a href="<?php echo base_url()?>Admin_kho" style = 'color: black;'>Trở về</a></button>
                <button type="submit">
                    <span class="glyphicon"></span>
                    Lưu sản phẩm
                    </button>
            </div>
        </div>
        <div>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="text-align: center;">STT</th>
                    <th style="text-align: center;">Tên sản phẩm</th>
                    <th style="text-align: center;">Giá nhập</th>
                    <th style="text-align: center;">Số lượng nhập</th>
                    <th style="text-align: center;">Hoạt động</th>
                  </tr>
                </thead>
                <tbody>
                
                  <tr>
                    <td style="text-align: center;"><?php echo $key->sanpham_id?></td>
                    <td style="text-align: center;"><?php echo $key->Ten_sp?></td>
                    <td style="text-align: center;"><input type="number" name="gianhap"></td>
                    <td style="text-align: center;"><input type="number" name="soluong"></td>
                    <td style="text-align: center;"><a href="">Xác nhận</a>
                    </td>
                  </tr>
                  <?php }}?>
                </tbody>
                <?php echo form_close() ?>
            </table>
        </div>
    </div>
</div>
</div>

</body>
</html>