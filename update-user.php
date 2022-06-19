
<?php include("inc/header.php") ;?>

<body class="" style="background-color:#A1A1A1">

    <?php include("inc/navbar.php") ;?>

    <section class="m-5">
        <div class="container col-sm-6 col-md-6 xm-auto bg-dark p-5 signup">
            <div class="row pb-3">
                <div class=" col-md-6 d-flex justify-content-start text-white">
                    <h2>Sign Up Free</h2>
                </div>
                <div class="col-md-6 image-register d-flex justify-content-end">
                    <img class="col-12 col-md-6" alt="Logo" src="admin/assets/images/logoblue.png" width="190"
                        height="57">
                </div>
                <span class="text-warning d-flex justify-content-end pt-0">Business Directory</span>

            </div>
        <?php
        if (isset($_POST['submit'])) 
        {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            $confirm_password = md5($_POST['confirm_password']);

            if ($name != "" && $email != "" && $password != "" && $confirm_password!="") 
            {
               if($password == $confirm_password)
                {
                    
                    $query = "INSERT INTO users (name, phone, email, password) 
                    VALUES ('$name', '$phone', '$email', '$password')";
                    echo $query;
                    $result = mysqli_query($conn, $query);
                    // $query1 = "INSERT INTO superusers (name,phone, email, password,confirm_password) 
                    // VALUES ('$name', '$phone', '$email', '$password', '$confirm_password')";
                
                    // $result = mysqli_query($conn, $query1);
                    if ($result) 
                    {
                        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>User user added successfully</strong> 
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
                    echo "<meta http-equiv='refresh' content='2;URL=user-signup.php'>";
                    } else 
                    {
                        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                        <strong>User is not added</strong> Please, try again.
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
                    echo "<meta http-equiv='refresh' content='2;URL=user-signup.php'>";
                        }
                        
                }
                else
                {
                    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>Password does not match</strong> 
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
                    echo "<meta http-equiv='refresh' content='2;URL=user-signup.php'>";
                    
                }
                } 
                else 
                {
                    echo "<div class='alert alert-info alert-dismissible fade show' role='alert'>
                    <strong>Fill all fiends</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
                echo "<meta http-equiv='refresh' content='2;URL=user-signup.php'>";
                }
        }
            
        ?>
            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3 ">
                            <label for="exampleInputName" class="form-label text-white fs-4">Name</label>
                            <input type="text" class="form-control" name="name" id="exampleInputName"
                                aria-describedby="nameHelp">
                        </div>
                        <div class="mb-3 ">
                            <label for="exampleInputPhone" class="form-label text-white fs-4">Phone</label>
                            <input type="tel" class="form-control" name="phone" id="exampleInputPhone"
                            pattern="[0-9]{10}"  aria-describedby="phoneHelp">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3 ">
                            <label for="exampleInputEmail1" class="form-label text-white fs-4">Email address</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label text-white fs-4">Password</label>
                            <input type="text" class="form-control" name="password" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label text-white fs-4">Confirm
                                Password</label>
                            <input type="text" class="form-control" name="confirm_password" id="exampleInputPassword1">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class=" text-white" for="exampleCheck1">
                        <a href="user-login.php" class="text-warning">I Have already Account</a>
                    </label>
                </div>
                <button type="submit" class="btn btn-outline-light fs-4" name="submit">Submit</button>


            </form>
        </div>

    </section>
    <?php include("inc/footer.php") ;?>