
<?php include("inc/header.php") ;?>

<!-- <meta http-equiv="refresh" content="0.5;URL=manageadmin.php"> -->
<body class="" style="background-color:#A1A1A1">

<?php include("inc/navbar.php") ;?>
    <section class="m-5">
        <div class="container col-sm-6 col-md-4 xm-auto bg-dark p-5 signin">
            <div class="row pb-3">
                <div class=" col-md-6 d-flex justify-content-start text-white">
                    <h2>Login Business</h2>
                </div>
                <div class="col-md-6 image-register d-flex justify-content-end">
                    <img class="col-12 col-md-6" alt="Logo" src="admin/assets/images/logoblue.png" width="190" height="57">
                </div>
                <span class="text-warning d-flex justify-content-end pt-0">Business Directory</span>

            </div>
            <form action="loginprocess/blogin.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3 ">
                    <label for="exampleInputEmail1" class="form-label text-white fs-4">Username</label>
                    <input type="text" class="form-control" name="username" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label text-white fs-4">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    
                    <label class="text-white" for="exampleCheck1">
                        <a href="business-signup.php"class=" text-warning">Sign UP</a>
                    </label>
                </div>
                <button type="submit" class="btn btn-outline-light fs-4" name="submit">Submit</button>
            </form>
        </div>

    </section>
   

<?php include("inc/footer.php") ;?>