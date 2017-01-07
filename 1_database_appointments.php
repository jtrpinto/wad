<?php
include_once('config/init.php');

$doctor_id = $_SESSION["doctor_id"];

	global $conn; /*DISTINCT*/
	$appointments_info = $conn->prepare('SELECT  a.id,  a.appointment_date,  a.appointment_time,  a.room,  a.doctor_id,  a.patient_id, p.first_name AS first_name_patient, p.last_name AS last_name_patient, p.healthcare_id AS patient_healthcare_id, d.first_name AS first_name_doctor, d.last_name AS last_name_doctor
		FROM wad.appointments AS a
		JOIN wad.patients AS p ON p.id = a.patient_id
		JOIN wad.doctors AS d ON d.id = a.doctor_id
		WHERE doctor_id = ?
		ORDER BY appointment_date ASC, appointment_time ASC');
	$appointments_info->execute(array($doctor_id));
	$appointments_info_doctor = $appointments_info->fetchAll();

	$currentDate = date('Y-m-d');
	$currentTime = date('H:i:s');

function selectFutureAppointments($appointmentsTotalInformation,$currentDate,$currentTime){
	$futureApp = [];
	foreach ($appointmentsTotalInformation as $appointment){
		if ($appointment['appointment_date'] > $currentDate && count($futureApp) < 10) {
			$futureApp[] = $appointment;
		}
		elseif ($appointment['appointment_date'] == $currentDate && $appointment['appointment_time'] >= $currentTime) {
			$futureApp[] = $appointment;
		}
	}
	return $futureApp;
}

function getPatientsLatestAppointments($pat_id){
	global $conn;
	$today = date('Y-m-d');

	$stmt = $conn->prepare('SELECT * FROM wad.appointments WHERE appointments.patient_id = ? AND appointment_date <= ? ORDER BY appointment_date DESC, appointment_time DESC LIMIT 5');
  $stmt->execute(array($pat_id, $today));
  $appList = $stmt->fetchAll();

  return $appList;
}

function getPatientsFutureAppointments($pat_id){
	global $conn;
	$today = date('Y-m-d');

	$stmt = $conn->prepare('SELECT * FROM wad.appointments WHERE appointments.patient_id = ? AND appointment_date >= ? ORDER BY appointment_date ASC, appointment_time ASC LIMIT 5');
  $stmt->execute(array($pat_id, $today));
  $futAppList = $stmt->fetchAll();

  return $futAppList;
}

function getPatientsAppointments($pat_id){
	global $conn;

	$stmt = $conn->prepare('SELECT * FROM wad.appointments WHERE appointments.patient_id = ? ORDER BY appointment_date DESC, appointment_time DESC');
  $stmt->execute(array($pat_id));
  $appList = $stmt->fetchAll();

  return $appList;
}

<<<<<<< HEAD
function getSingleAppointmentInfo($app_id){
	global $conn;

	$stmt = $conn->prepare('SELECT appointments.id, appointment_date, appointment_time, room, doctor_id, patient_id, doctors.first_name AS doc_fname, doctors.last_name AS doc_lname, patients.first_name AS pat_fname, patients.last_name AS pat_lname FROM wad.appointments JOIN wad.doctors ON doctors.id = appointments.doctor_id JOIN wad.patients ON patients.id = appointments.patient_id WHERE appointments.id = ?');
  $stmt->execute(array($app_id));
  $appInfo = $stmt->fetchAll();

  return $appInfo[0];
=======
function getAppointmentsByDate($pat_id, $start_date, $end_date){
	global $conn;
	$stmt = $conn->prepare('SELECT * FROM appointments WHERE patient_id = ? AND appointment_date > ? AND appointment_date < ?
		ORDER BY appointment_date DESC, appointment_time DESC ' );
	$stmt->execute(array($pat_id, $start_date, $end_date));
	$appointments_list = $stmt->fetchAll();

	return $appointments_list;
>>>>>>> origin/master
}
?>
