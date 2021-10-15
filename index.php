<!DOCTYPE html>
<html>
<head>
    <title>pegawai</title>
</head>

<body>
    <header>
        <h3>pegawai</h3>
    </header>

    <h4>MENU</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar pegawai</a></li>
            <li><a href="list-pegawai.php">daftar</a></li>
        </ul>
    </nav>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran pegawai baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>

    </body>
</html>