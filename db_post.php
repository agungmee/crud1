<?php

require_once('db_connect.php');

$user_email = $_POST['user_email'];
$user_jabatan = $_POST['user_jabatan'];

$query = "INSERT INTO jabatan_karyawan (user_email, user_jabatan) VALUES ('$user_email', '$user_jabatan')";

if($connection->query($query)) {
    header("location: index.php");
} else {
    echo "Data Gagal Disubmit";
}
