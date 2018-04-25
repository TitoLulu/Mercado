
function validateloginf(){

	email=document.forms['loginf']['cmail'].value;
	pass=document.forms['loginf']['pass'].value;
	if(email=="" || pass==""){
		alert('All fields required');
	}else{
		return true;
	}

	return false;
}