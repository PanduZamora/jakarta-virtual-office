<?php session_start();

if ($_SESSION['loc'] == "MY") {

    $sectionone1   = 'Tingkatkan citra perusahaan Anda dengan Virtual Office';
    $sectionone2   = 'The Future of Work is Here';
    $sectionone3   = 'Gunakan Virtual Office untuk mengurangi biaya operasional dan melindungi hal-hal pribadi Anda.';
    $sectionone5   = 'Sambungan Wi-Fi & Smart TV di seluruh Ruang Rapat';
    $sectionone6   = 'Gunakan Virtual Office untuk mengurangi biaya operasional dan melindungi hal-hal pribadi Anda.';
    $sectionone7   = '18 center di Jakarta & 38 center lainnya di seluruh dunia';
    $sectionone8   = 'Terhubung dengan lebih dari 22.000 pemilik bisnis lainnya di platform online kami';
    $sectionone9   = 'Gunakan Virtual Office dan potong biaya operasional anda hingga 50%';
    $sectionone10  = 'Resepsionis handal dan terlatih untuk menyambut tamu Anda';
    $sectionone11  = 'Sistem pemesanan Ruang Meeting real-time';
    $sectiontwo1   = 'Mulai Dari IDR <b> 600.000/blm </b>';
    $sectiontwo2   = 'Hemat Uang & Waktu';
    $sectiontwo3   = 'Anda dapat bekerja dari rumah, luar negeri atau pun lokasi lain dan tetap menjaga kinerja dan image Anda sebagai kantor profesional serta alamat bisnis bergengsi di Jakarta';
    $sectiontwo5   = 'Per Bulan';
    $sectionthree1 = 'Mulai dari IDR <b> 2,5 Juta/bln </b>';
    $sectionthree2 = 'Siap digunakan kapan saja Anda inginkan';
    $sectionthree3 = 'Solusi kantor yang profesional, sangat fleksibel dan hemat biaya bagi entrepreneur dan pemilik bisnis, terdapat di Jakarta, Surabaya, Bali dan 38 Center lainnya di seluruh dunia. ';
    $sectionfour1  = 'Pembuatan PT, CV & PMA';
    $sectionfour2  = 'Layanan Pembuatan PT untuk penduduk Indonesia lokal & luar negeri. ';
    $sectionfour3  = 'Mulai dari IDR <b> 4,3 Juta </b>';
    $sectionseven1 = 'Mulai dari IDR <b> 750.000/jam </b>';
    $sectionseven2 = 'Lebih dari 300 Acara Sukses Digelar di Event Space Kami';
    $sectionseven3 = 'Event Space di Jakarta untuk segala Kebutuhan Acara Anda. ';
    $sectionfive1  = 'Keuntungan Menjadi Anggota Virtual Office';
    $sectionfive2  = 'Promosikan';
    $sectionfive3  = 'Layanan atau bisnis Anda kepada anggota atau penyewa lain ';
    $sectionfive4  = 'Proyek';
    $sectionfive5  = 'Citra bisnis yang bergensi dan profesional';
    $sectionfive6  = 'Ruang Meeting';
    $sectionfive7  = 'Tersedia di lebih dari 40 lokasi di seluruh dunia ';
    $sectionfive8  = 'Resepsionis Profesional';
    $sectionfive9  = 'yang akan menjawab telepon atas nama perusahaan Anda';
    $sectionfive10 = 'Virtual Office';
    $sectionfive11 = 'Anda dapat menjalankan bisnis dengan mudah dan santai. ';
    $sectionfive12 = 'Hadirilah Acara-acara Kami';
    $sectionfive13 = 'Yang mendatangkan seluruh anggota virtual office dan serviced office setiap bulannya';
    $sectionsix1   = 'Pendapat Mereka Tentang Voffice';
    $sectionsix2   = 'Promo Paket Pembuatan PT + Virtual Office';
    $sectionsix3   = 'Hanya';
    $footerone1    = 'Lihat Seluruh Lokasi vOffice';
    $footerone2    = 'Pembuatan PT, CV, & PMA';
    $footerone3    = 'Daftar untuk Melihat lebih banyak Penawaran Virtual Office Indonesia';
    $footerone4    = 'Sejak 2003, Virtual Office Indonesia (vOffice) telah melayani lebih dari 22.000 bisnis dan tersedia di lebih dari 42 lokasi. Virtual Office Indonesia memudahkan bisnis untuk berkembang pesat dan beroperasi dengan mudah. Untuk informasi lebih lanjut mengenai Virtual Office Indonesia, silakan hubungi kami di +6221 2922 2999 atau kirimkan email ke cs@voffice.co.id';

}

if ($_SESSION['loc'] == "EN") {

    $sectionone1   = 'Enhance your business image with a Virtual Office';
    $sectionone2   = 'The Future of Work is Here';
    $sectionone3   = 'Use Virtual Office to reduce your operation cost and to protect your personal privacy.';
    $sectionone5   = 'Fast WIFI & Smart TV all Meeting Rooms';
    $sectionone6   = 'Use Virtual Office to reduce your operation cost and to protect your personal privacy.';
    $sectionone7   = '18 Centres Indonesia & 38 more Globally';
    $sectionone8   = 'Connect with over 22,000 others business owners on our online platform';
    $sectionone9   = 'Outsource your office to Virtual Office and slash your OPEX by 50%';
    $sectionone10  = 'Trained receptionist to Welcome Your Guests';
    $sectionone11  = 'Real-time meeting room booking system';
    $sectiontwo1   = 'Start From IDR 600.000/Month';
    $sectiontwo2   = 'Save Time & Money';
    $sectiontwo3   = 'Work from home, abroad, or another location, yet maintain the support and presence of a professional office.';
    $sectiontwo5   = 'Per Months';
    $sectionthree1 = 'Starts From IDR <b> 2,5 jt/Month </b>';
    $sectionthree2 = 'Ready to function as soon as you move';
    $sectionthree3 = 'A professional, highly flexible, cost effective office solutions for entrepreneurs and business owners.';
    $sectionfour1  = 'Company Incorporation Service';
    $sectionfour2  = 'Company Incorporation Service For Indonesia and Abroad';
    $sectionfour3  = 'Start From IDR <b> 4,3 jt </b>';
    $sectionfive1  = 'Benefits of Becoming a Virtual Office Member';
    $sectionfive2  = 'Promote';
    $sectionfive3  = 'Your services or business to other members or tenants';
    $sectionfive4  = 'Project';
    $sectionfive5  = 'A prestigious and professional business image';
    $sectionfive6  = 'Meeting Rooms';
    $sectionfive7  = 'Available at over 40 locations worldwide';
    $sectionfive8  = 'Professional Receptionist';
    $sectionfive9  = 'Who will answer your phone $ your company name';
    $sectionfive10 = 'Virtual Office';
    $sectionfive11 = 'Allows you to run your business leanly';
    $sectionfive12 = 'Join Our Parties';
    $sectionfive13 = 'That brings all virtual office and serviced ofLfice members together every month';
    $sectionsix1   = 'People LOVE vOffice';
    $sectionsix2   = 'Promo Package Company Incorporation Service + Virtual Office';
    $sectionsix3   = 'Only';
    $sectionseven1 = 'Starts From IDR <b> 750.000/jam </b>';
    $sectionseven2 = 'Successfully Organised Over 300 Event';
    $sectionseven3 = 'Event space available Ad-hoc or Long term Rental $ Jakarta';
    $footerone1    = 'View All vOffice Locations';
    $footerone2    = 'Company Incorporation';
    $footerone3    = 'Sign up for more Virtual Office Indonesia offers';
    $footerone4    = 'Since 2003. Virtual Office Indonesia (vOffice) has served over 22,000 businesses and available $ over 42 locations.
    Virtual Office Indonesia enable businesses to scale fast and operate leanly. For more information about virtual office Indonesia, please call us at +603 2788 3555 or email us at cs@voffice.com.my';

}
