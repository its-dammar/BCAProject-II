<?php
require('../../connection/config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM course WHERE id=$id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo header("Location: ../managecourse.php?msg=dsuccess");
    } else {
        echo header("Location: ../managecourse.php?msg=derror");
    }
}
