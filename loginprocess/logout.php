<?php
session_start();
unset($_SESSION['id']);
unset($_SESSION['name']);
unset($_SESSION['email']);
unset($_SESSION['phone']);
unset($_SESSION['password']);

echo header("Location: ../index.php?msg=logout_success");
// echo "<meta http-equiv='refresh' content='0; URL=../index.php'>";
?>
