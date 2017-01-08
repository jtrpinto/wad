<?php
include('templates/header.php');
$_GET['class1'] = "";
$_GET['class2'] = "";
$_GET['class3'] = "";
$_GET['class4'] = "";
include('templates/body.php');

$patient_info = $conn->prepare('SELECT * FROM wad.patients');
$patient_info->execute();
$patientList = $patient_info->fetchAll();

if (isset($_POST['pat-id'])){
  $pat_id = $_POST['pat-id'];
}
else {
  $pat_id = 1;
}
$appointments_info = $conn->prepare('SELECT * FROM wad.appointments WHERE patient_id = ? ORDER BY appointment_date DESC');
$appointments_info->execute(array($pat_id));
$appointmentsList = $appointments_info->fetchAll();
?>

<div class="wad-body-content">
  <div class="wad-body-content-title">New Exam</div>
  <br>
  <div class="wad-body-content-box">
    <form id="patient_select_form" method="POST">
      <h4>Please choose a patient before filling the rest of the form</h4>
      Patient:
      <select name='pat-id' class="input-box">
        <?php foreach ($patientList as $patient) {?>
          <option value="<?=$patient['id']?>"
          <?php if (isset($_POST['pat-id'])) {
            if ($patient['id']==$_POST['pat-id']) {
              echo 'selected="selected"';
            } } ?>
          ><?=$patient['first_name']?> <?=$patient['last_name']?> (Healthcare ID: <?=$patient['healthcare_id']?>)</option>
          <?php } ?>
        </select>
        <input type="submit" class="button-submit" value="Choose">
      </form>

      <br>
      <form id="new-exam-info" action="0_action_new_exam.php" enctype="multipart/form-data" method="post">
        Appointment:
        <select name="appointment-id" class="input-box">
          <?php foreach ($appointmentsList as $appointment) {?>
            <option value="<?=$appointment['id']?>">
          <?=$appointment['appointment_date']?> - <?=$appointment['appointment_time']?></option>
          <?php } ?>
        </select>

        <br><br>
        Exam date:
        <input class="input-box" type="date" name="exam_date">

        <br><br>
        Prescription date:
        <input class="input-box" type="date" name="date_prescribed">

        <br><br>
        Type of exam:
        <input class="input-box" type="text" name="exam_type">

        <br><br>
        Exam image:
        <input type="file" name="exam_image">

        <br><br>
        <input type="submit" class="button-submit" value="Submit">
      </form>
    </div>
  </div>

<?php
  include('templates/footer.php');
?>
