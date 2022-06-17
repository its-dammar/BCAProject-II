<?php
require('../../connection/config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM counter WHERE id=$id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo header("Location: ../managecounter.php?msg=dsuccess");
    } else {
        echo header("Location: ../managecounter.php?msg=derror");
    }
}
