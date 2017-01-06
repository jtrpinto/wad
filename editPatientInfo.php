<?php
include('templates/header.php');
$_GET['class1'] = "";
$_GET['class2'] = "wad-side-menu-button-active";
$_GET['class3'] = "";
$_GET['class4'] = "";
include('templates/body.php');

$patient_id = $_GET['patient_id'];
$_GET['patient_id'] = $patient_id;
include('1_database_patients.php');
$_GET['classMenu1'] = "button-submit-pat-active";
$_GET['classMenu2'] = "";
$_GET['classMenu3'] = "";
$_GET['classMenu4'] = "";
include('templates/patientPage.php');
?>

<div id ="wad-manageMyInfo-page" class="wad-body-content">
  <div class="wad-body-content-title-patient">Edit Patient Info</div>
  <div class="wad-body-content-internal-patient">Personal Information</div>
  <div class="wad-body-content-internal-fields-patient">
    <form action="0_action_editPatientInfo_pi.php" method="post" enctype="multipart/form-data"> <!---->
      <input type="hidden" name="patient_id" value="<?=$patient_id?>">
      <label class="input-text">First Name:</label><input type="text" name="first_name" class="input-box" placeholder="<?php echo $patient['first_name']; ?>" value="<?=$patient['first_name']?>" pattern="[A-Za-z]+" title="Can only contain characters!"><br />
      <label class="input-text">Last Name:</label><input type="text" name="last_name" class="input-box" placeholder="<?php echo $patient['last_name']; ?>" value="<?=$patient['last_name']?>" pattern="[A-Za-z]+" title="Can only contain characters!"></label><br />
      <label class="input-text">Healthcare ID:</label><input type="integer" name="healthcare_id" class="input-box" placeholder="<?php echo $patient['healthcare_id']; ?>" value="<?=$patient['healthcare_id']?>" pattern="[0-9]{8}" title="Can only contain precisely 8 integers!"></label><br />
      <label class="input-text">Birth Date:</label><input type="date" name="birth_date" class="input-box" placeholder="<?php echo $patient['birth_date']; ?>" value="<?=$patient['birth_date']?>" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" title="Can only have the form: YYYY-MM-DD!"></label><br />
      <label class="input-text">Gender:</label>
      <input type="radio" name="gender" <?php if (isset($patient['gender']) && $patient['gender']=='f') echo "checked";?> value="f">Female
      <input type="radio" name="gender" <?php if (isset($patient['gender']) && $patient['gender']=='m') echo "checked";?> value="m">Male<br>
      <!--label class="input-text">Photo:</label><input type="text" name="photo" class="input-box" value="
      <?php //echo $patient['photo']; ?> 
      "></label><br /-->
      <input type="submit" class="button-submit-edit" value="Save">
    </form>
  </div> 

  <div class="wad-body-content-internal">Contact Information</div>
  <div class="wad-body-content-internal-fields">
    <form action="0_action_editPatientInfo_ci.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="patient_id" value="<?=$patient_id?>">
      <label class="input-text">City:</label><input type="text" name="city" class="input-box" placeholder="<?php echo $patient['city']; ?>" value="<?=$patient['city']?>" pattern="[A-Za-z,. ]+" title="Can only contain characters!"><br />
      <label class="input-text">Street:</label><input type="text" name="street" class="input-box" placeholder="<?php  echo $patient['street']; ?>" value="<?=$patient['street']?>" pattern="[A-Za-z,. ]+" title="Can only contain characters!"><br />
      <label class="input-text">Postal Code:</label><input type="integer" name="postal_code" class="input-box-half" placeholder="   <?php echo $patient['postal_code']; ?>" value="<?=$patient['postal_code']?>" pattern="[0-9]{5}" title="Can only contain precisely 5 integers!"></label>
      <label class="input-text">Number:</label><input type="integer" name="number" class="input-box-half" placeholder="<?php echo $patient['phone']; ?>" value="<?=$patient['phone']?>" pattern="[0-9]{9}" title="Can only contain precisely 9 integers!"></label><br />
      <label class="input-text">Email:</label><input type="text" name="email" class="input-box" placeholder="<?php echo $patient['email']; ?>" value="<?=$patient['email']?>" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}" title="Can only be simillar to the form: example@email.com!"></label><br />
      <input type="submit" class="button-submit-edit" value="Save">
    </form>
  </div> 
</div>
</div>

</div>

<?php
include('templates/footer.php');
?>
