<?php

include('db_connect.php');

$id_karyawan = $_POST['id'];
$user_email = $_POST['user_email'];
$user_jabatan = $_POST['user_jabatan'];

$query = "UPDATE jabatan_karyawan SET user_email = '$user_email', user_jabatan = '$user_jabatan' WHERE id = '$id_karyawan'";

if ($connection->query($query)) {
    header("Location: index.php");
} else {
    echo "Data Gagal Di Update";
}

?>