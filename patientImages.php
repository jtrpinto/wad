<?php
include('templates/header.php');
$_GET['class1'] = "";
$_GET['class2'] = "wad-side-menu-button-active";
$_GET['class3'] = "";
$_GET['class4'] = "";
include('templates/body.php');
include('1_database_patients.php');
include('1_database_exams.php');
$_GET['classMenu1'] = "";
$_GET['classMenu2'] = "";
$_GET['classMenu3'] = "";
$_GET['classMenu4'] = "button-submit-pat-active";
include('templates/patientPage.php');
$examsList = getPatientsExams($_GET['patient_id']);
?>


<div id ="wad-patientImages-page" class="wad-body-content">
  <div class="wad-body-content-title-patient">Image Gallery</div>
  	<li style="list-style-type: none; float: left;">
		  <div class="patient">
		    <a href="newExam.php" class="img"><img src="files/img/00000000.png"/></a>
		    <a href="newExam.php" class="name">New Exam</a>
		  </div>
	  </li>
    <?php foreach ($examsList as $exam){?>
    <li style="list-style-type: none; float:left;">
  	  <div class="patient">
  	    <a href="analyseExam.php?exam_id=<?=$exam['id']?>" class="img"><img src="files/img/exams/<?=$exam['exam_image']?>.png"/></a>
  	    <a href="analyseExam.php?exam_id=<?=$exam['id']?>" class="name"><?=$exam['appointment_date']?></a>
  	  </div>
  	</li>
    <?php } ?>
  </div>

</div>
</div>

</div>

<?php
include('templates/footer.php');
?>
