function openSideMenu() {
    document.getElementById("wad-side-menu-opened").style.display = 'inline-block';
    document.getElementById("wad-side-menu-collapsed").style.display = 'none';
    document.getElementById("wad-side-menu").style.width = "14em";
}

function collapseSideMenu() {
    document.getElementById("wad-side-menu-opened").style.display = 'none';
    document.getElementById("wad-side-menu-collapsed").style.display = 'inline-block';
    document.getElementById("wad-side-menu").style.width = "3em";
}

function openPopUp(id){
  document.getElementById(id).style.visibility = 'visible';
}

function openNewPage(id){
  document.getElementById(id).style.visibility = "visible";
}

function closePopUp(id){
  document.getElementById(id).style.visibility = 'hidden';
}

function mySelectChange(id){
	var array = document.getElementById('label_id').innerHTML;

	alert(array);

	var array2 = <?php print_r( json_encode($php_array)); ?>;

	alert(array2);

	document.getElementById('patient_list').innerHTML = '<a href="#">Hello.</a>';

}