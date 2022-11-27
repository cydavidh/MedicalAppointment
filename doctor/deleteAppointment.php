<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

require_once("config.php");
$appointment_ID = null;
if (isset($_GET["appointment_ID"])) {
    $appointment_ID = $_GET["appointment_ID"];
}
$appointment_ID = $_REQUEST['appointment_ID'];
// Check connection
$sql = "DELETE FROM appointment WHERE appointment_ID = ".$appointment_ID."";

if ($link->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $link->error;
}

$link->close();

?>