<?php
require('../../connection/config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM course_category WHERE category_id=$id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo header("Location: ../managecoursecategory.php?msg=dsuccess");
    } else {
        echo header("Location: ../managecoursecategory.php?msg=derror");
    }
}
