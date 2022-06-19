<?php require('inc/header.php'); ?>
<?php require('inc/sidebar.php'); ?>

<!--Main container start -->
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Edit Home</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>Edit Index</li>
            </ul>
        </div>

        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $show_query = "SELECT * FROM businesslists WHERE id=$id";
            $show_result = mysqli_query($conn, $show_query);
            $show_row = $show_result->fetch_assoc();
        }
        ?>

        <?php
        if (isset($_POST['submit'])) {
            $slider1 = addslashes($_POST['business_name']);
            $slider2 = addslashes($_POST['address']);
            $title1 = addslashes($_POST['mobile']);
            $text1 = addslashes($_POST['business_category']);
            $title2 = addslashes($_POST['logo']);
            $text2 = addslashes($_POST['country']);
            $btn_link = addslashes($_POST['provience']);
            $title3 = addslashes($_POST['district']);
            $title4 = addslashes($_POST['zip_code']);
            $title5 = addslashes($_POST['business_email']);

            if ($slider1 != "" && $slider2 != "" && $title1 != "" && $text1 != "" && $title2 != "" && $text2 != "" && $btn_link != "" && $title3 != "" && $title4 != "") {
                $query = "UPDATE businesslists SET busineas_name = '$slider1', address = '$slider2', mobile = '$title1', business_category = '$text1', logo = '$title2', country = '$text2', provience = '$btn_link', district = '$title3', zip_code = '$title4', business_email='$title5' WHERE id=$id";

                $result = mysqli_query($conn, $query);
                if ($result) {
        ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>Index is updated successfully.</strong>
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
                        <strong>Index couldn't be updated successfully.</strong>
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
                                                    <h5 class="modal-title">Choose Slider Image 1</h5>
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
                                                                    <input type="radio" name="logo" value="<?php echo $data_select['filelink']; ?>" style="opacity: 0;" />
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
                                    <label class="col-form-label">Logo</label>
                                </div>

                                <div class="input-group mb-3 col-12">
                                    <input id="sliderbox1" type="text" class="form-control" name="logo" value="<?php echo $show_row['logo'] ?>" readonly>
                                    <div class="input-group-append">
                                        <button type="button" class="btn-primary" data-toggle="modal" data-target="#modelId1">Choose logo
                                        </button>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">Address</label>
                                    <div>
                                        <input class="form-control" type="text" name="address" value="<?php echo $show_row['address '] ?>">
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">Business Email</label>
                                    <div>
                                        <input class="form-control" type="email" name="email" value="<?php echo $show_row['email '] ?>">
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">Business Name</label>
                                    <div>
                                        <input class="form-control" type="text" name="business_name" value="<?php echo $show_row['business_name'] ?>">
                                    </div>
                                </div>

                                <div class="form-group col-12">
                                    <label class="col-form-label">Description</label>
                                    <div>
                                        <textarea class="form-control" name="description"><?php echo $show_row['description'] ?></textarea>
                                    </div>
                                </div>

                                <div class="form-group col-12">
                                    <label class="col-form-label">Mobile</label>
                                    <div>
                                        <input class="form-control" type="tel" pattern="[0-9]{10}" name="mobile" value="<?php echo $show_row['mobile'] ?>">
                                    </div>
                                </div>

                                <div class="form-group col-12">
                                    <div class="mb-3">
                                        <label class="col-form-label">Business Category</label>
                                      <select class="form-select" aria-label="Default select example" name="business_category">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                      </select>
                                    </div>
                                </div>

                                <div class="form-group col-12">
                                    <div class="mb-3">
                                        <label class="col-form-label">Country</label>
                                      <select class="form-select" aria-label="Default select example" name="country">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                      </select>
                                    </div>
                                </div>

                                <div class="form-group col-12">
                                    <label class="col-form-label">Zip Code</label>
                                    <div>
                                        <input class="form-control" type="text" name="zip_code" value="<?php echo $show_row['zip_code'] ?>">
                                    </div>
                                </div>

                                <div class="form-group col-12">
                                    <label class="col-form-label">District</label>
                                    <div class="mb-3">
                                      <select class="form-select" aria-label="Default select example" name="district">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                      </select>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">Provience</label>
                                    <div class="mb-3">
                                      <select class="form-select" aria-label="Default select example" name="provience">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                      </select>
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
        var selectedOption1 = document.querySelector('input[name=logo]:checked').value;
        //var selectedOption = $("input:radio[name=filename]:checked").val()
        document.getElementById('sliderbox1').value = selectedOption1; // use .innerHTML if we want data on label
    }

    function secondFunction() {
        var selectedOption2 = document.querySelector('input[name=filename2]:checked').value;
        //var selectedOption = $("input:radio[name=filename]:checked").val()
        document.getElementById('sliderbox2').value = selectedOption2; // use .innerHTML if we want data on label
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