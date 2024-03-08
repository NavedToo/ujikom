<?php
include "../../config.php";
session_start();

if ($_SESSION['level'] != 'admin')
    header('location:../../index.php');
$result = mysqli_query($conn, "SELECT * FROM guru ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Guru</title>
</head>
<style>
    * {
        list-style: none;
        margin: 0;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
    }

    body {
        background: gainsboro;
        background-repeat: no-repeat;
        background-size: cover;
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

    table {
        border: solid 1px;
        border-collapse: collapse;
    }

    table th {
        text-transform: uppercase;
        width: 1200px;
        background: black;
        color: white;
    }

    table td {
        padding: 12px;
        background: white;
        color: black;
        font-size: 15px;
    }

    section {
        width: 1200px;
        height: 400px;
        background: white;
        color: black;
        position: absolute;
        top: 50%;
        left: 50%;
        border-radius: 10px;
        padding: 20px;
        transform: translate(-50%, -55%);
    }

    .edit {
        background: blue;
        padding: 5px 10px 5px 10px;
        border-radius: 5px;
        text-decoration: none;
        color: white;
    }

    .edit:hover {
        background: darkblue;
    }

    .delete {
        background: red;
        padding: 5px 10px 5px 10px;
        border-radius: 5px;
        text-decoration: none;
        color: white;
    }

    .delete:hover {
        background: darkred;
    }

    .add {
        text-decoration: none;
        background: greenyellow;
        color: black;
        padding: 10px 20px 10px 20px;
        margin-bottom: 0px;
        border-radius: 5px;
    }

    .add:hover {
        background: green;
        color: white;
    }
</style>

<body>
    <header>
        <a href="">Sistem Informasi Sekolah</a>
        <ul>
            <li><a href="dashboard.php">Home</a></li>
            <li><a href="guru.php">Data Guru</a></li>
            <!-- <li><a href="siswa.php">Data Siswa</a></li> -->
            <!-- <li><a href="">register</a></li> -->
            <li><a href="../../logout.php">logout</a></li>
        </ul>
    </header>
    <section>
        <a href="guru/add.php" class="add">Tambah Data</a><br><br>
        <table border="1">
            <tr>
                <th>NIP</th>
                <th>nama</th>
                <th>agama</th>
                <th>mapel</th>
                <th>jenis kelamin</th>
                <th>action</th>
            </tr>

            <?php
            while ($user_data = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $user_data['nip'] . "</td>";
                echo "<td>" . $user_data['nama'] . "</td>";
                echo "<td>" . $user_data['agama'] . "</td>";
                echo "<td>" . $user_data['mapel'] . "</td>";
                echo "<td>" . $user_data['jenisKelamin'] . "</td>";
                echo "<td>";
                echo "<a href='guru/edit.php?id=$user_data[id]' class='edit'>Edit</a>";
                echo "<a href='guru/delete.php?id=$user_data[id]' class='delete'>Delete</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </section>
</body>

</html>