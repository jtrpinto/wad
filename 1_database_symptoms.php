<?php

function getAllSymptoms(){
  global $conn;

	$stmt = $conn->prepare('SELECT * FROM wad.symptoms');
  $stmt->execute();
  $allSymptoms = $stmt->fetchAll();

  return $allSymptoms;
}

function getPatientsSymptoms($pat_id){
  global $conn;

  $stmt = $conn->prepare('SELECT symptoms.id, symptoms.name, symptoms_per_patients.place, symptoms_per_patients.description, start_date, end_date FROM wad.symptoms JOIN wad.symptoms_per_patients ON symptoms.id = symptoms_per_patients.symptoms_id WHERE patient_id = ?');
  $stmt->execute(array($pat_id));
  $patientSymptoms = $stmt->fetchAll();

  return $patientSymptoms;
}

?>
