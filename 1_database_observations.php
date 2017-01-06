<?php

function getPatientsLatestObservations($pat_id){
  global $conn;

  $stmt = $conn->prepare('SELECT observations.id, date_observations, notes, appointment_id FROM wad.observations JOIN wad.appointments ON appointments.id = observations.appointment_id WHERE appointments.patient_id = ? ORDER BY date_observations DESC LIMIT 5');
  $stmt->execute(array($pat_id));
  $obsList = $stmt->fetchAll();

  return $obsList;
}


?>
