<?php include("inc/header.php") ;?>

<body class="" style="background-color:#A1A1A1">

    <?php include("inc/navbar.php") ;?>

    <section class="m-5">
        <div class="container col-sm-6 col-md-8 xm-auto bg-dark p-5 signup">
            <div class="row pb-3">
                <div class=" col-md-6 d-block justify-content-start text-white">
                    <h2>Your Listing</h2>
                    <div class="slider" >
                        <div class="search col-md-12 xm-auto p-2">
                            <form class="row g-3 search-form">
                                <div class="col-md-10 p-0">
                                    <!-- <label for="inputProvience" class="form-label text-white fs-2">Choose Proviece</label> -->
                                    <input class=" business-name form-control" id="" type="text"
                                        placeholder="Search Your Listing Business" aria-label="">
                                </div>
                                <div class="col-md-2 p-0 4">
                                    <button type="button" class="btn btn-warning form-control  search-button">
                                        <i class="fas fa-search p-1 border-start-0"></i>
                                    </button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <?php if (isset($_SESSION['name'])) {
                        // echo $_SESSION['name'];
                        $id = $_SESSION['id'];
                        $show_query = "SELECT * FROM users WHERE id='$id'";
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
            </div>
            <!-- pagination -->
            <?php
            $limit = 6;  // Number of entries to show in a page. Look for a GET variable page if not found default is 1.     
            if (isset($_GET["page"])) { 
            $pn  = $_GET["page"]; 
            } 
            else { 
            $pn=1; 
            };  
        
            $start_from = ($pn-1) * $limit;  
        
            $sql = "SELECT * FROM businesslists order by id DESC  LIMIT $start_from, $limit";  
            $rs_result = mysqli_query($conn, $sql); 
            ?>
            <!-- pagination -->

            <div class="your-listing">
                <div class="row">
                    <div class="col-md-12 m-auto">
                        <div class="listing ">

                            <div class="col-md-12 bg-light p-4">
                                <?php    
                                    $i=0;
                                    while($row = mysqli_fetch_assoc($rs_result)) {
                                        echo '<div class="listing  fs-5 p-3">';
                                    
                                    echo " <a href='admin-dashboard/index.php' class='text-decoration-none'>".  "<h3>".$row['business_name']. "</h3>" ."</a>" ;
                                    echo " <span class=''>".  $row['business_category'] ."</span>" ;
                                    "</div>";
                                        echo '</div>';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- pagination -->
                <div class="pagination-section">
                    <ul class="pagination">
                        <?php  
                            $sql = "SELECT COUNT(*) FROM businesslists";  
                            $rs_result = mysqli_query($conn, $sql);  
                            $row = mysqli_fetch_row($rs_result);  
                            $total_records = $row[0];  
                                
                            // Number of pages required.
                            $total_pages = ceil($total_records / $limit);  
                            $pagLink = "";                        
                            for ($i=1; $i<=$total_pages; $i++) {
                                if ($i==$pn) {
                                    $pagLink .= "<li class='active'><a href='your-listing.php?page="
                                                                    .$i."' style='padding:15px; font-size:25px;'>".$i."</a></li>";
                                }            
                                else  {
                                    $pagLink .= "<li><a href='your-listing.php?page=".$i."'style='padding:15px; font-size:25px;'>
                                                                    ".$i."</a></li>";  
                                }
                            };  
                            echo $pagLink;  
                            ?>
                    </ul>
                </div>
                <!-- pagination -->
            </div>
        </div>

    </section>

    <?php include("inc/footer.php") ;?>