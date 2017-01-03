<?php
include_once('config/init.php');
/*include('manageMyInfo.php');*/
/*=============== EDIT PERSONAL INFORMATION ===============*/
$patient_id = $_GET["patient_id"];

//function patients($patient_id)
	global $conn;
	$patient_info = $conn->prepare('SELECT first_name, last_name, healthcare_id, birth_date, gender, country, city, street, floor_app, door_number, postal_code, phone, email   FROM wad.patients WHERE id = ?');
	$patient_info->execute(array($patient_id));
	$patients = $patient_info->fetchAll();
/*	return $patients;
}*/

?>

