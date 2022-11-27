<?php
require_once("config.php");

$patientid = null;

if(isset($_GET["patientid"]))
{
    $patientid = $_GET["patientid"];

}
$patientid = $_REQUEST['patientid'];   
$sql ="DELETE FROM patient WHERE patientid='".$patientid."' ";
if(mysqli_query($link,$sql)){
    echo "<div class='alert alert-success'>Successfully delete user</div>";
    
}

   





?>