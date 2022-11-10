<?php
      // Connecting to the Database
      $servername = "117.236.190.213 ";
      $username = "employee_410";
      $password = "employee_410";
      $database = "employee_410";

      // Create a connection
    $conn =  mysqli_connect($servername, $username, $password, $database);
    // Die if connection was not successful
    if(!$conn)
    {
        echo "Connection Unsucessful";
    }
    else
    {
       echo "Connection Successful";
    }
?>