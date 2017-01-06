<?php
include('templates/header.php');
$_GET['class1'] = "";
$_GET['class2'] = "wad-side-menu-button-active";
$_GET['class3'] = "";
$_GET['class4'] = "";
include('templates/body.php');

include('1_database_patients.php');
$patients_list = getAllPatients();
?>


<div id ="wad-manageMyInfo-page" class="wad-body-content">
  <div class="wad-body-content-title">My Patients</div>

  <?php 
  $php_array = array('a1', 'a2', 'a3');

  $allPatients = array();
    $i = 0;
    foreach ($patients_list as $patient) { 
     $allPatients[$i]['patient_fn'] = $patient['first_name'];
     $allPatients[$i]['patient_ln'] = $patient['last_name'];
     $allPatients[$i]['patient_id'] = $patient['id'];
     $allPatients[$i]['patient_healthcare_id'] = $patient['healthcare_id'];
    $i++;
  }
 ?>


<!-- Code with javascript -->
  <form><label class="input-text" name="ordered_by">Select list:</label>
   <select id = "ordered_by" class="input-box" onchange="mySelectChange(this.options[this.selectedIndex].value)">
     <option value="1">First Name (Ascending)</option>
     <option value="2">Last Name (Ascending)</option>
   </select></form> <!--br /--> 

<!-- Code with javascript -->
   <label id="teste" class="input-text">Search:</label>
   <input id="input_pfn" type="text" name="patient_first_name" class="input-box-half" placeholder="First Name">
   <input id="input_pln" type="text" name="patient_last_name" class="input-box-half" placeholder="Last Name">
   <input type="submit" class="button-submit" value="Go" onClick="search_by_name()">

   <a href="myPatients.php"><input type="submit" class="button-submit-all" id="allPatients" value="View My Patients"></input></a>

<div class="patients"><ul>
	<li>
		<div class="patient">
		<a href="createNewPatient.php" class="img"><img src="files/img/00000000.png"/></a>
		<a href="#" class="name">New Patient</a> 
		</div>
	</li>

<label style="display: none;" id="label_id"><?php print_r($php_array);?></label>
<div id="patient_list">
</div>
</ul></div>

</div>

<script type="text/javascript">

  mySelectChange('' + (document.getElementById('ordered_by').selectedIndex + 1));

  function mySelectChange(id){
    var array = <?php echo json_encode($allPatients); ?>;
    var preordered = [];
    var finalordered = [];
    var ids_position = [];
    var ordenated = [];

    switch (id){
      case '1':
        // FirstName
        ordenated = array;
        break;
        
      case '2':
         // LastName
        ordenated = array.sort(function(a,b){return a["patient_ln"].localeCompare(b["patient_ln"])==-1;});
        break;
      default:
        alert("error");
        break;
    }
    changePatientList(ordenated);
  }
  
function changePatientList(ordenated){
    var innerString = "";
//alert ('print');

    for(var i = 0; i < ordenated.length; i++){
      innerString += '<li><div class="patient">' + 
    '<a href="editPatientInfo.php?patient_id=' + ordenated[i]["patient_id"] +'" class="img"><img src="files/img/patients/' + ordenated[i]["patient_healthcare_id"] + '.jpg"/></a>' + 
    '<a href="#" class="name">' + ordenated[i]["patient_fn"] + ' ' + ordenated[i]["patient_ln"] + '</a></div></li>';
    }
  
    document.getElementById('patient_list').innerHTML = innerString;
  }

function search_by_name(){
  var allPatients = <?php echo json_encode($allPatients); ?>;
  var first_name = document.getElementById('input_pfn').value;
  var last_name = document.getElementById('input_pln').value;
  var resultName = [];
  var ids_position = [];
 
if (first_name!= '' && last_name != ''){
    // procurar por first and last name
    for(var i = 0; i < allPatients.length; i++){

     if ((allPatients[i]["patient_fn"] == first_name) && (allPatients[i]["patient_ln"] == last_name)){
          var p_id = allPatients[i]["patient_id"];
          if (jQuery.inArray(p_id, ids_position)==-1){
            ids_position.push(p_id);
            resultName.push(allPatients[i]);
          }
     } 
    }
  }
  else if (first_name != '' && last_name == '') {
    // caso só seja introduzido first_name
    for(var i = 0; i < allPatients.length; i++){
     if ((allPatients[i]["patient_fn"] == first_name)){
          var p_id = allPatients[i]["patient_id"];
          if (jQuery.inArray(p_id, ids_position)==-1){
            ids_position.push(p_id);
            resultName.push(allPatients[i]);
          }
     } 
    }
  }
  
  else if (last_name != '' && first_name == '') {
    // caso so seja introduzido o last_name
    for(var i = 0; i < allPatients.length; i++){
     if ((allPatients[i]["patient_ln"] == last_name)){
          var p_id = allPatients[i]["patient_id"];
          if (jQuery.inArray(p_id, ids_position)==-1){
            ids_position.push(p_id);
            resultName.push(allPatients[i]);
          }
     } 
    }
  }
   else if (last_name == '' && first_name == ''){
    return;
  }

  changePatientList(resultName);
}


</script>



<?php
include('templates/footer.php');
?>
