<!DOCTYPE html>
<html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EMPLOYEE DATABASE</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300;400&family=Ubuntu&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>
    <body>
        <section class="header">
            <nav>
                <a href="index.php"><img src="img/Logo_files/logo006.png"> </a>
                <center><img src="img/Logo_files/cname2.png" alt="Paris" class="center"></center>
                <div class="nav-links" id="navlinks">
                   <i class="fa fa-window-close-o" onclick="hidemenu()"></i>
                    <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="Info.php">INFO</a></li>
                    <li><a href="about.php">ABOUT US</a></li>
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showmenu()"></i>
            </nav>
            
<div class="text-box">
            <h1>Easy Way To Find The Best Prices</h1>
            <p>The Web-based database management system is one of the essential parts of DBMS and is used to store web application data. <br>A web-based Database management system is used to handle those databases that are having data regarding E-commerce, E-business, blogs, e-mail, and other online applications.</p>
            <br><a href="about.php" class="hero-btn">Visit Us To Know More</a>
            </div>
        </section>
<!--------------Features-------------->
<section class="course">
        <h1> Our Speciality </h1>
    <br>
        <br>
    <h>Our systems performs several important functions that guarantee the integrity and consistency of the data in our database. We use some cutting edge technoloies to safely secure and store data. Here are the some of our specialities. </h>
    <div class="row">
        <div class="course-col">
    <h3> Security Management</h3>
        <p>We created a security system that enforces user security and data privacy. Security rules determine which users can access the database, which data items each user can access, and which data operations (read, add, delete, or modify) the user can perform.</p>
    </div>
        <div class="course-col">
    <h3> Multi User Access Control </h3>
        <p>Multiuser access control is another important function we provide. To provide data integrity and data consistency, the we use sophisticated algorithms to ensure that multiple users can access the database concurrently without compromising the integrity of the database.</p>
    </div>
        <div class="course-col">
    <h3> Backup and Recovery Management </h3>
        <p>We provide backup and data recovery to ensure data safety and integrity. Our current systems provide special utilities that allow the DBA to perform routine and special backup and restore procedures. Recovery management deals with the recovery of the database after a failure, such as a bad sector in the disk or a power failure.</p>
    </div>
</div>
</section>
<section class="footer">
<h4>About Us</h4> 
    <p> Check out our social media profiles.<br></p>
    <div class="icons">
        <a href="https://www.instagram.com/zephyr._7/"><i class="fa fa-instagram"></i></a>
        <a href="https://www.linkedin.com/in/manvith-devadiga-667967178/"><i class="fa fa-linkedin"></i></a>
        <a href="https://twitter.com/z_e_p_y_r_"><i class="fa fa-twitter"></i></a>
    <i class="fa fa-i-cursor"></i>
    <i class="fa fa-instagram"></i>
    <i class="fa fa-linkedin"></i>
    <i class="fa fa-twitter"></i>
    
    </div>
    <p>Made with <i class="fa fa-heart-o"></i> 20IS410 and 20IS411</p>
</section>
<!--------------------Java Script------------>
     <script> 
        var navlinks = document.getElementById("navlinks")
        function showmenu(){
            navlinks.style.right = "0";
        }
        function hidemenu(){
            navlinks.style.right = "-200px";
        }
    </script>   
    </body>
</html>