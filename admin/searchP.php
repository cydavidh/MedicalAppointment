<?php
require("config.php");



    $name = $_post['searchP'];
    //$query = "SELECT * FROM employees
   // WHERE first_name LIKE '%{$name}%' OR last_name LIKE '%{$name}%'";

    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

$result = mysqli_query($link, "SELECT * FROM patient
    WHERE patientname LIKE '%{$name}%'");

while ($row = mysqli_fetch_array($result))
{
        echo $row['patientname'] . ;
        echo "<br>";
}
    
?>