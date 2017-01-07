<?php
include('templates/header.php');
$_GET['class1'] = "";
$_GET['class2'] = "wad-side-menu-button-active";
$_GET['class3'] = "";
$_GET['class4'] = "";
include('templates/body.php');

$currentDate = date('Y-m-d');
$currentTime = date('H:i:s');

?>

<div id ="wad-manageMyInfo-page" class="wad-body-content">
  <div class="wad-body-content-title">My Patients</div>

<?php
  $php_array = array('a1', 'a2', 'a3');

  $appointmentsTotalInformation = array();
    $i = 0;
    foreach ($appointments_info_doctor as $appointment) {
     $appointmentsTotalInformation[$i]['date'] = $appointment['appointment_date'];
     $appointmentsTotalInformation[$i]['time'] = $appointment['appointment_time'];
     $appointmentsTotalInformation[$i]['room'] = $appointment['room'];
     $appointmentsTotalInformation[$i]['patient_fn'] = $appointment['first_name_patient'];
     $appointmentsTotalInformation[$i]['patient_ln'] = $appointment['last_name_patient'];
     $appointmentsTotalInformation[$i]['patient_id'] = $appointment['patient_id'];
     $appointmentsTotalInformation[$i]['patient_healthcare_id'] = $appointment['patient_healthcare_id'];
    $i++;
  }
 ?>

<!-- Code with javascript -->
  <form><label class="input-text" name="ordered_by">Select list:</label>
   <select id = "ordered_by" class="input-box" onchange="mySelectChange(this.options[this.selectedIndex].value)">
     <option value="1">Last Appointment (Most Recent First)</option>
     <option value="2">Last Appointment (Least Recent First)</option>
     <option value="3">Future Appointment (Nearest First)</option>
     <option value="4">Last Name (Ascending)</option>
     <option value="5">Last Name (Descending)</option>
     <option value="6">First Name (Ascending)</option>
     <option value="7">First Name (Descending)</option>
   </select></form>

<!-- Code with javascript -->
   <label id="teste" class="input-text">Search:</label>
   <input id="input_pfn" type="text" name="patient_first_name" class="input-box-half" placeholder="First Name">
   <input id="input_pln" type="text" name="patient_last_name" class="input-box-half" placeholder="Last Name">
   <input type="submit" class="button-submit" value="Go" onClick="search_by_name()">

  <a href="allPatients.php"><input type="submit" class="button-submit-all" id="allPatients" value="View All Patients"></input></a>


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
    var array = <?php echo json_encode($appointmentsTotalInformation); ?>;
    var preordered = [];
    var finalordered = [];
    var ids_position = [];
    var ordenated = [];

    switch (id){
      case '1':
        // Last Appointment (most recent first)
        preordered = array.sort(function(a,b){return a["date"] < b["date"]});

        for(var i = 0; i < preordered.length; i++){
          var p_id = preordered[i]["patient_id"];
          if (jQuery.inArray(p_id, ids_position)==-1){
            ids_position.push(p_id);
            ordenated.push(preordered[i]);
          }
        }
        ordenated = lastAppointment(ordenated);
        break;
      case '2':
         // Last Appointment (least recent first)
        preordered = array.sort(function(a,b){return a["date"] < b["date"]});
        //alert(JSON.stringify(preordered));
        for(var i = 0; i < preordered.length; i++){
          var p_id = preordered[i]["patient_id"];
          if (jQuery.inArray(p_id, ids_position)==-1){
            ids_position.push(p_id);
            finalordered.push(preordered[i]);
          }
        }
        ordenated= finalordered.sort(function(a,b){return b["date"] < a["date"]});

        ordenated = lastAppointment(ordenated);
        break;
      case '3':
        // Future Appointment (Nearest First)
        preordered = array.sort(function(a,b){return a["date"] < b["date"]});
        for(var i = 0; i < preordered.length; i++){
          var p_id = preordered[i]["patient_id"];
          if (jQuery.inArray(p_id, ids_position)==-1){
            ids_position.push(p_id);
            finalordered.push(preordered[i]);
          }
        }
        ordenated= finalordered.sort(function(a,b){return b["date"] < a["date"]});
        ordenated = futureAppointment(ordenated);
        break;
      case '4':
      // Last Name (Ascending)
      preordered = array.sort(function(a,b){return b["patient_ln"].localeCompare(a["patient_ln"])==-1;});
      //preordered = array.sort(function(a,b){return a["date"] < b["date"]});
        for(var i = 0; i < preordered.length; i++){
          var p_id = preordered[i]["patient_id"];
          if (jQuery.inArray(p_id, ids_position)==-1){
            ids_position.push(p_id);
            finalordered.push(preordered[i]);
          }
        }
        ordenated= finalordered;
        break;
      case '5':
      // Last Name (Descending)
      preordered = array.sort(function(a,b){return a["patient_ln"].localeCompare(b["patient_ln"])==-1;});
      //preordered = array.sort(function(a,b){return a["date"] < b["date"]});
        for(var i = 0; i < preordered.length; i++){
          var p_id = preordered[i]["patient_id"];
          if (jQuery.inArray(p_id, ids_position)==-1){
            ids_position.push(p_id);
            finalordered.push(preordered[i]);
          }
        }
        ordenated= finalordered;
        break;
      case '6':
      // First Name (Ascending)
      preordered = array.sort(function(a,b){return b["patient_fn"].localeCompare(a["patient_fn"])==-1;});
      //preordered = array.sort(function(a,b){return a["date"] < b["date"]});
        for(var i = 0; i < preordered.length; i++){
          var p_id = preordered[i]["patient_id"];
          if (jQuery.inArray(p_id, ids_position)==-1){
            ids_position.push(p_id);
            finalordered.push(preordered[i]);
          }
        }
        ordenated= finalordered;
        break;
      case '7':
      // First Name (Descending)
      preordered = array.sort(function(a,b){return a["patient_fn"].localeCompare(b["patient_fn"])==-1;});
      //preordered = array.sort(function(a,b){return a["date"] < b["date"]});
        for(var i = 0; i < preordered.length; i++){
          var p_id = preordered[i]["patient_id"];
          if (jQuery.inArray(p_id, ids_position)==-1){
            ids_position.push(p_id);
            finalordered.push(preordered[i]);
          }
        }
        ordenated= finalordered;
        break;
      default:
        alert("error");
        break;
    }
    changePatientList(ordenated);
  }

function lastAppointment(ordenated){
  var currentDate = <?php echo json_encode($currentDate)?>;
  var currentTime = <?php echo json_encode($currentTime)?>;
  var prev_array = [];

  for(var i = 0; i < ordenated.length; i++){
    if (ordenated[i]["date"] < currentDate){
      prev_array.push(ordenated[i]);
    }
    else if(ordenated[i]["date"] == currentDate){
      if(ordenated[i]["time"] < currentTime){
        prev_array.push(ordenated[i]);
      }
    }
  }
  return prev_array;
}

function futureAppointment(ordenated){
  var currentDate = <?php echo json_encode($currentDate)?>;
  var currentTime = <?php echo json_encode($currentTime)?>;
  var prev_array = [];

  for(var i = 0; i < ordenated.length; i++){
    if (ordenated[i]["date"] > currentDate){
      prev_array.push(ordenated[i]);
    }
    else if(ordenated[i]["date"] == currentDate){
      if(ordenated[i]["time"] > currentTime){
        prev_array.push(ordenated[i]);
      }
    }
  }
  return prev_array;

}

function changePatientList(ordenated){
    var innerString = "";

    for(var i = 0; i < ordenated.length; i++){
      innerString += '<li><div class="patient">' +
    '<a href="editPatientInfo.php?patient_id=' + ordenated[i]["patient_id"] +'" class="img"><img src="files/img/patients/' + ordenated[i]["patient_healthcare_id"] + '.jpg"/></a>' +
    '<a href="#" class="name">' + ordenated[i]["patient_fn"] + ' ' + ordenated[i]["patient_ln"] + '</a></div></li>';
    }

    document.getElementById('patient_list').innerHTML = innerString;
  }

function search_by_name(){
  var appointmentsTotalInformation = <?php echo json_encode($appointmentsTotalInformation); ?>;
  var first_name = document.getElementById('input_pfn').value;
  var last_name = document.getElementById('input_pln').value;
  var resultName = [];
  var ids_position = [];

if (first_name!= '' && last_name != ''){
    // procurar por first and last name
    for(var i = 0; i < appointmentsTotalInformation.length; i++){

     if ((appointmentsTotalInformation[i]["patient_fn"] == first_name) && (appointmentsTotalInformation[i]["patient_ln"] == last_name)){
          var p_id = appointmentsTotalInformation[i]["patient_id"];
          if (jQuery.inArray(p_id, ids_position)==-1){
            ids_position.push(p_id);
            resultName.push(appointmentsTotalInformation[i]);
          }
     }
    }
  }
  else if (first_name != '' && last_name == '') {
    // caso só seja introduzido first_name
    for(var i = 0; i < appointmentsTotalInformation.length; i++){
     if ((appointmentsTotalInformation[i]["patient_fn"] == first_name)){
          var p_id = appointmentsTotalInformation[i]["patient_id"];
          if (jQuery.inArray(p_id, ids_position)==-1){
            ids_position.push(p_id);
            resultName.push(appointmentsTotalInformation[i]);
          }
     }
    }
  }

  else if (last_name != '' && first_name == '') {
    // caso so seja introduzido o last_name
    for(var i = 0; i < appointmentsTotalInformation.length; i++){
     if ((appointmentsTotalInformation[i]["patient_ln"] == last_name)){
          var p_id = appointmentsTotalInformation[i]["patient_id"];
          if (jQuery.inArray(p_id, ids_position)==-1){
            ids_position.push(p_id);
            resultName.push(appointmentsTotalInformation[i]);
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
