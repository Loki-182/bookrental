<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Book Rental Website</title>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/x-icon" href="title icon.png">
  <!-- JavaScript code for the image transition -->
  <script src="./slider.js"></script>
   <style>
.logo{
  width: 180px;
}
   </style>
 
</head>
<body>
  <header id="home">
    <img class="logo" src="Brooks.JPG"  alt="logo">

    <nav id="Home">
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#Books">Catalogue</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="Loginpage.php" target="_blank"><button>Login</button></a></li>
      </ul>
    </nav>
  </header>
  <main>
    <h2>Welcome to Book Rental</h2>
    <p><b>Here you can rent a wide variety of books at affordable prices. Browse our catalogue and find the perfect book for you.</b></p>
    <center><div id="slideshow">
      <img src="slider1.jpg" alt="Image 1" class="slideshow img">
      <img src="slider3.jpg" alt="Image 2" class="slideshow img">
      <img src="slider4.jpg" alt="Image 3" class="slideshow img">
    </div></center><br>
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="search-filter.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="container">
    <div class="row searchFilter" >
       <div class="col-sm-12" >
        <div class="input-group" >
         <input id="table_filter" type="text" class="form-control" aria-label="Text input with segmented button dropdown" >
         <div class="input-group-btn" >
          <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><span class="label-icon" >Category</span> <span class="caret" >&nbsp;</span></button>
          <div class="dropdown-menu dropdown-menu-right" >
             <ul class="category_filters" >
              <li >
               <input class="cat_type category-input" data-label="All" id="all" value="" name="radios" type="radio" ><label for="all" >All</label>
              </li>
              <li >
               <input type="radio" name="radios" id="Design" value="Design" ><label class="category-label" for="Design" >Self-help</label>
              </li>
              <li >
               <input type="radio" name="radios" id="Marketing" value="Marketing" ><label class="category-label" for="Marketing" >History</label>
              </li>
              <li >
               <input type="radio" name="radios" id="Programming" value="Programming" ><label class="category-label" for="Programming" >Programming</label>
              </li>
              <li >
               <input type="radio" name="radios" id="Sales" value="Sales" ><label class="category-label" for="Sales" >Sales</label>
              </li>
              <li >
               <input type="radio" name="radios" id="Support" value="Support" ><label class="category-label" for="Support" >Support</label>
              </li>
             </ul>
          </div>
          <button id="searchBtn" type="button" class="btn btn-secondary btn-search" ><span class="glyphicon glyphicon-search" >&nbsp;</span> <span class="label-icon" >Search</span></button>
         </div>
        </div>
       </div>
    </div>
  </div>
    <div class="books-container" id="Books">
      <div class="book">
        <img src="book10.jpg" alt="Book Title">
        <h3>Inner Engineering</h3>
        <p>Author: Sadhguru</p>
        <p>Price: Rs 40</p>
        <button>Rent Now</button><br>
        <button>Buy Now</button>
      </div>
      <div class="book">
        <a href="Viewpage.html"><img src="book2.jpg" alt="Book Title"></a>
        <h3>As a Man Thinketh</h3>
        <p>Author: James Allen</p>
        <p>Price: Rs 40 </p>
        <button>Rent Now</button><br>
        <button>Buy Now</button>
      </div>
      <div class="book">
        <img src="book3.jpg" alt="Book Title"><br><br><br><br>
        <h3>Wings Of Fire</h3>
        <p>Author:A P J Abdul Kalam</p>
        <p>Price: Rs 60</p>
        <button>Rent Now</button><br>
        <button>Buy Now</button>
      </div>
      <div class="book">
        <img src="book4.jpg" alt="Book Title">
        <h3>Mein Kamph</h3>
        <p>Author: Adolph Hitler</p>
        <p>Price: Rs 30</p>
        <button>Rent Now</button><br>
        <button>Buy Now</button>
      </div>
      <div class="book">
        <img src="book5.jpg" alt="Book Title"><br><br><br>
        <h3>India A History</h3>
        <p>Author: John Keay</p>
        <p>Price: Rs 30</p>
        <button>Rent Now</button><br>
        <button>Buy Now</button>
      </div>
      <div class="book">
        <img src="book6.jpg" alt="Book Title">
        <h3>1776</h3>
        <p>Author: David McCullough</p>
        <p>Price: Rs 40</p>
        <button>Rent Now</button><br>
        <button>Buy Now</button>
      </div>
      </div>
      <pre><center> <div style="font-size: 20px;""><p>Previous       <a href="new2.html">Next</a></p></div></center></pre>
  </main>
  <footer id="contact">
    <p>&copy; 2023 Book Rental. All rights reserved.</p>
    <p>Email: <a style="color:white;" href="mailto:sailokesh.182@gmail.com">sailokesh.182@gmail.com</a> </p>
    <p>Contact:8179935589</p>
  </footer>
</body>
</html>
