<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "data_siswa";

$koneksi = mysqli_connect($host, $username, $password, $database);
if (mysqli_connect_error()) {
    echo "Koneksi ke server Gagal!!!";
}
