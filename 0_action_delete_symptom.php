<?php
include_once('config/init.php');

if (!$_SESSION['doctor_id']) {
  $_SESSION['error_message'] = "No permission to delete symptoms!";
  die(header("Location: myLogin.php"));
}

$symptom_id = $_GET['symptom_id'];
$patient_id = $_GET['patient_id'];

global $conn;
$stmt = $conn->prepare('DELETE FROM wad.symptoms_per_patients WHERE symptoms_id = ? AND patient_id = ?');
$result = $stmt->execute(array($symptom_id, $patient_id));

if ($result !== false) {
  $_SESSION['success_message'] = "Treatment deleted succesfuly!";
}
else {
  $_SESSION['error_message'] = "Treatment deletion failed!";
}

header ('Location: patientsHistory.php?patient_id='.$patient_id);
?>
