function edit(s) {
    if (document.getElementById(s).disabled == false) document.getElementById(s).disabled=true;
	else document.getElementById(s).disabled=false;
}

function multi_edit(s) {
    if (document.getElementById(s).style.display == "none") document.getElementById(s).style.display="block";
	else document.getElementById(s).style.display="none";
}