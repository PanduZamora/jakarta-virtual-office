// JavaScript Document
function showhidecc(paytype, id){ 

	if (paytype == "cc")
	{
		if (document.getElementById)
		{ 
			obj = document.getElementById(id); 
			if (obj.style.display == "none"){ 
				obj.style.display = ""; 
			} else { 
				obj.style.display = "none"; 
			} 
		} 
	}
	else
	{
			obj = document.getElementById(id); 
			obj.style.display = "none"; 

	}
} 

