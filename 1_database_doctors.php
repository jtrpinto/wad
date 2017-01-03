<?php
include_once('config/init.php');
//session_start();
/*=============== EDIT PERSONAL and CONTACT INFORMATION ===============*/
$doctor_id = $_SESSION["doctor_id"];

	global $conn;
	$doctor_info = $conn->prepare('SELECT first_name, last_name, citizen_id, birth_date, gender, city, street, postal_code, phone, email  FROM wad.doctors WHERE id = ?');
	$doctor_info->execute(array($doctor_id));
	$doctor_information = $doctor_info->fetchAll();

?>
