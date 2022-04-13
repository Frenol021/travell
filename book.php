<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>
<!-- swiper link -->
    <link rel="stylesheet"href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">
    

</head>
<body>
    
    <section class="header">
        <b><a href= "home.php" class="logo">travel.</a></b>

        <nav class="navbar">
            <a href="home.php">home</a>
            
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php"><b>book</b></a>

        </nav>

        <div id= "menu-btn" class="fas fa-bars"></div>


    </section>


    <div class="heading" style="background:url(images/travel6.png)">
        <h1>book</h1>
    </div>
       
    <section class="booking">
        <h1 class="heading-title">book your trip</h1>
        <form action="book_form.php" method="POST" class="book-form">
<div class="flex">
    <div class="inputBox">
        <span>name :</span>
        <input type="text" placeholder="enter your name" name="name">
    </div>

    <div class="inputBox">
        <span>email :</span>
        <input type="email" placeholder="enter your email" name="email">
    </div>
  

    <div class="inputBox">
        <span>phone :</span>
        <input type="number" placeholder="enter your phone number" name="phone ">
    </div>
    <div class="inputBox">
        <span>adress :</span>
        <input type="text" placeholder="enter your adress" name="adress">
    </div>
    <div class="inputBox">
        <span>where to :</span>
        <input type="text" placeholder="place you want to visit" name="location">
    </div>

    <div class="inputBox">
        <span>how many :</span>
        <input type="number" placeholder="number of travellers" name="guest">
    </div>

    <div class="inputBox">
        <span>When :</span>
        <input type="date"  name="arrival">
    </div>

    <div class="inputBox">
        <span>upto :</span>
        <input type="date"  name="leaving">
    </div>

   

</div>
<input type="submit" value="submit" class="btn" name="send">
        </form>
    </section>




<!-- footer-->
<section class="footer">
   <div class="box-container">
       <div class="box">
           <h3> qick links</h3>
       <a href="home.php"><i class=" fas fa-angle-right"></i> home</a>
            <a href="about.php"><i class=" fas fa-angle-right"></i>about</a>
            <a href="package.php"><i class=" fas fa-angle-right"></i>book</a>
            <a href="book.php"><i class=" fas fa-angle-right"></i>package</a>

       </div>

       <div class="box">
           <h3> extra links</h3>
       <a href="#"><i class=" fas fa-angle-right"></i> ask questions</a>
            <a href="#"><i class=" fas fa-angle-right"></i>about us</a>
            <a href="#"><i class=" fas fa-angle-right"></i>privacy policy</a>
            <a href="#"><i class=" fas fa-angle-right"></i>terms of use</a>

       </div>
   

   <div class="box">
           <h3> contacts</h3>
       <a href="#"><i class=" fas fa-phone"></i> 0790 698 026</a>
       <a href="#"><i class=" fas fa-phone"></i> 0706 329 253</a>
       <a href="#"><i class=" fas fa-email"></i> frenol021@gmail.com</a> 
       <a href="#"><i class=" fas fa-map"></i> waiyaki way, Nairobi</a>     

       </div>


   <div class="box">
           <h3>follow us</h3>
       <a href="#"><i class=" fab fa-facebook"></i> facebook</a>
       <a href="#"><i class=" fab fa-twitter"></i> twitter</a>
       <a href="#"><i class=" fab fa-instagram"></i> instagram</a>
       <a href="#"><i class=" fab fa-linkedin"></i> linkedin</a>    

       </div>
    </div>

    <div class="credit"><b>created by <span>frenol</b></span></div>

    
</section>




<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>


<script src="script.js"></script>
</body>
