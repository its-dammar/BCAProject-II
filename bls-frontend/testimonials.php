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
                    <li class="breadcrumb-item  text-white active" aria-current="page">Testimonials</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- slider section -->

    <!-- reviews section -->
    <section class="pt-5">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 col-xl-8 text-center">
                    <h3 class="mb-4">Testimonials</h3>
                    <p class="mb-4 pb-2 mb-md-5 pb-md-0">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur veniam.
                    </p>
                </div>
            </div>
            <div class="row text-center pt-3 pb-5">
                <div class="col-lg-3 col-md-4 col-sm-6 testimpnials-items mb-5 mb-md-0">
                    <div class="d-flex justify-content-center mb-4">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" class="rounded-circle shadow-1-strong" width="150" height="150" />
                    </div>
                    <h5 class="mb-3">Maria Smantha</h5>
                    <h6 class="text-primary mb-3">Web Developer</h6>
                    <p class="px-xl-3">
                        <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic tenetur.
                    </p>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 testimpnials-items container mb-5 mb-md-0">
                    <div class="d-flex justify-content-center mb-4">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp" class="rounded-circle shadow-1-strong" width="150" height="150" />
                    </div>
                    <h5 class="mb-3">Lisa Cudrow</h5>
                    <h6 class="text-primary mb-3">Graphic Designer</h6>
                    <p class="px-xl-3">
                        <i class="fas fa-quote-left pe-2"></i>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid commodi.
                    </p>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 testimpnials-items container mb-0">
                    <div class="d-flex justify-content-center mb-4">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp" class="rounded-circle shadow-1-strong" width="150" height="150" />
                    </div>
                    <h5 class="mb-3">John Smith</h5>
                    <h6 class="text-primary mb-3">Marketing Specialist</h6>
                    <p class="px-xl-3">
                        <i class="fas fa-quote-left pe-2"></i>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.
                    </p>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 testimpnials-items container mb-0">
                    <div class="d-flex justify-content-center mb-4">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp" class="rounded-circle shadow-1-strong" width="150" height="150" />
                    </div>
                    <h5 class="mb-3">John Smith</h5>
                    <h6 class="text-primary mb-3">Marketing Specialist</h6>
                    <p class="px-xl-3">
                        <i class="fas fa-quote-left pe-2"></i>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.
                    </p>
                </div>
                <!-- Pagination-->
                <nav aria-label="Pagination">
                    <hr class="my-0" />
                    <ul class="pagination justify-content-center my-4">
                        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                        <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                        <li class="page-item"><a class="page-link" href="#!">2</a></li>
                        <li class="page-item"><a class="page-link" href="#!">3</a></li>
                        <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                        <li class="page-item"><a class="page-link" href="#!">15</a></li>
                        <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <!-- reviews section -->

    <?php include("inc/footer.php"); ?>