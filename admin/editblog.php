<?php require('inc/header.php'); ?>
<?php require('inc/sidebar.php'); ?>

<!--Main container start -->
<main class="ttr-wrapper">
	<div class="container-fluid">
		<div class="db-breadcrumb">
			<h4 class="breadcrumb-title">Edit Blog</h4>
			<ul class="db-breadcrumb-list">
				<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
				<li>Add Blog</li>
			</ul>
		</div>

		<?php
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$show_query = "SELECT * FROM blogs WHERE id=$id";
			$show_result = mysqli_query($conn, $show_query);
			$show_row = $show_result->fetch_assoc();
		}

		if (isset($_POST['submit'])) {
			$title = addslashes($_POST['title']);
			$content = addslashes($_POST['content']);
			$img = addslashes($_POST['img']);

			if ($title != "" && $content != "" && $img != "") {
				$query = "UPDATE blogs SET title='$title', content='$content', img='$img' WHERE id=$id";
				$result = mysqli_query($conn, $query);
				if ($result) {
		?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<strong>Blog is updated successfully.</strong>
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
						<strong>Blog couldn't be updated successfully.</strong>
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
								<div class="form-group col-12">
									<label class="col-form-label">Title</label>
									<div>
										<input class="form-control" value="<?php echo $show_row['title']; ?>" type="text" name="title">
									</div>
								</div>
								<div class="form-group col-12">
									<label class="col-form-label">Content</label>
									<div>
										<textarea name="content" class="form-control" id="" cols="30" rows="10"><?php echo $show_row['content']; ?></textarea>
									</div>
								</div>

								<!-- Bootstrap modal start -->

								<div class="col-12">

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
															while ($data_select = mysqli_fetch_array($select_result)) {
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
								</div>

								<div class="input-group mb-3 col-12">
									<input id="imagebox" type="text" class="form-control" name="img" value="<?php echo $show_row['img']; ?>" readonly>
									<div class="input-group-append">
										<button type="button" class="btn-primary" data-toggle="modal" data-target="#modelId2">Choose Image
										</button>
									</div>
								</div>

								<div class="form-group col-12">
									<button type="submit" name="submit" class="btn">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Your Profile Views Chart END-->
	</div>
	</div>
</main>
<div class="ttr-overlay"></div>

<script>
	function secondFunction() {
		var selectedOption2 = document.querySelector('input[name=filename2]:checked').value;
		document.getElementById('imagebox').value = selectedOption2;
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