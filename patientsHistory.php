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
include('1_database_treatments.php');
include('1_database_symptoms.php');
$_GET['classMenu1'] = "";
$_GET['classMenu2'] = "button-submit-pat-active";
$_GET['classMenu3'] = "";
$_GET['classMenu4'] = "";
include('templates/patientPage.php');

$examsList = getPatientsExams($patient_id);
$diagnosesList = getPatientsDiagnoses($patient_id);
$obsList = getPatientsLatestObservations($patient_id);
$appList = getPatientsLatestAppointments($patient_id);
$futAppList = getPatientsFutureAppointments($patient_id);
$treatList = getPatientsTreatments($patient_id);
$allTreatments = getAllTreatments();
$allSymptoms = getAllSymptoms();
$patSymptoms = getPatientsSymptoms($patient_id);
?>

<br>
<div class="wad-body-content-title">Diagnosis Evolution</div>
<div class="wad-body-content-box wad-darker-box">
  <h4>Manual diagnoses:</h4>
  <?php if(empty($diagnosesList)){echo 'No manual diagnoses.';} ?>
  <ul>
  <?php foreach ($diagnosesList as $diagnosis){ ?>
      <li>
        <?=$diagnosis['exam_date']?> - <b><?=$diagnosis['diagnoses_result']?></b> (probability: <?=$diagnosis['probability']?>)
        <a href="analyseExam.php?exam_id=<?=$diagnosis['exam_id']?>" title="See exam"><i class="fa fa-external-link-square" aria-hidden="true"></i></a>
      </li>
  <?php } ?>
  </ul>
  <h4>Automatic diagnoses:</h4>
  <?php if(empty($examsList)){echo 'No automatic diagnoses.';} ?>
  <ul>
  <?php foreach ($examsList as $exam){ ?>
      <li>
        <?=$exam['exam_date']?> - <b><?=$exam['auto_diagnoses_result']?></b> (probability: <?=$exam['auto_probability']?>)
        <a href="analyseExam.php?exam_id=<?=$exam['id']?>" title="See exam"><i class="fa fa-external-link-square" aria-hidden="true"></i></a>
      </li>
  <?php } ?>
  </ul>
</div>

<div class="wad-body-content-title">Treatment History</div>
<div class="wad-body-content-box wad-darker-box">
  <?php if(empty($treatList)){echo 'No treatments.';} ?>
  <ul>
  <?php foreach ($treatList as $treat){ ?>
      <li>
        <b><?=$treat['name']?> <?=$treat['dose']?></b> (<?=$treat['frequency']?>, from <?=$treat['start_date']?> to <?=$treat['end_date']?>)
        <a href="editTreatment.php?patient_id=<?=$patient_id?>&treatment_id=<?=$treat['id']?>" title="Edit treatment"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
        <a href="0_action_delete_treatment.php?patient_id=<?=$patient_id?>&treatment_id=<?=$treat['id']?>" title="Delete treatment"><i class="fa fa-window-close" aria-hidden="true"></i></a>
      </li>
  <?php } ?>
  </ul>
  <a href="#" onclick="openPopUp('wad-newtreatment-popup')" title="Add new treatment"><i class="fa fa-plus-circle" aria-hidden="true"></i> add new treatment</a>
</div>

<div class="wad-body-content-title">Current Symptoms</div>
<div class="wad-body-content-box wad-darker-box">
  <?php if(empty($patSymptoms)){echo 'No symptoms.';} ?>
  <ul>
  <?php foreach ($patSymptoms as $symp){ ?>
      <li>
        <b><?=$symp['name']?></b> (<?=$symp['description']?>)<br>
        (place: <b><?=$symp['place']?></b>, from <?=$symp['start_date']?> to <?=$symp['end_date']?>)
        <a href="editSymptom.php?patient_id=<?=$patient_id?>&symptom_id=<?=$symp['id']?>" title="Edit symptom"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
        <a href="0_action_delete_symptom.php?patient_id=<?=$patient_id?>&symptom_id=<?=$symp['id']?>" title="Delete symptom"><i class="fa fa-window-close" aria-hidden="true"></i></a>
      </li>
  <?php } ?>
  </ul>
  <a href="#" onclick="openPopUp('wad-newsymptom-popup')" title="Add new symptom"><i class="fa fa-plus-circle" aria-hidden="true"></i> add new symptom</a>
</div>

<div class="wad-body-content-title">Latest Observations</div>
<div class="wad-body-content-box wad-darker-box">
  <ul>
    <?php foreach ($obsList as $obs){ ?>
      <li>
        <b><?=$obs['date_observations']?></b> - <?=$obs['notes']?>
      </li>
    <?php } ?>
  </ul>
  <?php if(empty($obsList)){echo 'No observations.<br>';} ?>
  <a href="seeObservations.php?patient_id=<?=$patient_id?>" title="See all observations"><i class="fa fa-external-link-square" aria-hidden="true"></i> see all observations</a>
</div>

<div class="wad-half-body-division">
  <div class="wad-half-body-content">
    <div class="wad-body-content-title">Future Appointments</div>
      <div class="wad-body-content-box wad-darker-box">
        <ul>
          <?php foreach ($futAppList as $futApp){ ?>
            <li>
              <?=$futApp['appointment_time']?> <b><?=$futApp['appointment_date']?></b> - Room <?=$futApp['room']?>
            </li>
            <?php } ?>
        </ul>
        <?php if(empty($futAppList)){echo 'No future appointments.<br>';} ?>
        <a href="#" title="See all appointments"><i class="fa fa-external-link-square" aria-hidden="true"></i> see all appointments</a>
      </div>
    </div>
    <div class="wad-half-body-content">
      <div class="wad-body-content-title">Latest Appointments</div>
      <div class="wad-body-content-box wad-darker-box">
        <ul>
          <?php foreach ($appList as $app){ ?>
            <li>
              <?=$app['appointment_time']?> <b><?=$app['appointment_date']?></b> - Room <?=$app['room']?>
            </li>
          <?php } ?>
        </ul>
        <?php if(empty($futAppList)){echo 'No past appointments.<br>';} ?>
      </div>
    </div>
  </div>
</div>


</div>
<?php
include('templates/footer.php');
?>
