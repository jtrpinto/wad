<?php
header('Location: index.php'); 

include_once('config/init.php');

if (!isset($_SESSION['doctor_id'])) die;

  $doctor_id = $_SESSION['doctor_id'];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $citizen_id = $_POST['citizen_id'];
  $birth_date = $_POST['birth_date'];
  $gender = $_POST['gender'];
 
//file_put_contents('abc4.txt', strval($gender));
  $stmt = $conn->prepare('UPDATE wad.doctors SET first_name = ?, last_name = ?, citizen_id = ?, birth_date = ?, gender = ? WHERE id = ?');
  $result = $stmt->execute(array($first_name, $last_name, $citizen_id, $birth_date, $gender, $doctor_id));

if ($result !== false) {
    $_SESSION['success_message'] = "Information updated succesfuly!";

    $stmt = $conn->prepare('SELECT * FROM wad.doctors WHERE id = ?');
    $stmt->execute(array($doctor_id));
    $doctor = $stmt->fetch();
    
    
  } else {
    $_SESSION['error_message'] = "Information update failed!";
    
  }

//include ('templates/header.php');
header('Location: manageMyInfo.php'); 
?>


