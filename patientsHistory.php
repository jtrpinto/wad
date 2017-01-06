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
include('1_database_observations.php');
$_GET['classMenu1'] = "";
$_GET['classMenu2'] = "button-submit-pat-active";
$_GET['classMenu3'] = "";
$_GET['classMenu4'] = "";
include('templates/patientPage.php');

$examsList = getPatientsExams($patient_id);
$diagnosesList = getPatientsDiagnoses($patient_id);
$obsList = getPatientsLatestObservations($patient_id);
$appList = getPatientsLatestAppointments($patient_id);
?>

<br>
<div class="wad-body-content-title">Diagnosis Evolution</div>
<div class="wad-body-content-box">
  <h4>Manual diagnoses:</h4>
  <ul>
  <?php foreach ($diagnosesList as $diagnosis){ ?>
      <li>
        <?=$diagnosis['exam_date']?> - <b><?=$diagnosis['diagnoses_result']?></b> (probability: <?=$diagnosis['probability']?>)
        (<a href="analyseExam.php?exam_id=<?=$diagnosis['exam_id']?>">see exam</a>)
      </li>
  <?php } ?>
  </ul>
  <h4>Automatic diagnoses:</h4>
  <ul>
  <?php foreach ($examsList as $exam){ ?>
      <li>
        <?=$exam['exam_date']?> - <b><?=$exam['auto_diagnoses_result']?></b> (probability: <?=$exam['auto_probability']?>)
        (<a href="analyseExam.php?exam_id=<?=$exam['id']?>">see exam</a>)
      </li>
  <?php } ?>
  </ul>
</div>

<div class="wad-body-content-title">Treatment History</div>
<div class="wad-body-content-box">

</div>

<div class="wad-body-content-title">Current Symptoms</div>
<div class="wad-body-content-box">

</div>

<div class="wad-half-body-division">
  <div class="wad-half-body-content">
    <div class="wad-body-content-title">Latest Observations</div>
      <div class="wad-body-content-box">
        <ul>
          <?php foreach ($obsList as $obs){ ?>
            <li>
              <b><?=$obs['date_observations']?></b> - <?=$obs['notes']?>
            </li>
          <?php } ?>
        </ul>
        (<a href="#">see all observations</a>)
      </div>
    </div>
    <div class="wad-half-body-content">
      <div class="wad-body-content-title">Latest Appointments</div>
      <div class="wad-body-content-box">
        <ul>
          <?php foreach ($appList as $app){ ?>
            <li>
              <?=$app['appointment_time']?> <b><?=$app['appointment_date']?></b> - Room <?=$app['room']?>
            </li>
          <?php } ?>
        </ul>
        (<a href="#">see all appointments</a>)
      </div>
    </div>
  </div>
</div>


</div>
<?php
include('templates/footer.php');
?>
