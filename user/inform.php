<?php
require 'confrig.php';
?>

<!DOCTYPE html>

<html>

<head>
    <!-- footer -->
    <link rel="stylesheet" type="text/css" href="style/footer.css">

    <style>
        body {
            background-color: rgb(105, 102, 102);
            overflow-x: hidden;
        }

        #imagine {
            font-size: 50px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            background-color: rgb(3, 3, 49);
            margin-top: none;
            color: aliceblue;
        }


        #head {
            background-color: rgb(3, 3, 49);
        }

        #titleRow {
            background-color: rgb(26, 26, 157);
            width:61%;
            margin-left:19.6%;
        }

        #title {
            font-size: 40px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            background-color: rgb(26, 26, 157);
            margin-top: none;
            color:#ADD8E6;
            margin-left: 30%;
        }

        /* hjghghg */

        input[type=text],
        input[type=password],
        input[type=email] {
            width: 95%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
            margin-left: 5px;
        }

        /* Add a background color when the inputs get focus */

        input[type=text]:focus,
        input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 50%;
            opacity: 0.9;
        }

        button:hover {
            opacity: 1;
        }

        /* Extra styles for the cancel button */

        .cancelbtn {
            padding: 14px 20px;
            background-color: #f44336;
        }

        /* Float cancel and signup buttons and add an equal width */

        .cancelbtn,
        .signupbtn {
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
            left: 20px;
            top: 0;
            width: 50%;
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
        a{
            text-decoration:none;
            color:white;
        }

        /* updateform */
        #updateform{
            width:60%;
            border-style: outset;
            margin-left: auto; margin-right: auto;
        }
        b{
            margin-left: 5px;
        }
        #changepsw{
            margin-left:5px;
        }
        #changepsw:hover{
            color:orange;
        }
    </style>
</head>

<body>

    <div id="head">
        <lable id="imagine">Imagine Movies</lable>
    </div>
    <br/>

    <div id="titleRow">
        <lable id="title">Personal Information</lable>
    </div>
    <br/>

    <div id="updateform">
    <form class="update" action="updateMember.php" method="post">
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
        <input type="text" placeholder="Enter Contact Number" name="contactnumber" required>

        <label for="psw">
            <b>Current Password</b>
        </label>
        <input type="password" placeholder="Enter Current Password" name="psw" required>

        <label for="c_psw">
            <a href = "informPass.php" id="changepsw"> Change Password..</a>
        </label><br/>

        <button type="submit" name="update">Update</button>
        <button type="button" onclick="document.getElementById('login').style.display='none'" class="cancelbtn"><a href="Home.php">Cancel</a></button>
    </form>
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

    <!-- user details update form -->
    <script src="JS/login.js"></script>

</body>

</html>