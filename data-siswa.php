<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
    <style>
        body {
            background-color: burlywood;
        }
    </style>
</head>

<body>
    <h2>Siswa yang sudah mendaftar</h2>
    <a href="form-daftar.php">[+] Tambah Data</a>
    <br><br>
    <table border="1">
        <tr style="background-color: grey;">
            <td> <b>No </td>
            <td> <b>Nama </td>
            <td><b>Alamat</td>
            <td><b>Jenis Kelamin</td>
            <td><b>Agama</td>
            <td><b>Sekolah Asal</td>
            <td><b>Action</b></td>
        </tr>
        <?php
        include('koneksi.php');
        $sql = "SELECT `no`,`nama`,`alamat`,`jk`,`agama`,`sekolah`FROM `siswa`";

        $hasil_query = mysqli_query($koneksi, $sql);
        while ($data = mysqli_fetch_array($hasil_query)) {
            $jk = "Laki-Laki";
            if ($data['jk'] == 'P') {
                $jk = "Perempuan";
            }
        ?>

            <tr style="background-color: white;">
                <td><?php echo $data['no']; ?> </td>
                <td><?php echo $data['nama']; ?> </td>
                <td><?php echo $data['alamat']; ?> </td>
                <td><?php echo $jk; ?></td>
                <td><?php echo $data['agama']; ?></td>
                <td><?php echo $data['sekolah']; ?></td>
                <td> <a href="formedit_registrasi.php?no=<?php echo $data['no']; ?>"> <img src="assets//edit.png" alt="edit" height="20">Edit</a> |
                    <a href="hapus_data.php?no=<?php echo $data['no']; ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini ?')"> <img src="assets//delete.png" alt="delete" height="20">Delete</a>

                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <br><br>
    <?php
    // mengambil data barang
    $data_siswa = mysqli_query($koneksi, "SELECT * FROM siswa");

    // menghitung data barang
    $jumlah_data = mysqli_num_rows($data_siswa);
    ?>

    <p>Total : <?php echo $jumlah_data; ?></p>

</body>

</html>