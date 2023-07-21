const field = $(".field-changer");
if (link.includes("?fbigads")) {
    $('.text-changer').html('<i class="fab fa fa-whatsapp fa-lg mr-10"></i> Whatsapp');
    $('.link-changer').attr('href', ' https://bit.ly/igfbads-voffice');
    field.attr('value', 'virtualoffice_fbigads');
    field.attr('name', 'virtualoffice_fbigads');
    console.log(field)
} else if (link.includes("?tiktokads")) {
    $('.text-changer').html('<i class="fab fa fa-whatsapp fa-lg mr-10"></i> Whatsapp');
    $('#wa-fb-ig').css("display", "none");
    $('#wa-fb-ig2').css("display", "none");
    $('#wa-fb-ig3').css("display", "none");
    $('#wa-fb-ig4').css("display", "none");
    $('#wa-fb-ig5').css("display", "none");
    $('#wa-fb-ig6').css("display", "none");
    $('#wa-fb-ig7').css("display", "none");
    $('.link-changer').attr('href', ' https://bit.ly/tiktokadsvoffice');
    field.attr('value', 'virtualoffice_tiktokads');
    field.attr('name', 'virtualoffice_tiktokads');
    console.log(field)
} else if (link.includes("?sem")) {
    $('.text-changer').html('<i class="fab fa fa-whatsapp fa-lg mr-10"></i> Whatsapp');
    $('#wa-fb-ig').css("display", "none");
    $('#wa-fb-ig2').css("display", "none");
    $('#wa-fb-ig3').css("display", "none");
    $('#wa-fb-ig4').css("display", "none");
    $('#wa-fb-ig5').css("display", "none");
    $('#wa-fb-ig6').css("display", "none");
    $('#wa-fb-ig7').css("display", "none");
    $('.link-changer').attr('href', ' http://bit.ly/sem-voffice');
    field.attr('value', 'virtualoffice_sem');
    field.attr('name', 'virtualoffice_sem');
    console.log(field)
} else if (link.includes("")) {
    $('#wa-fb-ig').css("display", "none");
    $('#wa-fb-ig2').css("display", "none");
    $('#wa-fb-ig3').css("display", "none");
    $('#wa-fb-ig4').css("display", "none");
    $('#wa-fb-ig5').css("display", "none");
    $('#wa-fb-ig6').css("display", "none");
    $('#wa-fb-ig7').css("display", "none");
    console.log(field)
}