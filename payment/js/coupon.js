function validate(coupon) {
  var input = document.getElementById('inputPromo');
  var code = input.getAttribute('inputcode');
  if (code == 1) {
    var promoCode = "vofficeoktober";
    var success = "Coupon applied! (Special Price For Virtual Office)";
  }else if (code == 2) {
    var promoCode = "sofficeokt";
    var success = "Coupon applied! (Special Price For Serviced Office)";
  }
  var coupon = promoCode.trim();
  var message = document.getElementById('message');
  var err = document.getElementById('err');
  if (input.value.length > 2) {
    if(input.value.toUpperCase() == coupon.toUpperCase()) {
      message.style.display = "block";
      message.innerHTML= success;
      err.style.display = "block";
      err.innerHTML="";
      input.classList.remove('field-error');
      input.classList.add('field-success');
    } else {
      message.style.display = "block";
      message.innerHTML="";
      err.style.display = "block";
      err.innerHTML="Invalid coupon";
      inputPromo.classList.remove('field-success');
      inputPromo.classList.add('field-error');
    }
  }else {
    var input = document.getElementById('inputPromo').value;
    if (input.length < 1) {
      inputPromo.classList.remove('field-success');
      inputPromo.classList.remove('field-error');
    }
    message.style.display = "none";
    err.style.display = "none";
  }
}
function unvalidate(){
var message = document.getElementById('message');
var err = document.getElementById('err');
var input = document.getElementById('inputPromo');
if (input.value.length < 1) {
  inputPromo.classList.remove('field-success');
  inputPromo.classList.remove('field-error');
}
message.style.display = "none";
err.style.display = "none";
}
