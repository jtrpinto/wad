<?php
include_once('config/init.php');
//session_start();
/*=============== EDIT PERSONAL and CONTACT INFORMATION ===============*/
$doctor_id = $_SESSION["doctor_id"];

	global $conn;
	$doctor_info = $conn->prepare('SELECT first_name, last_name, birth_date, gender, phone, citizen_id, email, speciality_id, first_day_of_service, is_active, password, username, country, city, street, floor_app, doornumber, postal_code  FROM wad.doctors WHERE id = ?');
	$doctor_info->execute(array($doctor_id));
	$doctor_information = $doctor_info->fetchAll();

?>
