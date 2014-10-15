function CheckForm() {

  valid = true;  

  if(document.orderOceanic.firstName.value == "") {
    alert("Please enter your first name.");
    valid = false;
    document.orderOceanic.firstName.focus();
  } else if(document.orderOceanic.lastName.value == "") {
    alert("Please enter your last name.");
	valid = false;
    document.orderOceanic.lastName.focus();
  } else if(document.orderOceanic.address.value == "") {
    alert("Please enter your street address.");
	valid = false;
    document.orderOceanic.address.focus();
  } else if(document.orderOceanic.city.value == "") {
    alert("Please enter your city.");
	valid = false;
    document.orderOceanic.city.focus();
  } else if(document.orderOceanic.zip.value == "") {
    alert("Please enter your zip code.");
	valid = false;
    document.orderOceanic.zip.focus();
  } else if(document.orderOceanic.phone.value == "") {
    alert("Please enter your phone number.");
	valid = false;
    document.orderOceanic.phone.focus();
  } else if(document.orderOceanic.email.value == "") {
	alert("Please enter your email address.");
	valid = false;
	document.orderOceanic.email.focus();  	  	
  }

  if(document.orderOceanic.zip.value != "") {
  	if(isNaN(document.orderOceanic.zip.value)) {
  		  alert("Please enter a valid 5 digit zip code.");
  		  valid = false;  
  		  document.orderOceanic.zip.focus();
  		  document.orderOceanic.zip.value = document.orderOceanic.zip.defaultValue;			
  	}
 }	

  if(document.orderOceanic.email.value != "") {  	
  	var str = document.orderOceanic.email.value;
  	var filter = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
  	if(filter.test(str)) {
  		testResult = true;
  	} else {
  		alert("Please enter a valid email address.");
  		valid = false;
  		document.orderOceanic.email.focus();
  		document.orderOceanic.email.value = document.orderOceanic.email.defaultValue;
    }
  }

  return valid;

}