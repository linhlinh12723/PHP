<?php require_once "./view/header.php"; ?>

<body>

  <?php
  require_once "view/header1.php";
  require_once "connect.php";
  
    ?>
  <div class="container">
    <h1>Quản lý dòng sản phẩm</h1>
    <div>
      <table class="table">
        <thead>
          <!-- <td>STT</td> -->
          <th width="50px">Mã</th>
          <th width="200px">Tên</th>
          <th width="200px">Mô tả</th>
          <th width="200px">Hành động</th>
        </thead>
        <?php
        $sql = "SELECT * FROM adproducttype";
        $result = mysqli_query($conn, $sql);
        $res = getRes($result);
        foreach ($res as $row) {
            // var_dump($row);
            // echo "<br>";
            ?>
        <tr>
          <td><?php echo $row["Ma_loaisp"]?></td>
          <td><?php echo $row["Ten_loaisp"]?></td>
          <td><?php echo $row["Mota_loaisp"]?></td>
          <td>

            <button><a href="./update_loaisp.php?id=<?php echo $row["Ma_loaisp"]?>">Sửa</a></button>
            <button><a href="delete_loaisp.php?id=<?php echo $row["Ma_loaisp"]?>">
                Xóa
              </a></button>

          </td>
        </tr>
        <?php
        }
        ?>
      </table>
      <button><a href="./adproducte.php">Thêm</a></button>

    </div>
  </div>
</body>

</html>