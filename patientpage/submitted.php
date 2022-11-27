<?php

$mysqli = new mysqli("localhost", "root", "", "hospital", 3306);

if ($mysqli->connect_errno) {
    echo "Failed to connect to Database: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$fullname = $_POST['fullname'];
$idnumber = $_POST['idnumber'];
$doctors = $_POST['doctors'];
$datepicker = $_POST['datepicker'];

$patient_data = mysqli_query($mysqli, "SELECT patientname, identitycard FROM patient");
$patient_name = '';

while($row = $patient_data->fetch_array(MYSQLI_ASSOC))
{
    if ($idnumber == $row['identitycard']) {
        $patient_name = $row['patientname'];
        break;
    }
}

if (strlen($patient_name) > 0) {

    $sql = "INSERT INTO appointment (identitycard_FK, date_time, doctor) 
                                VALUES ('$idnumber', '$datepicker', '$doctors')";

    $mysqli -> query($sql);

    header('Location:http://www.localhost:8080/patient/index.php?success=true');
}

else {

    header('Location:http://www.localhost:8080/patient/index.php?success=false');
}

mysqli_close($mysqli);

exit;

?>