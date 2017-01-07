<?php
include_once('config/init.php');

if (!$_SESSION['doctor_id']) {
  $_SESSION['error_message'] = "No permission to add treatments!";
  die(header("Location: myLogin.php"));
}

$doctor_id = $_SESSION['doctor_id'];
$patient_id = $_POST['patient_id'];
$appointment_date = $_POST['appointment_date'];
$appointment_time = $_POST['appointment_time'];
$room = $_POST['roomApp'];

global $conn;
$stmt = $conn->prepare('INSERT INTO wad.appointments (appointment_date, appointment_time, room, doctor_id, patient_id ) VALUES (?, ?, ?, ?, ?);');
$result = $stmt->execute(array($appointment_date, $appointment_time, $room, $doctor_id, $patient_id));

if ($result !== false) {
  $_SESSION['success_message'] = "Treatment added succesfuly!";
  header ('Location: patientsHistory.php?patient_id='.$patient_id);
}
else {
  $_SESSION['error_message'] = "Treatment submission failed!";
  header('Location: mySchedule.php');
}


?>
