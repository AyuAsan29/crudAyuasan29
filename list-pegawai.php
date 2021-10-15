<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran pegawai Baru</title>
</head>

<body>
    <header>
        <h3>pegawai yang sudah mendaftar</h3>
    </header>

    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>Nama</th>
            <th>alamat</th>
            <th>jurusan</th>
            <th>agama</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM data_pegawai";
        $query = mysqli_query($db, $sql);

        while($pegawai = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$pegawai['nama']."</td>";
            echo "<td>".$pegawai['alamat']."</td>";
            echo "<td>".$pegawai['jurusan']."</td>";
            echo "<td>".$pegawai['agama']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$pegawai['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$pegawai['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>