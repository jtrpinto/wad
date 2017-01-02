<?php
include_once('config/init.php');

$doctor_id = $_GET["doctor_id"];

	global $conn; /*DISTINCT*/
	$appointments_info = $conn->prepare('SELECT  a.id,  a.appointment_date,  a.appointment_time,  a.room,  a.doctor_id,  a.patient_id, p.first_name AS first_name_patient, p.last_name AS last_name_patient, d.first_name AS first_name_doctor, d.last_name AS last_name_doctor
		FROM wad.appointments AS a
		JOIN wad.patients AS p ON p.id = a.patient_id
		JOIN wad.doctors AS d ON d.id = a.doctor_id
		WHERE doctor_id = ?');
	$appointments_info->execute(array($doctor_id));
	$appointments_info_doctor = $appointments_info->fetchAll();

	$currentDate = date('Y-m-d');
	$currentTime = date('H:i:s');

/*function selectDistinctPatients($appointmentsTotalInformation){
	/*Colocar os pacientes de um médico apenas pela ultima consulta*//*
	foreach ($appointmentsTotalInformation as $appointment_info_doctor) {

		if ($appointment_info_doctor['patient_id'])
	}
}*/

function DateTimeComparatorMostRecent($date1, $date2, $time1, $time2){
	/*Compara 2 datas, devolve a mais recente*/
		if ($date1 == $date2){
			if ($time1 == $time2){
				return 0;
			}
			if ($time1 > $time2){
				return $date1;
			}
			else{
				return $date2;
			}
		}
		elseif($date1 > $date2){
			return $date1;
		}
		else{
			return $date2;
		}
}

/*

function orderByLastAppLeastRecentFirst($appointmentsTotalInformation){
	foreach ($appointmentsTotalInformation as $appointment_info_doctor) {


	}
}
function orderByFutureAppNearestFirst($appointmentsTotalInformation){
	foreach ($appointmentsTotalInformation as $appointment_info_doctor) {


	}
}
function orderByLastNameAscending($appointmentsTotalInformation){
	foreach ($appointmentsTotalInformation as $appointment_info_doctor) {


	}
}
function orderByLastNameDescending($appointmentsTotalInformation){
	foreach ($appointmentsTotalInformation as $appointment_info_doctor) {


	}
}
/*
function orderByCurrentDiagnosisPositive($appointmentsTotalInformation){
	foreach ($appointmentsTotalInformation as $appointment_info_doctor) {


	}
}
function orderByCurrentDiagnosisNegative($appointmentsTotalInformation){
	foreach ($appointmentsTotalInformation as $appointment_info_doctor) {


	}
}*/

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
