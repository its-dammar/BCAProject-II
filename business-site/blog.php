<?php include("inc/header.php"); ?>

<body>
    <!-- navbar section -->
    <?php include("inc/navbarmain.php"); ?>
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
    <?php include("inc/navbar.php"); ?>


    <!-- Page header with logo and tagline-->
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">Welcome to Blog Home!</h1>
                <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
            </div>
        </div>
    </header>
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Side widgets-->
            <div class="col-lg-4 col-md-4">
                <!-- Search widget-->
                <div class="card mb-4">
                    <div class="card-header">Search</div>
                    <div class="card-body">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                            <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                        </div>
                    </div>
                </div>
                <!-- Categories widget-->
                <div class="card mb-4">
                    <div class="card-header">Categories</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="blog-detail1.php">Web Design</a></li>
                                    <li><a href="blog-detail1.php">php</a></li>
                                    <li><a href="blog-detail1.php">Freebies</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="blog-detail1.php">JavaScript</a></li>
                                    <li><a href="blog-detail1.php">CSS</a></li>
                                    <li><a href="blog-detail1.php">Tutorials</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Side widget-->
                <div class="card mb-4">
                    <div class="card-header">Side Widget</div>
                    <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                </div>
            </div>
            <!-- Blog entries-->
            <div class="col-lg-8 col-md-8">
                <!-- Nested row for non-featured blog posts-->
                <div class="row">
                    <!-- Blog post-->
                    <?php
                        $category="SELECT * FROM blogs";
                        $c_result= mysqli_query($conn, $category);
                        while($business_category=mysqli_fetch_array( $c_result)){
                    ?>
                    <div class="col-md-6 col-lg-6">
                        <div class="card mb-4 d-flex">
                            <a href="blog-detail.php">
                                <img class="card-img-top" src="<?php echo "../uploads/" . $business_category['img']; ?>" alt="..." width="200" height="200"/>
                            </a>
                            <div class="card-body">
                                <div class="small text-muted">Date: 
                                    <?php $time = $business_category['created_at'];echo $time = date("d-m-Y", strtotime($time)); ?>
                                </div>
                                <a href="blog-detail.php" class="card-title h4"><?php echo $business_category['title']  ?></a>
                            </div>
                            <a class="btn btn-primary col-4 xm-auto text-center" href="blog-detail.php?id=<?php echo $business_category['id'];?>">Read more →</a>
                        </div>
                    </div>
                        <?php }?>
                </div>
                <!-- Pagination-->
                <nav aria-label="Pagination">
                    <hr class="my-0" />
                    <ul class="pagination justify-content-center my-4">
                        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                        <li class="page-item active" aria-current="page"><a class="page-link" href="blog-detail1.php">1</a></li>
                        <li class="page-item"><a class="page-link" href="blog-detail1.php">2</a></li>
                        <li class="page-item"><a class="page-link" href="blog-detail1.php">3</a></li>
                        <li class="page-item disabled"><a class="page-link" href="blog-detail1.php">...</a></li>
                        <li class="page-item"><a class="page-link" href="blog-detail1.php">15</a></li>
                        <li class="page-item"><a class="page-link" href="blog-detail1.php">Older</a></li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
    
    <?php include("inc/footer.php"); ?>