<?php
include('templates/header.php');
$_GET['class1'] = "wad-side-menu-button-active";
$_GET['class2'] = "";
$_GET['class3'] = "";
$_GET['class4'] = "";
include('templates/body.php');
include_once('templates/calendar.php');
include('1_database_exams.php');

$futureAppointments = selectFutureAppointments($appointments_info_doctor,$currentDate,$currentTime);
$recentExams = getRecentExams($doctor_id);
?>

<div class="wad-body-content">
  <div class="wad-body-content-title">Schedule</div>
  <div class="wad-body-content-box">
      <?php
      $calendar = new Calendar($doctor_id);
      echo $calendar->show();
    ?>
  </div>
  <div class="wad-half-body-division">
    <div class="wad-half-body-content">
      <div class="wad-body-content-title">Next Appointments</div>
        <div class="wad-body-content-box">
          <?php if(empty($futureAppointments)){echo 'No future appointments found.';}?>
          <ul>
            <?php foreach ($futureAppointments as $appointment) { ?>
            <li>
              Room <?=$appointment['room'];?>
              <b><?=$appointment['appointment_time'];?></b>
              <?=$appointment['appointment_date'];?>
              <a href="patientsHistory.php?patient_id=<?=$appointment['patient_id']?>">
              <?=$appointment['first_name_patient'];?>
              <?=$appointment['last_name_patient'];?></a>
              <a href="appointmentDetails.php?patient_id=<?=$appointment['patient_id']?>&app_id=<?=$appointment['id']?>" title="See details"><i class="fa fa-external-link-square" aria-hidden="true"></i></a></li>
            </li>
            <?php };?>
          </ul>
          <a href="mySchedule.php" title="See schedule"><i class="fa fa-external-link-square" aria-hidden="true"></i> see schedule</a>
        </div>
      </div>
      <div class="wad-half-body-content">
        <div class="wad-body-content-title">Recent Exams</div>
        <div class="wad-body-content-box">
          <?php if(empty($recentExams)){echo 'No recent exams found.';}?>
          <ul>
            <?php foreach ($recentExams as $exam) { ?>
              <li> <?=$exam['exam_date']?> <b><?=$exam['first_name']?> <?=$exam['last_name']?></b>
              <a href="analyseExam.php?exam_id=<?=$exam['id']?>" title="See exam"><i class="fa fa-external-link-square" aria-hidden="true"></i></a></li>
            <?php };?>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <?php
  include('templates/footer.php');
  ?>
