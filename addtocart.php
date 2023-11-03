<?php require_once "./view/header.php"; ?>

<body>
  <!-- <div class="main"> -->
  <!-- code header -->
  <?php 
    require_once "connect.php";
    require_once 'view/header1.php';
         //$id = $_GET["id"];
    //echo $id;
    $id = isset($_GET["id"]) ?$_GET["id"]:"";
    $sql = "SELECT * FROM adproduct WHERE ma_sp = '$id'";
    $rel = mysqli_query($conn, $sql);
         
    if(mysqli_num_rows($rel) > 0) {
        while ($r = mysqli_fetch_assoc($rel)) {
            //var_dump($r);
            if(isset($_SESSION['cart'][$id])) {
                $_SESSION['cart'][$id]['qty'] += 1;
            }
            else {$_SESSION['cart'][$id]['qty'] =1;
            };
            $_SESSION['cart'][$id]['ma_sp'] = $r['ma_sp'];
            $_SESSION['cart'][$id]['tensp'] = $r['tensp'];
            $_SESSION['cart'][$id]['anhsp'] = $r['ma_sp'];
            $_SESSION['cart'][$id]['giaxuat'] = $r['giaxuat'];
            $_SESSION['cart'][$id]['khuyenmai'] = $r['khuyenmai'];
        }
    }
    ?>
  <!-- code content -->
  <div class= "main">
    <?php
    if(isset($_SESSION['cart'])) {
        ?>
    <form action="" method="post">
      <table width="898" border="1" class="table">
        <tr>
          <td style="background-color: white;" colspan="8">GIỎ HÀNG</td>
        </tr>
        <tr style="background-color: white;">
          <td width="40">STT</td>
          <td width="118">Mã sản phẩm</td>
          <td width="87">Tên sản phẩm</td>
          <td width="158">Số lượng</td>
          <td width="81">Giá tiền</td>
          <td width="119">Khuyến mại</td>
          <td width="141">Thành tiền</td>
          <td width="102">Xóa</td>
        </tr>
        <?php $i = 1; $tongtien = 0; $tt=0;
        //var_dump($_SESSION["cart"]);
        foreach($_SESSION["cart"] as $k => $v){
            //var_dump($v);
            $i++;
            if($v['khuyenmai'] > 0) {
                $tt = $v['qty'] * $v['khuyenmai'];
            }
            else {$tt = $v['qty'] * $v['giaxuat'];
            }
            $tongtien +=$tt;
            ?>
        <tr>
          <td><?php echo $i;?></td>
          <td><?php echo $v['ma_sp'];?></td>
          <td><?php echo $v['tensp'];?></td>
          <td> <input type="text" value="<?php echo $v['qty'];?>" name=qty[<?php echo $k?>] />
          </td>
          <td><?php echo $v['giaxuat'];?></td>
          <td><?php echo $v['khuyenmai'];?></td>
          <td><?php echo $tt; ?></td>
          <td>
            <a href="delete_addtocart.php?key=<?php echo $k ?>" style="color:#black">Xóa</a>
          </td>
        </tr>
        <?php }?>
        <tr>
          <td colspan="8">
            <?php 
              // $tongtien;
              echo "Tổng tiền cần thanh toán là: ".$tongtien;
            ?>
          </td>
        </tr>
        <?php
        if (isset($_POST["btn_submit"])) {
            if ($_POST["btn_submit"] =="Cập Nhật") {
                //echo "a";
                //var_dump($_POST['qty']);
                foreach ($_POST['qty'] as $key => $val) {
                       $_SESSION['cart'][$key]['qty']=$val;
                }
                header('location: addtocart.php');
            }
            if ($_POST["btn_submit"] =="Đặt Hàng") {
                $makh = "kh".mt_rand(0, 10000);
                $txt_tenkh = isset($_POST["txt_tenkh"])?$_POST["txt_tenkh"]:"";
                $txt_email = isset($_POST["txt_email"])?$_POST["txt_email"]:"";
                $txt_phone = isset($_POST["txt_phone"])?$_POST["txt_phone"]:"";
                $txt_address = isset($_POST["txt_address"])?$_POST["txt_address"]:"";
                $txt_giaohang = isset($_POST["txt_giaohang"])?$_POST["txt_giaohang"]:"";
                $create_date = isset($_POST["create_date"])?$_POST["create_date"]:"";
                $mahd = "hd".mt_rand(0, 10000);
                //lưu thông tin đơn hàng
                $sql3 = "INSERT INTO `order`(`mahd`, `makh`, `tenkh`, `tongtien`, `create_date`, `trangthai`) VALUES ('$mahd','$makh','$txt_tenkh','$tongtien','$create_date','0')";
                $rel3 = mysqli_query($conn, $sql3);
                //lưu thông tin kh
                $sql4 = "INSERT INTO customer(`makh`, `tenkh`, `phone`, `email`, `diachi_lienhe`, `diachi_giaohang`) VALUES ('$makh','$txt_tenkh','$txt_phone','$txt_email','$txt_address','$txt_giaohang')"; 
                $rel4 = mysqli_query($conn, $sql4);
                // lưu thông tin đơn hàng
                foreach($_SESSION['cart'] as $key1 => $val1) {
                    // var_dump($val1);
                    $ma_sp = $val1['ma_sp'];
                    $tensp = $val1['tensp'];
                    $soluong = $val1['qty'];
                    $dongia = $val1['giaxuat'];
                    $khuyenmai = $val1['khuyenmai'];
                    $sql5 = "INSERT INTO `orderdetail`(`mahd`, `masp`, `tensp`, `soluong`, `dongia`, `khuyenmai`) VALUES ('$mahd','$ma_sp','$tensp','$soluong','$dongia','$khuyenmai');";
                    $rel5 = mysqli_query($conn, $sql5);
                }
                echo "cap nhat thanh cong";
            }
        }
        ?>
        <tr>
          <td colspan="8">
            <input name="btn_submit" type="submit" value="Cập Nhật" style="background-color: antiquewhite;" />
            <input name="btn_submit" type="submit" value="Đặt Hàng" style="background-color: antiquewhite;" />
          </td>
        </tr>
        <table>
          <tr>
            <td>Tên khách hàng</td>
            <td><input name="txt_tenkh" type="text" /></td>
          </tr>

          <tr>
            <td>Email</td>
            <td><input name="txt_email" type="text" /></td>
          </tr>

          <tr>
            <td>Phone</td>
            <td><input name="txt_phone" type="text" /></td>
          </tr>

          <tr>
            <td>Địa chỉ liên hệ</td>
            <td><input name="txt_address" type="text" /></td>
          </tr>

          <tr>
            <td>Địa chỉ giao hàng</td>
            <td><input name="txt_giaohang" type="text" /></td>
          </tr>

          <tr>
            <td>Ngày đặt hàng</td>
            <td><input name="create_date" type="date" /></td>
          </tr>
        </table>
      </table>

    </form>
    <?php
    }
    ?>
  </div>
  <?php require_once "./view/footer.php";?>


  <!-- </div> -->
</body>

</html>