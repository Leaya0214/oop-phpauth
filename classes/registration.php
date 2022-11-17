<?php 
    include "database.php";
    
    class Register extends Database{

        function registration($data){
            $fname = $data["fName"];
            $uname = $data["uName"];
            $email = $data["email"];
            $password = $data["password"];
            $cpassword = $data["cpassword"];
            $role = "user";
            $status = "0";

            if(empty($fname)){
                echo "Full Name Field must be required";
            }elseif (empty($uname)) {
                echo "User Name Field must be required";
            }elseif (empty($email)) {
                echo "Email Field must be required";
            }elseif (empty($password)) {
                echo "Password Field must be required";
            }elseif($password != $cpassword){
                echo "Password does not match";
            }else{
                $check = $this->check($uname,$email);
                if($check == TRUE){
                    echo 'This user has already exist';

                }else{
                    $password = md5($password);
                    $data = $this->con->query("INSERT INTO tbl_users(fName,uName,email,password,role,status) VALUES ('$fname','$uname','$email','$password','$role','$status')");
                    if($data){
                        echo 'registration successfull';
                    }else{
                        echo 'Registration not successfull';
                    }
                }
            }

        }

        function check($uname,$email){
            $result = $this->con->query("SELECT *FROM tbl_users WHERE uName='$uname' OR email='$email' ");
            if($result->num_rows>0){
                return true;
            }else{
                return false;
            }

        }

        function login($data){
            $usernameOremail = $data["uName"];
            $password = $data["password"];
            $password = md5($password);
            
            $result = $this->con->query("SELECT *FROM tbl_users WHERE (uName='$usernameOremail' OR email='$usernameOremail') AND password ='$password' ");
            if($result->num_rows>0){
                header("location: dashboard.php");
            }else{
                header("location: login.php");
            }

        }

        
    }
    ?>