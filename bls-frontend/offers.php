<?php include("inc/header.php"); ?>

<body>
    <!-- navbar section -->
    <?php include("inc/navbar.php"); ?>
    <!-- navbar section -->

    <!-- slider section -->
    <section class="blogs p-5" style="background-image: url('assets/uploads/3.jpg')">
        <div class="">
            <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item text-white">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item text-white active" aria-current="page">
                        Offers
                    </li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- slider section -->

    <!-- offer section -->
    <!-- reviews section -->
    <section class="pt-5">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 col-xl-8 text-center">
                    <h3 class="mb-4">Summer Offers</h3>
                    <p class="mb-4 pb-2 mb-md-5 pb-md-0">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit,
                        error amet numquam iure provident voluptate esse quasi, veritatis
                        totam voluptas nostrum quisquam eum porro a pariatur veniam.
                    </p>
                </div>
            </div>
            <div class="row text-center pt-3 pb-5">
                <h3 class="mb-4 p-3">Summer Offers</h3>
                <div class="col-lg-8">
                    <div class="row offers-items">
                        <!-- Search widget-->
                        <div class="card mb-4">
                            <div class="card-header">Search</div>
                            <div class="card-body">
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Enter search term..."
                                        aria-label="Enter search term..." aria-describedby="button-search" />
                                    <button class="btn btn-primary" id="button-search" type="button">
                                        Go!
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-122 mb-5 mb-md-0">
                            <div class="d-flex justify-content-center mb-4">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp"
                                    class="shadow-1-strong" width="150" height="150" />
                            </div>
                            <h5 class="mb-3">Maria Smantha</h5>
                            <h6 class="text-primary mb-3">Web Developer</h6>
                            <p class="px-xl-3">Lorem ipsum dolor sit amet, consectetur</p>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 container mb-5 mb-md-0">
                            <div class="d-flex justify-content-center mb-4">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp"
                                    class="shadow-1-strong" width="150" height="150" />
                            </div>
                            <h5 class="mb-3">Lisa Cudrow</h5>
                            <h6 class="text-primary mb-3">Graphic Designer</h6>
                            <p class="px-xl-3">Ut enim ad minima veniam, quis nostrum</p>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 container mb-0">
                            <div class="d-flex justify-content-center mb-4">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp"
                                    class="shadow-1-strong" width="150" height="150" />
                            </div>
                            <h5 class="mb-3">John Smith</h5>
                            <h6 class="text-primary mb-3">Marketing Specialist</h6>
                            <p class="px-xl-3">At vero eos et accusamus et iusto odio</p>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 container mb-0">
                            <div class="d-flex justify-content-center mb-4">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp"
                                    class="shadow-1-strong" width="150" height="150" />
                            </div>
                            <h5 class="mb-3">John Smith</h5>
                            <h6 class="text-primary mb-3">Marketing Specialist</h6>
                            <p class="px-xl-3">At vero eos et accusamus et iusto odio</p>
                        </div>
                        <div class="more-btn pb-5 text-center">
                            <a href="#" class="btn btn-secondary">More..</a>
                        </div>
                    </div>
                    <div class="long-offers">
                        <h3 class="mb-4 p-3">Summer Offers</h3>
                        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide
                    1"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                    aria-label="Slide
                    2"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                                    aria-label="Slide
                    3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="2000">
                                    <img src="assets/uploads/1.jpg" class="d-block w-100" alt="..." />
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>First slide label</h5>
                                        <p>
                                            Some representative placeholder content for the first
                                            slide.
                                        </p>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="assets/uploads/2.jpg" class="d-block w-100" alt="..." />
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Second slide label</h5>
                                        <p>
                                            Some representative placeholder content for the second
                                            slide.
                                        </p>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="assets/uploads/3.jpg" class="d-block w-100" alt="..." />
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Third slide label</h5>
                                        <p>
                                            Some representative placeholder content for the third
                                            slide.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 right-offer-secdtion">
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">Web Design</a></li>
                                        <li><a href="#!">HTML</a></li>
                                        <li><a href="#!">Freebies</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">JavaScript</a></li>
                                        <li><a href="#!">CSS</a></li>
                                        <li><a href="#!">Tutorials</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">Recent Offers</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">Web Design</a></li>
                                        <li><a href="#!">HTML</a></li>
                                        <li><a href="#!">Freebies</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">JavaScript</a></li>
                                        <li><a href="#!">CSS</a></li>
                                        <li><a href="#!">Tutorials</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">Long Term Offer</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">Web Design</a></li>
                                        <li><a href="#!">HTML</a></li>
                                        <li><a href="#!">Freebies</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">JavaScript</a></li>
                                        <li><a href="#!">CSS</a></li>
                                        <li><a href="#!">Tutorials</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Side widget-->
                    <div class="card mb-4">
                        <div class="card-header">Tags</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">Web Design</a></li>
                                        <li><a href="#!">HTML</a></li>
                                        <li><a href="#!">Freebies</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">JavaScript</a></li>
                                        <li><a href="#!">CSS</a></li>
                                        <li><a href="#!">Tutorials</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- reviews section -->
    <!-- offer section -->

    <?php include("inc/footer.php"); ?>