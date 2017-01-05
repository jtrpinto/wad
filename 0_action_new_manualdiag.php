<?php
include_once('config/init.php');

if (!$_SESSION['doctor_id']) {
  $_SESSION['error_message'] = "No permission to change diagnoses!";
  die(header("Location: myLogin.php"));
}

$exam_id = $_POST['exam_id'];
$diag_result = $_POST['manualdiag_result'];
$diag_prob = $_POST['manualdiag_prob'];

global $conn;
$stmt = $conn->prepare('INSERT INTO wad.diagnoses VALUES (DEFAULT, ?, ?)');
$result = $stmt->execute(array($diag_result, $diag_prob));

if ($result !== false) {
  $_SESSION['success_message'] = "Diagnosis added succesfuly!";

  $stmt = $conn->prepare('SELECT MAX(id) AS id FROM wad.diagnoses');
  $stmt->execute();
  $new_manualdiag_id = $stmt->fetchAll();

  $stmt = $conn->prepare('UPDATE wad.exams SET medical_diag_id = ? WHERE id = ?');
  $result = $stmt->execute(array($new_manualdiag_id[0]['id'],$exam_id));

  header ('Location: analyseExam.php?exam_id='.$exam_id);
}
else {
  $_SESSION['error_message'] = "Diagnosis submission failed!";
  header ('Location: newExam.php');
}


?>
