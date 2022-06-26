<?php include("inc/header.php"); ?>

<body>
    <!-- navbar section -->
    <?php include("inc/navbar.php"); ?>
    <!-- navbar section -->

    <!-- slider section -->
    <section class="blogs p-5" style="background-image: url('assets/uploads/3.jpg');">
        <div class="">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item text-white"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item  text-white active" aria-current="page">Blogs</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- slider section -->

    <!-- search by Blogs -->
    <section class="pt-5 popular-blogs">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 col-xl-8 text-center">
                    <h3 class="mb-4 category-title">All Types Blogs</h3>
                </div>
            </div>
            <!-- pagination -->
            <?php
            $limit = 12;  // Number of entries to show in a page. Look for a GET variable page if not found default is 1.     
            if (isset($_GET["page"])) { 
            $pn  = $_GET["page"]; 
            } 
            else { 
            $pn=1; 
            };  
        
            $start_from = ($pn-1) * $limit;  
        
            $sql = "SELECT * FROM blogs order by id DESC  LIMIT $start_from, $limit";  
            $rs_result = mysqli_query($conn, $sql); 
            ?>
            <!-- pagination -->
            <div class="row text-center pt-3 pb-5">
                <div class="col-md-8">
                    <div class="row">
                        <?php
                        while($business_category = mysqli_fetch_array( $rs_result)){
                        ?>
                        <div class="col-sm-6 col-md-4 col-lg-3 mb-5 mb-md-0 recent-listing-itens">
                            <div class="d-flex justify-content-center mb-4">
                                <img src="<?php echo "uploads/" . $business_category['img']; ?>"
                                    class=" shadow-1-strong" width="150" height="50" />
                            </div>
                            <a href="business-site/blog-detail.php" class="text-decoration-none">
                                <h5 class="mb-3"><?php echo $business_category['title'];?></h5>
                            </a>
                            <h6 class="text-black mb-3">
                                Date:<?php $time = $business_category['created_at']; echo $time = date("d-m-Y", strtotime($time)); ?>
                            </h6>
                            <!-- <p style="max-width: 280px"><?php echo $business_category['content'] ;?></p> -->
                        </div>
                        <?php }?>
                    </div>

                    <!-- pagination -->
                    <div class="pagination-section" style="background-color:#f8f8f8;">
                        <ul class="pagination">
                            <?php  
                            $sql = "SELECT COUNT(*) FROM blogs";  
                            $rs_result = mysqli_query($conn, $sql);  
                            $row = mysqli_fetch_row($rs_result);  
                            $total_records = $row[0];  
                                
                            // Number of pages required.
                            $total_pages = ceil($total_records / $limit);  
                            $pagLink = "";                        
                            for ($i=1; $i<=$total_pages; $i++) {
                                if ($i==$pn) {
                                    $pagLink .= "<li class='active'><a href='blogs.php?page="
                                                                    .$i."' style='padding:15px; font-size:25px;'>".$i."</a></li>";
                                }            
                                else  {
                                    $pagLink .= "<li><a href='blogs.php?page=".$i."'style='padding:15px; font-size:25px;'>
                                                                    ".$i."</a></li>";  
                                }
                            };  
                            echo $pagLink;  
                            ?>
                        </ul>
                    </div>
                    <!-- pagination -->
                </div>
                <div class="col-md-4 shadow-sm p-3 mb-5 bg-body rounded">
                    <h3 class="shadow p-3">Recent Blogs</h3>
                    <?php
                           $category="SELECT * from blogs order by created_at DESC limit 3";
                           $c_result= mysqli_query($conn, $category);
                           while($business_category=mysqli_fetch_array( $c_result)){
                            ?>
                    <div class="recent-listing-items p-2">
                        <a href="business-site/index.php" class="text-decoration-none">
                            <h5 class="mb-3"><?php echo $business_category['title']  ?></h5>
                        </a>
                        <span class="text-black mb-3"> Date:
                            <?php $time = $business_category['created_at'];echo $time = date("d-m-Y", strtotime($time)); ?></span>
                    </div>
                    <?php } ?>
                </div>
            </div>

        </div>
    </section>
    <!-- search by Blogs -->

    <?php include("inc/footer.php"); ?>