<?php

function getPatientsTreatments($pat_id){
  global $conn;

	$stmt = $conn->prepare('SELECT * FROM wad.treatments JOIN wad.treat_per_patients ON treatments.id = treat_per_patients.treatment_id WHERE treat_per_patients.patient_id = ? ORDER BY start_date DESC, end_date DESC');
  $stmt->execute(array($pat_id));
  $treatList = $stmt->fetchAll();

  return $treatList;
}

?>
