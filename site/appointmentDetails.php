<?php
include('templates/header.php');
$_GET['class1'] = "";
$_GET['class2'] = "wad-side-menu-button-active";
$_GET['class3'] = "";
$_GET['class4'] = "";
include('templates/body.php');
$patient_id = $_GET['patient_id'];

$_GET['classMenu1'] = "";
$_GET['classMenu2'] = "";
$_GET['classMenu3'] = "button-submit-pat-active";
$_GET['classMenu4'] = "";
include('templates/patientPage.php');
include_once('templates/calendar.php');
include('1_database_exams.php');
include('1_database_observations.php');

$appointment_id = $_GET['app_id'];
$appInfo = getSingleAppointmentInfo($appointment_id);
$examList = getAppointmentExams($appointment_id);
$patApps = getPatientsAppointments($patient_id);
$obsList = getAppointmentObservations($appointment_id);
?>

<br>
<div class="wad-body-content-title">Appointment details</div>
<div class="wad-body-content-box wad-darker-box">
  Patient: <?=$appInfo['pat_fname']?> <?=$appInfo['pat_lname']?><br>
  Doctor: <?=$appInfo['doc_fname']?> <?=$appInfo['doc_lname']?>, MD<br>
  Date: <?=$appInfo['appointment_date']?><br>
  Time: <?=$appInfo['appointment_time']?><br>
  Room: <?=$appInfo['room']?>
</div>
<div class="wad-body-content-box wad-darker-box">
  <b>Exams analysed:</b>
  <?php if(empty($examList)){echo 'No exams for this appointment.';} ?>
  <ul>
  <?php foreach ($examList as $exam){ ?>
    <li>
      <?=$exam['type_of_exam']?> (date: <?=$exam['exam_date']?>)
      <a href="analyseExam.php?exam_id=<?=$exam['id']?>" title="See exam"><i class="fa fa-external-link-square" aria-hidden="true"></i></a>
    </li>
  <?php } ?>
  </ul>
  <a href="newExam.php" title="Add new exam"><i class="fa fa-plus-circle" aria-hidden="true"></i> add new exam</a>
</div>
<div class="wad-body-content-box wad-darker-box">
  <b>Observations stored:</b>
  <?php if(empty($obsList)){echo 'No observations for this appointment.';} ?>
  <ul>
    <?php foreach ($obsList as $obs){ ?>
      <li><?=$obs['notes']?> (<?=$obs['date_observations']?>)</li>
    <?php } ?>
  </ul>
  <a href="#" onclick="openPopUp('wad-newobservation-popup')" title="Add new observation"><i class="fa fa-plus-circle" aria-hidden="true"></i> add new observation</a><br>
  <a href="seeObservations.php?patient_id=<?=$patient_id?>" title="See all observations"><i class="fa fa-external-link-square" aria-hidden="true"></i> see all observations</a>
</div>


</div>
<?php
  include('templates/footer.php');
?>
