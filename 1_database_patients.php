<?php
include_once('config/init.php');
/*include('manageMyInfo.php');*/
/*=============== EDIT PERSONAL INFORMATION ===============*/
$patient_id = $_GET["patient_id"];

	global $conn;
	$patient_info = $conn->prepare('SELECT first_name, last_name, healthcare_id FROM wad.patients WHERE id = ?');
	$patient_info->execute(array($patient_id));
	$patients = $patient_info->fetchAll();




?>

