<?php
$no = $_GET['no'];

include "koneksi.php";
$hapus = "DELETE  FROM `siswa` WHERE `no`='" . $no . "'";
mysqli_query($koneksi, $hapus);
?>
<script type="text/javascript">
    alert("Data Berhasil di Hapus !!");
    window.open("data-siswa.php", "_self");
</script>