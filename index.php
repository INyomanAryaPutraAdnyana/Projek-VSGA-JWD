<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {

            background-color: burlywood;
        }
    </style>
</head>

<body>
    <h1>Pendaftaran Siswa Baru</h1>
    <h1>Digital Talent</h1>

    <p> <b> Menu </b></p>

    <nav>

        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="data-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>

    <?php if (isset($_GET['status'])) : ?>
        <p>
            <?php
            if ($_GET['status'] == 'sukses') {
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
            ?>
        </p>
    <?php endif; ?>

</body>

</html>