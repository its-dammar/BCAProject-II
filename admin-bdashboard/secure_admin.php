<?php
if (isset($_SESSION['id'])) {
} else {
    echo header("Location: adminlogin.php?msg=invalid_session");
}
