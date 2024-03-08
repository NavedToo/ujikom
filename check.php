<?php
include_once("config.php");

session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    $login = mysqli_query($conn, "SELECT * FROM admins WHERE username='$username' AND password='$password'");
    $check = mysqli_num_rows($login);

    if ($login > 0) {
        $data = mysqli_fetch_assoc($login);

        if ($data['level'] == 'superadmin') {
            $_SESSION['username'] = $username;
            $_SESSION['level'] = 'superadmin';
            header("location:dashboard/superadmin/dashboard.php");
        } else if ($data['level'] == 'guru') {
            $_SESSION['username'] = $username;
            $_SESSION['level'] = 'guru';
            header("location:dashboard/guru/dashboard.php");
        } else if ($data['level'] == 'siswa') {
            $_SESSION['username'] = $username;
            $_SESSION['level'] = 'siswa';
            header("location:dashboard/siswa/dashboard.php");
        } else if ($data['level'] == 'admin') {
            $_SESSION['username'] = $username;
            $_SESSION['level'] = 'admin';
            header("location:dashboard/admin/dashboard.php");
        } else if ($data['level'] == 'staff') {
            $_SESSION['username'] = $username;
            $_SESSION['level'] = 'staff';
            header("location:dashboard/staff/dashboard.php");
        } else if ($data['level'] == 'orangtua') {
            $_SESSION['username'] = $username;
            $_SESSION['level'] = 'orangtua';
            header("location:dashboard/orangtua/dashboard.php");
        } else {
            header("location:index.php");
        }
    } else {
        header("location:index.php");
    }
}
?>