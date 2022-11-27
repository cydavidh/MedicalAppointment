<?php 
 
require_once ('config.php');
 
if(isset($_POST['update'])) {
    $fname = $_POST['patientname'];
    $age = $_POST['age'];
    $identitycard =  $_POST['identitycard'];
    $date = $_POST['date'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

 
    $sql = "UPDATE patient SET patientname = '$fname', age = '$age', phone = '$phone', identitycard = '$identitycard',date = '$date', gender = '$gender', phone = '$phone', address = '$address' WHERE patientid = '".$_POST['patientid']."'";
    if($link->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";
     
    } else {
        echo "Erorr while updating record : ". $link->error;
    }
 
    $link->close();
 
}
 
?>