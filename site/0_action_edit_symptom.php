<?php
include_once('config/init.php');

if (!$_SESSION['doctor_id']) {
  $_SESSION['error_message'] = "No permission to update symptoms!";
  die(header("Location: myLogin.php"));
}

$symptom_id = $_POST['symptom_id'];
$patient_id = $_POST['patient_id'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$place = $_POST['place'];
$description = $_POST['description'];

global $conn;
$stmt = $conn->prepare('UPDATE wad.symptoms_per_patients SET start_date = ?, end_date = ?, place = ?, description = ? WHERE symptoms_id = ? AND patient_id = ?');
$result = $stmt->execute(array($start_date, $end_date, $place, $description, $symptom_id, $patient_id));

if ($result !== false) {
  $_SESSION['success_message'] = "Symptom updated succesfuly!";
}
else {
  $_SESSION['error_message'] = "Symptom update failed!";
}

header ('Location: patientsHistory.php?patient_id='.$patient_id);
?>
