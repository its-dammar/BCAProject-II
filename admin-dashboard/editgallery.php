<?php require('inc/header.php'); ?>
<?php require('inc/sidebar.php'); ?>

<!--Main container start -->
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Edit Gallery</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>Edit Gallery</li>
            </ul>
        </div>

        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $show_query = "SELECT * FROM gallery WHERE id=$id";
            $show_result = mysqli_query($conn, $show_query);
            $show_row = $show_result->fetch_assoc();
        }
        ?>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <?php
                if (isset($_POST['submit'])) {
                    $img = addslashes($_POST['img']);

                    if ($img != "") {
                        $query = "UPDATE gallery SET img = '$img' WHERE id=$id";
                        $result = mysqli_query($conn, $query);
                        if ($result) {
                ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>Gallery is updated successfully.</strong>
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
                                <strong>Gallery couldn't be updated successfully.</strong>
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

                                        <!-- Bootstrap modal start -->

                                        <div class="col-12">
                                            <!-- <button type="button" class="btn-primary" data-toggle="modal" data-target="#modelId1">Choose Image
                                            </button> -->

                                            <div class="modal fade" id="modelId1" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                                <div class="modal-dialog modal-m" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Choose Image</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="container-fluid">
                                                                <div class="row">

                                                                    <style>
                                                                        [type=radio]:checked+img {
                                                                            outline: 2px solid #f00;
                                                                        }
                                                                    </style>

                                                                    <?php
                                                                    $select_query = "SELECT * FROM filemanager";
                                                                    $select_result = mysqli_query($conn, $select_query);
                                                                    $i = 0;
                                                                    while ($data_select = mysqli_fetch_array($select_result)) {
                                                                        $i++;
                                                                    ?>
                                                                        <label>
                                                                            <input type="radio" name="filename1" value="<?php echo $data_select['filelink']; ?>" style="opacity: 0;" />
                                                                            <img src="<?php echo "../uploads/" . $data_select['filelink']; ?>" alt="" height="100px;" width="100px;" style="margin-right:20px;">
                                                                        </label>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="firstFunction()">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Bootstrap modal end -->

                                        <div class="form-group col-5 mb-0">
                                            <label class="col-form-label">Image</label>
                                        </div>

                                        <div class="input-group mb-5 col-12">
                                            <input id="imagebox" type="text" class="form-control" name="img" value="<?php echo $show_row['img']; ?>">
                                            <div class="input-group-append">
                                                <button type="button" class="btn-primary" data-toggle="modal" data-target="#modelId1">Choose Image
                                                </button>
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

<script>
    function firstFunction() {
        var selected_option1 = document.querySelector('input[name=filename1]:checked').value;
        document.getElementById('imagebox').value = selected_option1;
    }
</script>

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


</html>