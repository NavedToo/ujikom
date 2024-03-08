<?php
include "../../../config.php";

$id = $_GET['id'];
$result = mysqli_query($conn, "DELETE FROM `guru` WHERE `guru`.`id` = $id;");

if ($result) {
    header("location:../guru.php");
}
?>