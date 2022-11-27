<?php
require_once("config.php");

$doctorname = null;

if(isset($_GET["doctorname"]))

{
    $doctorname = $_GET["doctorname"];

}
                
$doctorname =$_REQUEST['doctorname'];
 

   
$sql = "DELETE FROM doctors WHERE  doctorname = '".$doctorname."' ";

if(mysqli_query($link,$sql)){
    echo "<div class='alert alert-success'>Successfully delete user</div>";
    
}




?>