// JavaScript Document
var xmlHttp

function paymentCreditcheck(paytype)
{ 
	xmlHttp=GetXmlHttpObject()

	if (xmlHttp==null)
	{
 		alert ("Browser does not support HTTP Request")
 		return
	} 
		
	var url="showcc.php"
	url=url+"?paytype="+paytype
	url=url+"&sid="+Math.random()
	xmlHttp.onreadystatechange=ccstateChanged
	xmlHttp.open("GET",url,true)
	xmlHttp.send(null)
}

function ccstateChanged() 
{ 
	if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
	 { 
	 	document.getElementById("showpaytype").innerHTML=xmlHttp.responseText 
	 } 
}

function GetXmlHttpObject()
{
	var xmlHttp=null;
	try
	{
		 // Firefox, Opera 8.0+, Safari
		 xmlHttp=new XMLHttpRequest();
	}
		catch (e)
	 	{
	 	//Internet Explorer
	 	try
	  	{
	  		xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
	  	}
	 	catch (e)
	  	{
	  		xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
	  	}
}
	return xmlHttp;
}