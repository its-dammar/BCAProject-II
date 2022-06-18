<?php 
require('../../connection/config.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM teachers WHERE id=$id";
    $result = mysqli_query($conn, $query);

    if($result){
        echo header("Location: ../manageteachers.php?msg=dsuccess");
    } else{
        echo header("Location: ../managerteachers.php?msg=derror");
    }
}
?>