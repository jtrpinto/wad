<?php
include('templates/header.php');
$_GET['class1'] = "";
$_GET['class2'] = "wad-side-menu-button-active";
$_GET['class3'] = "";
$_GET['class4'] = "";
include('templates/body.php');
include('1_database_observations.php');

$patient_id = $_GET['patient_id'];
$observation_id = $_GET['observation_id'];

$obsInfo = getSingleObservationInfo($observation_id);
$patApps = getPatientsAppointments($patient_id);
?>

<div class="wad-body-content">
  <div class="wad-body-content-title">Edit symptom</div>
  <div class="wad-body-content-box">
    <form action="0_action_edit_observation.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="patient_id" value="<?=$patient_id?>"></input>
      <input type="hidden" name="observation_id" value="<?=$observation_id?>"></input>
      Start date:
      <input class="input-box" type="date" name="obs_date" placeholder="<?=$obsInfo[0]['date_observations']?>" value="<?=$obsInfo[0]['date_observations']?>"></input><br><br>
      Appointment:
      <select name='appointment_id' class="input-box">
        <?php foreach ($patApps as $app){ ?>
          <option value="<?=$app['id']?>"
            <?php if($app['id']==$obsInfo[0]['appointment_id']) {echo 'selected="selected"';} ?>>
            <?=$app['appointment_date']?> - <?=$app['appointment_time']?>
          </option>
        <?php } ?>
      </select><br><br>
      Notes:
      <textarea rows="4" cols="50" name="notes" placeholder="<?=$obsInfo[0]['notes']?>"><?=$obsInfo[0]['notes']?></textarea><br><br>
      <input type="submit" class="button-submit-edit" value="Save">
    </form>
  </div>
</div>

<?php
include('templates/footer.php');
?>
