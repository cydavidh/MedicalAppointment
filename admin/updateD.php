<?php 
 
require_once ('config.php');
 
if(isset($_POST['update'])) {

    $fname = $_POST['doctorname'];
    $age = $_POST['age'];
    $identitycard =  $_POST['identitycard'];
    $date = $_POST['date'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $specialization = $_POST['specialize'];
 
    $sql = "UPDATE doctors SET doctorname = '$fname', age = '$age', phone = '$phone', identitycard = '$identitycard',date = '$date', gender = '$gender', phone = '$phone', address = '$address' , specialize = '$specialization' WHERE doctorid = '".$_POST['id']."'" ;
    if($link->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";
        
    } else {
        echo "Erorr while updating record : ". $link->error;
    }
 
    $link->close();
 
}
 
?>