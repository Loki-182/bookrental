
<?php
    include 'db.php';
    session_start();
     if(isset($_POST['submit'])){
        //  $name=$_POST['name'];
         $email=$_POST['email'];
         $pass=$_POST['password'];
        //  $phoneno =$_POST['phoneno'];
         $verify_query= mysqli_query($con,"SELECT * FROM users WHERE user_email='$email' && user_password='$pass'");
        if(mysqli_num_rows($verify_query)!=0){
            $row=mysqli_fetch_array($verify_query);
            $_SESSION['user_name']=$row['username'];
            header('location:mainpage.php');
        }
        else{
        //     $insert="INSERT INTO users(username,user_email,user_phoneno,user_password) VALUES ('$name','$email','$phoneno','$pass')";
        //     mysqli_query($con,$insert) or die("error occured");
        //     $error[]='Successfully Registred';
        //    header('location:login.php');
            echo 'incorrect credentials';
        }
     }
    
?><!DOCTYPE html>
<html>
<head>
	<title>Book Rental Website</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h1>Book Rental Website</h1>
		<nav>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Browse Books</a></li>
				<li><a href="#">My Rentals</a></li>
			</ul>
		</nav>
	</header>

	<main>
		<section class="book-list">
			<h2 id="books">Books Available for Rent</h2>
			<div class="filters">
				<label for="category">Category:</label>
				<select id="category">
					<option value="">All Categories</option>
					<option value="fiction">Fiction</option>
					<option value="non-fiction">Self Help</option>
					<option value="biography">Biography</option>
					<option value="history">History</option>
				</select>
				<label for="sort">Sort By:</label>
				<select id="sort">
					<option value="title">Title</option>
					<option value="author">Author</option>
					<option value="rating">Rating</option>
				</select>
			</div>
            <div id="book1" >
			<ul>
				<li type="none">
					<img src="book1.png" alt="Book 1">
					<h3>The Magic of thinking Big</h3>
					<p class="author">Author: David Schwartz</p>
					<p class="category">Category: Self Help</p>
					<p class="rating">Rating: 4.1/5</p>
                </div>
					<div class="buttons">
						<button type="button" class="rent-btn">Rent Now</button>
						<button type="button" class="wishlist-btn"><i class="far fa-heart"></i> Add to Wishlist</button>
					</div>
				</li><br>
				<li type="none">
					<img src="book2.jpg" alt="Book 2">
					<h3>As a Man Thinketh</h3>
					<p class="author">Author: James Allen</p>
					<p class="category">Category: Self Help</p>
					<p class="rating">Rating: 4.3/5</p>
                    <div class="buttons">
						<button type="button" class="rent-btn">Rent Now</button>
						<button type="button" class="wishlist-btn"><i class="far fa-heart"></i> Add to Wishlist</button>
					</div>
					<footer>
                        <table align="center">
                            <tr>
                                <th> Previous</th>
                                <th> <a  href="./page2.html">Next</a></th>
                                
                               
                            </tr>
                            <br>
                            <li type="none">
                                <img src="book5.jpg" alt="Book 2">
                                <h3>Indian History</h3>
                                <p class="author">Author: John Keay</p>
                                <p class="category">Category: History</p>
                                <p class="rating">Rating: 3.8/5</p>
                                <div class="buttons">
                                    <button type="button" class="rent-btn">Rent Now</button>
                                    <button type="button" class="wishlist-btn"><i class="far fa-heart"></i> Add to Wishlist</button>
                                </div><br>
                                <li type="none">
                                    <img src="book6.jpg" alt="Book 2">
                                    <h3>1776</h3>
                                    <p class="author">David McCullough</p>
                                    <p class="category">Category: History</p>
                                    <p class="rating">Rating: 4.7/5</p>
                                    <div class="buttons">
                                        <button type="button" class="rent-btn">Rent Now</button>
                                        <button type="button" class="wishlist-btn"><i class="far fa-heart"></i> Add to Wishlist</button>
                                    </div>
                    </table>
	</main>

	<footer>
		<p>&copy; 2023 Book Rental Website</p>
	</footer>

	<script src="script.js"></script>
</body>
</html>
