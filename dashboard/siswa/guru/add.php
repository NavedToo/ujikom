<?php
include "../../../config.php";

$agama = mysqli_query($conn, "SELECT * FROM agama");

if (isset($_POST['add'])) {
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $agama = $_POST['agama'];
    $mapel = $_POST['mapel'];
    $jenisKelamin = $_POST['jenisKelamin'];

    $result = mysqli_query($conn, "INSERT INTO `guru` (`id`, `nip`, `nama`, `agama`, `mapel`, `jenisKelamin`) VALUES (NULL, '$nip', '$nama', '$agama', '$mapel', '$jenisKelamin');");

    if ($result) {
        header("location:../guru.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Guru</title>
</head>
<style>
    * {
        list-style: none;
        margin: 0;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
    }

    header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: black;
        padding: 20px;
        text-transform: uppercase;
    }

    header a {
        text-decoration: none;
        color: white;

    }

    header ul {
        display: flex;
    }

    header ul a {
        padding: 20px;
    }

    section {
        width: 400px;
        background: black;
        color: white;
        position: absolute;
        top: 55%;
        left: 50%;
        border-radius: 10px;
        padding: 20px;
        transform: translate(-50%, -55%);
    }

    input[type='text'],
    [type='password'],
    select {
        margin-bottom: 20px;
        padding: 10px;
        width: 100%;
        border: none;
        outline: 0;
        border-radius: 5px;
    }

    input[type='submit'] {
        cursor: pointer;
        border: none;
        outline: 0;
        background: white;
        color: black;
        text-transform: uppercase;
        padding: 10px 20px 10px 20px;
        border-radius: 5px;
        margin-bottom: 5px;
    }

    input[type='submit']:hover {
        border: none;
        background: grey;
        color: black;
        text-transform: uppercase;
    }

    h1 {
        font-size: 40px;
        margin-bottom: 20px;
    }
</style>

<body>
    <header>
        <a href="">Sistem Informasi Sekolah</a>
        <ul>
            <li><a href="../dashboard.php">Home</a></li>
            <li><a href="../guru.php">Data Guru</a></li>
            <li><a href="../siswa.php">Data Siswa</a></li>
            <!-- <li><a href="">register</a></li> -->
            <li><a href="../../../logout.php">logout</a></li>
        </ul>
    </header>

    <section class="add">
        <h1>Tambah Data Guru</h1>
        <form action="add.php" method="post" autocomplete="off">
            <label for="nip">NIP</label><br>
            <input type="text" name="nip" id="nip" placeholder="NIP"><br>
            <label for="nama">Nama</label><br>
            <input type="text" name="nama" id="nama" placeholder="nama"><br>
            <label for="agama">Agama</label><br>
            <select name="agama" id="agama">
                <?php
                while ($user_data = mysqli_fetch_array($agama)) {
                    echo "<option>" . $user_data['nama'] . "</option>";
                }
                ?>
            </select><br>
            <label for="mapel">Mata Pelajaran</label><br>
            <input type="text" name="mapel" id="mapel" placeholder="mapel"><br>
            <label for="jenisKelamin">Jenis Kelamin</label><br>
            <select name="jenisKelamin" id="jenisKelamin">
                <option>--Pilih--</option>
                <option>Laki-Laki</option>
                <option>Perempuan</option>
            </select><br>
            <input type="submit" name="add" id="add" value="add">
        </form>
    </section>
</body>

</html>