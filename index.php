<?php include("inc/header.php"); ?>

<body>
    <!-- navbar section -->
    <?php include("inc/navbar.php"); ?>
    <!-- navbar section -->

    <!-- slider section -->
    <div class="" style="background-image: url('assets/uploads/1.jpg'); background-size:cover; height:400px;">
        <div class="container slider " style=" position: relative !important;">
            <h3 class="text-center text-white fs-2">Search Business</h3>
            <div class="search container col-md-6 xm-auto p-2 ">
            <form class="row g-3 search-form" method="POST">
                    <div class="col-md-10 p-0">
                        <!-- <label for="inputProvience" class="form-label text-white fs-2">Choose Proviece</label> -->
                        <input class=" business-name form-control" id="" name="business_category" type="text"
                            placeholder="Type business category like college, hospital, training center " aria-label="">
                    </div>
                    <div class="col-md-2 p-0 4">
                       <a href="#search"> <button type="submit" class="btn btn-warning form-control  search-button">
                            <i class="fas fa-search p-1 border-start-0"></i>
                        </button></a>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- slider section -->

    <!-- recent listing Business -->
    <section class="pt-5 recent-listing ">
        <div class="container ">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 col-xl-8 text-center">
                    <h3 class="mb-4 category-title">Recent Listing Business</h3>
                </div>
            </div>
            <div class="row" id="search">
            <?php
                $name = $_POST['business_category'];
                if($name!="")
                {

                    $sql = " SELECT * FROM businesslists where business_category like '%$name%'";
                    $result = mysqli_query($conn, $sql);
                        if ($result->num_rows > 0)
                        {
                            while($row = $result->fetch_assoc() )
                            {
                                ?>
                                <div class="col-lg-2 col-md-3 col-sm-4 mb-5 mb-md-0 recent-listing-itens">
                                    <div class="d-flex justify-content-center mb-4">
                                        <img src="<?php echo "uploads/" . $row['logo']; ?>" class=" shadow-1-strong "
                                            width="150" height="50" />
                                    </div>
                                    <a href="business-site/index.php" class="text-decoration-none">
                                        <h5 class="mb-3 text-center"><?php echo $row['business_name']; ?></h5>
                                    </a>
                                    <h6 class="text-primary mb-3 text-center"><?php echo $row['business_category']; ?></h6>
                                </div>
                                <?php
                            }
                        } else 
                        { echo "0 records"; }
                }
                else{ }
                    ?>
            </div>
            <div class="row text-center pt-3 pb-5">
                <?php
                $category="SELECT  * FROM businesslists ORDER BY created_at DESC limit 6";
                $c_result= mysqli_query($conn, $category);
                while($business_category=mysqli_fetch_array( $c_result)){
                ?>
                <div class="col-lg-2 col-md-3 col-sm-4 mb-5 mb-md-0 recent-listing-itens">
                    <div class="d-flex justify-content-center mb-4">
                        <img src="<?php echo "uploads/" . $business_category['logo']; ?>" class=" shadow-1-strong "
                            width="150" height="50" />
                    </div>
                    <a href="business-site/index.php" class="text-decoration-none">
                        <h5 class="mb-3"><?php echo $business_category['business_name']; ?></h5>
                    </a>
                    <h6 class="text-primary mb-3"><?php echo $business_category['business_category']; ?></h6>
                    <a href="#"><i title="Phone" class="fas fa-phone fa-lg text-primary"></i></a>
                    <a href="#"><i title="Location" class="fas fa-location fa-lg text-primary"></i></a>
                    <a href="#"><i title="Email" class="fas fa-inbox fa-lg text-primary"></i></a>
                </div>
                <?php 
            }?>
            </div>
            <div class="more-btn pb-5 text-center">
                <a href="recentlisting-business.php" class="btn btn-secondary">More..</a>
            </div>
        </div>
    </section>
    <!-- recent listing Business -->

    <!-- Category Business -->
    <section class="pt-5 category-business-site">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 col-xl-8 text-center">
                    <h3 class="mb-4 category-title">Category Business</h3>
                </div>
            </div>
            <div class="row text-center pt-3 pb-5">
                <div class="col-md-8">
                    <div class="row">
                        <?php
                        $category="SELECT * FROM course_category ORDER BY created_at DESC limit 16";
                        $c_result= mysqli_query($conn, $category);
                        while($business_category=mysqli_fetch_array( $c_result)){
                        ?>
                        <div class="col-sm-6 col-md-4 col-lg-3 mb-5 mb-md-0 recent-listing-itens">
                            <a href="business-category.php" class="text-decoration-none">
                                <h5 class="mb-3"><?php echo $business_category['name']; ?></h5>
                                <span class="text-black mb-3"> Date:
                            <?php $time = $business_category['created_at'];echo $time = date("d-m-Y", strtotime($time)); ?>
                            </span>
                            </a>
                            <p>244</p>
                            
                        </div>
                        <?php }?>
                    </div>
                    <div class="more-btn p-5 text-center">
                        <a href="business-category.php" class="btn btn-secondary">More..</a>
                    </div>
                </div>
                <div class="col-md-4 shadow-sm p-3 mb-5 bg-body rounded">
                    <h3 class="p-2">Recent added Category</h3>
                    <?php
                           $category="SELECT * from course_category order by created_at DESC limit 3";
                           $c_result= mysqli_query($conn, $category);
                           while($business_category=mysqli_fetch_array( $c_result)){
                            ?>
                    <div class="recent-listing-items p-2">
                        <a href="business-site/index.php" class="text-decoration-none">
                            <h5 class="mb-3"><?php echo $business_category['name']  ?></h5>
                        </a>
                        <span class="text-black mb-3"> Date:
                            <?php $time = $business_category['created_at'];echo $time = date("d-m-Y", strtotime($time)); ?></span>
                    </div>
                    <?php } ?>
                </div>
            </div>

        </div>
    </section>
    <!-- Category Business -->

    <!-- Featured Listing -->
    <section class="pt-5 feature-business-site">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 col-xl-8 text-center">
                    <h3 class="mb-4 category-title">Featured Listing Business</h3>
                </div>
            </div>
            <div class="row text-center pt-3 pb-5">
                <div class="col-lg-2 col-md-3 col-sm-4 mb-5 mb-md-0 recent-listing-itens">
                    <div class="d-flex justify-content-center mb-4">
                        <img src="assets/uploads/1.jpg" class=" shadow-1-strong" width="150" height="50" />
                    </div>
                    <a href="business-site/index.php" class="text-decoration-none">
                        <h5 class="mb-3">Maria Smantha</h5>
                    </a>
                    <h6 class="text-primary mb-3">Web Developer</h6>
                    <a href="#"><i title="Phone" class="fas fa-phone fa-lg text-primary"></i></a>
                    <a href="#"><i title="Location" class="fas fa-location fa-lg text-primary"></i></a>
                    <a href="#"><i title="Email" class="fas fa-inbox fa-lg text-primary"></i></a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 mb-5 mb-md-0 recent-listing-itens">
                    <div class="d-flex justify-content-center mb-4">
                        <img src="assets/uploads/1.jpg" class=" shadow-1-strong" width="150" height="50" />
                    </div>
                    <a href="business-site/index.php" class="text-decoration-none">
                        <h5 class="mb-3">Maria Smantha</h5>
                    </a>
                    <h6 class="text-primary mb-3">Web Developer</h6>
                    <a href="#"><i title="Phone" class="fas fa-phone fa-lg text-primary"></i></a>
                    <a href="#"><i title="Location" class="fas fa-location fa-lg text-primary"></i></a>
                    <a href="#"><i title="Email" class="fas fa-inbox fa-lg text-primary"></i></a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 mb-5 mb-md-0 recent-listing-itens">
                    <div class="d-flex justify-content-center mb-4">
                        <img src="assets/uploads/1.jpg" class=" shadow-1-strong" width="150" height="50" />
                    </div>
                    <a href="business-site/index.php" class="text-decoration-none">
                        <h5 class="mb-3">Maria Smantha</h5>
                    </a>
                    <h6 class="text-primary mb-3">Web Developer</h6>
                    <a href="#"><i title="Phone" class="fas fa-phone fa-lg text-primary"></i></a>
                    <a href="#"><i title="Location" class="fas fa-location fa-lg text-primary"></i></a>
                    <a href="#"><i title="Email" class="fas fa-inbox fa-lg text-primary"></i></a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 mb-5 mb-md-0 recent-listing-itens">
                    <div class="d-flex justify-content-center mb-4">
                        <img src="assets/uploads/1.jpg" class=" shadow-1-strong" width="150" height="50" />
                    </div>
                    <a href="business-site/index.php" class="text-decoration-none">
                        <h5 class="mb-3">Maria Smantha</h5>
                    </a>
                    <h6 class="text-primary mb-3">Web Developer</h6>
                    <a href="#"><i title="Phone" class="fas fa-phone fa-lg text-primary"></i></a>
                    <a href="#"><i title="Location" class="fas fa-location fa-lg text-primary"></i></a>
                    <a href="#"><i title="Email" class="fas fa-inbox fa-lg text-primary"></i></a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 mb-5 mb-md-0 recent-listing-itens">
                    <div class="d-flex justify-content-center mb-4">
                        <img src="assets/uploads/1.jpg" class=" shadow-1-strong" width="150" height="50" />
                    </div>
                    <a href="business-site/index.php" class="text-decoration-none">
                        <h5 class="mb-3">Maria Smantha</h5>
                    </a>
                    <h6 class="text-primary mb-3">Web Developer</h6>
                    <a href="#"><i title="Phone" class="fas fa-phone fa-lg text-primary"></i></a>
                    <a href="#"><i title="Location" class="fas fa-location fa-lg text-primary"></i></a>
                    <a href="#"><i title="Email" class="fas fa-inbox fa-lg text-primary"></i></a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 mb-5 mb-md-0 recent-listing-itens">
                    <div class="d-flex justify-content-center mb-4">
                        <img src="assets/uploads/1.jpg" class=" shadow-1-strong" width="150" height="50" />
                    </div>
                    <a href="business-site/index.php" class="text-decoration-none">
                        <h5 class="mb-3">Maria Smantha</h5>
                    </a>
                    <h6 class="text-primary mb-3">Web Developer</h6>
                    <a href="#"><i title="Phone" class="fas fa-phone fa-lg text-primary"></i></a>
                    <a href="#"><i title="Location" class="fas fa-location fa-lg text-primary"></i></a>
                    <a href="#"><i title="Email" class="fas fa-inbox fa-lg text-primary"></i></a>
                </div>
            </div>
            <div class="more-btn pb-5 text-center">
                <a href="reviews.html" class="btn btn-secondary">More..</a>
            </div>
        </div>
    </section>
    <!-- Featured Listing -->

    <!-- search by category -->
    <section class="pt-5 popular-blogs">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 col-xl-8 text-center">
                    <h3 class="mb-4 category-title">Popular Blogs</h3>
                </div>
            </div>
            <div class="row text-center pt-3 pb-5">
                <div class="col-md-8">
                    <div class="row">
                    <?php
                        $category="select *from blogs limit 8";
                        $c_result= mysqli_query($conn, $category);
                        while($business_category=mysqli_fetch_array( $c_result)){
                        ?>
                        <div class="col-sm-6 col-md-4 col-lg-3 mb-5 mb-md-0 recent-listing-itens">
                            <div class="d-flex justify-content-center mb-4">
                                <img src="<?php echo "uploads/" . $business_category['img']; ?>" class=" shadow-1-strong" width="150" height="50" />
                            </div>
                            <a href="business-site/blog-detail.php" class="text-decoration-none">
                                <h5 class="mb-3"><?php echo $business_category['title'];?></h5>
                            </a>
                            <h6 class="text-black mb-3"> Date:<?php $time = $business_category['created_at']; echo $time = date("d-m-Y", strtotime($time)); ?></h6>
                            <!-- <p style="max-width: 280px"><?php echo $business_category['content'] ;?></p> -->
                        </div>
                        <?php }?>
                    </div>
                    <div class="more-btn p-5 text-center">
                        <a href="blogs.php" class="btn btn-secondary">More..</a>
                    </div>
                </div>
                <div class="col-md-4 shadow-sm p-3 mb-5 bg-body rounded">
                    <h3 class="shadow p-3">Recent Blogs</h3>
                    <?php
                           $category="select *from blogs limit 3";
                           $c_result= mysqli_query($conn, $category);
                           while($business_category=mysqli_fetch_array( $c_result)){
                            ?>
                        <div class="recent-listing-items p-2">
                        <a href="business-site/index.php" class="text-decoration-none">
                            <h5 class="mb-3"><?php echo $business_category['title']  ?></h5>
                        </a>
                        <span class="text-black mb-3"> Date: <?php $time = $business_category['created_at'];echo $time = date("d-m-Y", strtotime($time)); ?></span>
                    </div>
                            <?php } ?>
                </div>
            </div>

        </div>
    </section>
    <!-- search by category -->

    <?php include("inc/footer.php"); ?>