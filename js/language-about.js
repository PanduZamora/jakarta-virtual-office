var arrLang                    = new Array();
arrLang['en']                  = new Array();
arrLang['in']                  = new Array();

arrLang['en']['headerone']   = 'Who is vOffice?';
arrLang['in']['headerone']   = 'Siapakah vOffice?';
arrLang['en']['headertwo']   = 'vOffice (Virtual Office) is a leading provider of Virtual Office service and business services in Indonesia and has over 10 years of experience servicing clients from all business segment and countries. All in all vOffice has served over 18,000 clients and you can be assured that we are committed to deliver the best possible customer service experience to our clients always!';
arrLang['in']['headertwo']   = 'vOffice (Virtual Office) merupakan penyedia layanan kantor virtual dan layanan bisnis di Indonesia yang telah memiliki pengalaman lebih dari 10 tahun melayani klien dari berbagai bidang bisnis dan negara. Secara keseluruhan, vOffice telah melayani lebih dari 5.000 klien dan kami pastikan bahwa kami berkomitmen untuk memberikan pelayanan terbaik kepada pelanggan kami.';
arrLang['en']['sectionone1']   = 'SAVE TIME & MONEY';
arrLang['in']['sectionone1']   = 'HEMAT UANG & WAKTU';
arrLang['en']['sectionone2']   = 'PERFECT FOR TODAY’S FAST-MOVING, MOBILE BUSINESS PEOPLE';
arrLang['in']['sectionone2']   = 'COCOK UNTUK PENGUSAHA DINAMIS YANG MOBILE';
arrLang['en']['sectionone3']   = 'vOffice is perfect for today’s fast-moving, mobile business people and vOffice clients save time and money and is able to operate an agile business that suits today business landscape.';
arrLang['in']['sectionone3']   = 'vOffice sesuai untuk pengusaha dinamis yang mobile dan klien vOffice dapat menghemat uang dan waktu serta mampu untuk menjalankan bisnis yang juga dinamis dan fleksibel yang cocok dengan bisnis masa kini.';
arrLang['en']['sectionone4']   = 'At vOffice, we are committed towards your business success in the following manner:';
arrLang['in']['sectionone4']   = 'Di vOffice, kami berkomitmen untuk mensukseskan bisnis Anda dengan cara:';
arrLang['en']['sectionone5']   = 'Eliminating the costly set up fee of a new office';
arrLang['in']['sectionone5']   = 'Menghilangkan biaya awal penyewaan kantor yang tinggi';
arrLang['en']['sectionone6']   = 'Ensuring that your business overheads are kept minimal';
arrLang['in']['sectionone6']   = 'Memastikan pengeluaran tambahan Anda minimal';
arrLang['en']['sectionone7']   = 'Creating a competitive edge for your business to thrive on';
arrLang['in']['sectionone7']   = 'Memberikan sisi kompetitif agar bisnis Anda dapat terus berkembang';
arrLang['en']['sectionone8']   = 'Affording your business to utilise the services of our team of professionals';
arrLang['in']['sectionone8']   = 'Memungkinkan bisnis Anda memanfaatkan layanan dari tim profesional kami';
arrLang['en']['sectionone9']   = 'Empowering the growth of your business';
arrLang['in']['sectionone9']   = 'Mempercepat pertumbuhan bisnis Anda';
arrLang['en']['sectionone10']   = 'vOffice is expanding faster than ever now. If you would like us to open up in a location that we are yet to be, drop us an email!';
arrLang['in']['sectionone10']   = 'vOffice berkembang dengan lebih cepat dari sebelumnya. Jika Anda ingin kami berada di lokasi baru, kirimkan email Anda!';
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