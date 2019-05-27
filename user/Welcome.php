<?php
session_start();
require 'confrig.php';
// require ("addmember.php");
?>


<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- menu bar -->
    <link rel="stylesheet" type="text/css" href="style/welcome menu bar.css">

    <!-- footer -->
    <link rel="stylesheet" type="text/css" href="style/footer.css">

    <!--slide header-->
    <link rel="stylesheet" type="text/css" href="style/slideheader.css">

    <!--Log in -->
    <link rel="stylesheet" type="text/css" href="style/login button.css">

    <!--Sign up -->
    <link rel="stylesheet" type="text/css" href="style/sign up button.css">

    <!--Log in form -->
    <link rel="stylesheet" type="text/css" href="style/login form.css">

    <!--sign up form -->
    <!-- <link rel="stylesheet" type="text/css" href="style/signup form.css"> -->

    <!--body movie chart -->
    <link rel="stylesheet" type="text/css" href="style/body movies chart.css">

    <style>
        body {
            background-color: rgb(105, 102, 102);
            overflow-x: hidden;
        }

    .button1 {
    background-color: rgb(8, 132, 214); 
    border: none;
    color: white;
    padding: 10px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    margin: 4px 1px;
    cursor: pointer;
    
    }
    .button1 {border-radius: 12px;   
    }
    .button1{
        margin-left: 1160px;
    }

    /* slide images */
    .mySlides img{
    width: 100%;
    height: 615px;
    }

        /* sign up form */

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
/* Full-width input fields */
input[type=text], input[type=password],input[type=email] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* The sign up (background) */
.signupform {
    display: none; 
    position: fixed; 
    z-index: 1; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%;
    overflow-x: auto; 
    background-color: #474e5d;
    padding-top: 50px;
   
}

/* Modal Content/Box */
.signup-content {
    background-color: #fefefe;
    margin: 0% auto 15% auto; 
    border: 1px solid #888;
    width: 80%;
}

/* Style the horizontal ruler */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}

.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
    </style>

</head>



<body>

    <!-- manu bar -->

    <ul id="menu">

        <a class="Imaginemovies" href="#">&nbsp; Imagine Movies</a>

        <button class="button1" onclick="document.getElementById('login').style.display='block'" style="width:auto;">Login</button>
        <button class="button2" onclick="document.getElementById('signup').style.display='block'" style="width:auto;">Sign Up</button>

    </ul>


    <!-- login popup -->
    <div id="login" class="background">
        <form class="background-content animation" action="validateMember.php" method="get">
            <div class="imgcontainer">
                <span onclick="document.getElementById('login').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="images/user.png" alt="Avatar" class="usericon">
            </div>

            <div class="container">
                <label for="uname">
                    <b>Username</b>
                </label><?php  ?>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label for="psw">
                    <b>Password</b>
                </label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <button type="submit">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('login').style.display='none'" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot
                    <a href="#">password?</a>
                </span>
            </div>
        </form>
    </div>


    <!-- sign up popup -->
    <div id="signup" class="signupform">
        <span onclick="document.getElementById('signup').style.display='none'" class="close" title="Close Modal">&times;</span>
        <form class="signup-content" action="addmember.php" method="post">
            <div class="container">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>
                <label for="name">
                    <b>Name</b>
                </label>
                <input id="inputtext" type="text" placeholder="Enter Name" name="name" required>

                <label for="email">
                    <b>Email</b>
                </label>
                <input id="inputemail" type="text" placeholder="Enter Email" name="email" required>

                <label for="contactno">
                    <b>Contact Number</b>
                </label>
                <!-- id="inputtext" -->
                <input  type="text" placeholder="Enter Contact Number" name="contactnumber" required>

                <label for="psw">
                    <b>Password</b>
                </label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <label for="psw-repeat">
                    <b>Repeat Password</b>
                </label>
                <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

                <label>
                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                </label>

                <p>By creating an account you agree to our
                    <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                <div class="clearfix">
                <!-- onclick="emailValidation();" -->
                    <button type="button" onclick="document.getElementById('signup').style.display='none'" class="cancelbtn">Cancel</button>
                    <button  type="submit" class="signupbtn">Sign Up</button>
                </div>
            </div>
        </form>
    </div>


    <!-- Slide Header -->
    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="images/home/film1.1.jpg">
        </div>

        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="images/home/film3.1.jpg">
        </div>

        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="images/home/film3.2.png">
        </div>

        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="images/home/hall2.jpg">
        </div>

        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="images/home/hall1.jpg">
        </div>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
    <br/>


    <p id="nowshowing">Now Showing Movies</p>
    <!-- now movies chart -->
    <div class="row">
        <div class="column">
            <div class="card">
                <img src="images/home/film1.1.jpg" style="width:100%">
                <div class="container">
                    <h2>යශෝධරා</h2>
                    <p class="title">History</p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="images/home/film2.1.jpg"  style="width:100%">
                <div class="container">
                    <h2>MAMMA MIA</h2>
                    <p class="title">Comedy</p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="images/home/film3.1.jpg" style="width:100%">
                <div class="container">
                    <h2>EQUALIZER-2</h2>
                    <p class="title">Action</p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="images/home/film4.1.jpg"  style="width:100%">
                <div class="container">
                    <h2>First Man</h2>
                    <p class="title">Adventure</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br/>

    <div class="row">
        <div class="column">
            <div class="card">
                <img src="images/home/film1.1.jpg"  style="width:100%">
                <div class="container">
                    <h2>යශෝධරා</h2>
                    <p class="title">History</p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="images/home/film2.1.jpg" style="width:100%">
                <div class="container">
                    <h2>MAMMA MIA</h2>
                    <p class="title">Comedy</p>
                </div>
            </div>
        </div>
    </div>


    <br/>
    <p id="upcomming">Up Coming Movies</p>

    <!-- up coming movies chart -->
    <div class="row">
        <div class="column">
            <div class="card">
                <img src="images/home/film1.1.jpg" style="width:100%">
                <div class="container">
                    <h2>යශෝධරා</h2>
                    <p class="title">History</p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="images/home/film2.1.jpg" style="width:100%">
                <div class="container">
                    <h2>MAMMA MIA</h2>
                    <p class="title">Comedy</p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="images/home/film3.1.jpg"  style="width:100%">
                <div class="container">
                    <h2>EQUALIZER-2</h2>
                    <p class="title">Action</p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="images/home/film4.1.jpg"  style="width:100%">
                <div class="container">
                    <h2>First Man</h2>
                    <p class="title">Adventure</p>
                </div>
            </div>
        </div>
    </div>
    </div>

    <br/>
    <!--fotter -->
    <footer>
        <div id="foot">

            <div id="links">
                <a id="footmenu" href="">Home</a> |
                <a href="">Privacy Policy</a> |
                <a href="">Terms of Use</a> |
                <a href="">Disclaimer</a> |
                <a href="">About Us</a>
                <br/>
                <br/>
                <a id="footmenu" href="">Login</a> |
                <a href="">Register</a> |
                <a href="">Advertise</a> |
                <a href="">Careers</a> |
                <a href="">Contact Us</a>
                <br/>
                <br/>
                <img id="norton" src="images/norton.png">
            </div>

            <div id="inform">
                <img id="footlogo" src="images/ss.png">
                <br/>
                <p>© 2018 Imagine Movies. All Rights Reserved. Site by
                    <a href="#">Archmage</a>
                    <br/>
                    <br/> Copyright © 1995-2018 eBay Inc. All Rights Reserved. Accessibility, User Agreement, Privacy, Cookies
                    and AdChoice
                    <br/> Norton Secured - powered by Verisign</p>

            </div>
        </div>
    </footer>



    <!-- slide header js -->
    <script src="JS/slideheader.js"></script>
    <!-- login form popup -->
    <script src="JS/login.js"></script>
    <!-- sign up form popup -->
    <!-- <script src="JS/sign up.js"></script> -->
    <script>
        //Validation
        //Email

        function emailValidation(){
             var email = document.getElementById('inputemail');
             var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
                 if(!email.value.match(emailExp)){
                     alert("Invalid E-mail"); 
                    }
    
            }
    </script>


</body>

</html>