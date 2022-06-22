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
                <!-- Featured blog post-->
                <div class="card mb-4">
                    <a href="blog-detail1.php"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." /></a>
                    <div class="card-body">
                        <div class="small text-muted">January 1, 2022</div>
                        <a href="blog-detail1.php" class="card-title"> <h2>Featured Post Title</h2></a>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                        <a class="btn btn-primary" href="blog-detail1.php">Read more →</a>
                    </div>
                </div>
                <!-- Nested row for non-featured blog posts-->
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Blog post-->
                        <div class="card mb-4">
                            <a href="blog-detail1.php"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted">January 1, 2022</div>
                                <a href="blog-detail1.php" class="card-title h4">Post Title</a>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                                <a class="btn btn-primary" href="blog-detail1.php">Read more →</a>
                            </div>
                        </div>
                        <!-- Blog post-->
                        <div class="card mb-4">
                            <a href="blog-detail1.php"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted">January 1, 2022</div>
                                <a href="blog-detail1.php" class="card-title h4">Post Title</a>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                                <a class="btn btn-primary" href="blog-detail1.php">Read more →</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Blog post-->
                        <div class="card mb-4">
                            <a href="blog-detail1.php"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted">January 1, 2022</div>
                                <a href="blog-detail1.php" class="card-title h4">Post Title</a>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                                <a class="btn btn-primary" href="blog-detail1.php">Read more →</a>
                            </div>
                        </div>
                        <!-- Blog post-->
                        <div class="card mb-4">
                            <a href="blog-detail1.php"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted">January 1, 2022</div>
                                <a href="blog-detail1.php" class="card-title h4">Post Title</a>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam.</p>
                                <a class="btn btn-primary" href="blog-detail1.php">Read more →</a>
                            </div>
                        </div>
                    </div>
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