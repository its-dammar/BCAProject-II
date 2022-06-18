<?php

require('../../connection/config.php');
$id = $_GET['id'];


$q = "SELECT filelink FROM newmanager WHERE id=$id";
$r = mysqli_query($conn, $q) or die(mysqli_error($conn));
$row = $r->fetch_assoc();
$filelink = $row["filelink"];

$filedel = "../../files/" . $filelink;

unlink($filedel);

$query = "DELETE FROM newmanager WHERE id=$id";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
if ($result) {
    echo header("Location: ../managenewfile.php?msg=dsuccess");
} else {
    echo header("Location: ../managenewfile.php?msg=derror");
}
