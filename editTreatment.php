<?php
include('templates/header.php');
$_GET['class1'] = "";
$_GET['class2'] = "wad-side-menu-button-active";
$_GET['class3'] = "";
$_GET['class4'] = "";
include('templates/body.php');
include('1_database_patients.php');
include('1_database_treatments.php');

$patient_id = $_GET['patient_id'];
$treatment_id = $_GET['treatment_id'];

$treatmentInfo = getSingleTreatmentInfo($treatment_id, $patient_id);
?>

<div class="wad-body-content">
  <div class="wad-body-content-title">Edit treatment</div>
  <div class="wad-body-content-box">
    <form action="0_action_edit_treatment.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="patient_id" value="<?=$patient_id?>"></input>
      <input type="hidden" name="treatment_id" value="<?=$treatment_id?>"></input>
      Start date:
      <input type="date" name="start_date" placeholder="<?=$treatmentInfo[0]['start_date']?>" value="<?=$treatmentInfo[0]['start_date']?>"></input><br><br>
      End date:
      <input type="date" name="end_date" placeholder="<?=$treatmentInfo[0]['end_date']?>" value="<?=$treatmentInfo[0]['end_date']?>"></input><br><br>
      Frequency:
      <input type="text" name="frequency" placeholder="<?=$treatmentInfo[0]['frequency']?>" value="<?=$treatmentInfo[0]['frequency']?>"></input><br><br>
      <input type="submit" class="button-submit-edit" value="Save">
    </form>
  </div>
</div>

<?php
include('templates/footer.php');
?>
