<?php
include "../../config.php";
session_start();

if ($_SESSION['level'] != 'superadmin')
    header('location:../../index.php');
$result = mysqli_query($conn, "SELECT * FROM siswa ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Data Guru</title>
</head>

<body>
    <header>
        <a href=""><img src="../../icon.png" alt="">&ensp;&ensp;&ensp;Sistem Informasi Sekolah</a>
        <ul>
            <li><a href="dashboard.php">Home</a></li>
            <li><a href="guru.php">Data Guru</a></li>
            <li><a href="siswa.php">Data Siswa</a></li>
            <li><a href="../../register.php">register</a></li>
            <li><a href="../../logout.php">logout</a></li>
        </ul>
    </header>
    <section>
        <a href="siswa/add.php" class="add">Tambah Data</a><br><br>
        <table border="1">
            <tr>
                <th>NIS</th>
                <th>nama</th>
                <th>agama</th>
                <th>jenis kelamin</th>
                <th>peringkat</th>
                <th>action</th>
            </tr>

            <?php
            while ($user_data = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $user_data['nis'] . "</td>";
                echo "<td>" . $user_data['nama'] . "</td>";
                echo "<td>" . $user_data['agama'] . "</td>";
                echo "<td>" . $user_data['jeniskelamin'] . "</td>";
                echo "<td>" . $user_data['peringkat'] . "</td>";
                echo "<td>";
                echo "<a href='siswa/edit.php?id=$user_data[id]' class='edit'>Edit</a>";
                echo "<a href='siswa/delete.php?id=$user_data[id]'class='delete'>Delete</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </section>
</body>

</html>