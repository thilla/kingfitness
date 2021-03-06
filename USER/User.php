<?php include ('Connection.php') ?>
<!DOCTYPE HTML>
<html>
<head>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        body {
            font-family: "Lato", sans-serif;
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }
    </style>
</head>
<body>

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
</div>

<header>
    <div class="pad">

    </div>
    <div class="bad">
        <ul class="na">
            <li><span style="font-size:90px;cursor:pointer" onclick="openNav()">&#9776; </span></li>
            <li><a href="#img"><img id="img" src=Image/logo.png /></a></li>

            <li><a href="User.php" style="margin-top:40px;">Home</a></li>

            <li><a href="UserProf.php"  style="margin-top:40px;">My Profile</a></li>
            
            <li style="float:right;margin-top:40px;"><a href="Login.php">Log Out</p></a></li>
            <li style="float:right;margin-top:40px;"><a href="ForgotPassword.php">Forgot Password</p></a></li>
        </ul>

    </div>
</header>
<div class="slideshow-container">

    <div class="mySlides fade">

        <img src="Image/Slides/a.jpg" style="width:100%">

    </div>

    <div class="mySlides fade">

        <img src="Image/Slides/b.jpg"  style="width:100%">

    </div>

    <div class="mySlides fade">

        <img src="Image/Slides/c.jpg"  style="width:100%">

    </div>

</div>
<br>

<div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
</div>

</div>




<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
</script>

<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>
</body>
</html>