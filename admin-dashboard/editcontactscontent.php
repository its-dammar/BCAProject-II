<?php require('inc/header.php'); ?>
<?php require('inc/sidebar.php'); ?>

<!--Main container start -->
<main class="ttr-wrapper">
	<div class="container-fluid">
		<div class="db-breadcrumb">
			<h4 class="breadcrumb-title">Edit Contact Content</h4>
			<ul class="db-breadcrumb-list">
				<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
				<li>Edit Contact Content</li>
			</ul>
		</div>
		<?php
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$show_query = "SELECT * FROM contact_content WHERE id=$id";
			$show_result = mysqli_query($conn, $show_query);
			$show_row = $show_result->fetch_assoc();
		}
		?>


		<?php
		if (isset($_POST['submit'])) {
			$slider_img = addslashes($_POST['slider_img']);
			$title = addslashes($_POST['title']);
			$description = addslashes($_POST['description']);
			$btn_text = addslashes($_POST['btn_text']);
			$map = addslashes($_POST['map']);

			if ($slider_img != "" && $title != "" && $description != "" && $btn_text != "" && $map != "") {
				$query = "UPDATE contact_content SET slider_img = '$slider_img', title ='$title', description='$description', btn_text = '$btn_text', map = '$map' WHERE id=$id";
				$result = mysqli_query($conn, $query);
				if ($result) {
		?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<strong>Contact Content is updated successfully.</strong>
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
						<strong>Contact Content couldn't be updated successfully.</strong>
					</div>
		<?php
				}
			}
		} else {
			echo "All fields are necessary.";
		}
		?>


		<!-- Main content -->
		<section class="content">
			<div class="container-fluid">
				<!-- Small boxes (Stat box) -->

				<div class="row">
					<!-- Your Profile Views Chart -->
					<div class="col-lg-8 m-b30">
						<div class="widget-box">
							<div class="widget-inner">
								<form class="edit-profile m-b30" form action="#" method="POST" enctype="multipart/form-data">
									<div class="row">
										<div class="form-group col-12">
											<label class="col-form-label">Slider Image</label>
											<div>
												<input class="form-control" name="slider_img" type="text" value="<?php echo $show_row['slider_img']; ?>">
											</div>
										</div>
										<div class="form-group col-12">
											<label class="col-form-label">Title</label>
											<div>
												<input class="form-control" name="title" type="text" value="<?php echo $show_row['title']; ?>">
											</div>
										</div>
										<div class="form-group col-12">
											<label class="col-form-label">Description</label>
											<div>
												<textarea class="form-control" name="description" cols="30" rows="10"><?php echo $show_row['description']; ?></textarea>
											</div>
										</div>
										<div class="form-group col-md-12">
											<label class="col-form-label">Button Text</label>
											<div>
												<input type="text" class="form-control" value="<?php echo $show_row['btn_text']; ?>" name="btn_text" id="" aria-describedby="helpId" placeholder="">
											</div>
										</div>
										<div class="form-group col-12">
											<label class="col-form-label">Map</label>
											<div>
												<input class="form-control" type="text" value="<?php echo $show_row['map']; ?>" name="map">
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