<?php

    include "classes/registration.php";
    $obj = new Register;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-md-5 offset-md-3 ">
            <?php 
                if(isset($_POST["save"])){
                  echo $obj->registration($_POST);
                }
            ?>
            <form action="" method="POST" class="mt-5">
                <div class="form-group">
                <label for="fName" >Fullname</label>
                <input type="text" class="form-control" name="fName" placeholder="Enter Your Fullname">
                </div>
                <div class="form-group">
                <label for="uName" >Username</label>
                <input type="text" class="form-control" name="uName" placeholder="Enter Your Username">
                </div>
                <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter your Password">
                </div>
                <div class="form-group">
                <label for="">Confirm Password</label>
                <input type="password" class="form-control" name="cpassword" placeholder="Confirm Your Password">
                </div>
                <input type="submit" name="save" class="form-control btn- btn-primary" value="Sign in">
            </form>
            <label class="mt-3">You are a member?
            <a href="login.php" >login here</a>
            </label>
            </div>
    </div>
    </div>
        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/js/fontawesome.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>