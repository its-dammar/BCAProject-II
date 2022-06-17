<?php
require('../../connection/config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM blogs WHERE id=$id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo header("Location: ../manageblogs.php?msg=dsuccess");
    } else {
        echo header("Location: ../manageblogs.php?msg=derror");
    }
}
