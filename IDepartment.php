<?php 
include("C:/xampp/htdocs/Project/Config.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Depatment table</title>
      <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300;400&family=Ubuntu&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
<section class="misc1">
            <nav>
                 <a href="index.php"><img src="img/Logo_files/logo008.png"> </a>
                <center><img src="img/Logo_files/cname3black50.png" alt="Paris" class="center"></center>
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
  <h1 align="center">Enter Values </h1>
  
    <form action="" method="post" align="center" class="comment-form">
    
        <p1><label for="name">Dno</label></p1>
        <input type="text" name="Dno" class="form-control" id="Dno"><br><br><br>
    

   
   <p1> <label for="email">Dname</label></p1>
        <input type="text" name="Dname" class="form-control" id="Dname"> 
        <br><br>
        <br>
    

    
        <p1><label for="desc">MgrSSN</label></p1>
        <input type="text"  name="MgrSSN" id="MgrSSN">
<br><br><br>

        <p1><label for="desc">MgrStartDate</label></p1>
        <input type="text"  name="MgrStartDate" id="MgrStartDate"> 
<br><br><br>
      
    <button type="submit" class="sbtn" name="Submit"  id="Submit">Insert</button>
    </form>
      </section>


<?php
    

    if(isset($_POST['Submit'] ))
    {                         
        $Dno = $_POST['Dno'];
          $Dname = $_POST['Dname'];
        $MgrSSN = $_POST['MgrSSN'];
        $MgrStartDate = $_POST['MgrStartDate'];
   
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `Department`(`Dno`, `Dname`, `MgrSSN`, `MgrStartDate`) VALUES ('$Dno', '$Dname', '$MgrSSN', '$MgrStartDate')";

     
        $result = mysqli_query($conn, $sql);

 
        if($result)

        {
          
          echo "database has been recorded";
          
        }
        else
        {
            echo "<The record was not inserted successfully because of this error ---> ". mysqli_error($result);
           
        }

      }
      

?>

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