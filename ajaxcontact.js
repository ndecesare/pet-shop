 /*$(function(){
  $('#contactSubmit').click(function(){
 
$.post("processor.php", $("#contactForm").serialize(),  function(response) {
$('#success').html(response);
});
return false;
 
});

});*/

 function observeEvent(target, eventName, observerFunction, useCapture){
	if (target.addEventListener) {
		target.addEventListener(eventName, observerFunction, useCapture);
	} else if (target.attachEvent) {
		target.attachEvent("on" + eventName, observerFunction);
	}
}


function start() {
	var xmlhttp = new XMLHttpRequest();
	var contentDiv = document.getElementById("success");

	var email = document.getElementById('email').value;
	var fName = document.getElementById('firstName').value;
	var lName = document.getElementById('lastName').value;
	var mes = document.getElementById('message').value;

	xmlhttp.open("POST", "processor.php", true);
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			contentDiv.innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded;");
	xmlhttp.send('email=' + encodeURIComponent(email) + '&firstName=' + encodeURIComponent(fName) + '&lastName=' + encodeURIComponent(lName) + '&message=' + encodeURIComponent(mes));

	return false;
}

observeEvent(window,"load",function() {
	var btn=document.getElementById("contactSubmit");
	observeEvent(btn,"click",start);
});
