<?php
include "../../../config.php";

$agama = mysqli_query($conn, "SELECT * FROM agama");

if (isset($_POST['add'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $agama = $_POST['agama'];
    $jenisKelamin = $_POST['jenisKelamin'];
    $peringkat = $_POST['peringkat'];


    $result = mysqli_query($conn, "INSERT INTO `siswa` (`id`, `nis`, `nama`, `agama`, `jenisKelamin`,`peringkat` ) VALUES (NULL, '$nis', '$nama', '$agama', '$jenisKelamin','$peringkat' );");

    if ($result) {
        header("location:../siswa.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Siswa</title>
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
        font-size: 30px;
        margin-bottom: 20px;
    }
</style>

<body>
    <header>
        <a href="">Sistem Informasi Sekolah</a>
        <ul>
            <li><a href="../dashboard.php">Home</a></li>
            <li><a href="../guru.php">Data Guru</a></li>
            <!-- <li><a href="../siswa.php">Data Siswa</a></li> -->
            <!-- <li><a href="">register</a></li> -->
            <li><a href="../../../logout.php">logout</a></li>
        </ul>
    </header>

    <section class="add">
        <h1>Tambah Data Siswa</h1>
        <form action="add.php" method="post" autocomplete="off"><br>
            <label for="nip">NIS</label><br>
            <input type="text" name="nis" id="nis" placeholder="NIS"><br>
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
            <label for="jenisKelamin">Jenis Kelamin</label><br>
            <select name="jenisKelamin" id="jenisKelamin">
                <option>--Pilih--</option>
                <option>Laki-Laki</option>
                <option>Perempuan</option>
            </select><br>
            <label for="peringkat">Peringkat</label><br>
            <input type="text" name="peringkat" id="peringkat" placeholder="peringkat"><br>
            <input type="submit" name="add" id="add" value="add">
        </form>
    </section>
</body>

</html>