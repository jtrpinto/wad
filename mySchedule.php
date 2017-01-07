<?php
include('templates/header.php');
$_GET['class1'] = "";
$_GET['class2'] = "";
$_GET['class3'] = "wad-side-menu-button-active";
$_GET['class4'] = "";
include('templates/body.php');
include_once('templates/calendar.php');

include('1_database_exams.php');
$futureAppointments = selectFutureAppointments($appointments_info_doctor,$currentDate,$currentTime);
/*$month = array('0' => 'January',
                     '1' => 'February',
                     '2' => 'March',
                     '3' => 'April',
                     '4' => 'May',
                     '5' => 'June',
                     '6' => 'July',
                     '7' => 'August',
                     '8' => 'September',
                     '9' => 'October',
                     '10' => 'November',
                     '11' => 'December',
                     ); */

?>


<div class="wad-body-content">
  <div class="wad-body-content-title">Manage My Schedule</div>
  <div class="wad-body-content-box">
  <form method="get">
  <label class="go-to">Go to:</label>
  <label class="go-to-month-half">Month:</label><input type="text" name="monthText" pattern="[A-Za-z]{0-9}" title="Can only contain characters!">
  <label class="go-to-year-half">Year:</label><input type="number" name="year" min="2010" max="2018">
  <a href="mySchedule.php?month=<?=$_GET['monthText']?>&year=<?=$_GET['year']?>"><input type="submit" name="search" class="submit-go-to" value="Go">
  </form>
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
    <td><a href="appointmentDetails.php?patient_id=<?=$appointment['patient_id']?>&app_id=<?=$appointment['id']?>">Details</a></td>
  </tr>
   <?php }; ?>
  </table>
   <a href="#" onclick="openPopUp('wad-newappointment-popup')" ><input type="submit" name="addApp" class="button-submit-pat-new" value="Add New Appointment"></a>
  </div>


  </div>

  <?php
  include('templates/footer.php');
  ?>
