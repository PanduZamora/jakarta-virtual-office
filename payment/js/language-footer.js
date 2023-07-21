var arrLang                    = new Array();
arrLang['en']                  = new Array();
arrLang['in']                  = new Array();


arrLang['en']['footerone1']   = 'View All vOffice Locations';
arrLang['in']['footerone1']   = 'Lihat Seluruh Lokasi vOffice';
arrLang['en']['footerone2']   = 'Company Incorporation';
arrLang['in']['footerone2']   = 'Pembuatan PT, CV, & PMA';
arrLang['en']['footerone3']   = 'Sign up for more Virtual Office Indonesia offers';
arrLang['in']['footerone3']   = 'Daftar untuk Melihat lebih banyak Penawaran Virtual Office Indonesia';
arrLang['en']['footerone4']   = 'Sign up for more Virtual Office Indonesia offers';
arrLang['in']['footerone4']   = 'Daftar untuk Melihat lebih banyak Penawaran Virtual Office Indonesia';



$(document).ready(function(e) {
        $('.translate').click(function(){
            var lang = $(this).attr('id');

            $('.lang').each(function(endex, element){
                $(this).text(arrLang[lang][$(this).attr('key')]);
            });
    });
});


