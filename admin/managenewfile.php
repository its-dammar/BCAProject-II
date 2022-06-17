<?php require('inc/header.php'); ?>
<?php require('inc/sidebar.php'); ?>

<!--Main container start -->
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Manage Result Files</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>Manage Result Files</li>
            </ul>
        </div>

        <button class="btn-primary mb-2 mr-1 px-2 rounded" onClick="window.location.href='addnewfile.php';"><i class="fa fa-plus"></i></button>
        <button class="btn-primary mb-2 mr-1 px-2 rounded" onClick="window.location.reload();"><i class="fa fa-refresh"></i></button>

        <?php
        if (isset($_GET['msg'])) {
            $msg = $_GET['msg'];
            if ($msg == "dsuccess") {
        ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>File is deleted successfully.</strong>
                </div>

                <script>
                    $(".alert").alert();
                </script>
            <?php
            }

            if ($msg == "derror") {
            ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>File is not deleted successfully.</strong>
                </div>

                <script>
                    $(".alert").alert();
                </script>
        <?php
            }
        }
        ?>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>File Name</th>
                                <th>File Link</th>
                                <th>Preview</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $select_query = "SELECT * FROM newmanager";
                            $select_result = mysqli_query($conn, $select_query);
                            $i = 0;
                            while ($data_select = mysqli_fetch_array($select_result)) {
                                $i++;
                            ?>
                                <tr>
                                    <td scope="row"><?php echo $i; ?></td>
                                    <td><?php echo $data_select['name']; ?></td>
                                    <td><?php echo $data_select['filelink']; ?></td>
                                    <td><img src="../uploads/pdfimage1632986670.png" alt="" height=" 50px;" width="50px;"></td>
                                    <td>
                                        <a name="" id=""onclick="return checkDelete()" class="btn-secondry" href="deleteprocess/deletenewfile.php?id=<?php echo $data_select['id']; ?>" role="button">Delete</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                            <tr>
                                <th>S.N.</th>
                                <th>File Name</th>
                                <th>File Link</th>
                                <th>Preview</th>
                                <th>Action</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    </div>
</main>
<div class="ttr-overlay"></div>
<?php require('inc/footer.php'); ?>
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