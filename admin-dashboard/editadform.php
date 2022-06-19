<?php require('inc/header.php'); ?>
<?php require('inc/sidebar.php'); ?>

<!--Main container start -->
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Add Event</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>Add Event</li>
            </ul>
        </div>

        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $select_query = "SELECT * FROM admission_form WHERE id=$id";
            $select_result = mysqli_query($conn, $select_query);
            $select_row = $select_result->fetch_assoc();
        }
        ?>

        <?php

        $courses = mysqli_query($conn, "SELECT * FROM tb_course");
        if (isset($_POST['submit'])) {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $address = $_POST['address'];
            $dob = $_POST['dob'];
            $phone_number = $_POST['phone_number'];
            $email = $_POST['email'];
            $gender = $_POST['gender'];
            $course = $_POST['course'];

            if ($fname != "" && $lname != "" && $address != "" && $dob != "" && $phone_number != "" && $email != "" && $gender != "" && $course != "") {

                $insert_query = "UPDATE admission_form SET fname='$fname', lname='$lname', address='$address', dob='$dob', phone_number='$phone_number',email='$email', gender='$gender', course='$course' WHERE id=$id";
                $insert_result = mysqli_query($conn, $insert_query);
                if ($insert_result) {
        ?>
                    <meta http-equiv="refresh" content="0,url=manageadform.php?msg=addadformsuccess">
        <?php
                } else {
                    echo "Admission Form couldn't be added.";
                }
            } else {
                echo "All fields are necessary !";
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

                                <div class="form-group col-6">
                                    <label for="">First Name</label>
                                    <input type="text" name="fname" id="fname" class="form-control" value="<?php echo  $select_row['fname']; ?>" placeholder="Enter Your First Name" aria-describedby="helpId">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Last Name</label>
                                    <input type="text" name="lname" id="lname" class="form-control" value="<?php echo  $select_row['lname']; ?>" placeholder="Enter Your Last Name" aria-describedby="helpId">
                                </div>


                                <div class="form-group col-md-6">
                                    <label for="">Address</label>
                                    <input type="text" name="address" id="address" class="form-control" value="<?php echo  $select_row['address']; ?>" placeholder="Enter Your Address" aria-describedby="helpId">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Date of Birth</label>
                                    <input type="date" name="dob" id="dob" class="form-control" value="<?php echo  $select_row['dob']; ?>" placeholder="" aria-describedby="helpId">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="">Contact</label>
                                    <input type="text" name="phone_number" id="phone_number" class="form-control" value="<?php echo  $select_row['phone_number']; ?>" placeholder="Enter Your Contact Number" aria-describedby="helpId">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" value="<?php echo  $select_row['email']; ?>" placeholder="@gamil.com" aria-describedby="helpId">
                                </div>


                                <div class="form-group col-md-6">
                                    <label for="">Gender</label><br>
                                    <input type="radio" name="gender" value="Male" /> Male <br>
                                    <input type="radio" name="gender" value="Female" /> Female <br>
                                    <input type="radio" name="gender" value="Other" /> Other <br>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="">Course</label><br>
                                    <select name="course">
                                        <option>Please Select Your Course</option>
                                        <?php
                                        foreach ($courses as $rows) {
                                        ?>
                                            <option value="<?php echo $rows['course']; ?>" <?php if ($rows['course'] == $rows['course']) echo 'selected="selected"'; ?>><?php echo $rows['course']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
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
<script>
    // Pricing add
    function newMenuItem() {
        var newElem = $('tr.list-item').first().clone();
        newElem.find('input').val('');
        newElem.appendTo('table#item-add');
    }
    if ($("table#item-add").is('*')) {
        $('.add-item').on('click', function(e) {
            e.preventDefault();
            newMenuItem();
        });
        $(document).on("click", "#item-add .delete", function(e) {
            e.preventDefault();
            $(this).parent().parent().parent().parent().remove();
        });
    }
</script>
</body>

<!-- Mirrored from educhamp.themetrades.com/demo/admin/add-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:09:05 GMT -->

</html>