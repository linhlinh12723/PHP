<?php require_once "./view/header.php"; ?>

<body>

  <?php
    require_once "view/header1.php";
    require_once "connect.php";
    // lấy dl

    if(!isset($_GET["mod"])) {
        $sql = "SELECT * FROM `order`";
        $rel = mysqli_query($conn, $sql);
        $res = getRes($rel);
        ?>
  <div class="container">
    <h1>Danh sách đơn hàng</h1>
    <table class="table">
      <thead>
        <tr>
          <th width="100px">Mã</th>
          <th width="200px">Trạng thái</th>
          <th width="100px">Xem</th>
          <th width="100px">Hành động</th>
        </tr>
      </thead>
        <?php
        for( $i = 0; $i < count($res); $i++ ) {
            ?>
      <tr>
        <td><?php echo $res[$i]["mahd"]?></td>
        <td><?php
        if($res[$i]["trangthai"] == '0') { ?>
          chưa hoàn thành
        <?php } else if($res[$i]['trangthai'] == '1') {?>
          đang giao hàng
            <?php
        }else{
            ?>
          hoàn thành
            <?php
        }?>
        </td>
        <td><button><a href="./veiwDonhang.php?id=<?php echo $res[$i]['mahd']?>&mod=view">Xem</a></button></td>

        <td><?php  
        if($res[$i]["trangthai"] == '0') { ?>
          <button><a href="?id=<?php echo $res[$i]['mahd']?>&mod=update&status=1">Giao hàng</a></button>
        <?php } else if($res[$i]['trangthai'] == '1') {?>
          <button><a href="?id=<?php echo $res[$i]['mahd']?>&mod=update&status=2">Hoàn thành</a></button>
            <?php
        }else{
            ?>
          <button><a href="?id=<?php echo $res[$i]['mahd']?>&mod=delete">Xoá</a></button>
            <?php
        }?>
        </td>
      </tr>
            <?php   
        }
    }else{
        switch($_GET["mod"]) {
        case "update": {
            $status = $_GET['status'];
            $id = $_GET["id"];
            if($status != "1" || $status != "2") {
                echo "unknown status";
            }else{
                $sql = "UPDATE `order` SET `trangthai`='$status' WHERE mahd = '$id'";
                $result = mysqli_query($conn, $sql);
                echo "update thanh cong";
            }
        }
        break;
        
        break;
        case "delete": {
            $id = $_GET["id"];
            $idkh = mysqli_query($conn, "SELECT `makh` FROM `order` WHERE `mahd` = '$id'")->fetch_array()["makh"];
            // var_dump($idkh);
            // xoa hoa don
            $sql = "DELETE FROM `order` WHERE `mahd` = '$id'";
            $result = mysqli_query($conn, $sql);
            // xoa hoa don detail
            $sql = "DELETE FROM `orderdetail` WHERE `mahd` = '$id'";
            $result = mysqli_query($conn, $sql);
            // xoa customer
            $sql = "DELETE FROM `customer` WHERE `makh` = '$idkh'";
            $result = mysqli_query($conn, $sql);
            
            echo "xoa thanh cong";
        }
        break;
        case "view": {
            header("location: veiwDonhang.php");
            exit();
        }
        }
        header('location: donhang.php');
        exit();
    }
    ?>
    </table>
  </div>
</body>

</html>
