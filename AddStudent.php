<?php
include_once('connectionDB.php');
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Update</title>

     <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/templatemo-digital-trend.css">
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
 </head>
 <body>
 <?php
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['id'];
        $FirstName = $_POST['FirstName'];
        $LastName = $_POST['LastName'];
        $gpa = $_POST['gpa'];

        $query = "INSERT INTO student(id,FirstName,LastName,gpa) VALUES ('$id','$FirstName','$LastName','$gpa')";
        $result = mysqli_query($connection, $query);

        if ($result) {
            echo "New record created ";
            header('Location:dashboard.php');
            exit();
        } else {
            echo "faild record created ";
        }
    }
    ?>
<!--  -->
<div class="main">
<section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Add Material</h2>
                        <form method="POST" class="register-form" id="register-form" >
                            <div class="form-group">
                                <label for="id"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="id"  placeholder="Your id" value=""/>
                            </div>
                            <div class="form-group">
                                <label for="FirstName"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="FirstName"  placeholder="FirstName"/>
                            </div>
                            <div class="form-group">
                                <label for="LastName"><i class="zmdi zmdi-lock"></i></label>
                                <input type="text" name="LastName"  placeholder="LastName" />
                            </div>
                            <div class="form-group">
                                <label for="gpa"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="text" name="gpa"  placeholder="gpa"/>
                            </div>
                            <!-- <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div> -->
                            <div class="form-group form-button">
                                <input type="submit" name="std_update" class="form-submit" value="Update"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="https://pbs.twimg.com/media/FSlhAGkXwAg9iUN?format=png&name=large" style="margin-top: -45px;" alt="sing up image"></figure>
                        <!-- <a href="#u" class="signup-image-link">I am already member</a> -->
                    </div>
                </div>
            </div>
        </section>
</div>


    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
 </body>
 </html>