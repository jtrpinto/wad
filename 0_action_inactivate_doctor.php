<?php
include_once('config/init.php');

if (!$_SESSION['doctor_id']) {
  $_SESSION['error_message'] = "No permission to inactivate accounts!";
  die(header("Location: myLogin.php"));
}

$doctor_id = $_GET['doctor_id'];

global $conn;
$stmt = $conn->prepare('UPDATE wad.doctors SET is_active = FALSE WHERE doctors.id = ?');
$result = $stmt->execute(array($doctor_id));

if ($result !== false) {
  $_SESSION['success_message'] = "Account inactivated succesfully!";
}
else {
  $_SESSION['error_message'] = "Account inactivation failed!";
}

session_destroy();
header ('Location: myLogin.php');
?>
