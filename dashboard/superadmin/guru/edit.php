<?php
include_once('../../../config.php');

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $agama = $_POST['agama'];
    $mapel = $_POST['mapel'];
    $jenisKelamin = $_POST['jenisKelamin'];

    $result = mysqli_query($conn, "UPDATE guru SET nip='$nip', nama='$nama', agama='$agama', mapel='$mapel', jenisKelamin='$jenisKelamin' WHERE guru.id=$id");

    if ($result) {
        header('location:../guru.php');
    }
}
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM guru WHERE id");

while ($user_data = mysqli_fetch_array($result)) {
    $nip = $user_data['nip'];
    $nama = $user_data['nama'];
    $agama = $user_data['agama'];
    $mapel = $user_data['mapel'];
    $jenisKelamin = $user_data['jenisKelamin'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Guru</title>
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
            <li><a href="">Home</a></li>
            <li><a href="../guru.php">Data Guru</a></li>
            <li><a href="">Data Siswa</a></li>
            <!-- <li><a href="">register</a></li> -->
            <li><a href="../../../logout.php">logout</a></li>
        </ul>
    </header>
    <section>
        <h1>Edit Data Guru</h1>
        <form action="edit.php" method="post" autocomplete="off">
            <input type="text" name="nip" id="nip" value="<?php $nip; ?>" placeholder="Masukkan NIP">
            <input type="text" name="nama" id="nama" value="<?php $nama; ?>" placeholder="Masukkan Nama">
            <!-- <input type="text" name="agama" id="agama" value="<?php
            // echo $agama; 
            ?>"> -->
            <select name="agama" id="agama">
                <option>--Pilih--</option>
                <option>Buddha</option>
                <option>Hindu</option>
                <option>Islam</option>
                <option>Kristen Katolik</option>
                <option>Kristen Protestan</option>
                <option>Konghuchu</option>
            </select>
            <input type="text" name="mapel" id="mapel" value="<?php $mapel; ?>" placeholder="Masukkan Mata Pelajaran">
            <!-- <input type="text" name="jenisKelamin" id="jenisKelamin" value="<?php
            // echo $jenisKelamin;
            ?>"> -->
            <select name="jenisKelamin" id="jenisKelamin">
                <option>--Pilih--</option>
                <option>Laki-laki</option>
                <option>Perempuan</option>
            </select>
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
            <input type="submit" name="edit" id="edit" value="edit">
        </form>
    </section>
</body>

</html>