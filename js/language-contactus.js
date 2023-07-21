var arrLang                    = new Array();
arrLang['en']                  = new Array();
arrLang['in']                  = new Array();


arrLang['en']['headerone1']   = 'Whether it is an enquiry, a suggestion, or a complaint, please dont hesitate in contacting us. We will be more than glad to hear from you and we will respond to your request as soon as we can.';
arrLang['in']['headerone1']   = 'Jangan ragu untuk menghubungi kami untuk segala pertanyaan, saran atau keluhan Anda. Kami sangat senang jika Anda menghubungi kami dan akan memberikan tanggapan secepatnya.';
arrLang['en']['headerone2']   = 'We are open Monday to Friday from 9am to 7.30pm and Saturday from 10am to 3pm.';
arrLang['in']['headerone2']   = 'Kami buka dari Senin sampai Jumat, jam 09.00 - 19.30 dan Sabtu, jam 10.00 - 15.00';
arrLang['en']['sectionone1']   = 'HAVING INQUIRIES?';
arrLang['in']['sectionone1']   = 'PUNYA PERTANYAAN?';
arrLang['en']['sectionone2']   = 'Simply complete the form below if you have any inquiry or service interest. If for any reason the submission form fails to work, or you do not feel comfortable using the form, please contact us using the contact details.';
arrLang['in']['sectionone2']   = 'Anda hanya perlu mengisi formulir di bawah ini jika memiliki pertanyaan atau ingin menggunakan layanan kami. Jika terjadi kesalahan pada formulir, atau Anda tidak ingin mengisi formulir, silakan hubungi kami menggunakan rincian kontak.';
arrLang['en']['sectionone11']   = 'Enter the verification code in the box below. This helps us prevent spam and automated messages.';
arrLang['in']['sectionone11']   = 'Masukkan kode verifikasi di kotak di bawah ini. Kode ini membantu kami untuk menghindari spam dan pesan otomatis.';
arrLang['en']['sectionone5']   = 'VIA CALL';
arrLang['in']['sectionone5']   = 'MELALUI TELEPON';
arrLang['en']['sectionone6']   = 'Feel free to contact us at +6221 2922 2999 anytime during our office hours. Our Customer Service team will be there assist you.';
arrLang['in']['sectionone6']   = 'Anda dapat menghubungi kami kapan saja di +6221 2922 2999 selama jam kerja. Customer Service kami akan siap membantu Anda.';
arrLang['en']['sectionone7']   = 'VIA EMAIL';
arrLang['in']['sectionone7']   = 'MELALUI EMAIL';
arrLang['en']['sectionone8']   = 'You can also write an email to cs@voffice.co.id. We will reply your email as soon as possible.';
arrLang['in']['sectionone8']   = 'Anda juga bisa mengirimkan email ke cs@voffice.co.id. Kami akan membalas email Anda secepatnya.';
arrLang['en']['sectionone9']   = 'VIA LIVE CHAT';
arrLang['in']['sectionone9']   = 'MELALUI LIVE CHAT';
arrLang['en']['sectionone10']   = 'Use the chat button at the bottom of the screen to have a live chat with us.';
arrLang['in']['sectionone10']   = 'Gunakan tombol chat di bawah layar untuk berbicara melalui live chat.';
arrLang['en']['footerone1']   = 'View All vOffice Locations';
arrLang['in']['footerone1']   = 'Lihat Seluruh Lokasi vOffice';
arrLang['en']['footerone2']   = 'Company Incorporation';
arrLang['in']['footerone2']   = 'Pembuatan PT, CV, & PMA';
arrLang['en']['footerone3']   = 'Sign up for more Virtual Office Indonesia offers';
arrLang['in']['footerone3']   = 'Daftar untuk Melihat lebih banyak Penawaran Virtual Office Indonesia';
arrLang['en']['footerone4']   = 'Since 2003. Virtual Office Indonesia (vOffice) has served over 22,000 businesses and available in over 42 locations. Virtual Office Indonesia enable businesses to scale fast and operate leanly. For more information about virtual office Indonesia, please call us at +603 2788 3555 or email us at cs@voffice.com.my';
arrLang['in']['footerone4']   = 'Sejak 2003, Virtual Office Indonesia (vOffice) telah melayani lebih dari 22.000 bisnis dan tersedia di lebih dari 42 lokasi. Virtual Office Indonesia memudahkan bisnis untuk berkembang pesat dan beroperasi dengan mudah. Untuk informasi lebih lanjut mengenai Virtual Office Indonesia, silakan hubungi kami di +6221 2922 2999 atau kirimkan email ke cs@voffice.co.id';

$(document).ready(function(e) {
        $('.translate').click(function(){
            var lang = $(this).attr('id');

            $('.lang').each(function(endex, element){
                $(this).text(arrLang[lang][$(this).attr('key')]);
            });
    });
});


