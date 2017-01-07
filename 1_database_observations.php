<?php

function getPatientsLatestObservations($pat_id){
  global $conn;

  $stmt = $conn->prepare('SELECT observations.id, date_observations, notes, appointment_id FROM wad.observations JOIN wad.appointments ON appointments.id = observations.appointment_id WHERE appointments.patient_id = ? ORDER BY date_observations DESC LIMIT 5');
  $stmt->execute(array($pat_id));
  $obsList = $stmt->fetchAll();

  return $obsList;
}

function getPatientsObservations($pat_id){
  global $conn;

  $stmt = $conn->prepare('SELECT observations.id, date_observations, notes, appointment_id, appointment_date, appointment_time, room, doctor_id, doctors.first_name, doctors.last_name FROM wad.observations JOIN wad.appointments ON appointments.id = observations.appointment_id JOIN wad.doctors ON doctors.id = appointments.doctor_id WHERE appointments.patient_id = ? ORDER BY date_observations DESC');
  $stmt->execute(array($pat_id));
  $obsList = $stmt->fetchAll();

  return $obsList;
}

function getSingleObservationInfo($obs_id){
  global $conn;

  $stmt = $conn->prepare('SELECT * FROM wad.observations WHERE observations.id = ?');
  $stmt->execute(array($obs_id));
  $obsInfo = $stmt->fetchAll();

  return $obsInfo;
}

function getAppointmentObservations($app_id){
  global $conn;

  $stmt = $conn->prepare('SELECT * FROM wad.observations WHERE observations.appointment_id = ?');
  $stmt->execute(array($app_id));
  $obsList = $stmt->fetchAll();

  return $obsList;
}
?>
