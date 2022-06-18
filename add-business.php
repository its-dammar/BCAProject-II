<?php

//  if(isset($_SESSION['id']))
//  {
//     require('secure_admin.php'); 
//  }
?>
<?php include("inc/header.php") ;?>

<body class=" " style="background-color:#A1A1A1">

    <?php include("inc/navbar.php") ;?>

    <section class="m-5">
        <div class="container bg-dark p-5 ">
            <div class="row pb-3">
                <div class=" col-md-6 d-flex justify-content-start text-white">
                    <h2>Add Business Free</h2>
                </div>
                <div class="col-md-6 image-register d-flex justify-content-end">
                    <img class="col-12 col-md-6" alt="Logo" src="admin/assets/images/logoblue.png" width="211"
                        height="57">
                </div>
                <span class="text-warning d-flex justify-content-end pt-0">Business Directory</span>

            </div>

            <?php
                if(isset($_POST['submit'])){
                    $business_name = addslashes($_POST['business_name']);
                    $address = addslashes($_POST['address']);
                    $mobile = addslashes($_POST['mobile']);
                    $business_category = addslashes($_POST['business_category']);
                    $logo = addslashes($_POST['logo']);
                    $country = addslashes($_POST['country']);
                    $provience = addslashes($_POST['provience']);
                    $district = addslashes($_POST['district']);
                    $zip_code = addslashes($_POST['zip_code']);
                    $business_email = addslashes($_POST['business_email']);
                    $description = addslashes($_POST['description']);

                    if($business_name!="" && $address!="" && $mobile!="" && $business_category!="" && $logo!="" && $country!="" && $provience!="" && $district!="" && $zip_code!="" && $business_email!="" && $description!=""){
                        $query = "INSERT INTO businesslists (business_name, address, mobile, business_category, logo, country, provience, district, zip_code, business_email, description) 
                        VALUES ('$business_name', '$address', '$mobile', '$business_category', '$logo', '$country', '$provience', '$district', '$zip_code', '$business_email', '$description')";
                        echo $query;
                        $result = mysqli_query($conn,$query);
                        if($result){
                            echo "<div class='alert alert-success'>Business Added Successfully</div>";
                            echo "<meta http-equiv='refresh' content='0.5;URL=index.php'>";
                        
                        }
                        else{
                            echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                            <strong>Business is not added</strong> Please, try again.
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                          </div>";
                        }
                }
                else{
                    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>Please fill all the fields</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                  </div>";
                }
            }
            ?>
            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="row">

                    <div class="col-md-6">
                        <div class="mb-3 ">
                            <label for="exampleInputName" class="form-label text-white fs-5">Business Name</label>
                            <input type="text" class="form-control" name="business_name" id="exampleInputName"
                                aria-describedby="nameHelp">
                        </div>
                        <div class="mb-3 ">
                            <label for="exampleInputaddress" class="form-label text-white fs-5">address</label>
                            <input type="text" class="form-control" name="address" id="exampleInputaddress"
                                aria-describedby="addressHelp">
                        </div>
                        <div class="mb-3 ">
                            <label for="exampleInputmobile" class="form-label text-white fs-5">mobile</label>
                            <input type="tel" class="form-control" name="mobile" id="exampleInputmobile" 
                            pattern="[0-9]{10}"   aria-describedby="mobileHelp">
                        </div>
                        <div class="mb-3 ">
                            <label for="business_category" class="form-label text-white fs-5">Business Category</label>
                            <select id="inputProvience" class="form-select form-select1" name="business_category"
                                style="width:100%">
                                <option selected>Business Category</option>
                                <option value="bancking">Banking</option>
                                <option value="training center">Training Center</option>
                                <option value="college">College</option>
                            </select>
                        </div>
                        <div class="mb-3 ">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">
                                Logo
                            </button> <input type="text" class="form-control" name="logo" id="imagebox"
                                aria-describedby="logoHelp">

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
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
                                                        <input type="radio" name="logo"
                                                            value="<?php echo $data_select['filelink']; ?>"
                                                            style="opacity: 0;" />
                                                        <img src="<?php echo "uploads/" . $data_select['filelink']; ?>"
                                                            alt="" height="100px;" width="100px;"
                                                            style="margin-right:20px;">
                                                    </label>
                                                    <?php
															}
															?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"  data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="secondFunction()">Select</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 ">
                            <label for="exampleInputEmail1" class="form-label text-white fs-5">Business Email
                                address</label>
                            <input type="email" class="form-control" name="business_email" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3 ">
                            <label for="country" class="form-label text-white fs-5">Country</label>
                            <select id="country" class="form-select form-select1" name="country" style="width:100%">
                                <option selected>country</option>
                                <option value="nepal">Nepal</option>
                                <option value="china">China</option>
                                <option value="india">India</option>
                            </select>
                        </div>
                        <div class="mb-3 ">
                            <label for="provience" class="form-label text-white fs-5">Provience</label>
                            <select id="provience" class="form-select form-select1" name="provience" style="width:100%">
                                <option selected>Choose Proviece</option>
                                <option value="gamdaki">Gandaki</option>
                                <option value="suderpachim">Sudurpachim</option>
                                <option value="karnali">Karnali</option>
                            </select>
                        </div>
                        <div class="mb-3 ">
                            <label for="district" class="form-label text-white fs-5">District</label>
                            <select id="district" class="form-select form-select1" name="district" style="width:100%">
                                <option selected>Choose District</option>
                                <option value="Kaski">Kaski</option>
                                <option value="Bajhang">Bajhang</option>
                            </select>
                        </div>
                        <div class="mb-3 ">
                            <label for="exampleInputzipcode" class="form-label text-white fs-5">Zip Code</label>
                            <input type="number" class="form-control" name="zip_code" id="exampleInputzipcode"
                                aria-describedby="zipcodeHelp">
                        </div>
                        <div class="mb-3">
                            <div class="mb-3">
                                <label for="BusinessDescription" class="form-label text-white fs-5">Business
                                    Description</label>
                                <textarea class="form-control" id="BusinessDescription" rows="5" aria-label=""
                                    name="description"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-warning fs-5" name="submit">Add Business</button>
            </form>
        </div>
    </section>

    <?php include("inc/footer.php") ;?>