$(document).on('click', '.send_form', function () {
    var input_blanter = document.getElementById('wa_email');

    /* Whatsapp Settings */
    var walink = 'https://web.whatsapp.com/send',
        phone = '+6282112056509',
        walink2 = 'Halo, Saya ingin bertanya tentang Virtual Office vOffice',
        text_yes = 'Kirim.',
        text_no = 'Isi semua Formulir lalu klik Kirim Pesan.';

    /* Smartphone Support */
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        var walink = 'whatsapp://send';
    }

    if ("" != input_blanter.value) {

        /* Call Input Form */
        var input_select1 = $("#wa_select :selected").text(),
            input_name1 = $("#wa_name").val(),
            input_email1 = $("#wa_email").val(),
            input_number1 = $("#wa_number").val(),
            input_usaha = $("#wa_usaha").val(),
            input_textarea1 = $("#wa_textarea").val();

        /* Final Whatsapp URL */
        var blanter_whatsapp = walink + '?phone=' + phone + '&text=' + walink2 + '%0A%0A' +
            '*Nama Lengkap* : ' + input_name1 + '%0A' +
            '*Nomor Whatsapp* : ' + input_number1 + '%0A' +
            '*Alamat Email* : ' + input_email1 + '%0A' +
            '*Bidang Usaha* : ' + input_usaha + '%0A' +
            '*Pesan* : ' + input_textarea1 + '%0A';

        /* Whatsapp Window Open */
        window.open(blanter_whatsapp, '_blank');
        document.getElementById("text-info").innerHTML = '<span class="yes">' + text_yes + '</span>';
    } else {
        document.getElementById("text-info").innerHTML = '<span class="no">' + text_no + '</span>';
    }
});