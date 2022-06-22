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
                    <li class="breadcrumb-item  text-white active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </section>
    <?php include("inc/navbar.php"); ?>
    <!-- slider section -->

    <section class="p-5">
        <div class="container">
            <div class=" justify-content-center">
                <div class=" text-center">
                    <h3 class="mb-4">Get In Touch With Us!!</h3>
                    <p class="mb-4 pb-2 mb-md-5 pb-md-0">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur veniam.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- contact us section -->
    <section class="p-2 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 pt-1 contact-us">
                    <form action="#" method="POST" enctype="multipart/form-data" class="p-5">
                        <h3 class="title pb-3">Connect us</h3>
                        <div class="mb-3">
                            <label for="exampleInputName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPhone" class="form-label">Phone</label>
                            <input type="email" class="form-control" id="exampleInputPhone" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Message</label>
                            <textarea class="form-control" id="" rows="3" aria-label=""></textarea>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-md-6 p-5 contact2-us">
                    <div class="row pb-2">
                        <div class="col-lg-6 col-md-12">
                            <div class="address">
                                <h4>Email:</h4>
                                <span>dammar@gmail.com</span>
                            </div>
                            <div class="address">
                                <h4>Phone:</h4>
                                <span>Pokhara-7, Ratnachowk, Kaski</span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="address">
                                <h4>Address:</h4>
                                <address>Pokhara-7, Ratnachowk, Kaski</address>
                            </div>
                            <div class="address">
                                <h4>Street:</h4>
                                <address>Pokhara-7, Ratnachowk, Kaski</address>
                            </div>
                        </div>
                    </div>

                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3516.0508282153396!2d83.97247701491321!3d28.20576828258817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399595f540c603db%3A0x234fa047032d13bc!2sXDezo%20Academy!5e0!3m2!1sen!2snp!4v1654785870063!5m2!1sen!2snp"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact us section -->


    <?php include("inc/footer.php"); ?>