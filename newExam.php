<?php
include('templates/header.php');
$_GET['class1'] = "";
$_GET['class2'] = "";
$_GET['class3'] = "";
$_GET['class4'] = "";
include('templates/body.php');
?>

<div class="wad-body-content">
  <div class="wad-body-content-title">New Exam</div>
  <div class="wad-body-content-box">
    Patient: 
    <select class="input-box">
        <option value="volvo">Volvo</option>
        <option value="saab">Saab</option>
        <option value="mercedes">Mercedes</option>
        <option value="audi">Audi</option>
    </select>
  </div>
</div>

<?php
include('templates/footer.php');
?>