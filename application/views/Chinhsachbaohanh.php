<?php 
if(isset($err)){
  echo $err;
  die();
}
 ?>
<?php 
include 'header.php';
 ?>
<div class="col-lg-9">
  <h3 class="home-product" style=" border-radius">
    CẨM NANG, TIN TỨC NỘI THẤT
          
  </h3>
  <div>
    <div> 
      <div style="font-weight: bold;font-size: 15px; color: #52B244; ">
        <?php 
            if (isset($noidung2)) {
              foreach ($noidung2 as $key) {
                echo $key->ten_tieu_de;
                ?>
      </div>
      <div>
        <p style="font-weight: bold;font-size: 14px;padding: 2px;">
          <?php echo $key->noi_dung?>
        </p>
      </div>

    </div>
  </div>
  
  <!-- 
  <?php
              }
            }
          ?> -->

          
          <!-- <?php 
            if(isset($getinfo)){
              foreach ($getinfo as $key) {
          ?>
          <div class="col-lg-4">chia làm 3 sp trên 1 dòng
              <div class = "sp-list">
                <div class="sp-view">
                  <a href="<?php echo base_url()?>product/view/<?php echo $key->sanpham_id?>"><img src="<?php echo base_url()?>public/img/<?php echo $key->Anh_sp?>"></a>
                </div>
                <h2 class="name"><a href="/sanpham.php" style="color: black;"><?php echo $key->Ten_sp ?></a></h2>
                <div style="display: table; width: 100%">
                  <p class="giasp" style="float: left;"><?php echo number_format($key->Gia_sp)?></p>
                  <a href="#" class = "btn btn-success dat-mua">
                    <span class="glyphicon glyphicon-shopping-cart"></span>
                    Đặt mua
                  </a>
                </div>
              </div>
            </div>
          <?php
              }
            }
            ?> -->

</div>
        
        <?php 
include 'footer.php';
 ?> 
 
