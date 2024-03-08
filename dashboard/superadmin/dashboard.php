<?php
include "../../config.php";

session_start();

if ($_SESSION['level'] != 'superadmin')
    header('location:../../index.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
</head>

<body>
    <header>

        <a href=""><img src="../../icon.png" alt="">&ensp;&ensp;&ensp;Sistem Informasi Sekolah</a>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="guru.php">Data Guru</a></li>
            <li><a href="siswa.php">Data Siswa</a></li>
            <li><a href="../../register.php">register</a></li>
            <li><a href="../../logout.php">logout</a></li>
        </ul>
    </header>
    <section>
        <h1>Selamat Datang
            <?php echo $_SESSION['username']; ?>
        </h1><br><br>

        <div class="dbrd"><img src="../../dbrd.png" alt=""><a>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Maxime,
                dolore
                similique consequatur error nulla voluptatem, tempore sapiente tempora et quae, doloremque ut.
                Praesentium
                voluptatem, numquam doloribus sunt magnam corrupti fugit saepe explicabo nulla veritatis sapiente, harum
                illo cum in hic. Fuga laboriosam ab ipsam id libero, dolore unde numquam facilis, praesentium magnam
                laudantium voluptatem quia eum voluptatibus nemo aliquam ut voluptates quas adipisci. Porro hic odit
                quos
                quam, ad reiciendis nemo animi voluptates atque amet ducimus sunt rerum cum ipsum repellendus
                accusantium
                cupiditate tempora. Praesentium voluptatum ipsa sequi incidunt, alias autem, voluptate illum natus vero
                id
                cupiditate quia porro laboriosam!</a>
        </div>
    </section>
</body>

</html>