<?php
require('../../connection/config.php');
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $query = "DELETE FROM contact_content WHERE id=$id";
    $result = mysqli_query($conn,$query);
    if($result)
    {
        echo header("Location: ../managecontactscontent.php?msg=dsuccess");
    }
    else 
    {
        echo header("Location: ../managecontactsconten.php?msg=derror");
    }
} 
?>