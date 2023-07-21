function validateform()
{
	var jname = document.billpay.first.value;
	var jlastname = document.billpay.last.value;
	var jemail = document.billpay.email.value;
	var jaddress = document.billpay.address.value;
	var jcity = document.billpay.city.value;
	var jstate = document.billpay.state.value;
	var jpostcode = document.billpay.zip.value;
	var jphone_number = document.billpay.phone.value;
	var jpay_type = document.billpay.payment.value;
	var jcc_name = document.billpay.cc_name.value;
	var jcc_num = document.billpay.cc_num.value;
	var jcc_exp_mm = document.billpay.cc_exp_mm.value;
	var jcc_exp_yy = document.billpay.cc_exp_yy.value;
	var jbankname = document.billpay.bankname.value;
	var jcc_cvv2 = document.billpay.cc_cvv2.value;



	if ( (jname == "") || (jlastname == "") ||  (jemail == "") || (jaddress == "") || (jcity == "") || (jstate == "") || (jpostcode == "") || (jphone_number == "") )  
	{
			alert (" Some of the fields are incomplete. Please fill in the necessary fields. ");
			return false;
	}
	
	if ( jemail.indexOf("@")<0  || jemail.indexOf(".")<0 )
	{
			alert (" Please fill in a proper email address. ");
			return false;
	}
	
	if(jpay_type=="cc"){
	if ( (jcc_name == "") || (jcc_num == "") ||  (jcc_exp_mm == "") || (jcc_exp_yy == "") || (jbankname == "") || (jcc_cvv2 == "") )  
	{
				alert (" Some of the Credit Card fields are incomplete. Please fill in the necessary fields. ");
				return false;

	}
	}

		


}

