<?php
include_once('config/init.php');

if (!$_SESSION['doctor_id']) {
  $_SESSION['error_message'] = "No permission to add symptoms!";
  die(header("Location: myLogin.php"));
}

$symptom_id = $_POST['symptom_id'];
$patient_id = $_POST['patient_id'];
$place = $_POST['place'];
$description = $_POST['description'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];

global $conn;
$stmt = $conn->prepare('INSERT INTO wad.symptoms_per_patients VALUES (?, ?, ?, ?, ?, ?)');
$result = $stmt->execute(array($patient_id, $symptom_id, $place, $description, $start_date, $end_date));

if ($result !== false) {
  $_SESSION['success_message'] = "Symptom added succesfuly!";
}
else {
  $_SESSION['error_message'] = "Symptom submission failed!";
}

header ('Location: patientsHistory.php?patient_id='.$patient_id);





?>
