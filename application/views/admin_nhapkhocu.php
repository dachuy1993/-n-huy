<?php 
include 'admin_header.php';
 ?>

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