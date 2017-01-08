<?php
include_once('config/init.php');

if (!$_SESSION['doctor_id']) {
  $_SESSION['error_message'] = "No permission to change diagnoses!";
  die(header("Location: myLogin.php"));
}

$appointment_id = $_POST['appointment_id'];
$obs_text = $_POST['obs_text'];
$obs_date = $_POST['obs_date'];

global $conn;
$stmt = $conn->prepare('INSERT INTO wad.observations VALUES (DEFAULT, ?, ?, ?)');
$result = $stmt->execute(array($obs_date, $obs_text, $appointment_id));

if ($result !== false) {
  $_SESSION['success_message'] = "Observation added succesfuly!";
}
else {
  $_SESSION['error_message'] = "Observation submission failed!";
}

if (isset($_POST['exam_id'])){
  header ('Location: analyseExam.php?exam_id='.$_POST['exam_id']);
} else {
  header ('Location: seeObservations.php?patient_id='.$_POST['patient_id']);
}
?>
