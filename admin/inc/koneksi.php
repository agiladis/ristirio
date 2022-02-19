<?php
$database_koneksi = "db_ristirio";
$host_koneksi = "localhost";
$username_koneksi = "root";
$password_koneksi = "";

$koneksi = mysqli_connect($host_koneksi, $username_koneksi, $password_koneksi) or die(mysqli_error($host_koneksi, $username_koneksi, $password_koneksi));
if ($koneksi) {
    //buka database kalian
    mysqli_select_db($koneksi, $database_koneksi);
} else {
    //tutup koneksi
    mysqli_close($koneksi);
}
