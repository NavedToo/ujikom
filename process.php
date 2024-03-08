<?php
include "config.php";

if (isset($_POST['register'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    $result = mysqli_query($conn, "INSERT INTO admins(id,username,password,level) VALUES(NULL,'$username','$password','$level');");

    if ($result) {
        header("location:index.php");
    }
}
?>