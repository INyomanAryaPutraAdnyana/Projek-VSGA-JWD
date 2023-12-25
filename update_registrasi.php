<?php

include("koneksi.php");

$no = $_POST['no'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$sekolah = $_POST['sekolah'];

// buat query
$sql = "UPDATE `siswa` SET `nama` = '" . $nama . "', `alamat` = '" . $alamat . "', `jk` = '" . $jk . "', `agama` = '" . $agama . "', `sekolah` = '" . $sekolah . "' WHERE `no` = '" . $no . "'";
$query = mysqli_query($koneksi, $sql);
?>
<script type="text/javascript">
    alert("Data Berhasil diedit !")
    window.open("data-siswa.php", "_self")
</script>