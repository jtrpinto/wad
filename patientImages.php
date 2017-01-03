<?php
include('templates/header.php');
$_GET['class1'] = "";
$_GET['class2'] = "wad-side-menu-button-active";
$_GET['class3'] = "";
$_GET['class4'] = "";
include('templates/body.php');
?>

<div id ="wad-manageMyInfo-page" class="wad-body-content">
  <div class="wad-body-content-title"><?php foreach ($patients as $patient){ echo $patient['first_name'];  echo ' '; echo $patient['last_name']; } ?>
</div>

<div class="wad-body-content-internal"> 
<ul><div class="patient-photo">
<a href="" class="img"><img src="files/img/patients/<?php foreach ($patients as $patient){ echo $patient['healthcare_id']; } ?>.jpg"/></a>
</ul>
<ul><div class="patient-info">
<label> Healthcare ID: <?php echo $patient['healthcare_id'];?></label><br/>
<label>Gender: <?php if($patient['gender']=='f'){
  		echo "Female";
  	}
  	elseif ($patient['gender']=='m') {
  		echo "Male";
  	}
  	else {
  		echo "Undefined";
  	}; ?></label><br/>
<label>Birthday: <?php echo $patient['birth_date']; ?></label><br/>
<label>Address: <?php echo $patient['door_number']; echo ' '; 
					  echo $patient['street']; echo ', ';
					  echo $patient['postal_code'];  echo ' ';
					  echo $patient['city']; echo(', ');
					  echo $patient['country']?></label><br/>
<label>Phone: <?php echo $patient['phone']; ?></label><br/>
<label>E-mail: <?php echo $patient['email']; ?></label><br/>
</div>
</ul>
</div>

<?php
$classMenu1 = "classMenu1";
$classMenu2 = "classMenu2";
$classMenu3 = "classMenu3";
$classMenu4 = "classMenu4";

if(empty($class1)){
  $class1 = "button-submit-pat";
}
if(empty($class2)){
  $class2 = "button-submit-pat";
}
if(empty($class3)){
  $class3 = "button-submit-pat";
}
if(empty($class4)){
  $class4 = "button-submit-pat";
}
?>

<div class="wad-body-patient-menu">
<input type="submit" class="button-submit-pat" id="edit-pat-info" value="Edit Patient Info"></input>
<input type="submit" class="button-submit-pat" id="patient-history" value="Patient History"></input>
<input type="submit" class="button-submit-pat" id="see-appoint" value="See Appointments"></input>
<input type="submit" class="button-submit-pat" id="see-gallery" value="Image Gallery"></input>
</div>

<div id ="wad-patientImages-page" class="wad-body-content">
  <div class="wad-body-content-title-patient">Image Gallery</div>
  	<li style="list-style-type: none;">
		<div class="patient">
		<a href="#" class="img"><img src="files/img/00000000.png"/></a>
		<a href="#" class="name">New Exam</a> 
		</div>
	</li>
  </div> 

</div>
</div>

</div>

<?php
include('templates/footer.php');
?>
