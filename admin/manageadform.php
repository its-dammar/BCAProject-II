<?php require('inc/header.php');

require('inc/sidebar.php');
?>
<!-- Left sidebar menu end -->

<!--Main container start -->
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Manage Admission Form</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>Manage Admission Form</li>
            </ul>
        </div>

        <button class="btn-primary mb-2 mr-1 px-2 rounded" onClick="window.location.href='addadform.php';"><i class="fa fa-plus"></i></button>
        <button class="btn-primary mb-2 mr-1 px-2 rounded" onClick="window.location.reload();"><i class="fa fa-refresh"></i></button>

        <button onclick="exportToExcel('tblexportData', 'user-data')" class="btn-primary mb-2 rounded"><i class="fa fa-download"></i> | Export Data</button>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <table id="tblexportData" class="table">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Address</th>
                                <th>Date of Birth</th>
                                <th>Contact</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>Course</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $select_query = "SELECT * FROM admission_form ";
                            $select_result = mysqli_query($conn, $select_query);
                            $sn = 0;
                            while ($data = mysqli_fetch_array($select_result)) {
                                $sn = $sn + 1;
                            ?>
                                <tr>
                                    <td><?php echo $sn; ?></td>
                                    <td><?php echo $data['fname']; ?></td>
                                    <td><?php echo $data['lname']; ?></td>
                                    <td><?php echo $data['address']; ?></td>
                                    <td><?php echo $data['dob']; ?></td>
                                    <td><?php echo $data['phone_number']; ?></td>
                                    <td><?php echo $data['email']; ?></td>
                                    <td><?php echo $data['gender']; ?></td>
                                    <td><?php echo $data['course']; ?></td>
                                    <td><span class="badge badge-info">
                                            <?php if ($data['status'] == 1) {
                                                echo "Active";
                                            } else {
                                                echo "Inactive";
                                            } ?></span></td>
                                    <td>
                                        <a name="" id="" class="btn btn-info btn-sm" href="editadform.php?id=<?php echo $data['id']; ?>" role="button">Edit</a>
                                        <a name="" id="" class="btn-secondry" href="deleteprocess/deleteadform.php?id=<?php echo $data['id']; ?>" role="button"onclick="return checkDelete()">Delete</a>
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

<script type="text/javascript">
    function exportToExcel(tableID, filename = '') {
        var downloadurl;
        var dataFileType = 'application/vnd.ms-excel';
        var tableSelect = document.getElementById(tableID);
        var tableHTMLData = tableSelect.outerHTML.replace(/ /g, '%20');

        // Specify file name
        filename = filename ? filename + '.xls' : 'export_excel_data.xls';

        // Create download link element
        downloadurl = document.createElement("a");

        document.body.appendChild(downloadurl);

        if (navigator.msSaveOrOpenBlob) {
            var blob = new Blob(['\ufeff', tableHTMLData], {
                type: dataFileType
            });
            navigator.msSaveOrOpenBlob(blob, filename);
        } else {
            // Create a link to the file
            downloadurl.href = 'data:' + dataFileType + ', ' + tableHTMLData;

            // Setting the file name
            downloadurl.download = filename;

            //triggering the function
            downloadurl.click();
        }
    }
</script>
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