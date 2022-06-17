<?php require('inc/header.php'); ?>
<?php require('inc/sidebar.php'); ?>

<!--Main container start -->
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Add User</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>Add User</li>
            </ul>
        </div>

        <?php
        if (isset($_POST['submit'])) {
            $name = addslashes($_POST['name']);
            $phone = addslashes($_POST['phone']);
            $email = addslashes($_POST['email']);
            $password = addslashes(md5($_POST['password']));

            if ($name != "" && $email != "" && $password != "") {
                $query = "INSERT INTO users(name,phone, email, password) 
                VALUES ('$name', '$phone', '$email', '$password')";
                $query1 = "INSERT INTO superusers(name,phone, email, password) 
                VALUES ('$name', '$phone', '$email', '$password')";
                $result = mysqli_query($conn, $query);
                $result = mysqli_query($conn, $query1);
                if ($result) {
        ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>User is added successfully.</strong>
                        <meta http-equiv="refresh" content="0.5;URL=manageuser.php">
                    </div>

                    <script>
                        $(".alert").alert();
                    </script>
                <?php
                } else {
                ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>User couldn't be added successfully.</strong>
                    </div>
        <?php
                }
            } else {
                echo "All fields are necessary.";
            }
        }
        ?>

        <div class="row">
            <!-- Your Profile Views Chart -->
            <div class="col-lg-8 m-b30">
                <div class="widget-box">
                    <div class="widget-inner">
                        <form class="edit-profile m-b30" form action="#" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="form-group col-12">
                                    <label class="col-form-label">Name</label>
                                    <div>
                                        <input class="form-control" type="text" name="name">
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">Phone</label>
                                    <div>
                                        <input class="form-control" type="text" name="phone">
                                    </div>
                                </div>

                                <div class="form-group col-12">
                                    <label class="col-form-label">Email</label>
                                    <div>
                                        <input class="form-control" type="email" name="email">
                                    </div>
                                </div>
                                
                                <div class="form-group col-12">
                                    <label class="col-form-label">Password</label>
                                    <div>
                                        <input class="form-control" type="password" name="password">
                                    </div>
                                </div>
                                

                                <div class="col-12">
                                    <button type="submit" name="submit" class="btn">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Your Profile Views Chart END-->
        </div>
    </div>
</main>
<div class="ttr-overlay"></div>


<!-- External JavaScripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/vendors/bootstrap/js/popper.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="assets/vendors/magnific-popup/magnific-popup.js"></script>
<script src="assets/vendors/counter/waypoints-min.js"></script>
<script src="assets/vendors/counter/counterup.min.js"></script>
<script src="assets/vendors/imagesloaded/imagesloaded.js"></script>
<script src="assets/vendors/masonry/masonry.js"></script>
<script src="assets/vendors/masonry/filter.js"></script>
<script src="assets/vendors/owl-carousel/owl.carousel.js"></script>
<script src='assets/vendors/scroll/scrollbar.min.js'></script>
<script src="assets/js/functions.js"></script>
<script src="assets/vendors/chart/chart.min.js"></script>
<script src="assets/js/admin.js"></script>
</body>


</html>