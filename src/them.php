<?php
include 'config.php';


$errors = array(); // Initialize an error array. 

if (isset($_POST['update_user'])) {
    $hovaten = $_POST['hovaten'];
    $chucvu = $_POST['chucvu'];
    $phongban = $_POST['phongban'];
    $luong = $_POST['luong'];
    $sql = "insert into `nhanvien` (hovaten,chucvu,phongban,luong) VALUES ('$hovaten','$chucvu','$phongban','$luong')";
    //#4
    mysqli_query($conn, $sql);

    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <style>
        h2.header {
            width: 100%;
            color: #e9558b;
            font-size: 50px;
            margin: 60px auto 20px;
            text-align: center;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <title>Thêm</title>
</head>

<body>
    <div>
        <div>
            <form class="container" method="POST" class="form" id="form-1">
                <center>
                    <div class="mb-3">

                        <label class="form-message"></label>
                        <div class="cauhoi">
                            <br>


                            <div class="mb-3">
                                <label for="hovaten" class="form-label">Họ và tên</label>
                                <input type="text" class="form-control" id="hovaten" placeholder="Họ và tên">
                            </div>
                            <div class="mb-3">
                                <label for="phongban" class="form-label">Phòng ban</label>
                                <input type="text" class="form-control" id="hovaten" placeholder="Phòng ban">
                            </div>
                            <div class="mb-3">
                                <label for="chucvu" class="form-label">Chức vụ</label>
                                <input type="text" class="form-control" id="hovaten" placeholder="Chức vụ">
                            </div>
                            <div class="mb-3">
                                <label for="luong" class="form-label">Lương</label>
                                <input type="text" class="form-control" id="luong" placeholder="Lương">
                            </div>
                            <br>

                        </div>
                    </div>
                    <div class="footer">
                        <div class="footer_l">
                            <button name="update_user" class="btn btn-primary" style="width:100; font-size: 20px;">Thêm</button>
                        </div>
                    </div>
                </center>
            </form>
        </div>
    </div>
</body>

</html>