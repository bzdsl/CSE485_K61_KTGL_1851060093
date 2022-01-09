<?php
include 'config.php';
if (isset($_REQUEST['maNV']) and $_REQUEST['maNV'] != "") {
    $idkhach = $_GET['maNV'];
    $sql = "DELETE FROM nhanvien WHERE maNV='$idkhach'";
    if ($conn->query($sql) === TRUE) {
        header('location: index.php');
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
