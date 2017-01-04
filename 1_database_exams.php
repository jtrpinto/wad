<?php

function getPatientsExams($pat_id){
  global $conn;

  $stmt = $conn->prepare('SELECT * FROM wad.exams JOIN wad.appointments ON appointments.id = exams.appointments_id WHERE appointments.patient_id = ? ORDER BY appointment_date DESC');
  $stmt->execute(array($pat_id));
  $patientExams = $stmt->fetchAll();
  return $patientExams;
}

?>
