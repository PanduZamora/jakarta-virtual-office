// JavaScript Document
function notification_switch(notifytype){ 

	if (notifytype == "email")
	{
		/*if (document.getElementById)
		{ 
			obj = document.getElementById(id); 
			if (obj.style.display == "none"){ 
				obj.style.display = ""; 
			} else { 
				obj.style.display = "none"; 
			} 

		} */
		document.getElementById("emailset").style.display="";
		document.getElementById("mobileset").style.display="none";
		document.getElementById("mobilecset").style.display="none";
		
		/*document.mail_mf.emails.disabled=false;
		document.mail_mf.countrycode.disabled=true;
		document.mail_mf.mobile.disabled=true;*/

	}
	else
	{
		/*	obj = document.getElementById(id); 
			obj.style.display = "none"; */
		/*document.mail_mf.emails.disabled=true;
		document.mail_mf.countrycode.disabled=false;
		document.mail_mf.mobile.disabled=false;*/
		document.getElementById("emailset").style.display="none";
		document.getElementById("mobileset").style.display="";
		document.getElementById("mobilecset").style.display="";


	}
	

} 

