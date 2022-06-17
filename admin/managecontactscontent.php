<?php require('inc/header.php');
require('inc/sidebar.php');
?>

<!-- Left sidebar menu end -->
<?php
if (isset($_GET['msg'])) {
  $msg = $_GET['msg'];
  if ($msg == "dsuccess") {
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <strong>Contact Content is deleted successfully.</strong>
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
      <strong>Contact Content is not deleted successfully.</strong>
    </div>

    <script>
      $(".alert").alert();
    </script>
<?php
  }
}
?>

<!--Main container start -->
<main class="ttr-wrapper">
  <div class="container-fluid">
    <div class="db-breadcrumb">
      <h4 class="breadcrumb-title">Manage Contact Content</h4>
      <ul class="db-breadcrumb-list">
        <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
        <li>Manage Contact Content</li>
      </ul>
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <table class="table">
            <thead>
              <tr>
                <th>S.N.</th>
                <th>Slider Image</th>
                <th>Title</th>
                <th>Description</th>
                <th>Button_text</th>
                <th>Map</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $select_query = "SELECT * FROM contact_content";
              $select_result = mysqli_query($conn, $select_query);
              $i = 0;
              while ($data_select = mysqli_fetch_array($select_result)) {
                $i++;
              ?>
                <tr>
                  <td scope="row"><?php echo $i; ?></td>
                  <td><img src="../uploads/<?php echo $data_select['slider_img']; ?>" alt="" height="50px;" width="50px;"></td>
                  <td><?php echo $data_select['title']; ?></td>
                  <td><?php echo $data_select['description']; ?></td>
                  <td><?php echo $data_select['btn_text']; ?></td>
                  <td><?php echo $data_select['map']; ?></td>
                  <td><span class="badge badge-info"><?php if ($data_select['status'] == 1) {
                                                        echo "Active";
                                                      } else {
                                                        echo "Inactive";
                                                      } ?></span></td>
                  <td>
                    <a name="" id="" class="btn btn-primary btn-sm" href="editcontactscontent.php?id=<?php echo $data_select['id']; ?>" role="button">Edit</a>
                    <a name="" id="" class="btn btn-danger btn-sm"onclick="return checkDelete()" href="process/deletecontactscontent.php?id=<?php echo $data_select['id']; ?>" role="button">Delete</a>
                  </td>
                </tr>
              <?php
              }
              ?>
              <!-- Your Profile Views Chart END-->
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