<?php
include('templates/header.php');
$_GET['class1'] = "";
$_GET['class2'] = "wad-side-menu-button-active";
$_GET['class3'] = "";
$_GET['class4'] = "";
include('templates/body.php');

?>

<div id ="wad-manageMyInfo-page" class="wad-body-content">
  <div class="wad-body-content-title">My Patients</div>

<?php 
  $php_array = array('a1', 'a2', 'a3');

  $appointmentsTotalInformation = array();
    $i = 0;
    foreach ($appointments_info_doctor as $appointment) { 
     /*$appointmentsTotalInformation[$i] = $appointmentsTotalInformation();*/
     $appointmentsTotalInformation[$i]['date'] = $appointment['appointment_date'];
     $appointmentsTotalInformation[$i]['time'] = $appointment['appointment_time'];
     $appointmentsTotalInformation[$i]['room'] = $appointment['room'];
     $appointmentsTotalInformation[$i]['patient_fn'] = $appointment['first_name_patient'];
     $appointmentsTotalInformation[$i]['patient_ln'] = $appointment['last_name_patient'];
     $appointmentsTotalInformation[$i]['patient_id'] = $appointment['patient_id'];
     $appointmentsTotalInformation[$i]['patient_healthcare_id'] = $appointment['patient_healthcare_id'];
    $i++;
  }
     //print_r($appointmentsTotalInformation);
     //echo nl2br("\n");
     //echo nl2br("\n");
 ?>

  <form><label class="input-text" name="ordered_by">Select list:</label>
   <select id = "ordered_by" class="input-box" onchange="mySelectChange(this.options[this.selectedIndex].value)">
     <option value="1">Last Appointment (Most Rrecent First)</option>
     <option value="2">Last Appointment (Least Recent First)</option>
     <option value="3">Future Appointment (Nearest First)</option>
     <option value="4">Last Name (Ascending)</option>
     <option value="5">Last Name (Descending)</option>
     <option value="6">Current Diagnosis (Positive First)</option>
     <option value="7">Current Diagnosis (Negative First)</option>
   </select></form> <!--br /--> 

   <!--form name="search_by_name" method="POST" action="0_action_search_by_name.php"-->
   <label id="teste" class="input-text">Search:</label>
   <input id="input_pfn" type="text" name="patient_first_name" class="input-box-half" placeholder="First Name">
   <input id="input_pln" type="text" name="patient_last_name" class="input-box-half" placeholder="Last Name">
   <input type="submit" class="button-submit" value="Go" onClick="search_by_name()">
   <!--/form-->

   

<div class="patients"><ul>
	<li>
		<div class="patient">
		<a href="#" class="img"><img src="files/img/00000000.png"/></a>
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
    //alert (JSON.stringify(array));
    //alert(id);

    var preordered = [];
    var ids_position = [];
    var ordenated = [];

    switch (id){
      case '1':
        // Last Appointment (most recent first)
        preordered = array.sort(function(a,b){return a["date"] < b["date"]});
        //alert (JSON.stringify(preordered)+"\n\n\n");

        for(var i = 0; i < preordered.length; i++){
          var p_id = preordered[i]["patient_id"];
          if (jQuery.inArray(p_id, ids_position)==-1){
            ids_position.push(p_id);
            ordenated.push(preordered[i]);
          }
        }

        break;
      case '2':
         // Last Appointment (least recent first)
        preordered = array.sort(function(a,b){return b["date"] < a["date"]});
        //alert (JSON.stringify(preordered)+"\n\n\n");

        for(var i = 0; i < preordered.length; i++){
          var p_id = preordered[i]["patient_id"];
          if (jQuery.inArray(p_id, ids_position)==-1){
            ids_position.push(p_id);
            ordenated.push(preordered[i]);
          }
        }

        break;
      case '3':
        break;
      case '4':
        break;
      case '5':
        break;
      case '6':
        break;
      case '7':
        break;
      default:
        alert("error");
        break;
    }
//alert ("oi");
    changePatientList(ordenated);
  }
function changePatientList(ordenated){
    var innerString = "";

    for(var i = 0; i < ordenated.length; i++){
      //alert (i);

      innerString += '<li><div class="patient">' + 
    '<a href="patientPage.php?patient_id=' + ordenated[i]["patient_id"] +'" class="img"><img src="files/img/patients/' + ordenated[i]["patient_healthcare_id"] + '.jpg"/></a>' + 
    '<a href="#" class="name">' + ordenated[i]["patient_fn"] + ' ' + ordenated[i]["patient_ln"] + '</a></div></li>';
    }
  
    //alert(JSON.stringify(ordenated[0]));
    document.getElementById('patient_list').innerHTML = innerString;
    //alert (JSON.stringify(ordenated));

  }

function search_by_name(){
  var appointmentsTotalInformation = <?php echo json_encode($appointmentsTotalInformation); ?>;
  var first_name = document.getElementById('input_pfn').value;
  var last_name = document.getElementById('input_pln').value;
  //alert (first_name + ' ' + last_name);

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

  //alert (resultName);
  changePatientList(resultName);
}

</script>

<?php
include('templates/footer.php');
?>
