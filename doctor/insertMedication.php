<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

require_once("config.php");

// Check connection
if (isset($_POST['submit'])){
// Escape user inputs for security
$medicineID = $_POST['medicineID'];
$medicineName = $_POST['medicineName'];
$strength = $_POST['strength'];
$duration = $_POST['duration'];
$dosage = $_POST['dosage'];
// Attempt insert query execution
    $sql = "INSERT INTO medication (medicineID, medicineName, strength, duration, dosage) VALUES ('$medicineID','$medicineName','$strength','$duration','$dosage')";

    if($link->query($sql) === TRUE){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}
// Close connection

?>