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
            <div class="registerLogin" style="display: flex; flex-direction: row; font-size: 15px; font-weight: 600; color: rgb(15, 15, 15);">
                <div class="signup" style="padding: 5px; margin-right: 5px;"><a href="Register.html">Signup</a></div>
                <div class="signin" style="padding: 5px;"><a href="login.html">Signin</a></div>
            </div>
            <nav class="navbar">
                <a href="index.html">Home</a>
                <a href="about.html">About</a>
                <a href="package.html">Package</a>
                <a href="book.php">Book</a>
            </nav>

            <div id="menu-btn" class="fas fa-bars"></div>
        </div>
        
        <div class="heading" style="background: url(media/home3.jpg) no-repeat">
            <h1>Book now</h1>
        </div>


        <!--booking-->
        <section class="booking">
            <div class="heading-title">Book your trip!</div>
            <form action="book_form.php" method="post" class="book-form">
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
                    <a href="index.html"> <i class="fas fa-angle-right"></i> Home</a>
                    <a href="about.html"> <i class="fas fa-angle-right"> </i>About</a>
                    <a href="package.html"> <i class="fas fa-angle-right"></i> Package</a>
                    <a href="book.php"> <i class="fas fa-angle-right"></i> Book</a>
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
                    <a href="tel:0765779765"> <i class="fas fa-phone"></i> 0765779765</a>
                    <a href="tel:0778059184"> <i class="fas fa-phone"></i> 0778059184</a>
                    <a href="mailto:"nilushiyak@gmail.com> <i class="fa-solid fa-envelope"></i> nilushiyak@gmail.com</a>
                    <a href="https://www.google.com/maps/place/Sinthupuram+Junction/@9.7452709,79.9506864,17z/data=!3m1!4b1!4m6!3m5!1s0x3afe52d1a8d31c2d:0x69239d183e5590ee!8m2!3d9.7452656!4d79.9552998!16s%2Fg%2F11cmzghmkb?authuser=0&entry=ttu"><i class="fa-solid fa-location-dot"></i> Vaddukoddai, jaffna.</a>
                </div>
                <div class="box">
                    <h3>Follow us</h3>
                    <a href="www.linkedin.com/in/kaneshalingamnilu-nilushiya-556369243"> <i class="fa-brands fa-linkedin"></i> Linkedin</a>
                    <a href="https://github.com/Nilushiya"> <i class="fa-brands fa-github"></i> Github</a>
                    <a href=""> <i class="fa-brands fa-instagram"></i> Instagram</a>
                    <a href=""> <i class="fa-brands fa-facebook"></i> Facebook</a>
                </div>
        </div>
        <div class="credit"> Created by <span>nilu web creater</span> | all rights reserved! |</div>
    </section>

  
    <!--swiper js-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="js.js"></script>
   
</body>
</html>

