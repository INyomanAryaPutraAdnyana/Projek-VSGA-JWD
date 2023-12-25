<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Daftar</title>
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

    <div class="table">
        <h1>Formulir Pendaftaran Siswa Baru</h1>
        <table border="2" width="100%" cellspacing="0" style="background-color: white;">
            <tr>
                <td>
                    <form action="simpan.php" method="POST">

                        <label for="nama">Nama :</label>
                        <input type="text" name="nama" placeholder="nama lengkap" id="nama">
                        <br><br>

                        <label for="alamat">Alamat :</label>
                        <textarea name="alamat" rows="3" id="alamat"></textarea>
                        <br><br>

                        <label for="jk">Jenis Kelamin :</label>
                        <input type="radio" id="jk" name="jk" value="L">Laki-laki
                        <input type="radio" id="jk" name="jk" value="P">Perempuan
                        <br><br>

                        <label for="agama">Agama :</label>
                        <select name="agama" id="agama">
                            <option value="buddha">Buddha</option>
                            <option value="hindu">Hindu</option>
                            <option value="islam">Islam</option>
                            <option value="Konghucu">Konghucu</option>
                            <option value="kristen">Kristen </option>
                        </select>
                        <br><br>

                        <label for="nama">Sekolah Asal :</label>
                        <input type="text" name="sekolah" placeholder="nama sekolah" id="sekolah">
                        <br><br>
                        <input type="submit" value="Daftar" name="daftar" />
                    </form>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>