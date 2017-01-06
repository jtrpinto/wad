<?php
include('templates/header.php');
$_GET['class1'] = "";
$_GET['class2'] = "wad-side-menu-button-active";
$_GET['class3'] = "";
$_GET['class4'] = "";
include('templates/body.php');
include('1_database_patients.php');
include('1_database_exams.php');
include('1_database_diagnoses.php');
$_GET['classMenu1'] = "";
$_GET['classMenu2'] = "button-submit-pat-active";
$_GET['classMenu3'] = "";
$_GET['classMenu4'] = "";
include('templates/patientPage.php');

$examsList = getPatientsExams($patient_id);
$diagnosesList = getPatientsDiagnoses($patient_id);
?>

<br><br>
<div class="wad-body-content-title">Diagnosis Evolution</div>
<div class="wad-body-content-box">
  <h4>Manual diagnoses:</h4>
  <?php foreach ($diagnosesList as $diagnosis){ ?>
      <li>
        <?=$diagnosis['exam_date']?> - <b><?=$diagnosis['diagnoses_result']?></b> (probability: <?=$diagnosis['probability']?>)
        (<a href="analyseExam.php?exam_id=<?=$diagnosis['exam_id']?>">see exam</a>)
      </li>
  <?php } ?>
  <h4>Automatic diagnoses:</h4>
  <?php foreach ($examsList as $exam){ ?>
      <li>
        <?=$exam['exam_date']?> - <b><?=$exam['auto_diagnoses_result']?></b> (probability: <?=$exam['auto_probability']?>)
        (<a href="analyseExam.php?exam_id=<?=$exam['id']?>">see exam</a>)
      </li>
  <?php } ?>
</div>

<div class="wad-body-content-title">Treatment History</div>
<div class="wad-body-content-box">

</div>

<div class="wad-body-content-title">Current Symptoms</div>
<div class="wad-body-content-box">

</div>


</div>
<?php
include('templates/footer.php');
?>
