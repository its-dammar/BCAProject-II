<?php require('inc/header.php'); ?>
<?php require('inc/sidebar.php'); ?>

<!--Main container start -->
<main class="ttr-wrapper">
	<div class="container-fluid">
		<h4 class="breadcrumb-title">Edit Site Config</h4>
		<ul class="db-breadcrumb-list">
			<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
			<li>Edit Site Config</li>
		</ul>
	</div>
	<?php
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$select_query = "SELECT * FROM siteconfig WHERE id=$id";
		$select_result = mysqli_query($conn, $select_query);
		$select_row = $select_result->fetch_assoc();
	}

	?>
	<?php
	if (isset($_POST['submit'])) {
		$slider_img = $_POST['slider_img'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$fb_link = $_POST['fb_link'];
		$google_link = $_POST['google_link'];
		$linkedin_link = $_POST['linkedin_link'];
		$heading = $_POST['heading'];
		$logo = $_POST['logo'];
		$favicon = $_POST['favicon'];
		$home_bg = $_POST['home_bg'];

		if ($slider_img != "" && $phone != "" && $email != "" && $fb_link != "" && $google_link != "" && $linkedin_link != "" && $heading != "" && $logo != "" && $favicon != "" && $home_bg != "") {

			$update_query = "UPDATE siteconfig SET slider_img='$slider_img', phone='$phone', email='$email', fb_link='$fb_link', google_link='$google_link', linkedin_link='$linkedin_link', heading='$heading', logo='$logo', favicon='$favicon', home_bg='$home_bg'";
			$update_result = mysqli_query($conn, $update_query);
			if ($update_result) {
	?>
				<meta http-equiv="refresh" content="0,url=managesiteconfig.php?msg=esiteconfigsuccess">

	<?php
			} else {
				echo "Site Config couldn't be updated.";
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

							<!-- Bootstrap modal start -->

							<div class="col-12">

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


							<div class="form-group col-12 mb-0">
								<label class="col-form-label">Slider Image</label>
							</div>

							<div class="input-group mb-3 col-12">
								<input id="sliderbox" type="text" class="form-control" name="slider_img" value="<?php echo $select_row['slider_img'] ?>" readonly>
								<div class="input-group-append">
									<button type="button" class="btn-primary" data-toggle="modal" data-target="#modelId1">Choose Image
									</button>
								</div>
							</div>

							<div class="form-group col-12">
								<label class="col-form-label">Phone</label>
								<div>
									<input class="form-control" type="text" name="phone" value="<?php echo $select_row['phone']; ?>">
								</div>
							</div>
							<div class="form-group col-12">
								<label class="col-form-label">Email</label>
								<div>
									<input class="form-control" type="email" name="email" value="<?php echo $select_row['email']; ?>">
								</div>
							</div>
							<div class="form-group col-12">
								<label class="col-form-label">Facebook Link</label>
								<div>
									<input class="form-control" type="text" name="fb_link" value="<?php echo $select_row['fb_link']; ?>">
								</div>
							</div>

							<div class="form-group col-12">
								<label class="col-form-label">Google Link</label>
								<div>
									<input class="form-control" type="text" name="google_link" value="<?php echo $select_row['google_link']; ?>">
								</div>
							</div>

							<div class="form-group col-12">
								<label class="col-form-label">Linkedin Link</label>
								<div>
									<input class="form-control" type="text" name="linkedin_link" value="<?php echo $select_row['linkedin_link']; ?>">
								</div>
							</div>

							<div class="form-group col-12">
								<label class="col-form-label">Heading</label>
								<div>
									<input class="form-control" type="text" name="heading" value="<?php echo $select_row['heading']; ?>">
								</div>
							</div>

							<!-- Bootstrap modal start -->

							<div class="col-12">
								<!-- <button type="button" class="btn-primary" data-toggle="modal" data-target="#modelId2">Choose Image
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
								<label class="col-form-label">Logo</label>
								<!-- <div>
                                                <input id="imagebox" class="form-control" name="img" type="text" value="">
                                            </div> -->
							</div>

							<div class="input-group mb-3 col-12">
								<input id="imagebox" type="text" class="form-control" name="logo" value="<?php echo $select_row['logo']; ?>" readonly>
								<div class="input-group-append">
									<button type="button" class="btn-primary" data-toggle="modal" data-target="#modelId2">Choose Image
									</button>
								</div>
							</div>

							<!-- Bootstrap modal start -->

							<div class="col-12">
								<!-- <button type="button" class="btn-primary" data-toggle="modal" data-target="#modelId2">Choose Image
                                    </button> -->

								<div class="modal fade" id="modelId3" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
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
																<input type="radio" name="filename3" value="<?php echo $data_select['filelink']; ?>" style="opacity: 0;" />
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
												<button type="button" class="btn btn-primary" data-dismiss="modal" onclick="thirdFunction()">Save</button>
											</div>
										</div>
									</div>
								</div>

							</div>

							<!-- Bootstrap modal end -->


							<div class="form-group col-12 mb-0">
								<label class="col-form-label">Favicon</label>
								<!-- <div>
                                                <input id="imagebox" class="form-control" name="img" type="text" value="">
                                            </div> -->
							</div>

							<div class="input-group mb-3 col-12">
								<input id="iconbox" type="text" class="form-control" name="favicon" value="<?php echo $select_row['favicon']; ?>" readonly>
								<div class="input-group-append">
									<button type="button" class="btn-primary" data-toggle="modal" data-target="#modelId3">Choose Image
									</button>
								</div>
							</div>

							<!-- Bootstrap modal start -->

							<div class="col-12">
								<!-- <button type="button" class="btn-primary" data-toggle="modal" data-target="#modelId2">Choose Image
                                    </button> -->

								<div class="modal fade" id="modelId4" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
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
																<input type="radio" name="filename4" value="<?php echo $data_select['filelink']; ?>" style="opacity: 0;" />
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
												<button type="button" class="btn btn-primary" data-dismiss="modal" onclick="fourthFunction()">Save</button>
											</div>
										</div>
									</div>
								</div>

							</div>

							<!-- Bootstrap modal end -->


							<div class="form-group col-12 mb-0">
								<label class="col-form-label">Home BG</label>
								<!-- <div>
                                                <input id="imagebox" class="form-control" name="img" type="text" value="">
                                            </div> -->
							</div>

							<div class="input-group mb-3 col-12">
								<input id="bgbox" type="text" class="form-control" name="home_bg" value="<?php echo $select_row['home_bg']; ?>" readonly>
								<div class="input-group-append">
									<button type="button" class="btn-primary" data-toggle="modal" data-target="#modelId4">Choose Image
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

	function thirdFunction() {
		var selectedOption3 = document.querySelector('input[name=filename3]:checked').value;
		//var selectedOption = $("input:radio[name=filename]:checked").val()
		document.getElementById('iconbox').value = selectedOption3; // use .innerHTML if we want data on label
	}

	function fourthFunction() {
		var selectedOption4 = document.querySelector('input[name=filename4]:checked').value;
		//var selectedOption = $("input:radio[name=filename]:checked").val()
		document.getElementById('bgbox').value = selectedOption4; // use .innerHTML if we want data on label
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