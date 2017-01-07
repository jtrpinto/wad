<?php
include('templates/header.php');
$_GET['class1'] = "";
$_GET['class2'] = "wad-side-menu-button-active";
$_GET['class3'] = "";
$_GET['class4'] = "";
include('templates/body.php');
include('1_database_patients.php');
include('1_database_symptoms.php');

$patient_id = $_GET['patient_id'];
$symptom_id = $_GET['symptom_id'];

$symptomInfo = getSingleSymptomInfo($symptom_id, $patient_id);
?>

<div class="wad-body-content">
  <div class="wad-body-content-title">Edit symptom</div>
  <div class="wad-body-content-box">
    <form action="0_action_edit_symptom.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="patient_id" value="<?=$patient_id?>"></input>
      <input type="hidden" name="symptom_id" value="<?=$symptom_id?>"></input>
      Start date:
      <input class="input-box" type="date" name="start_date" placeholder="<?=$symptomInfo[0]['start_date']?>" value="<?=$symptomInfo[0]['start_date']?>"></input><br><br>
      End date:
      <input class="input-box" type="date" name="end_date" placeholder="<?=$symptomInfo[0]['end_date']?>" value="<?=$symptomInfo[0]['end_date']?>"></input><br><br>
      Place:
      <input class="input-box" type="text" name="place" placeholder="<?=$symptomInfo[0]['place']?>" value="<?=$symptomInfo[0]['place']?>"></input><br><br>
      Description:
      <textarea rows="4" cols="50" name="description" placeholder="<?=$symptomInfo[0]['description']?>"><?=$symptomInfo[0]['description']?></textarea><br><br>
      <input type="submit" class="button-submit-edit" value="Save">
    </form>
  </div>
</div>

<?php
include('templates/footer.php');
?>
