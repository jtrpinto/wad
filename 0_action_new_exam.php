<?php
include_once('config/init.php');

if (!$_SESSION['doctor_id']) {
  $_SESSION['error_message'] = "No permission to add a new exam!";
  die(header("Location: myLogin.php"));
}

// getAutoProb function (adapted from h2ooooooo) ============================================
function getAutoProb($gdHandle) {
  $width = imagesx($gdHandle);
  $height = imagesy($gdHandle);

  $totalBrightness = 0;

  for ($x = 0; $x < $width; $x++) {
    for ($y = 0; $y < $height; $y++) {
      $rgb = imagecolorat($gdHandle, $x, $y);

      $red = ($rgb >> 16) & 0xFF;
      $green = ($rgb >> 8) & 0xFF;
      $blue = $rgb & 0xFF;

      $totalBrightness += (max($red, $green, $blue) + min($red, $green, $blue)) / 2;
    }
  }

  imagedestroy($gdHandle);

  return ceil(100-((($totalBrightness / ($width * $height)) / 2.55)-20)*11);
}
//======================================================================================

$appointment_id = $_POST['appointment-id'];
$exam_date = $_POST['exam_date'];
$date_prescribed = $_POST['date_prescribed'];
$exam_type = $_POST['exam_type'];
$image_name = date('Y_m_d_G_i_s');

$im = imagecreatefrompng($_FILES['exam_image']['tmp_name']);
$auto_prob = getAutoProb($im);

if ($auto_prob < 50){
  $auto_diag = 'Negative';
} elseif ($auto_prob < 65) {
  $auto_diag = 'Uncertain';
} else {
  $auto_diag = 'Positive';
}

global $conn;
$stmt = $conn->prepare('INSERT INTO wad.exams VALUES (DEFAULT, ?, ?, ?, ?, ?, ?, ?, NULL)');
$result = $stmt->execute(array($image_name, $exam_date, $date_prescribed, $exam_type, $auto_diag, $auto_prob, $appointment_id));

if ($result !== false) {
  $_SESSION['success_message'] = "Exam added succesfuly!";
  move_uploaded_file($_FILES['exam_image']['tmp_name'], 'files/img/exams/' . $image_name . '.png');

  $stmt = $conn->prepare('SELECT MAX(id) AS id FROM wad.exams');
  $stmt->execute();
  $new_exam_id = $stmt->fetchAll();

  header ('Location: analyseExam.php?exam_id='.$new_exam_id[0]['id']);
}
else {
  $_SESSION['error_message'] = "Exam submission failed!";
  header ('Location: newExam.php');
}

?>
