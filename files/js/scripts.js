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

