<?php
 session_start();
 if(isset($_SESSION['id']))
 {
    require('secure_admin.php'); 
 }

?>

<div class="navbar-section" style="z-index:3;">
    <nav class="container-fluid navbar navbar-expand-lg navbar-dark" style="z-index:3; background-color:#444">
        <div class="container-fluid">
            <!-- side toggle -->
            <!-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
            <span class="navbar-toggler-icon"></span> -->
            </button>
            <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
                id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">
                        XDpage
                    </h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <a href="index.php" class="nav-link">Home</a>
                    <a href="aboutus.php" class="nav-link">About Us</a>
                    <a href="services.php" class="nav-link">Services</a>
                    <a href="products.php" class="nav-link">Products</a>
                    <a href="events.php" class="nav-link">Events</a>
                    <a href="offers.php" class="nav-link">Offers</a>
                    <a href="testimonials.php" class="nav-link">Testimonials</a>
                    <a href="reviews.php" class="nav-link">Reviews</a>
                    <a href="vacancy.php" class="nav-link">Vacancy</a>
                    <a href="blog.php" class="nav-link">Blogs</a>
                    <a href="gallery.php" class="nav-link">Gallery</a>
                    <a href="teams.php" class="nav-link">Teams</a>
                    <a href="contact.php" class="nav-link">Contact</a>
                </div>
            </div>
            <!-- side toggle -->
            <a class="navbar-brand p-2" href="index.php">
                <img class="ttr-logo-desktop" alt="" src="uploads/logoblue.png" width="160" height="27">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white fs-3" aria-current="page" href="#">
                        </a>
                    </li>
                </ul>
                <div class="d-flex">
                    <!-- <a class="nav-link text-white fs-5 btn-outline-warning" href="user-login.php"> -->
                 <?php
                    if(isset($_SESSION["email"]) == true){
                        echo ' <a class="nav-link text-white fs-5 btn-outline-warning" href="add-business.php">+ Add Business</a>';
                    } else{
                        echo '<a class="nav-link text-white fs-5 btn-outline-warning" href="user-login.php">+ Add Business</a>';
                    }
                 ?>  
                 <?php
                    if(isset($_SESSION["email"]) != true){
                        echo "<a class='nav-link text-white fs-5 btn-outline-warning' href='user-signup.php'>Signup </a>";
                    }
                     else {
                     }
                    ?>
                   
                    <?php
                    if(isset($_SESSION["email"]) != true){
                        echo ' <a class="nav-link text-white fs-5 btn-outline-warning" href="user-login.php">Login</a>';
                    }
                     else {
                    ?>
                    <div class="dropdown px-3">
                        <a class="nav-link text-white fs-5 btn-outline-warning dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <?php if (isset($_SESSION['name'])) {
                                 $id = $_SESSION['id'];
                                 $show_query = "SELECT * FROM users WHERE id=$id";
                                 $show_result = mysqli_query($conn, $show_query);
                                 $show_row = $show_result->fetch_assoc();
                                // echo $_SESSION['name'];
                                echo "<i class='fa-solid fa-user' title='". $_SESSION['name']."'></i>";
                                } 
                                ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="user-profile.php">profile</a></li>
                            <li><a class="dropdown-item" href="your-listing.php">Your Listing</a></li>
                            <li><a class="dropdown-item" href="add-business.php">Add Business</a></li>
                            <li><a class="dropdown-item" href="loginprocess/logout.php">Logout</a></li>
                        </ul>
                    </div>
                    <?php 
                } 
                ?>
                </div>
            </div>
        </div>
    </nav>
</div>