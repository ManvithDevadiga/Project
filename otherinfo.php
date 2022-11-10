<?php 
include("C:/xampp/htdocs/Project/Config.php");
?>
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
        <section class="abt">
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
<h1>Other Information</h1><br><br>        

        
<!--------------Info-------------->
<div class="fg">
            <form action="" method="post">
    <p2>Make a list of all project numbers for projects that involve an employee whose last 
name is ‘Codd’, either as a worker or as a manager of the department that controls 
the project.</p2><br><br>
    <button type="submit" class="qbtn" name="Submit"  id="Submit">Query 1</button><br><br>
    <p2>Show the resulting salaries if every employee working on the ‘Smart City’ project 
is given a 10 percent raise</p2><br><br>
    <button type="submit" class="qbtn" name="Submit1" id="Submit1">Query 2</button><br><br>
    <p2>Find the sum of the salaries of all employees of the ‘Information Science’ 
department, as well as the maximum salary, the minimum salary, and the average 
salary in this department.</p2><br><br>
    <button type="submit" class="qbtn" name="Submit2" id="Submit2">Query 3</button><br><br>
    <p2>Retrieve the name of each employee who works on all the projects controlled by 
department number 5.</p2><br><br>
    <button type="submit" class="qbtn" name="Submit3" id="Submit3">Query 4</button><br><br> 
    <p2>For each department that has more than five employees, retrieve the department 
number and the number of its employees who are making more than Rs. 
10,00,000.</p2><br><br>
    <button type="submit" class="qbtn" name="Submit4" id="Submit4">Query 5</button> <br><br>
</form>
            </div>        
        
        
       


        
<!------------query1-------->
<?php

$records = mysqli_query($conn,"select * from Query1"); // fetch data from database
if(isset($_POST['Submit'] ))
{
while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['PNo']; ?></td>
 
  </tr> 
<?php
}
}
?>
<!--------query2-------->
<?php

$records = mysqli_query($conn,"select * from Query2"); // fetch data from database
if(isset($_POST['Submit1'] ))
{
while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['FName']; ?></td>
  <td><?php echo $data['Old_Sal']; ?></td>
   <td><?php echo $data['New_Salary']; ?></td>
  </tr> 
<?php
}
}
?>
<!-------Query3------->
<?php

$records = mysqli_query($conn,"select * from Query3"); // fetch data from database
if(isset($_POST['Submit2'] ))
{
while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['DName']; ?></td>
  <td><?php echo $data['AvgSal']; ?></td>
   <td><?php echo $data['Min_Sal']; ?></td>
    <td><?php echo $data['Max_Sal']; ?></td>
  </tr> 
<?php
}
}
?>
<!--------Query4---------->
<?php

$records = mysqli_query($conn,"select * from Query4"); // fetch data from database
if(isset($_POST['Submit3'] ))
{
while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['SSN']; ?></td>

  </tr> 
<?php
}
}
?>
<!-----------Query5--------->
 <?php

$records = mysqli_query($conn,"select * from Query5"); // fetch data from database
if(isset($_POST['Submit4'] ))
{
while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['Dno']; ?></td>
    <td><?php echo $data['Total']; ?></td>

  </tr> 
<?php
}
}
?>      
<!---------Footer----->        
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