<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

require_once("config.php");

// Check connection
if (isset($_POST['submit'])){
// Escape user inputs for security
$Visit_Date = $_POST['Visit_Date'];
$patientid = $_POST['patientid'];
$On_Treatment = $_POST['On_Treatment'];
$Diagnosis = $_POST['Diagnosis'];
$Past_TestResult = $_POST['Past_TestResult'];
$Surgical_History = $_POST['Surgical_History'];
// Attempt insert query execution

    $sql = "INSERT INTO medicalrecords (Visit_Date, doctorid, patientid, On_Treatment, Diagnosis, Past_TestResult, Surgical_History)
    VALUES ('$Visit_Date','1','$patientid','$On_Treatment','$Diagnosis','$Past_TestResult','$Surgical_History')
    ON DUPLICATE KEY UPDATE Visit_Date= '$Visit_Date', 
                patientid= '$patientid',
                On_Treatment= '$On_Treatment',
                Diagnosis= '$Diagnosis',
                Past_TestResult= '$Past_TestResult',
                Surgical_History= '$Surgical_History'";

    if($link->query($sql) === TRUE){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}
// Close connection

?>