
function validateForm(){
	if(document.getElementById('pTitle').value==""){
		alert('provide product Title');
		return false;
	}
	else {
		var title=document.getElementById('pTitle').value;
	}

	if(document.getElementById('pBrand').value==""){
		alert('provide product Brand');
	}
	else {
		var brand=document.getElementById('pBrand').value;
	}

	if(document.getElementById('pPrice').value==""){
		alert('provide product price');
	}
	else {
		var price=document.getElementById('pPrice').value;
	}

	if(document.getElementById('pDescription').value==""){
		alert('provide product description');
	}
	else {
		var description=document.getElementById('pDescription').value;
	}

	if(document.getElementById('pImage').value==""){
		alert('provide product image');
	}


}

/* view page javascript*/
function openDesc(evt, descName) {
    var i, contentPage, linkTab;
    contentPage = document.getElementsByClassName("contentPage");
    for (i = 0; i < contentPage.length; i++) {
        contentPage[i].style.display = "none";
    }
    linkTab = document.getElementsByClassName("linkTab");
    for (i = 0; i < linkTab.length; i++) {
        linkTab[i].className = linkTab[i].className.replace(" active", "");
    }
    document.getElementById(descName).style.display = "block";
    evt.currentTarget.className += " active";
}

