<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit</title>
    <style>
        body {
            background-color: burlywood;
        }

        form {
            border: 10px;
            font-size: 22px;
            padding: 20px;
        }
    </style>

</head>

<body>
    <?php
    include('koneksi.php');
    $sql = "SELECT * FROM `siswa` WHERE `no`='" . $_GET['no'] . "'";
    $hasil_query = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_array($hasil_query);
    ?>

    <div class="table">
        <h1>Formulir Edit Siswa </h1>
        <table border="2" width="100%" cellspacing="0" style="background-color: white;">
            <tr>
                <td>
                    <form action="update_registrasi.php" method="POST">
                        <input type="hidden" name="no" id="no" value="<?php echo $data['no']; ?>">
                        <label for="nama">Nama :</label>
                        <input type="text" name="nama" placeholder="nama lengkap" id="nama" value="<?php echo $data['nama']; ?>">
                        <br><br>

                        <label for="alamat">Alamat :</label>
                        <textarea name="alamat" rows="3" id="alamat"><?php echo $data['alamat']; ?></textarea>
                        <br><br>

                        <label for="jk">Jenis Kelamin :</label>
                        <?php
                        if ($data['jk'] == 'L') {
                        ?>
                            <input type="radio" id="jk" name="jk" value="L" checked="checked">Laki-laki
                            <input type="radio" id="jk" name="jk" value="P">Perempuan
                        <?php

                        } else {
                        ?>
                            <input type="radio" id="jk" name="jk" value="L">Laki-laki
                            <input type="radio" id="jk" name="jk" value="P" checked="checked">Perempuan
                        <?php
                        }
                        ?>
                        <br><br>

                        <label for="agama">Agama :</label>
                        <?php $agama = $data['agama']; ?>
                        <select name="agama">
                            <option <?php echo ($agama == 'islam') ? "selected" : "" ?>>Islam</option>
                            <option <?php echo ($agama == 'kristen') ? "selected" : "" ?>>Kristen</option>
                            <option <?php echo ($agama == 'hindu') ? "selected" : "" ?>>Hindu</option>
                            <option <?php echo ($agama == 'buddha') ? "selected" : "" ?>>Budha</option>
                            <option <?php echo ($agama == 'Konghucu') ? "selected" : "" ?>>Koghucu</option>
                        </select>
                        <br><br>

                        <label for="nama">Sekolah Asal :</label>
                        <input type="text" name="sekolah" placeholder="nama sekolah" id="sekolah" value="<?php echo $data['sekolah']; ?>">
                        <br><br>
                        <input type="submit" value="Simpan" name="simpan" />
                    </form>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>