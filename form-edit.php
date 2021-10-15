<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-pegawai.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM data_pegawai WHERE id=$id";
$query = mysqli_query($db, $sql);
$pegawai = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit pegawai | SMK Coding</title>
</head>

<body>
    <header>
        <h3>Formulir Edit pegawai</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $pegawai['id'] ?>" />

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $pegawai['nama'] ?>" />
        </p>
        <p>
            <label for="alamat">alamat: </label>
            <textarea name="alamat"><?php echo $pegawai['pegawai'] ?></textarea>
        </p>
        <p>
            <label for="jurusan">jurusan: </label>
            <?php $jurusan = $pegawai['jurusan']; ?>
            <select name="jurusan">
                <option <?php echo ($jurusan == 'Sistem informasi') ? "selected": "" ?>>Sistem informasi</option>
                <option <?php echo ($jurusan == 'Teknik sipil') ? "selected": "" ?>>Teknik sipil</option>
                <option <?php echo ($jurusan == 'Bahasa indonesia') ? "selected": "" ?>>Bahasa indonesia</option>
                <option <?php echo ($jurusan == 'psikologi') ? "selected": "" ?>>psikologi</option>
                <option <?php echo ($jurusan == 'Bahasa inggris') ? "selected": "" ?>>Bahasa inggris</option>
            </select>
           
        </p>
        <p>
            <label for="agama">agama: </label>
            <?php $agama = $pegawai['agama']; ?>
            <select name="agama">
                <option <?php echo ($agama == 'Katolik') ? "selected": "" ?>>Katolik</option>
                <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                <option <?php echo ($agama == 'Protestan') ? "selected": "" ?>>Protestan</option>
                <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
            </select>
        </p>
        <p>
      
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>