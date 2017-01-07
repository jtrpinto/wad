<?php
include_once('config/init.php');

if (!$_SESSION['doctor_id']) {
  $_SESSION['error_message'] = "No permission to edit observations!";
  die(header("Location: myLogin.php"));
}

$obs_id = $_POST['observation_id'];
$patient_id = $_POST['patient_id'];
$appointment_id = $_POST['appointment_id'];
$obs_date = $_POST['obs_date'];
$notes = $_POST['notes'];

global $conn;
$stmt = $conn->prepare('UPDATE wad.observations SET appointment_id = ?, date_observations = ?, notes = ?  WHERE id = ?');
$result = $stmt->execute(array($appointment_id, $obs_date, $notes, $obs_id));

if ($result !== false) {
  $_SESSION['success_message'] = "Observation updated succesfuly!";
}
else {
  $_SESSION['error_message'] = "Observation update failed!";
}

header ('Location: seeObservations.php?patient_id='.$patient_id);
?>
