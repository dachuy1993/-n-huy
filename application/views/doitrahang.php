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
      <?php }}?>
    </div>
  </div> 
</div>
<?php 
include 'footer.php';
 ?>
