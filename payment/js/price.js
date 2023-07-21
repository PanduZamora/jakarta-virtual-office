let plan = document.querySelector("#plan"); // get dropdown plan
let terms = document.querySelector("#terms"); // get dropdown terms
let promo = document.getElementById("promo"); // get value promo code
let promoCode = "businessdoneright"; // code promo
let priceBeforeTax;
let priceAferTax;
let tax = 0.1;
let priceDiscount;

// daftar harga
const voSilver12  = 6500000;
const voSilverDiscount = 6250000;
const voSilver24  = 12000000;
const voGold12    = 8910000;
const voGoldDiscount = 8410000;
const voGold24    = 16236000;
const voPlatinum12= 11616000;
const voPlatinumDiscount = 10866000;
const voPlatinum24= 19272000;
const vo412       = 14900000;
const vo424       = 27000000;

function changePrice() {
  custPlan = plan.value + " - " + terms.value + " - " + promo.value;

  if (custPlan == "Virtual Office Silver - 12 Months - " + promoCode) {
    priceBeforeTax = voSilver12;
    priceDiscount = voSilverDiscount;
    priceAferTax = priceDiscount + priceDiscount * tax;
  } else if (custPlan == "Virtual Office Silver - 12 Months - " + promo.value) {
    priceBeforeTax = voSilver12;
    priceDiscount = 0;
    priceAferTax = priceBeforeTax + priceBeforeTax * tax;
  } else if (custPlan == "Virtual Office Silver - 24 Months - " + promo.value) {
    priceBeforeTax = voSilver24;
    priceDiscount = 0;
    priceAferTax = priceBeforeTax + priceBeforeTax * tax;
  } else if (custPlan == "Virtual Office Gold - 12 Months - " + promoCode) {
    priceBeforeTax = voGold12;
    priceDiscount = voGoldDiscount;
    priceAferTax = priceDiscount + priceDiscount * tax;
  } else if (custPlan == "Virtual Office Gold - 12 Months - " + promo.value) {
    priceBeforeTax = voGold12;
    priceDiscount = 0;
    priceAferTax = priceBeforeTax + priceBeforeTax * tax;
  } else if (custPlan == "Virtual Office Gold - 24 Months - " + promo.value) {
    priceBeforeTax = voGold24;
    priceDiscount = 0;
    priceAferTax = priceBeforeTax + priceBeforeTax * tax;
  } else if (custPlan == "Virtual Office Platinum - 12 Months - " + promoCode) {
    priceBeforeTax = voPlatinum12;
    priceDiscount = voPlatinumDiscount;
    priceAferTax = priceDiscount + priceDiscount * tax;
  } else if (custPlan == "Virtual Office Platinum - 12 Months - " + promo.value) {
    priceBeforeTax = voPlatinum12;
    priceDiscount = 0;
    priceAferTax = priceBeforeTax + priceBeforeTax * tax;
  } else if (custPlan == "Virtual Office Platinum - 24 Months - " + promo.value) {
    priceBeforeTax = voPlatinum24;
    priceDiscount = 0;
    priceAferTax = priceBeforeTax + priceBeforeTax * tax;
  } else if (custPlan == "Virtual Office 4.0 - 12 Months - " + promo.value) {
    priceBeforeTax = vo412;
    priceDiscount = 0;
    priceAferTax = priceBeforeTax + priceBeforeTax * tax;
  } else if (custPlan == "Virtual Office 4.0 - 24 Months - " + promo.value) {
    priceBeforeTax = vo424;
    priceDiscount = 0;
    priceAferTax = priceBeforeTax + priceBeforeTax * tax;
  } else if (custPlan == 'testing - testing - ') {
    priceBeforeTax = 10000;
    priceDiscount = 0;
    priceAferTax = 10000;
  } else {
    priceBeforeTax = 0;
    priceDiscount = 0;
    priceAferTax = 0;
  }

  //   check if it's undefined
  if (priceBeforeTax != undefined) {
    priceBeforeTax;
  } else {
    priceBeforeTax = 0;
  }

//   document.getElementById("price").innerHTML = priceBeforeTax;
  if (priceDiscount !== 0) {
      document.getElementById("price").innerHTML = priceDiscount;
  } else {
      document.getElementById("price").innerHTML = priceBeforeTax;
  }

  const autoNumericRupiah = {
      currencySymbol: 'Rp ',
      decimalPlaces: '0',
      decimalCharacter: ',',
      digitGroupSeparator: '.'
  }
  new AutoNumeric('.rp', autoNumericRupiah);
  
  document.getElementById('priceBeforeTax').value = priceBeforeTax;
  document.getElementById('priceAfterTax').value = priceAferTax;
  document.getElementById('priceDiscount').value = priceDiscount;
}


