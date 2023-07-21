function dynamicWA() {
    var nama        = document.getElementById("name").value;
    var email       = document.getElementById("email").value;
    var phone       = document.getElementById("phone").value;
    var address     = document.getElementById("address").value;
    var city        = document.getElementById("city").value;
    var state       = document.getElementById("state").value;
    var postcode    = document.getElementById("postcode").value;
    var country     = document.getElementById("country").value;
    var location    = document.getElementById("location").value;
    var plan        = document.getElementById("plan").value;
    var terms       = document.getElementById("terms").value;
    var promoCode   = document.getElementById("promo-code").value;

    window.open("https://api.whatsapp.com/send?phone=6281280055105&text=ACCOUNT%20DETAILS%0A%0AName%3D%20"+ nama + "%0AEmail%20%3D%20"+ email +"%0APhone%20Number%20%3D%20"+ phone +"%0AAddress%3D%20"+ address +"%0ACity%3D%20"+ city +"%0AState%20%3D%20"+ state +"%0APost%20Code%3D%20"+ postcode +"%0ACountry%20%3D%20"+ country +"%0A%0APLAN%20DETAILS%0A%0ALokasi%20%3D%20"+ location +"%0APlan%20%3D%20"+ plan +"%0ATerms%20%3D%20"+ terms +"%0AKode%20Promo%20%3D%20"+ promoCode);
}