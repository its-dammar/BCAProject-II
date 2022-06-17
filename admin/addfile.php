<?php require('inc/header.php'); ?>
<?php require('inc/sidebar.php'); ?>

<!--Main container start -->
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Add File</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>Add File</li>
            </ul>
        </div>

        <?php
        if (isset($_POST['submit'])) {
            $fname = $_POST['name'];
            $dataFile = $_FILES['dataFile']['name'];
            $filesize = $_FILES['dataFile']['size'];
            $explode_values = explode('.', $dataFile);
            $name = $explode_values[0];
            $fname = str_replace(' ', '', $name);
            $finalname = strtolower($fname . time());
            $extention = $explode_values[1];
            $finalfile = $finalname . "." . $extention;

            $ftype = $_POST['type'];

            if ($filesize <= 3000000) {
                if ($extention == 'jpg' || $extention == 'JPG' || $extention == 'PNG' || $extention == 'png' || $extention == 'jpeg') {
                    if (move_uploaded_file($_FILES['dataFile']['tmp_name'], "../uploads/" . $finalfile)) {
                        $query = "INSERT INTO filemanager(name,filelink,type) VALUES ('$fname','$finalfile','$ftype')";
                        $result = mysqli_query($conn, $query);
                        if ($result) {
        ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>File is added successfully.</strong>
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
                                <strong>File couldn't be added.</strong>
                            </div>
        <?php
                        }
                    } else {
                        echo "File couldn't be uploaded successfully.";
                    }
                } else {
                    echo "File format not accepted.";
                }
            } else {
                echo "File size exceeded. Limited to 2MB.";
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
                                    <div class="form-group col-md-12">
                                        <label for="">File Name</label>
                                        <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="">File</label>
                                        <input type="file" class="form-control" name="dataFile" id="" aria-describedby="helpId" placeholder="">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="">Type</label>
                                        <input type="text" class="form-control" name="type" id="" aria-describedby="helpId" placeholder="">
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
<script src='assets/vendors/switcher/switcher.js'></script>
</body>

<!-- Mirrored from educhamp.themetrades.com/demo/admin/add-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:09:05 GMT -->

</html>