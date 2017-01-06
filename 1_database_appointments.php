<?php
include_once('config/init.php');

$doctor_id = $_SESSION["doctor_id"];

	global $conn; /*DISTINCT*/
	$appointments_info = $conn->prepare('SELECT  a.id,  a.appointment_date,  a.appointment_time,  a.room,  a.doctor_id,  a.patient_id, p.first_name AS first_name_patient, p.last_name AS last_name_patient, p.healthcare_id AS patient_healthcare_id, d.first_name AS first_name_doctor, d.last_name AS last_name_doctor
		FROM wad.appointments AS a
		JOIN wad.patients AS p ON p.id = a.patient_id
		JOIN wad.doctors AS d ON d.id = a.doctor_id
		WHERE doctor_id = ?');
	$appointments_info->execute(array($doctor_id));
	$appointments_info_doctor = $appointments_info->fetchAll();

	$currentDate = date('Y-m-d');
	$currentTime = date('H:i:s');

function selectFutureAppointments($appointmentsTotalInformation,$currentDate,$currentTime){
	$futureApp = [];
	foreach ($appointmentsTotalInformation as $appointment){
		if ($appointment['appointment_date'] > $currentDate) {
			$futureApp[] = $appointment;
		}
		elseif ($appointment['appointment_date'] == $currentDate && $appointment['appointment_time'] >= $currentTime) {
			$futureApp[] = $appointment;
		}
	}
	return $futureApp;
}
?>
