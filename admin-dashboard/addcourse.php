<?php require('inc/header.php'); ?>
<?php require('inc/sidebar.php'); ?>

<!--Main container start -->
<main class="ttr-wrapper">
	<div class="container-fluid">
		<div class="db-breadcrumb">
			<h4 class="breadcrumb-title">Add Course</h4>
			<ul class="db-breadcrumb-list">
				<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
				<li>Add Course</li>
			</ul>
		</div>
		<?php
		if (isset($_POST['submit'])) {
			$course_category_id = $_POST['cat_id'];
			$title = $_POST['title'];
			$content = $_POST['content'];
			$img = $_POST['img'];

			if ($course_category_id != "" && $title != "" && $content != "" && $img != "") {

				$insert_query = "INSERT INTO course (course_category_id, title, content, img) VALUES (' $course_category_id', '$title', '$content', '$img')";
				$insert_result = mysqli_query($conn, $insert_query);
				if ($insert_result) {
		?>
					<meta http-equiv="refresh" content="0,url=managecourse.php?msg=acoursesuccess">

		<?php
				} else {
					echo "Course couldn't be added.";
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
								<div class="form-group col-12">
									<label class="col-form-label" for="">Category</label>
									<select name="cat_id">
										<option disabled selected>-- Select Course Category --</option>
										<?php
										$select_query = "SELECT * FROM course_category";
										$select_result = mysqli_query($conn, $select_query);
										while ($data = mysqli_fetch_array($select_result)) {
										?>
											<option value="<?php echo $data['category_id']; ?>"><?php echo $data['name']; ?></option>
										<?php
										}
										?>
									</select>
								</div>
								<div class="form-group col-12">
									<label class="col-form-label">Title</label>
									<div>
										<input class="form-control" type="text" name="title">
									</div>
								</div>

								<div class="form-group col-12">
									<label class="col-form-label">Content</label>
									<div>
										<textarea class="form-control" name="content" id="content" rows="3"></textarea>
									</div>
								</div>

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
									<!-- <div>
                                        <input id="imagebox" type="text" class="form-control" name="img">
                                    </div> -->
								</div>

								<div class="input-group mb-5 col-12">
									<input id="imagebox" type="text" class="form-control" name="img" readonly>
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