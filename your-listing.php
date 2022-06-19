<?php include("inc/header.php") ;?>

<body class="" style="background-color:#A1A1A1">

    <?php include("inc/navbar.php") ;?>

    <section class="m-5">
        <div class="container col-sm-6 col-md-8 xm-auto bg-dark p-5 signup">
            <div class="row pb-3">
                <div class=" col-md-6 d-flex justify-content-start text-white">
                    <h2>Your Listing</h2>
                </div>
                <div class="col-md-6 image-register d-flex justify-content-end">
                    <img class="col-12 col-md-6" alt="Logo" src="admin/assets/images/logoblue.png" width="190"
                        height="57">
                </div>
                <span class="text-warning d-flex justify-content-end pt-0">Business Directory</span>

            </div>
            <div class="your-listing">
                <div class="row">
                    <div class="col-md-8 m-auto">
                        <div class="listing ">
                           <div class="col-md-12 bg-light p-4">
                                <?php    
                                    $query = "SELECT * FROM businesslists";
                                    $result = mysqli_query($conn, $query);
                                    $i=0;
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo '<div class="listing  fs-5 p-3">';
                                    
                                    echo " <a href='business-login.php' class='text-decoration-none'>".  "<h3>".$row['business_name']. "</h3>" ."</a>" ;
                                    echo " <span class=''>".  $row['business_category'] ."</span>" ;
                                    "</div>";
                                        echo '</div>';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <?php include("inc/footer.php") ;?>