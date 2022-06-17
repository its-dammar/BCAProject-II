<?php

require('../../connection/config.php');
$id = $_GET['id'];


$q = "SELECT filelink FROM filemanager WHERE id=$id";
$r = mysqli_query($conn, $q) or die(mysqli_error($conn));
$row = $r->fetch_assoc();
$filelink = $row["filelink"];

$filedel = "../../uploads/" . $filelink;

unlink($filedel);

$query = "DELETE FROM filemanager WHERE id=$id";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
if ($result) {
    echo header("Location: ../managefile.php?msg=dsuccess");
} else {
    echo header("Location: ../managefile.php?msg=derror");
}
