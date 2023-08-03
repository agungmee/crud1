<?php

include('db_connect.php');

$id = $_GET['id'];
$query = "DELETE FROM jabatan_karyawan WHERE id = '$id'";

if ($connection->query($query)) {
    header("Location: index.php");
} else {
    echo "Data Gagal Dihapus";
}


?>