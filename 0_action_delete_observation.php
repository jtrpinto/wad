<?php
include_once('config/init.php');

if (!$_SESSION['doctor_id']) {
  $_SESSION['error_message'] = "No permission to delete observations!";
  die(header("Location: myLogin.php"));
}

$observation_id = $_GET['observation_id'];
$patient_id = $_GET['patient_id'];

global $conn;
$stmt = $conn->prepare('DELETE FROM wad.observations WHERE id = ?');
$result = $stmt->execute(array($observation_id));

if ($result !== false) {
  $_SESSION['success_message'] = "Observation deleted succesfuly!";
}
else {
  $_SESSION['error_message'] = "Observation deletion failed!";
}

header ('Location: seeObservations.php?patient_id='.$patient_id);
?>
