<?php
require('../../connection/config.php');
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $delete_query = "DELETE FROM admission_form WHERE id=$id";
    $delete_result = mysqli_query($conn, $delete_query);
    if($delete_result)
    {
        echo header("Location:../manageadform.php?msg=dadformsuccess");
    }
    else
    {
        echo header("Location: ../manageadform.php?msg=dadformerror");
    }

}
?>