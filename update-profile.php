<?php include("inc/header.php") ;?>

<body class="" style="background-color:#A1A1A1">

    <?php include("inc/navbar.php") ;?>

    <section class="m-5">
        <div class="container col-sm-6 col-md-8 xm-auto bg-dark p-5 signup">
            <div class="row pb-3">
                <div class=" col-md-6 d-flex justify-content-start text-white">
                    <h2>Your Listing</h2>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <?php if (isset($_SESSION['name'])) {
                        // echo $_SESSION['name'];
                        $id = $_SESSION['id'];
                        $show_query = "SELECT * FROM users WHERE id='$id'";
                        $show_result = mysqli_query($conn, $show_query);
                        $show_row = $show_result->fetch_assoc();
                        echo "<div class='d-block'>";
                        echo "<div>";
                            echo " <a href='user-profile.php'class='text-white text-center'>
                            <i class='fa-solid fa-user text-decoration-none text-center text-white'title='". $show_row['name']."' style='color:white; font-size:40px; text-align:center;'></i> </a>";
                        echo "</div>";
                        echo "<div>";
                            echo " <a href='user-profile.php'class='text-decoration-none'><span class='text-white'>". $show_row['name']."</span></a>";
                            echo "</div>";
                    echo "</div>";
                    }
                        ?>
                </div>
            </div>


            <div class="your-listing">
                <?php
        if (isset($_POST['submit'])) 
        {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $id = $_SESSION['id'];

            if ($name != "" && $email != "") 
            {
                        
                $query = "UPDATE users SET name='$name', phone='$phone', email='$email' WHERE id ='$id'";
                $result = mysqli_query($conn, $query);
                if ($result) 
                {
                    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <strong>User  update successfully</strong> 
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
                echo "<meta http-equiv='refresh' content='2;URL=update-profile.php'>";
                } else 
                {
                    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>User is not update</strong> Please, try again.
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
                echo "<meta http-equiv='refresh' content='2;URL=update-profile.php'>";
                }
            }
            else 
            {
                echo "<div class='alert alert-info alert-dismissible fade show' role='alert'>
                <strong>Fill all fiends</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
            echo "<meta http-equiv='refresh' content='2;URL=update-profile.php'>";
            }
        }
            
        ?>
                <div class="row">
                    <div class="col-md-12 m-auto">
                        <?php  
                        if(isset($_SESSION["email"]) == true){

                                $id = $_SESSION['id'];
                                $show_query = "SELECT * FROM users WHERE id=$id";
                                $show_result = mysqli_query($conn, $show_query);
                                $show_row = $show_result->fetch_assoc();
                       
                         
                        ?>
                        <form action="#" method="POST" enctype="multipart/form-data">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 ">
                                        <label for="exampleInputEmail1" class="form-label text-white fs-4">Name</label>
                                        <input type="text" class="form-control" name="name" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="<?php echo $show_row['name']; ?>  ">
                                    </div>
                                    <div class="mb-3 ">
                                        <label for="exampleInputEmail1" class="form-label text-white fs-4">Phone</label>
                                        <input type="tel" class="form-control" name="phone" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="<?php echo $show_row['phone']; ?>  ">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3 ">
                                        <label for="exampleInputEmail1" class="form-label text-white fs-4">Email
                                            address</label>
                                        <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value=" <?php echo $show_row['email']; ?>  ">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-outline-light fs-4" name="submit">Submit</button>
                        </form>
                        <?php 

                            } else{
                                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                                        <strong>You are not login</strong>
                                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                        </div>";
                                        echo "<meta http-equiv='refresh' content='1.5; URL=index.php'>";  
                            }
                            ?>

                    </div>
                </div>
            </div>
        </div>

    </section>
    <?php include("inc/footer.php") ;?>