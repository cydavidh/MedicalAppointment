<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

require_once("config.php");

// Check connection
if (isset($_POST['submit'])){
// Escape user inputs for security
    $patientname =$_POST['patientname'];
    $identitycard = $_POST['identitycard'];
    $age = $_POST['age'];
    $date = $_POST['date'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
// Attempt insert query execution
    $sql = "INSERT INTO patient (patientname,identitycard,age,date,phone,gender,address) VALUES ('$patientname','$identitycard', '$age', '$date','$gender','$phone','$address')";

    if($link->query($sql) === TRUE){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}
// Close connection

?>