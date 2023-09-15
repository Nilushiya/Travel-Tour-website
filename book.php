<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>home</title>
    <!--swiper cdn-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

        <div class="header">
            <a href="home.html" class="logo">Travel.</a>

            <nav class="navbar">
                <a href="home.html">Home</a>
                <a href="about.html">About</a>
                <a href="package.html">Package</a>
                <a href="book.html">Book</a>
            </nav>

            <div id="menu-btn" class="fas fa-bars"></div>
        </div>
        
        <div class="heading" style="background: url(media/home3.jpg) no-repeat">
            <h1>Book now</h1>
        </div>


        <!--booking-->
        <section class="booking">
            <div class="heading-title">Book your trip!</div>
            <form action="book_form.php" method="post" class="book_form">
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
                        <input type="number" placeholder="enter your number" name="number">
                    </div>
                    <div class="inputBox">
                        <span>address :</span>
                        <input type="text" placeholder="enter your address" name="address">
                    </div>
                    <div class="inputBox">
                        <span>where to :</span>
                        <input type="text" placeholder="place you want to visit" name="location">
                    </div>
                    <div class="inputBox">
                        <span>how many :</span>
                        <input type="text" placeholder="number of guests" name="guests">
                    </div>
                    <div class="inputBox">
                        <span>arrivals :</span>
                        <input type="date" name="arrivals">
                    </div>
                    <div class="inputBox">
                        <span>leaving :</span>
                        <input type="date" name="leaving">
                    </div>
                </div>
                <input type="submit" value="submit" class="btn" name="send">
            </form>
        </section>

<!--footer-->
    <section class="footer">
            <div class="box-container">
                <div class="box">
                    <h3>Quick links</h3>
                    <a href="home.html"> <i class="fas fa-angle-right"></i> Home</a>
                    <a href="about.html"> <i class="fas fa-angle-right"> </i>About</a>
                    <a href="package.html"> <i class="fas fa-angle-right"></i> Package</a>
                    <a href="book.html"> <i class="fas fa-angle-right"></i> Book</a>
                </div>
                <div class="box">
                    <h3>Extra links</h3>
                    <a href="#"> <i class="fas fa-angle-right"></i> Ask questions</a>
                    <a href="#"> <i class="fas fa-angle-right"> </i>About us</a>
                    <a href="#"> <i class="fas fa-angle-right"> </i>Privacy policy</a>
                    <a href="#"> <i class="fas fa-angle-right"> </i>Term of use</a>
                </div>
                <div class="box">
                    <h3>Contact info</h3>
                    <a href="#"> <i class="fas fa-phone"></i> 0765779765</a>
                    <a href="#"> <i class="fas fa-phone"></i> 0778059184</a>
                    <a href="#"> <i class="fa-solid fa-envelope"></i> nilushiyak@gmail.com</a>
                    <a href="#"><i class="fa-solid fa-location-dot"></i> Vaddukoddai, jaffna.</a>
                </div>
                <div class="box">
                    <h3>Follow us</h3>
                    <a href="#"> <i class="fa-brands fa-linkedin"></i> Linkedin</a>
                    <a href="#"> <i class="fa-brands fa-github"></i> Github</a>
                    <a href="#"> <i class="fa-brands fa-instagram"></i> Instagram</a>
                    <a href="#"> <i class="fa-brands fa-facebook"></i> Facebook</a>
                </div>
        </div>
        <div class="credit"> Created by <span>nilu web creater</span> | all rights reserved! |</div>
    </section>

  
    <!--swiper js-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="js.js"></script>
   
</body>
</html>

