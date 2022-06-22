<?php include("inc/header.php") ;?>

<body class="" style="background-color:#A1A1A1">

    <?php include("inc/navbar.php") ;?>

    <section class="m-5">
        <div class="container col-sm-6 col-md-8 xm-auto bg-dark p-5 signup">
            <div class="row pb-3">
                <div class=" col-md-6 d-flex justify-content-start text-white">
                    <h2>Your Profile</h2>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <?php if (isset($_SESSION['name'])) {
                        // echo $_SESSION['name'];
                        $id = $_SESSION['id'];
                        $show_query = "SELECT * FROM users WHERE id=$id";
                        $show_result = mysqli_query($conn, $show_query);
                        $show_row = $show_result->fetch_assoc();
                        echo "<div class='d-block'>";
                        echo "<div>";
                            echo " <a href='user-profile.php'class='text-white text-center'>
                            <i class='fa-solid fa-user text-decoration-none text-center text-white'title='". $show_row['name']."' style='color:white; font-size:40px; text-align:center;'></i> </a>";
                        echo "</div>";
                        echo "<div>";
                            echo " <a href='user-profile.php'class='text-decoration-none'><span class='text-white'>". $show_row['name']."</span></a>";
                            echo "</div>";
                    echo "</div>";
                    }
                        ?>
                </div>
                <span class="text-warning d-flex justify-content-end pt-0"> </span>
            </div>

            <div class="row pb-3">
                <div class=" col-md-6 d-block justify-content-start text-white">
                <?php  
                        if(isset($_SESSION["email"]) == true){
                                $id = $_SESSION['id'];
                                $show_query = "SELECT * FROM users WHERE id=$id";
                                $show_result = mysqli_query($conn, $show_query);
                                $show_row = $show_result->fetch_assoc();
                        }?>
                    <div class="p-2">
                    <h4> Name: <?php echo  $show_row ['name']; ?></h4>
                    </div>
                    <div class="p-2">
                    <h4>Email: <?php echo  $show_row ['email']; ?></h4>
                    </div>
                    <div class="p-2">
                    <h4>Phone: <?php echo  $show_row ['phone']; ?></h4>
                    </div>
                </div>
                <div class="col-md-6 d-block justify-content-end">
                    <div class="p-2">
                    <a href="update-profile.php" class="text-decoration-none"><h3 class="title text-warning">Update profile </h3></a>
                    </div>
                    <div class="p-2">
                        <a href="your-listing.php" class="text-decoration-none"><h3 class="title text-warning">Your Listing </h3></a>
                    </div>
                    <div class="p-2">
                        <a href="change-password.php" class="text-decoration-none"><h3 class="title text-warning">Change Password </h3></a>
                    </div>
                </div>
                <span class="text-warning d-flex justify-content-end pt-0"> </span>
            </div>

        </div>
        </div>

    </section>
    <?php include("inc/footer.php") ;?>