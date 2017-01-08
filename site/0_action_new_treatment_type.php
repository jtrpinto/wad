<?php
include_once('config/init.php');

if (!$_SESSION['doctor_id']) {
  $_SESSION['error_message'] = "No permission to add treatment types!";
  die(header("Location: myLogin.php"));
}

$patient_id = $_POST['patient_id'];
$name = $_POST['name'];
$dose = $_POST['dose'];
$treat_type = $_POST['treat_type'];

global $conn;
$stmt = $conn->prepare('INSERT INTO wad.treatments VALUES (DEFAULT, ?, ?, ?)');
$result = $stmt->execute(array($name, $dose, $treat_type));

if ($result !== false) {
  $_SESSION['success_message'] = "Treatment type added succesfuly!";
}
else {
  $_SESSION['error_message'] = "Treatment type creation failed!";
}

header ('Location: patientsHistory.php?patient_id='.$patient_id);
?>
