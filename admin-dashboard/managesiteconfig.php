<?php require('inc/header.php');

require('inc/sidebar.php');
?>
<!-- Left sidebar menu end -->

<!--Main container start -->
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Manage Site Config</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>Manage Site Config</li>
            </ul>
        </div>

        <button class="btn-primary mb-2 mr-1 px-2 rounded" onClick="window.location.href='addsiteconfig.php';"><i class="fa fa-plus"></i></button>
        <button class="btn-primary mb-2 mr-1 px-2 rounded" onClick="window.location.reload();"><i class="fa fa-refresh"></i></button>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row" style="width:100%; overflow:scroll;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Slider Image</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>FB Link</th>
                                <th>G Link</th>
                                <th>in Link</th>
                                <th>Heading</th>
                                <th>Logo</th>
                                <th>Favicon</th>
                                <th>Home BG</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $select_query = "SELECT * FROM siteconfig";
                            $select_result = mysqli_query($conn, $select_query);
                            $sn = 0;
                            while ($data = mysqli_fetch_array($select_result)) {
                                $sn = $sn + 1;
                            ?>
                                <tr>
                                    <td><?php echo $sn; ?></td>
                                    <td><img src="<?php echo "../uploads/" . $data['slider_img']; ?>" alt="" height="100px;" width="100px;"></td>
                                    <td><?php echo $data['phone']; ?></td>
                                    <td><?php echo $data['email']; ?></td>
                                    <td><?php echo $data['fb_link']; ?></td>
                                    <td><?php echo $data['google_link']; ?></td>
                                    <td><?php echo $data['linkedin_link']; ?></td>
                                    <td><?php echo $data['heading']; ?></td>
                                    <td><img src="<?php echo "../uploads/" . $data['logo']; ?>" alt="" height="100px;" width="100px;"></td>
                                    <td><img src="<?php echo "../uploads/" . $data['favicon']; ?>" alt="" height="100px;" width="100px;"></td>
                                    <td><img src="<?php echo "../uploads/" . $data['home_bg']; ?>" alt="" height="100px;" width="100px;"></td>
                                    <td><span class="badge badge-info">
                                            <?php if ($data['status'] == 1) {
                                                echo "Active";
                                            } else {
                                                echo "Inactive";
                                            } ?></span></td>
                                    <td>
                                        <a name="" id="" class="btn btn-info btn-sm" href="editsiteconfig.php?id=<?php echo $data['id']; ?>" role="button">Edit</a>
                                        <a name="" id="" onclick="return checkDelete()" class="btn-secondry" href="process/deletesiteconfig.php?id=<?php echo $data['id']; ?>" role="button">Delete</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>

                </div>
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
<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
</body>

<!-- Mirrored from educhamp.themetrades.com/demo/admin/mailbox.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:11:35 GMT -->

</html>