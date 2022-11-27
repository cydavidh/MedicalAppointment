<?php
require("config.php");



    $name = $_post['searchD'];
    //$query = "SELECT * FROM employees
   // WHERE first_name LIKE '%{$name}%' OR last_name LIKE '%{$name}%'";

    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

$result = mysqli_query($link, "SELECT * FROM doctors
    WHERE doctors LIKE '%{$name}%'");

while ($row = mysqli_fetch_array($result))
{
        echo $row['doctorsname'] . ;
        echo "<br>";
}
    
?>