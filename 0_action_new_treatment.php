<?php
include_once('config/init.php');

if (!$_SESSION['doctor_id']) {
  $_SESSION['error_message'] = "No permission to add treatments!";
  die(header("Location: myLogin.php"));
}

$treatment_id = $_POST['treatment_id'];
$patient_id = $_POST['patient_id'];
$freq = $_POST['frequency'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];

global $conn;
$stmt = $conn->prepare('INSERT INTO wad.treat_per_patients VALUES (?, ?, ?, ?, ?)');
$result = $stmt->execute(array($patient_id, $treatment_id, $start_date, $end_date, $freq));

if ($result !== false) {
  $_SESSION['success_message'] = "Treatment added succesfuly!";
}
else {
  $_SESSION['error_message'] = "Treatment submission failed!";
}

header ('Location: patientsHistory.php?patient_id='.$patient_id);
?>
