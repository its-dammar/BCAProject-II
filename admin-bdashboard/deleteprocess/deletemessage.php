<?php
require('../../connection/config.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM message WHERE id=$id";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo header("Location: ../managemessage.php?msg=dsucess");
    } else {
        echo header("Location: ../managemessage.php?msg=derror");
    }
}
