<?php

function getDiagnosisInfo($med_diag_id){
  global $conn;

  $stmt = $conn->prepare('SELECT * FROM wad.diagnoses WHERE id = ?');
  $stmt->execute(array($med_diag_id));
  $medDiagInfo = $stmt->fetchAll();

  return $medDiagInfo;
}

function getPatientsDiagnoses($pat_id){
  global $conn;

  $stmt = $conn->prepare('SELECT diagnoses.diagnoses_result, diagnoses.probability, exams.exam_date, exams.id AS exam_id FROM wad.diagnoses JOIN wad.exams ON diagnoses.id = exams.medical_diag_id JOIN wad.appointments ON exams.appointments_id = appointments.id WHERE appointments.patient_id = ? ORDER BY exams.exam_date DESC');
  $stmt->execute(array($pat_id));
  $diagnosesList = $stmt->fetchAll();

  return $diagnosesList;
}

?>
