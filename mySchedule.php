<?php
include('templates/header.php');
$_GET['class1'] = "";
$_GET['class2'] = "";
$_GET['class3'] = "wad-side-menu-button-active";
$_GET['class4'] = "";
include('templates/body.php');
include_once('templates/calendar.php');
//include_once('templates/calendar_myShedule.php');
include('1_database_exams.php');

$futureAppointments = selectFutureAppointments($appointments_info_doctor,$currentDate,$currentTime);
//$recentExams = getRecentExams($doctor_id);
?>

<div class="wad-body-content">
  <div class="wad-body-content-title">Manage My Schedule</div>
  <div class="wad-body-content-box">
  <br><label> </label><br/ >
      <?php
      $calendar = new Calendar($doctor_id);
      echo $calendar->show();
    ?>
  </div>
  <div class="wad-body-content-title">All Appointments</div>
  <div class="wad-body-content-box">
 <table class="app-table">
 <?php if(empty($futureAppointments)){echo 'No future appointments found.';}?>
  <tr class="table-first-line">
    <th class="column-style-1">HOUR</th>
    <th class="column-style-2">DATE</th>
    <th class="column-style-4">ROOM</th>
    <th class="column-style-3">PATIENT</th>
    <th> </th>
  </tr>
  <?php foreach ($futureAppointments as $appointment) { ?>
  <tr>  
    <td><?=$appointment['appointment_time'];?></td>
    <td><?=$appointment['appointment_date'];?></td>
    <td class="column-style-4-colm"><?=$appointment['room'];?></td>
    <td><?php echo $appointment['first_name_patient'];
    	      echo ' ';
    	      echo $appointment['last_name_patient'];?></td>
    <td><a href="appointmentDetails.php?patient_id=<?=$appointment['patient_id']?>">Details <?php echo $appointment['patient_id']; ?></a></td>
  </tr>
   <?php }; ?>
  </table> 

  </div>


  </div>

  <?php
  include('templates/footer.php');
  ?>