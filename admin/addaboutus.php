<?php require('inc/header.php'); ?>
<?php require('inc/sidebar.php'); ?>

<!--Main container start -->
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Add About Us</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>About Us</li>
            </ul>
        </div>

        <?php 
        if (isset($_POST['submit'])) {
            $slider_img = addslashes($_POST['slider_img']);
            $title1 = addslashes($_POST['title1']);
            $text1 = addslashes($_POST['text1']);
            $img = addslashes($_POST['img']);
            $title2 = addslashes($_POST['title2']);
            $text2 = addslashes($_POST['text2']);

            if ($slider_img != "" && $title1 != "" && $text1 != "" && $img != "" && $title2 != "" && $text2 != "") {
                $query = "INSERT INTO about_us(slider_img, title1, text1, img, title2, text2) VALUES ('$slider_img', '$title1', '$text1', '$img', '$title2', '$text2')";

                $result = mysqli_query($conn, $query);
                if ($result) {
        ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>About Us is added successfully.</strong>
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
                        <strong>About Us couldn't be added successfully.</strong>
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
                                                    <h5 class="modal-title">Choose Slider Image</h5>
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

                                <div class="form-group col-12 mb-0">
                                    <label class="col-form-label">Slider Image</label>
                                    <!-- <div>
                                                <input id="imagebox" class="form-control" name="img" type="text" value="">
                                            </div> -->
                                </div>

                                <div class="input-group mb-3 col-12">
                                    <input id="sliderbox" type="text" class="form-control" name="slider_img" readonly>
                                    <div class="input-group-append">
                                        <button type="button" class="btn-primary" data-toggle="modal" data-target="#modelId1">Choose Image
                                        </button>
                                    </div>
                                </div>

                                <div class="form-group col-12">
                                    <label class="col-form-label">Title 1</label>
                                    <div>
                                        <input class="form-control" type="text" name="title1">
                                    </div>
                                </div>

                                <div class="form-group col-12">
                                    <label class="col-form-label">Content 1</label>
                                    <div>
                                        <textarea class="form-control" name="text1"></textarea>
                                    </div>
                                </div>

                                <!-- Bootstrap modal start -->

                                <div class="col-12">
                                    <!-- <button type="button" class="btn-primary" data-toggle="modal" data-target="#modelId2">Browse Image
                                    </button> -->

                                    <div class="modal fade" id="modelId2" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
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
                                                                    <input type="radio" name="filename2" value="<?php echo $data_select['filelink']; ?>" style="opacity: 0;" />
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
                                                    <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="secondFunction()">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- Bootstrap modal end -->

                                <div class="form-group col-12 mb-0">
                                    <label class="col-form-label">Image</label>
                                    <!-- <div>
                                                <input id="imagebox" class="form-control" name="img" type="text" value="">
                                            </div> -->
                                </div>

                                <div class="input-group mb-3 col-12">
                                    <input id="imagebox" type="text" class="form-control" name="img" readonly>
                                    <div class="input-group-append">
                                        <button type="button" class="btn-primary" data-toggle="modal" data-target="#modelId2">Choose Image
                                        </button>
                                    </div>
                                </div>

                                <div class="form-group col-12">
                                    <label class="col-form-label">Title 2</label>
                                    <div>
                                        <input class="form-control" type="text" name="title2">
                                    </div>
                                </div>

                                <div class="form-group col-12">
                                    <label class="col-form-label">Content 2</label>
                                    <div>
                                        <textarea class="form-control" name="text2"></textarea>
                                    </div>
                                </div>

                                <div class="mb-4 col-12">
                                    <div class="input-group-append">
                                        <a href="managefacility.php">
                                            <button type="button" class="btn-primary">Click To Add Facilites
                                        </a>
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
        var selectedOption1 = document.querySelector('input[name=filename1]:checked').value;
        //var selectedOption = $("input:radio[name=filename]:checked").val()
        document.getElementById('sliderbox').value = selectedOption1; // use .innerHTML if we want data on label
    }

    function secondFunction() {
        var selectedOption2 = document.querySelector('input[name=filename2]:checked').value;
        //var selectedOption = $("input:radio[name=filename]:checked").val()
        document.getElementById('imagebox').value = selectedOption2; // use .innerHTML if we want data on label
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

<script>
    $('#myModal').on('shown.bs.modal', function() {
        $('#myInput').trigger('focus')
    })
</script>

</body>


</html>