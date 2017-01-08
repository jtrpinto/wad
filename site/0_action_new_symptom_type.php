<?php
include_once('config/init.php');

if (!$_SESSION['doctor_id']) {
  $_SESSION['error_message'] = "No permission to add symptom types!";
  die(header("Location: myLogin.php"));
}

$patient_id = $_POST['patient_id'];
$name = $_POST['name'];
$desc = $_POST['description'];

global $conn;
$stmt = $conn->prepare('INSERT INTO wad.symptoms VALUES (DEFAULT, ?, ?)');
$result = $stmt->execute(array($name, $desc));

if ($result !== false) {
  $_SESSION['success_message'] = "Symptom type added succesfuly!";
}
else {
  $_SESSION['error_message'] = "Symptom type creation failed!";
}

header ('Location: patientsHistory.php?patient_id='.$patient_id);
?>
