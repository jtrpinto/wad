<?php
include('templates/header.php');
$_GET['class1'] = "";
$_GET['class2'] = "";
$_GET['class3'] = "";
$_GET['class4'] = "";
include('templates/body.php');
include('1_database_exams.php');
include('1_database_diagnoses.php');

$exam_id = $_GET['exam_id'];
$exam_info = getSingleExamInfo($exam_id);

if(isset($exam_info[0]['medical_diag_id'])){
  $med_diag_info = getDiagnosisInfo($exam_info[0]['medical_diag_id']);
}
?>

<div id ="wad-manageMyInfo-page" class="wad-body-content">
  <div class="wad-body-content-title"><?=$exam_info[0]['first_name']?> <?=$exam_info[0]['last_name']?> - Exam of <?=$exam_info[0]['exam_date']?></div>
  <div class="wad-body-content-box">
    Type of exam: <b><?=$exam_info[0]['type_of_exam']?></b><br>
    Date prescribed: <b><?=$exam_info[0]['date_prescribed']?></b>
    <h3>Manual diagnosis:
      <?php
        if(isset($exam_info[0]['medical_diag_id'])){
          echo $med_diag_info[0]['diagnoses_result'] . ' (probability: ' . $med_diag_info[0]['probability'] . '%)';
        } else {
          echo 'None';
        }
      ?>
    </h3>
    Automatic diagnosis: <b><?=$exam_info[0]['auto_diagnoses_result']?></b> (probability: <?=$exam_info[0]['auto_probability']?>%)
  </div>
  <div class="wad-body-patient-menu">
    <a href="#" onclick="openPopUp('wad-manualdiag-popup')"><input type="submit" class="button-submit-pat" id="edit-pat-info" value="Manual Diagnosis"></input></a>
    <a href="#" onclick="openPopUp('wad-observation-popup')"><input type="submit" class="button-submit-pat" id="patient-history" value="Add Observation"></input></a>
    <a href="patientPage.php?patient_id=<?=$exam_info[0]['patient_id']?>"><input type="submit" class="button-submit-pat" value="Patient Page"></input></a>
    <a href="patientImages.php?patient_id=<?=$exam_info[0]['patient_id']?>"><input type="submit" class="button-submit-pat" value="Back to Gallery"></input></a>
  </div>
  <div class="wad-body-content-box">
    <img class="wad-show-exam-image" src="files/img/exams/<?=$exam_info[0]['exam_image']?>.png" width=100% alt="exam image">
  </div>
</div>

<?php
  include('templates/footer.php');
?>
