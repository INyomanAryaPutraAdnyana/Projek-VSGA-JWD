<?php
include "koneksi.php";

if (isset($_POST['daftar'])) {
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah'];


    $simpan = "
INSERT INTO `siswa` (`no`, `nama`,  `alamat`,`jk`, `agama`, `sekolah`)
VALUES ('" . $no . "', '" . $nama . "', '" . $alamat . "', '" . $jk . "', '" . $agama . "', '" . $sekolah . "');
";

    $query = mysqli_query($koneksi, $simpan);


    // apakah query simpan berhasil?
    if ($query) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
