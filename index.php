<?php
include('templates/header.php');
$_GET['class1'] = "wad-side-menu-button-active";
$_GET['class2'] = "";
$_GET['class3'] = "";
$_GET['class4'] = "";
include('templates/body.php');
include_once('templates/calendar.php');
?>

<div class="wad-body-content">
  <div class="wad-body-content-title">Schedule</div>
  <div class="wad-body-content-box">
      <?php
      $calendar = new Calendar();
      echo $calendar->show();
    ?>
  </div>
  <div class="wad-half-body-division">
    <div class="wad-half-body-content">
      <div class="wad-body-content-title">Next Appointments</div>
        <div class="wad-body-content-box">
          <ul>
            <?php 
            $futureAppointments = selectFutureAppointments($appointments_info_doctor,$currentDate,$currentTime);
            foreach ($futureAppointments as $appointment) { ?>
              <li><b>
              Room <?=$appointment['room'];?>
              <?=$appointment['appointment_time'];?></b>
              <?=$appointment['appointment_date'];?>
              <?=$appointment['first_name_patient'];?>
              <?=$appointment['last_name_patient'];?></li>
            <?php };?>
          </ul>
        </div>
      </div>
      <div class="wad-half-body-content">
        <div class="wad-body-content-title">Recent Exams</div>
        <div class="wad-body-content-box"></div>
      </div>
    </div>
  </div>

  <?php
  include('templates/footer.php');
  ?>
