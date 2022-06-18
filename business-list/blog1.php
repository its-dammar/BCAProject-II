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
                    <li class="breadcrumb-item text-white"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item  text-white active" aria-current="page">Blogs</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- slider section -->


    <!-- blogs section -->
    <section class="pt-5 pb-5 ">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 col-xl-8 text-center">
                    <h3 class="mb-4">Blogs</h3>
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
                            <a href="blog-detail.html">XDezo Academy</a>
                            <div class="date p-2">
                                <span>2022-02-02</span>
                            </div>
                        </div>
                        <div class="blogs-items">
                            <a href="blog-detail.html">XDezo Academy</a>
                            <div class="date p-2">
                                <span>2022-02-02</span>
                            </div>
                        </div>
                        <div class="blogs-items">
                            <a href="blog-detail.html">XDezo Academy</a>
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
                            <a href="blog-detail.html">XDezo Academy</a>
                            <div class="date p-2">
                                <span>2022-02-02</span>
                            </div>
                        </div>
                        <div class="blogs-items">
                            <a href="blog-detail.html">XDezo Academy</a>
                            <div class="date p-2">
                                <span>2022-02-02</span>
                            </div>
                        </div>
                        <div class="blogs-items">
                            <a href="blog-detail.html">XDezo Academy</a>
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
                        <div class="col-lg-4 col-md-6 container mb-md-0">
                            <div class="d-flex justify-content-center mb-4">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" class=" shadow-1-strong" width="100%" height="250" />
                            </div>
                            <h5 class="mb-3">Maria Smantha</h5>
                            <h6 class="text-primary mb-3">Web Developer</h6>
                            <p class="">
                                <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic tenetur.
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-6 container mb-md-0">
                            <div class="d-flex justify-content-center mb-4">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp" class=" shadow-1-strong" width="100%" height="250" />
                            </div>
                            <h5 class="mb-3">Lisa Cudrow</h5>
                            <h6 class="text-primary mb-3">Graphic Designer</h6>
                            <p class="">
                                <i class="fas fa-quote-left pe-2"></i>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid commodi.
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-6 container mb-md-0">
                            <div class="d-flex justify-content-center mb-4">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp" class=" shadow-1-strong" width="100%" height="250" />
                            </div>
                            <h5 class="mb-3">Lisa Cudrow</h5>
                            <h6 class="text-primary mb-3">Graphic Designer</h6>
                            <p class="">
                                <i class="fas fa-quote-left pe-2"></i>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid commodi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blogs section -->




    <?php include("inc/footer.php"); ?>