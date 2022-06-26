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
                    <li class="breadcrumb-item  text-white active" aria-current="page">
                        <a href="blog.php">Blogs</a>
                    </li>
                    <li class="breadcrumb-item  text-white active" aria-current="page">Blogs Details</li>
                </ol>
            </nav>
        </div>
    </section>
    <?php include("inc/navbar.php"); ?>
    <!-- slider section -->


    <!-- blogs section -->
    <section class="pt-5 pb-5 ">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 col-xl-8 text-center">
                    <h3 class="mb-4">Blogs Details</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 bg-light p-5">
                    <div class="search-blogs">
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                    <!-- popular blogs section -->
                    <div class="popular pt-3 pb-3">
                        <h4 class="title">Popular</h4>
                        <div class="blogs-items">
                            <a href="blog-detail.php">XDezo Academy</a>
                            <div class="date p-2">
                                <span>2022-02-02</span>
                            </div>
                        </div>
                        <div class="blogs-items">
                            <a href="blog-detail.php">XDezo Academy</a>
                            <div class="date p-2">
                                <span>2022-02-02</span>
                            </div>
                        </div>
                        <div class="blogs-items">
                            <a href="blog-detail.php">XDezo Academy</a>
                            <div class="date p-2">
                                <span>2022-02-02</span>
                            </div>
                        </div>
                    </div>
                    <!-- popular blogs section -->

                    <!-- recent blogs secton -->
                    <div class="popular pt-3 pb-3">
                        <h4 class="title">Recent Blogs</h4>
                        <div class="blogs-items">
                            <a href="blog-detail.php">XDezo Academy</a>
                            <div class="date p-2">
                                <span>2022-02-02</span>
                            </div>
                        </div>
                        <div class="blogs-items">
                            <a href="blog-detail.php">XDezo Academy</a>
                            <div class="date p-2">
                                <span>2022-02-02</span>
                            </div>
                        </div>
                        <div class="blogs-items">
                            <a href="blog-detail.php">XDezo Academy</a>
                            <div class="date p-2">
                                <span>2022-02-02</span>
                            </div>
                        </div>
                    </div>
                    <!-- recent blogs secton -->

                    <!-- tags section -->
                    <div class="tags pt-3 pb-2">
                        <h4>Tags</h4>
                        <div class="tags-items pt-3">
                            <a class=" p-1 rounded-start" href="#">Banking</a>
                            <a class=" p-1 rounded-start" href="#">Technology</a>
                            <a class=" p-1 rounded-start" href="#">Training</a>
                        </div>
                        <div class="tags-item pt-3">
                            <a class=" p-1 rounded-start" href="#">Banking</a>
                            <a class=" p-1 rounded-start" href="#">Technology</a>
                            <a class=" p-1 rounded-start" href="#">Training</a>
                        </div>
                    </div>
                    <!-- tags section -->
                </div>
                <div class="col-md-9 col-sm-6">
                    <div class="row text-center">
                    <?php
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            $show_query = "SELECT * FROM blogs WHERE id ='$id'";
                            $show_result = mysqli_query($conn, $show_query);
                            $show_row = $show_result->fetch_assoc();
                        }
                        ?>
                        <div class="col-md-12 container mb-md-0">
                            <div class="d-flex justify-content-center mb-4">
                                <img class="blog-details" src="<?php echo "../uploads/" . $show_row['img']; ?>" class=" shadow-1-strong" width="100%" height="400" />
                            </div>
                            <h5 class="mb-3">><?php echo $show_row['title']; ?></h5>
                            <h6 class="text-primary mb-3">Date: <?php $time = $show_row['created_at'];echo $time = date("d-m-Y", strtotime($time)); ?></h6>
                            <p class="" style="text-align:justify;"><?php echo $show_row['content']; ?> </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blogs section -->


    <?php include("inc/footer.php"); ?>