<?php
include "../../config.php";

session_start();

if ($_SESSION['level'] != 'siswa')
    header('location:../../index.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
</style>

<body>
    <header>
        <a href="">Sistem Informasi Sekolah</a>
        <ul>
            <li><a href="">Home</a></li>
            <!-- <li><a href="guru.php">Data Guru</a></li> -->
            <li><a href="siswa.php">Data Siswa</a></li>
            <!-- <li><a href="">register</a></li> -->
            <li><a href="../../logout.php">logout</a></li>
        </ul>
    </header>
    <section>
        <h1>Selamat Datang
            <?php echo $_SESSION['username']; ?>
        </h1><br><br>

        <a>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur placeat perferendis dolorum itaque
            porro distinctio sed fugiat omnis, repudiandae tempore cupiditate dignissimos laudantium voluptas esse
            commodi vel, in, ut autem temporibus voluptatem. Distinctio nobis voluptates ab suscipit. Doloribus sequi
            itaque nam necessitatibus obcaecati. Quia deleniti quos suscipit, cum laborum ducimus eligendi repellendus
            fugiat sit enim voluptatum pariatur nam ratione unde dolorum quo ipsum dolores ea quae nesciunt saepe
            voluptatem! Animi nisi vero suscipit itaque sint architecto corrupti qui non molestias minima id, similique
            numquam sequi fugiat tempore atque laudantium. Ducimus autem cum expedita exercitationem explicabo eos
            laudantium consequuntur iusto sit?
        </a>
    </section>
</body>

</html>