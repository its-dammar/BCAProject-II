<?php require('../connection/config.php');
session_start();
require('secure_admin.php'); ?>

<!DOCTYPE html>
<html lang="en">

<?php
$config_query = "SELECT * FROM siteconfig";
$config_result = mysqli_query($conn, $config_query);
$data1 = $config_result->fetch_assoc();
?>

<head>

    <!-- META ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />

    <!-- DESCRIPTION -->
    <meta name="description" content="EduChamp : Education HTML Template" />

    <!-- OG -->
    <meta property="og:title" content="EduChamp : Education HTML Template" />
    <meta property="og:description" content="EduChamp : Education HTML Template" />
    <meta property="og:image" content="" />
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON ============================================= -->
    <!-- <link rel="icon" href="../error-404.html" type="image/x-icon" /> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo "../uploads/" . $data1['favicon']; ?>" />

    <!-- PAGE TITLE HERE ============================================= -->
    <title><?php echo $data1['heading'] ?></title>

    <!-- MOBILE SPECIFIC ============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

    <!-- All PLUGINS CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="assets/css/assets.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/calendar/fullcalendar.css">

    <!-- TYPOGRAPHY ============================================= -->
    <link rel="stylesheet" type="text/css" href="assets/css/typography.css">

    <!-- SHORTCODES ============================================= -->
    <link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">

    <!-- STYLESHEETS ============================================= -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/dashboard.css">
    <link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">

    <!-- STYLESHEETS ============================================= -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>

</head>

<body class="ttr-opened-sidebar ttr-pinned-sidebar">

    <!-- header start -->
    <header class="ttr-header">
        <div class="ttr-header-wrapper">
            <!--sidebar menu toggler start -->
            <div class="ttr-toggle-sidebar ttr-material-button">
                <i class="ti-close ttr-open-icon"></i>
                <i class="ti-menu ttr-close-icon"></i>
            </div>
            <!--sidebar menu toggler end -->
            <!--logo start -->
            <div class="ttr-logo-box">
                <div>
                    <a href="index.php" class="ttr-logo">
                        
                        <!-- <img class="ttr-logo-mobile" alt="" src="assets/images/bls-logopng.png" width="30" height="30">
                        <img class="ttr-logo-desktop" alt="" src="assets/images/logoblue.png" width="160" height="27"> -->
                    </a>
                </div>
            </div>
            <!--logo end -->
            <div class="ttr-header-menu">
                <!-- header left menu start -->
                <ul class="ttr-header-navigation">
                    <li>
                        <a href="index.php" class="ttr-material-button ttr-submenu-toggle" style="font-size:30px">LGIC</a>
                    </li>
                    <li>
                        <a href="index.php" class="ttr-material-button ttr-submenu-toggle">HOME</a>
                    </li>
                   
                </ul>
                <!-- header left menu end -->
            </div>
            <div class="ttr-header-right ttr-with-seperator">
                <!-- header right menu start -->
                <ul class="ttr-header-navigation">
                <li>
                        <a href="#" class="ttr-material-button ttr-submenu-toggle">Setting <i
                                class="fa fa-angle-down"></i></a>
                        <div class="ttr-header-submenu">
                            <ul>
                                <!-- <li><a href="manageadmin.php">Admin</a></li>
                                <li><a href="manageuser.php">User</a></li> -->
                                <li><a href="adduser.php">User</a></li> 
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="ttr-material-button ttr-search-toggle"><i class="fa fa-search"></i></a>
                    </li>

                    <li>
                        <a href="#" class="ttr-material-button ttr-submenu-toggle text-white">
                            <?php if (isset($_SESSION['name'])) {
                                echo "<i class='ti-user' style='font-size:20px;' title='". $_SESSION['email']."'></i>";
                                // echo $_SESSION['name'];
                                } ?>
                        </a>
                        <div class="ttr-header-submenu">
                            <ul>
                                <li><a href="editadmin.php">My profile</a></li>
                                <li><a href="loginprocess/adminlogout.php">Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <!-- header right menu end -->
            </div>
            <!--header search panel start -->
            <div class="ttr-search-bar">
                <form class="ttr-search-form">
                    <div class="ttr-search-input-wrapper">
                        <input type="text" name="qq" placeholder="search something..." class="ttr-search-input">
                        <button type="submit" name="search" class="ttr-search-submit"><i
                                class="ti-arrow-right"></i></button>
                    </div>
                    <span class="ttr-search-close ttr-search-toggle">
                        <i class="ti-close"></i>
                    </span>
                </form>
            </div>
            <!--header search panel end -->
        </div>
    </header>
    <!-- header end -->