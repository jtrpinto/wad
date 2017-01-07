<?php
include_once('config/init.php');

if (!$_SESSION['doctor_id']) {
  $_SESSION['error_message'] = "No permission to update treatments!";
  die(header("Location: myLogin.php"));
}

$treatment_id = $_POST['treatment_id'];
$patient_id = $_POST['patient_id'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$frequency = $_POST['frequency'];

global $conn;
$stmt = $conn->prepare('UPDATE wad.treat_per_patients SET start_date = ?, end_date = ?, frequency = ? WHERE treatment_id = ? AND patient_id = ?');
$result = $stmt->execute(array($start_date, $end_date, $frequency, $treatment_id, $patient_id));

if ($result !== false) {
  $_SESSION['success_message'] = "Treatment updated succesfuly!";
}
else {
  $_SESSION['error_message'] = "Treatment update failed!";
}

header ('Location: patientsHistory.php?patient_id='.$patient_id);
?>
