function registerf(){
	 var name=document.getElementById('cname').value;
	 var email=document.getElementById('cmail').value;
	 var pass=document.getElementById('cpass').value;
	 var country=document.getElementById('country').value;
	 var city=document.getElementById('city').value;
	 var contact=document.getElementById('ctel').value;
	 var image=document.getElementById('cimage').value;
	 var address=document.getElementById('caddress').value;
	 
	 console.log('hi');

	if(name=="" || email=="" || pass=="" || country=="" || city=="" || contact=="" || image=="" || address==""){

		alert("All fields required!");
	}else{
		alert('Registration successful!');
	}
	return false;
}