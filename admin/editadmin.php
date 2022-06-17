<?php require('inc/header.php'); ?>
<?php require('inc/sidebar.php'); ?>

<!--Main container start -->
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Edit Admin</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>Edit Admin</li>
            </ul>
        </div>

        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $show_query = "SELECT * FROM admin WHERE id=$id";
            $show_result = mysqli_query($conn, $show_query);
            $show_row = $show_result->fetch_assoc();
        }
        ?>

        <?php
        if (isset($_POST['submit'])) {
            $name = addslashes($_POST['name']);
            $email = addslashes($_POST['email']);
            $password = addslashes(md5($_POST['password']));
            $confirm_password = addslashes(md5($_POST['confirm_password']));

            if ($name != "" && $email != "" && $password != "" && $confirm_password != "") {
                if ($password == $confirm_password) {
                    $query = "UPDATE admin SET name = '$name', email = '$email', password = '$password' WHERE id=$id";
                    $result = mysqli_query($conn, $query);
                    if ($result) {
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Admin is updated successfully.</strong>
            <meta http-equiv="refresh" content="0.5;URL=manageadmin.php">
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
            <strong>Admin couldn't be updated successfully.</strong>
        </div>
        <?php
                    }
                } else {
                    echo "Both password field doesn't match.";
                }
            } else {
                echo "All fields are necessary.";
            }
        }
        ?>

        <div class="widget-box">
            <div class="widget-inner">
                <form class="edit-profile m-b30" form action="#" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-12 col-md-6">
                            <label class="col-form-label">Name</label>
                            <div>
                                <input class="form-control" type="text" name="name" value="<?php if (isset($_SESSION['name'])) {
                                                                                                        echo $_SESSION['name'];
                                                                                                    } ?>"
                                    aria-describedby="helpId">
                            </div>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label class="col-form-label">Email</label>
                            <div>
                                <input class="form-control" type="email" name="email" value="<?php if (isset($_SESSION['email'])) {
                                                                                                            echo $_SESSION['email'];
                                                                                                        } ?>"
                                    aria-describedby="helpId">
                            </div>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label class="col-form-label">Password</label>
                            <div>
                                <input class="form-control" type="password" name="password"
                                    value="echo $show_row['password'];" aria-describedby="helpId">
                            </div>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label class="col-form-label">Confirm Password</label>
                            <div>
                                <input class="form-control" type="password" name="confirm_password"
                                    aria-describedby="helpId" value="echo $show_row['confirm_password'];">
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
<script src='assets/vendors/switcher/switcher.js'></script>
</body>

<!-- Mirrored from educhamp.themetrades.com/demo/admin/add-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:09:05 GMT -->

</html>