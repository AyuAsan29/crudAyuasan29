<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran pegawai Baru </title>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran pegawai Baru</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="Nama lengkap" />
        </p>
        <p>
            <label for="alamat">alamat: </label>
            <input type="text" name="alamat" placeholder="Masukkan alamat" />
        </p>
        <p>
            <label for="jurusan">jurusan: </label>
            <select name="jurusan">
                <option>informatika</option>
                <option>teknik sipil</option>
                <option>Bahasa indonesia</option>
                <option>psikologi</option>
                <option>Bahasa inggris</option>
            </select>
            
        </p>
        <p>
            <label for="agama">agama: </label>
            <select name="agama">
                <option>Katolik</option>
                <option>Islam</option>
                <option>Protestan</option>
                <option>Hindu</option>
                <option>Budha</option>
            </select>
        
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>