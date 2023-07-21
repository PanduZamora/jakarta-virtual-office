function validateform()
{
	var jphone_number = document.billpay.phone.value;
	var jemail = document.billpay.email.value;
	var jcountry = document.billpay.country.value;
	var jcurrency = document.billpay.currency.value;
	var jpayamount = document.billpay.payamount.value;
	var jcomments = document.billpay.comments.value;
	
	
	var jcc_name = document.billpay.cc_name.value;
	var jcc_num = document.billpay.cc_num.value;
	var jcc_exp_mm = document.billpay.cc_exp_mm.value;
	var jcc_exp_yy = document.billpay.cc_exp_yy.value;
	var jbankname = document.billpay.bankname.value;
	var jcc_cvv2 = document.billpay.cc_cvv2.value;

	jpayamount = str_replace(',', '', jpayamount);
	document.billpay.payamount.value = jpayamount;

	// count number of decimal points
	if (jpayamount.split('.').length - 1 > 1)
	{
		alert("Invalid Payment Amount. Please use commas instead of decimal points.");
		return false;
	}


	if ( (jphone_number == "") || (jemail == "") || (jcountry == "") || (jcomments == "") || (jcurrency == "") || (jpayamount == "") )
	{
			alert (" Some of the fields are incomplete. Please fill in the necessary fields. ");
			return false;
	}
	
	if ( jemail.indexOf("@")<0  || jemail.indexOf(".")<0 )
	{
			alert (" Please fill in a proper email address. ");
			return false;
	}
	

	if ( (jcc_name == "") || (jcc_num == "") ||  (jcc_exp_mm == "") || (jcc_exp_yy == "") || (jbankname == "") || (jcc_cvv2 == "") )  
	{
				alert (" Some of the Credit Card fields are incomplete. Please fill in the necessary fields. ");
				return false;

	}

	if ( jpayamount!="" && !isNumeric(jpayamount) )
	{
		 alert ("Payment Amount should contain numbers only.");
                 return false;
	}		


}

function isNumeric(str){
	var numericExpression = /^[0-9]+(\.[0-9]{2})?$/;
	if(str.match(numericExpression)){
		return true;
	}else{
		// elem.focus();
		return false;
	}
}

function str_replace (search, replace, subject, count) {
  // http://kevin.vanzonneveld.net
  // +   original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
  // +   improved by: Gabriel Paderni
  // +   improved by: Philip Peterson
  // +   improved by: Simon Willison (http://simonwillison.net)
  // +    revised by: Jonas Raoni Soares Silva (http://www.jsfromhell.com)
  // +   bugfixed by: Anton Ongson
  // +      input by: Onno Marsman
  // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
  // +    tweaked by: Onno Marsman
  // +      input by: Brett Zamir (http://brett-zamir.me)
  // +   bugfixed by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
  // +   input by: Oleg Eremeev
  // +   improved by: Brett Zamir (http://brett-zamir.me)
  // +   bugfixed by: Oleg Eremeev
  // %          note 1: The count parameter must be passed as a string in order
  // %          note 1:  to find a global variable in which the result will be given
  // *     example 1: str_replace(' ', '.', 'Kevin van Zonneveld');
  // *     returns 1: 'Kevin.van.Zonneveld'
  // *     example 2: str_replace(['{name}', 'l'], ['hello', 'm'], '{name}, lars');
  // *     returns 2: 'hemmo, mars'
  var i = 0,
    j = 0,
    temp = '',
    repl = '',
    sl = 0,
    fl = 0,
    f = [].concat(search),
    r = [].concat(replace),
    s = subject,
    ra = Object.prototype.toString.call(r) === '[object Array]',
    sa = Object.prototype.toString.call(s) === '[object Array]';
  s = [].concat(s);
  if (count) {
    this.window[count] = 0;
  }

  for (i = 0, sl = s.length; i < sl; i++) {
    if (s[i] === '') {
      continue;
    }
    for (j = 0, fl = f.length; j < fl; j++) {
      temp = s[i] + '';
      repl = ra ? (r[j] !== undefined ? r[j] : '') : r[0];
      s[i] = (temp).split(f[j]).join(repl);
      if (count && s[i] !== temp) {
        this.window[count] += (temp.length - s[i].length) / f[j].length;
      }
    }
  }
  return sa ? s : s[0];
}