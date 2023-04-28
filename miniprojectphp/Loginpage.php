<?php
    include 'db.php';
    session_start();
     if(isset($_POST['submit'])){
        //  $name=$_POST['name'];
         $email=$_POST['email'];
         $pass=$_POST['password'];
        //  $phoneno =$_POST['phoneno'];
         $verify_query= mysqli_query($con,"SELECT * FROM users WHERE email='$email' && password='$pass'");
        if(mysqli_num_rows($verify_query)!=0){
            $row=mysqli_fetch_array($verify_query);
            $_SESSION['user_name']=$row['firstname'];
            header('location:afterlogin.php');
        }
        else{
        //     $insert="INSERT INTO users(username,user_email,user_phoneno,user_password) VALUES ('$name','$email','$phoneno','$pass')";
        //     mysqli_query($con,$insert) or die("error occured");
        //     $error[]='Successfully Registred';
        //    header('location:login.php');
            echo 'incorrect credentials';
        }
     }
    
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
    <link rel="icon" type="image/x-icon" href="title icon.png">
    <style>
      body {
        background-color: #f2f2f2;
        font-family: Arial, sans-serif;
        background-image: url("bg\ login.jpg");
      }

      #login-form {
        background-color: mediumaquamarine;
        border-radius: 5px;
        box-shadow: 0px 0px 10px 2px rgba(0, 0, 0, 0.1);
        margin: 100px auto;
        padding: 20px;
        max-width: 400px;
       
      }

      #login-form label {
        display: block;
        margin-bottom: 10px;
      }

      #login-form input[type="text"],
      #login-form input[type="password"] {
        border-radius: 3px;
        border: none;
        box-shadow: inset 0px 0px 5px rgba(0, 0, 0, 0.1);
        padding: 10px;
        width: 100%;
      }

      #login-form input[type="submit"] {
        background-color: #4CAF50;
        border: none;
        border-radius: 3px;
        color: #ffffff;
        cursor: pointer;
        margin-top: 10px;
        padding: 10px;
        width: 100%;
      }

      #login-form input[type="submit"]:hover {
        background-color: #3e8e41;
      }

      #login-form p {
        margin-top: 10px;
        text-align: center;
      }
      .total{
    background-image: url("bg\ login.jpg");
      }
    </style>
  </head>
 
  <body>
    
    <form id="login-form"  method="post" >
      <label for="username">Username or Email</label>
      <input type="text" id="username" name="email" required />

      <label for="password">Password</label>
      <input type="password" id="password" name="password" required />

      <input type="submit" name="submit" value="Log In" />

      <p>Don't have an account? <a href="SIGNUP PAGE.php">Sign Up</a></p><br>
     <center> <p> <a href=""> Forgot Password</a></p></center>
    </form>
  </body>

</html>
