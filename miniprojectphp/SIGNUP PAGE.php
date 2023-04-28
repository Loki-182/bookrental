<?php
    include 'db.php';
    if(isset($_POST['submit'])){
        $firstname=$_POST['first_name'];
		$lastname=$_POST['last_name'];
        $email=$_POST['email'];
		$password=$_POST['password'];
        $gender =$_POST['gender'];
        $birthdate=$_POST['birthdate'];
		$country=$_POST['country'];
        $verify_query= mysqli_query($con,"SELECT * FROM users WHERE email='$email'");
        if(mysqli_num_rows($verify_query)!=0){
            $error[]= 'user already exist!';
        }
        else{
            $insert="INSERT INTO users(firstname,lastname,email,password,gender,country,birthdate) VALUES ('$firstname','$lastname','$email','$pasword','$gender','$country','$birthdate')";
            mysqli_query($con,$insert) or die("error occured");
            $error[]='Successfully Registred';
           header('location:Loginpage.php');
        }
    }
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>Advanced Signup Page</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
   
    <link rel="icon" type="image/x-icon" href="title icon.png">
</head>
<body>
  <div class="total">
	<div class="signup-form">
		<h2>Signup</h2>
		<form action="" method="post">
			<?php 
			if(isset($error)){
				foreach($error as $error){
					echo $error;
				};
			};
			?>
			<label for="first-name">First Name:</label>
			<input type="text" id="first-name" name="first_name" required>

			<label for="last-name">Last Name:</label>
			<input type="text" id="last-name" name="last_name" required>

			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required>

			<label for="password">Password:</label>
			<input type="password" id="password" name="password" minlength="8" required>

			<label for="confirm-password">Confirm Password:</label>
			<input type="password" id="confirm-password" name="confirm_password" minlength="8" required>

			<label for="birthdate">Birthdate:</label>
			<input type="date" id="birthdate" name="birthdate" required>

			<label for="gender">Gender:</label>
			<select id="gender" name="gender" required>
				<option value="">Select Gender</option>
				<option value="male">Male</option>
				<option value="female">Female</option>
				<option value="other">Other</option>
			</select>

			<label for="country">Country:</label>
			<input type="text" id="country" name="country" required>
			<input type="submit" value="signup" name="submit">
			<button type="submit"  id="submit-btn">Submit</button>
           <center> <a href="Loginpage.php">Login</a></center>
		</form>
	</div>
 </div>

	<script src="script.js"></script>
</body>
</html>
