<?php
include('templates/header.php');
$_GET['class1'] = "";
$_GET['class2'] = "";
$_GET['class3'] = "";
$_GET['class4'] = "";
include('templates/body.php');
include('1_database_exams.php');

$exam_id = $_GET['exam_id'];
$exam_info = getSingleExamInfo($exam_id);

print_r($exam_info);
?>


<?php
  include('templates/footer.php');
?>
