<?php require_once "./view/header.php"; ?>

<body>
  <!-- code header -->
  <?php require_once 'view/header1.php'?>

  <div class="main">
    <!-- code content -->
    <h1>Danh sách sản phẩm</h1>
    <div class="content">
      <?php 
        require_once "connect.php";
        $sql = "SELECT * FROM adproduct";
        $rel = mysqli_query($conn, $sql);
        if(mysqli_num_rows($rel) > 0) {
            while ($r = mysqli_fetch_assoc($rel)) {
                //var_dump($r);
                $anhsp = $r['anhsp'];
                $masp = $r['ma_sp'];
                $tensp = $r['tensp'];
                $giatien = $r['giaxuat'];
                $khuyenmai = $r['khuyenmai'];
                ?>
      <div class="card">
        <img src="public/images/<?php echo $anhsp;?> " width="220px" height="150px" />
        <div class="card_container">
          <h4><?php echo $tensp?></h4>
          <a href="addtocart.php?id=<?php echo $masp; ?>" style=" color:black">Addtocart</a>
        </div>
      </div>
                <?php
            }
        }
        ?>
      <!-- <div class="content_left"></div>
      <div class="content_center"></div>
      <div class="content_right"></div> -->
    </div>
  </div>
  <?php require_once "./view/footer.php";?>
</body>

</html>
