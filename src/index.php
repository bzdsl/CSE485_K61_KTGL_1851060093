<!doctype html>
<html lang="en">

<head>
  <title>ADMIN quản lý</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel=" stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <nav style="background-color:#47bdec;">
    <a style="display:inline-block; padding:10px; font-size:25px; color:white; text-decoration:none;" href="#">Manager</a>

  </nav>
  <br><br><br>
  <div class="container">

    <table class="table">
      <thead>
        <tr>
          <th>Mã nhân viên</th>
          <th>Họ và tên</th>
          <th>Chức vụ</th>
          <th>Phòng ban</th>
          <th>Lương</th>
          <th>Ngày vào làm</th>
        </tr>
      </thead>
      <?php
      include 'config.php';
      $sql = "select * from nhanvien";
      $query = mysqli_query($conn, $sql);

      while ($row = mysqli_fetch_array($query)) {

      ?>
        <tbody>
          <tr>
            <td scope="row"><?php echo $row['maNV'] ?></td>
            <td scope="row"><?php echo $row['hovaten'] ?></td>
            <td scope="row"><?php echo $row['chucvu'] ?></td>
            <td scope="row"><?php echo $row['phongban'] ?></td>
            <td scope="row"><?php echo $row['luong'] ?></td>
            <td scope="row"><?php echo $row['ngayvaolam'] ?></td>


            <td>
            <td><a href="sua.php?maNV=<?php echo $row['maNV']; ?>">Sửa</a></td>
            <td><a href="xoa.php?maNV=<?php echo $row['maNV']; ?>">Xóa</a></td>
            </td>

          </tr>
        </tbody>
      <?php
      } ?>
    </table>
    <center><a class="" href="them.php">Thêm nhân viên</a></center>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>