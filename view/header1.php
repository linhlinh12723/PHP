<?php
session_start();
?>
<div class="header" style="background-color:cornsilk;">
  <div class="header1">
    <?php 
    //echo "Xin chào" ."" .$_COOKIE['txt_username']. "<br>";
    echo $_SESSION['txt_username']. "<br>";
    // var_dump($_SESSION);
    // đếm số lượt truy cập
    if(isset($_SESSION['counter'])) {
        $_SESSION['counter'] +=1;
    }
    else{
        $_SESSION['counter'] = 1;
    }
    echo "Số lần truy cập:".$_SESSION['counter'];
    ?>
<br />
<img src="https://dientuphongnam.com/wp-content/uploads/2020/05/logo-phong-nam.png" width="100px" height="50px"/>
  </div>
  <ul class="menu1">
    <li><a href="indexx.php">Trang chủ</a></li>
    <?php
    if($_SESSION['quyen'] == '1') {
        ?>
    <!-- <li><a href="#">Quản lý</a>
      <ul class="menu2"> -->
        <li><a href="dongsp.php">Quản lý sản phẩm</a></li>
        <li><a href="sp.php">Sản phẩm</a></li>
      <!-- </ul>
    </li> -->
    <li><a href="kh.php">Quản lý khách hàng</a></li>
    <li><a href="donhang.php">Đơn Hàng</a></li>
    <?php }?>
  </ul>
  <div class="search">
    <form>
      <input type="text" placeholder="Tìm kiếm.." name="search">
      <button type="submit">Search</button>
    </form>
    <?php 
    if(isset($_SESSION['txt_username'])) {
        ?>
    <button style="width: 100px;
    height: 50px;
    transform: translate(0px, -10px);"><a href="logout.php"> Đăng xuất</a></button>
    <?php } ?>
  </div>
</div>
