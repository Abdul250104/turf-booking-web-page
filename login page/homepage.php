<?php
session_start();
include("connect.php");

?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="turf.css">
</head>
<body><!-- 
    <div style="text-align:center; padding:15%;">
      <p  style="font-size:50px; font-weight:bold;">
       Hello?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?
       :)
      </p>
      <a href="logout.php">Logout</a>
    </div>
     HTML !-->
    <div class="header"><a href="homepage.php">        <img id="logo" src="turflogo%20.png" alt="turf logo"></a>
        
    
        <nav>
            <ul>
                <li><a href="homepage.php">home</a></li>
                <li><a href="cards.php">Book turf</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="conntect.php">Contact</a></li>
                
                
            </ul>
        </nav>
        <!-- HTML !-->
        <a href="logout.php"><button id="login_button" class="button-5" role="button" style="margin-right: 5%; width: 50px;height: 10px;">Logout</button></a>
        <a href="index.php"><button id="login_button" class="button-5" role="button" style="margin-right: 5%; width: 50px;height: 10px;">Sign in</button></a>
           
            </div>
    <div class="fakeheader"></div>
<!-- 

    <div class="wraped" id="login_page" style="display:none">
        
        <div class="form">
            <span class="close_icone" id="close_icone"><i class="fa-solid fa-xmark"></i></span>
            
            <form action="#">
                <h3 class="logi">login</h3>
                <div class="form_elemnt">
                <label for="email">Email</label>
                <input type="text" id="email" placeholder="Enter the email">
            </div>
            <div class="form_elemnt">
                <label for="password" >Password</label>
                <input type="password" id="password" placeholder="Enter the password">
            </div>
            <div class="form_elemnt">
                <input type="checkbox" id="remember-me">
                <label for="remember-me">Remember me</label> <span> </span>
                <a href="">forgot password?</a>
            </div>
            
            
            <div class="form_elemnt">
                <button class="button-5">login</button>
                <h5>don't have any account yet? <a href="#" id="const1">Sign Up</a></h5>
            </div>


            </form>
            
        </div>

    </div>

    
    <div class="wraped" id="registion" style="display: none;">
        <div class="form">
            <span class="close_icone"id="close_icone2"><i class="fa-solid fa-xmark"></i></span>
            
            <form action="#">
                <h3 class="logi">Registion </h3>
                <div class="form_elemnt">
                <label for="First Name">First Name</label>
                <input type="text" id="First Name" >
            </div>
            <div class="form_elemnt">
                <label for="last Name">last Name</label>
                <input type="text" id="last Name" >
            </div>
            <div class="form_elemnt">
                <label for="email">Email</label>
                <input type="text" id="email" placeholder="Enter the email">
            </div>
            <div class="form_elemnt">
                <label for="password" >Password</label>
                <input type="password" id="password" placeholder="Enter the password">
            </div>
            <div class="form_elemnt">
                <label for="comferm password" >Comferm Password</label>
                <input type="comferm password" id="comferm password" placeholder="Enter the comferm password">
            </div>
            

            
            
            <div class="form_elemnt">
                <button class="button-5" role="button" id="sign-up-button">Sign Up </button>
                <h5>Alrdy have account? <a href="#" id="const2">Sign In </a></h5>
            </div>

            </form>
            
        </div>

    </div>
    HTML !-->

                
    
    <div class="booking_turf">
        <h1 style="margin: 10px; padding: 20px;">Circket and Football Turf Grounds In Indore</h1>
        <h5 style="margin: 10px; padding: 10px;">Explore the best in class Circket and football turf grounds in Indore.  Book slots at your nearest turf with ease and play as per your convenience. <br>find and reserve the perfact turf for your next game or training session </h5>
    </div>
    <div class="book_now">
        <a href="cards.php"><button class="button-5" id="home_page_button" role="button">Book now</button></a>
        <button class="button-5" role="button">learn more</button>
    </div>
    <div class="gallery">
        
        <span><img src="img1.jpg" alt="1"></span>
        <span><img src="img2.jpg" alt="1"></span>
        <span><img src="img3.jpg" alt="1"></span>
        <span><img src="10.jpeg" alt="1"></span>
        <span><img src="img1.jpg" alt="1"></span>
    </div>
    <div class="bigimage">
        <div>
        <img src="9.jpeg" alt="">
       </div>
    </div>

    <div class="contener1" style="margin: 10%; display: flex;">
        <div class="box1">
            <h1>Easy booking Process</h1><br>
                <p>Book your turf field in justa feew clichs without user-freindly booking system</p><br><br>
                    <h1>flexible scheduling</h1><br>
                        <p>Choose the date and time that suits you best form our availabe sets. <br><br>
                        </p>
                    <h1>Great Customer Expereince </h1><br>
                <p>enjou a seamless exprience from booking to playing on our well-maintained turf feilds</p><br><br>
                
            </div>
        <div class="box2" >
            <img style="border-radius: 110%; height: 300px;" src="img02.jpeg" alt="">
        </div>
    </div>
    <div class="contener2" style="background-color:609966 ; display: flex; border-radius: 5%; margin: 10%;padding: 5%;">
    <div class="contener2" style="background-color:EDF1D6 ; display: flex; border-radius: 5%; margin: 1%;padding: 5%;">
        <div class="text">
            <h1>Our hand-picked selection of Football Pitches in Indore</h1><br><br>
                <p>Discover premium football turfs across Indore and compare with other grounds in your area.  

                    Experience the top-notch facilities at all our venues and we'll make sure you have a great game day every time. Choose from artificial turf grounds or natural grass grounds. 

                      Once selected, pay to book and secure your pitch.</p>
            
        </div>
        <div class="image"> <img src="img01.jpeg" alt=""></div>
    </div>
        
    </div>
      <footer class="footer1">
            <div class="icons">
                <a href="conntect.php"><i class="fa-brands fa-facebook"></i></a>
                <a href="conntect.php"><i class="fa-brands fa-instagram"></i></a>
                <a href="conntect.php"><i class="fa-brands fa-linkedin"></i></a>
                <a href="conntect.php"><i class="fa-brands fa-github"></i></a>
                
                
                
            </div>
    </footer>
    <footer class="footer2">
        
            <h4>Copyright @ 2024 Disign by Abdul Rehman Gori</h4>
        
        
    </footer>
    
</body>
</html>