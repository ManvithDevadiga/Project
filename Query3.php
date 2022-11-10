<?php 
include("C:/xampp/htdocs/Project/Config.php");
?>
<!doctype html>
<html lang="en">
  <head>
    
    <title>Query3 table</title>
  </head>
  <body>
    <form action="" method="post">
    <button type="submit" class="btn btn-primary" name="Submit"  id="Submit">Display</button>
    </form>
    <?php

$records = mysqli_query($conn,"select * from Query3"); // fetch data from database
if(isset($_POST['Submit'] ))
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
</table>


<br><br>
  <center>
  
<a href="index.php"> Register </a> <br><br>

<a href="show.php"> Show all Records </a> <br><br>

</center>
</body>
</html>