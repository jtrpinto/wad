<?php

function getPatientsExams($pat_id){
  global $conn;

  $stmt = $conn->prepare('SELECT exams.id AS id, exam_image, exam_date, date_prescribed, type_of_exam, auto_diagnoses_result, auto_probability, appointments_id, medical_diag_id, appointment_date, appointment_time, patient_id FROM wad.exams JOIN wad.appointments ON appointments.id = exams.appointments_id WHERE appointments.patient_id = ? ORDER BY appointment_date DESC');
  $stmt->execute(array($pat_id));
  $patientExams = $stmt->fetchAll();

  return $patientExams;
}

function getSingleExamInfo($exam_id){
  global $conn;

  $stmt = $conn->prepare('SELECT * FROM wad.exams JOIN wad.appointments ON appointments.id = exams.appointments_id JOIN wad.patients ON patients.id = appointments.patient_id WHERE exams.id = ?');
  $stmt->execute(array($exam_id));
  $examInfo = $stmt->fetchAll();

  return $examInfo;
}

?>
