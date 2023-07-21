<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KBLI 2017 - Panduan Lengkap kode KBLI Terupdate 2019</title>

    <meta name="description" content="Cek kode KBLI 2017 untuk bidang usaha anda. Baca selengkapnya ......" />

    <meta name="robots" content="index,follow" />

    <meta name="robots" content="index,follow" />
    <meta name="Author" content="vOffice.co.id">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/ytplayer.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/theme-v2.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Montserrat:100,300,400,600,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.css" />
    <style>
        table.dataTable span.highlight {
            background-color: rgba(250, 0, 83, 0.25);
            border-radius: 0.28571429rem;
        }

        table.dataTable span.column_highlight {
            background-color: rgba(250, 0, 83, 0.25);
            border-radius: 0.28571429rem;
        }

        .btn {
            border: none;
        }

        .pagination li a {
            width: auto;
            padding: 5px 10px;
        }

        input,
        select {
            margin-bottom: 0px;
        }

        p {
            font-size: 16px;
            line-height: 24px;
            font-weight: 400;
            color: #555555;
        }

        b {
            font-weight: bolder;
            color: black;
        }
    </style>

</head>

<body>

    <?php include "header.html"; ?>

    <div class="main-container">

        <section class="bg-dark">
            <div class="container p24-xs pt104">
                <div class="row">
                    <div class="col-md-12">
                        <br class="hidden-xs">
                        <br class="hidden-xs">
                        <br class="hidden-xs">
                        <h1 class="thin text-center"><span class="bold"> KBLI 2017 - Panduan Kode KBLI terupdate di 2019 </span></h1>
                        <h4 class="text-center">Download KBLI 2017
                        </h4>
                        <p class="text-center"><a href="download/KBLI-2017-terupdate-2019.pdf" class="btn btn-filled text-center"> <span class="fa fa-file-pdf-o"></span> Download</a></p>
                        <marquee behavior="scroll" direction="left">
                            <p class="article text-center">KBLI ini adalah KBLI 2017
                                yang diatur oleh Peraturan Kepala BPS (Perka BPS) No. 19 tahun 2017 tentang Perubahan KBLI
                                2015.</p>
                        </marquee>
                    </div>
                    <!-- <div class="col-md-4">
                    <img src="img/kbli-2017.jpg">
                </div> -->
                </div>
            </div>
        </section>

        <section class="pt-5 pb-5">
            <div class="container">
                <div class="col-12">
                    <p>Search keyword: Contoh ketik <b>Pertanian Kacang Hijau</b> untuk cari KBLI <b>01115</b> atau ketik
                        <b>29300</b> yaitu KBLI untuk <b>Industri Suku Cadang Dan Aksesori Kendaraan Bermotor Roda Empat
                            Atau Lebih.</b>
                    </p>
                    <table id="kbli" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Judul</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $connection = mysqli_connect("localhost", "voffid_user", "rahasia123", "voffid_kbli");

                            // Check connection
                            if (mysqli_connect_errno()) {
                                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                            }

                            $query = "SELECT * FROM izin_master_kbli";
                            if ($result = $connection->query($query)) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "
                <tr>
                    <td>" . $row['kode'] . "</td>
                    <td>" . $row['judul'] . "</td>
                    <td>" . $row['ket'] . "</td>
                </tr>
                ";
                                }
                                $result->free();
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <section style="padding-top:30px;padding-bottom:30px;">
            <div class="container">
                <div class="col-md-12">
                    <div class="title in">
                        <center><a href="virtual-office-40.php"><img src="images/ptvo40.jpg"></a></center>
                        <h1 class="uppercase bold text-center">KBLI SIUP</h1>
                        <h6 class="text-center">KBLI SIUP untuk perdagangan dan jasa di Jakarta. Hanya 3 KBLI yang bisa di
                            cantumkan dalam SIUP di Jakarta.</h5>
                    </div>
                    <div class="content">
                        <table class="table table-striped" width="100%">
                            <thead>
                                <tr>
                                    <th width="20%" class="text-center bold color-small">KBLI</th>
                                    <th width="30%">Kegiatan</th>
                                    <th width="50%">Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="text-center">4510</th>
                                    <td scope="row">Perdagangan mobil</td>
                                    <td scope="row">Mobil (bukan showroom)</td>
                                </tr>
                                <tr>
                                    <th class="text-center">4530</th>
                                    <td scope="row">Perdagangan suku cadang dan aksesoris mobil</td>
                                    <td scope="row">Suku cadang mobil / aksesori mobil (bukan bengkel)</td>
                                </tr>
                                <tr>
                                    <th class="text-center">4540</th>
                                    <td scope="row">Perdagangan, reparasi dan perawatan sepeda motor dan perdagangan suku cadang
                                        dan aksesorisnya
                                    </td>
                                    <td scope="row">Sepeda motor (bukan showroom) / suku cadang sepeda motor / aksesori sepeda
                                        motor (bukan bengkel)
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center">4620</th>
                                    <td scope="row">Perdagangan besar hasil pertanian dan hewan hidup</td>
                                    <td scope="row">Hasil pertanian / hasil perikanan / hasil kehutanan / padi / palawija /
                                        kelapa / kelapa sawit / bunga / tumbuhan / daun tembakau / tembakau rajangan / binatang
                                        hidup / bibit unggas / ternak potong / bibit udang / udang / bibit ikan / ikan /
                                        kepiting/ rumput laut / bambu / kayu cendana / getah damar
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center">4631</th>
                                    <td scope="row">Perdagangan besar bahan makanan dan minuman hasil pertaninan</td>
                                    <td scope="row">Bahan makanan dan minuman hasil pertanian / beras / buah-buahan / sayuran /
                                        kopi / teh / kakao / margarin / bumbu makanan / rempah-rempah / minyak nabati
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center">4632</th>
                                    <td scope="row">Perdagangan besar bahan makanan dan minuman hasil peternakan dan perikanan
                                    </td>
                                    <td scope="row">Bahan makanan dan minuman hasil peternakan dan perikanan / daging sapi /
                                        daging sapi olahan / daging ayam / daging ayam olahan / daging / daging olahan / hasil
                                        olahan perikanan / telur / olahan telur / susu / mentega / minyak hewani
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center">4633</th>
                                    <td scope="row">Perdagangan suku cadang dan aksesoris mobil</td>
                                    <td scope="row">Suku cadang mobil / aksesori mobil (bukan bengkel)</td>
                                </tr>
                                <tr>
                                    <th class="text-center">4530</th>
                                    <td scope="row">Perdagangan makanan dan minuman lainnya dan tembakau</td>
                                    <td scope="row">Gula / cokelat / roti / cokelat / kembang gula / rokok / tepung beras /
                                        tepung tapioka / makanan dan minuman ringan (dalam kemasan) (bukan restoran / kafe /
                                        minimarket) / pakan ternak
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center">4641</th>
                                    <td scope="row">Perdagangan besar tekstil, pakaian dan alas kaki</td>
                                    <td scope="row">Tekstil / linen / pakaian / alas kaki / karpet / karung / aksesori (dari
                                        tekstil) / rajutan / perlengkapan pegawai tni dan polri (non senjata dan amunisi) / baju
                                        pelampung / payung
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center">4642</th>
                                    <td scope="row">Perdagangan besar alat tulis dan hasil pencetakan dan penerbitan</td>
                                    <td scope="row">Alat tulis / alat gambar / barang cetakan (buku / majalah / tabloid / surat
                                        kabar) / alat peraga pendidikan
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center">4643</th>
                                    <td scope="row">Perdagangan besar alat fotografi dan barang optik</td>
                                    <td scope="row">Alat fotografi / alat optik / kacamata / teropong / kaca pembesar</td>
                                </tr>
                                <tr>
                                    <th class="text-center">4649</th>
                                    <td scope="row">Perdagangan besar barang keperluan rumah tangga</td>
                                    <td scope="row">Elektronik / radio / televisi / perekam dan pemutar cd dan dvd / perekam
                                        suara dan video / audio visual/peralatan dan perlengkapan rumah tangga / farmasi / obat
                                        tradisional / obat (tanpa resep dokter) / kosmetik / bedak / parfum / sabun / alat
                                        olahraga / sepeda / alat musik / perhiasan / jam / mainan anak-anak / aksesori (dari
                                        kulit / kayu) / barang kerajinan (dari kulit / kayu) / perlengkapan keamanan (alarm /
                                        cctv / tongkat / borgol) / mebel / furnitur / lampu / deterjen / pembersih lantai
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center">4651</th>
                                    <td scope="row">Perdagangan besar komputer, perlengkapan komputer dan piranti lunak</td>
                                    <td scope="row">Komputer / perlengkapan komputer / piranti lunak / alat teknologi
                                        informasi
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center">4652</th>
                                    <td scope="row">Perdagangan besar pelengkapan elektronik dan telekomunikasi dan
                                        bagian-bagiannya
                                    </td>
                                    <td scope="row">Perlengkapan elektronik / peralatan telekomunikasi / telepon / disket kosong
                                        / cd kosong / vcd kosong / dvd kosong / pita audio kosong / pita video kosong /
                                        peralatan siaran radio dan televisi
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center">4653</th>
                                    <td scope="row">Perdagangan besar mesin, peralatan dan perlengkapan pertanian</td>
                                    <td scope="row">Mesin pertanian / mesin peternakan / mesin kehutanan / peralatan dan
                                        perlengkapan pertanian / mesin pemotong rumput / traktor (untuk pertanian dan kehutanan)
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center">4659</th>
                                    <td scope="row">Perdagangan besar mesin, peralatan dan perlengkapan lainnya</td>
                                    <td scope="row">Mesin / mesin pembangkit listrik / mesin kantor / furnitur kantor / mesin
                                        industri / suku cadang alat transportasi laut / suku cadang dan perlengkapan alat
                                        transportasi laut / alat transportasi udara / suku cadang dan perlengkapan alat
                                        transportasi udara /peralatankereta api / suku cadang dan perlengkapan kereta api / alat
                                        listrik / alat teknik / alat mekanikal / alat elektrikal / material listrik / kabel /
                                        sakelar / motor listrik / trafo / alat pertambangan / alat konstruksi / alat pengeboran
                                        / alat berat / alat ukur / alat survei / alat navigasi / alat meteorologi / alat
                                        klimatologi / alat metrologi / peralatan sar / alat keselamatan kerja / alat pemadam
                                        kebakaran / katup / klep / genset / pompa / kompresor
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center">4661</th>
                                    <td scope="row">Perdagangan besar bahan bakar padat, cair dan gas dan produk YBDI</td>
                                    <td scope="row">Batu bara / briket / minyak pelumas (dalam kemasan)</td>
                                </tr>
                                <tr>
                                    <th class="text-center">4662</th>
                                    <td scope="row">Perdagangan besar logam dan bijih logam</td>
                                    <td scope="row">Bijih nikel / nikel / timah / mangan / bauksit / pasir besi / bijih besi /
                                        bijih tembaga / tembaga / alumunium / perak / bijih logam / logam (bukan logam mulia)
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center">4663</th>
                                    <td scope="row">Perdagangan besar bahan dan perlengkapan bangunan</td>
                                    <td scope="row">Bahan bangunan / perlengkapan bangunan / material bangunan / bahan
                                        konstruksi (tidak menimbun barang di tempat usaha) / pasir / batu / kaca / genteng /
                                        batu bata / semen / kapur / cat / pernis / tangki air / gerendel / engsel / paku / mur /
                                        baut / besi / baja / kayu olahan / tripleks / papan / kusen / jendela/ pipa / kunci /
                                        palu / gergaji / obeng / pintu / pemanas air
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center">6202</th>
                                    <td scope="row">Aktivitas konsultasi komputer dan manajemen fasilitas komputer</td>
                                    <td scope="row">Bahan kimia dasar / pupuk / pestisida / alat laboratorium / alat farmasi /
                                        alat kedokteran / alat kesehatan (bukan apotek) / karet / plastik / kertas (borongan) /
                                        karton(borongan) / tinta printer
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center">6811</th>
                                    <td scope="row">Real estat yang dimilik sendiri atau sewa</td>
                                    <td scope="row">Jasa pengelola gedung</td>
                                </tr>
                                <tr>
                                    <th class="text-center">7020</th>
                                    <td scope="row">Aktivitas konsultasi manajemen</td>
                                    <td scope="row">Jasa konsultan manajemen (SDM / bisnis / pemasaran)</td>
                                </tr>
                                <tr>
                                    <th class="text-center">7310</th>
                                    <td scope="row">Periklanan</td>
                                    <td scope="row">Jasa periklanan</td>
                                </tr>
                                <tr>
                                    <th class="text-center">7410</th>
                                    <td scope="row">Aktivitas perancangan khusus</td>
                                    <td scope="row">Jasa dekorasi (non konstruksi)</td>
                                </tr>
                                <tr>
                                    <th class="text-center">7420</th>
                                    <td scope="row">Aktivitas fotografi</td>
                                    <td scope="row">Jasa fotografi</td>
                                </tr>
                                <tr>
                                    <th class="text-center">7490</th>
                                    <td scope="row">Aktivitas profesional, ilmiah dan teknis lainnya</td>
                                    <td scope="row">Jasa konsultan bisnis</td>
                                </tr>
                                <tr>
                                    <th class="text-center">7710</th>
                                    <td scope="row">Aktivitas penyewaan dan sewa guna usaha tanpa hak opsi atas mobil, bis, truk
                                        dan lainnya
                                    </td>
                                    <td scope="row">Jasa penyewaan alat transportasi darat (non operator)</td>
                                </tr>
                                <tr>
                                    <th class="text-center">7730</th>
                                    <td scope="row">Aktivitas penyewaan dan sewa guna usaha usaha mesin, peralatan dan barang
                                        berwujud lainnya
                                    </td>
                                    <td scope="row">Jasa penyewaan mesin (non operator)</td>
                                </tr>
                                <tr>
                                    <th class="text-center">8121</th>
                                    <td scope="row">Aktivitas kebersihan umum dan bangunan</td>
                                    <td scope="row">Jasa pembersih</td>
                                </tr>
                                <tr>
                                    <th class="text-center">8211</th>
                                    <td scope="row">Aktivitas penyedia gabungan jasa administrator kantor</td>
                                    <td scope="row">Jasa administrasi</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-primary">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h3 class="inline-block bold number p32 p0-xs mb-xs-24 mb0 montserrat-600">Mau Buat PT dengan harga
                            Murah ?
                            <a class="btn-lg btn btn-whiteblack mb0" href="indonesia-company-registration.php">Klik
                                Disini</a>
                        </h3>
                    </div>
                </div>
            </div>
        </section>

        <?php include "footer3.php"; ?>
        <!--=======================================Modal Form========================================-->
        <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="proposal" role="dialog" tabindex="-1">
            <div class="modal-dialog modal-lg mb-xs-64">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header clearfix">
                        <button class="close" data-dismiss="modal" type="button">
                            <span aria-hidden="true">
                                ×
                            </span>
                            <span class="sr-only">
                                Close
                            </span>
                        </button>
                        <h5 class="modal-title text-center bold pt24" id="myModalLabel">
                            Minta Proposal
                        </h5>
                        <p class="text-center" style="margin-bottom:0;">
                            Isi formulir di bawah ini dan kami akan langsung
                            menghubungi Anda. Terima kasih
                        </p>
                        <p class="text-center bold mb0">
                            <span class="fa fa-whatsapp">
                            </span>
                            Whatsapp Number :
                            <a href="tel:+6281280055105">
                                0812-8005-5105
                            </a>
                        </p>
                    </div>
                    <form class="form-email" data-error="Please fill all fields correctly." data-success="Terima kasih atas pengajuan Anda, kami akan segera menghubungi anda.">
                        <input hidden="hidden" id="request_proposal" name="request_proposal" type="text" value="request_proposal">
                        <input hidden="" name="tracker" id="tracker" type="text" value="companyincorporate">
                        <div class="modal-body form-body clearfix">
                            <input hidden="" name="ip" type="text" value="<?= $user_ip; ?>">

                            <div class="col-md-6">
                                <input class="validate-required" name="name" placeholder="Nama" type="text">

                                </input>
                            </div>
                            <div class="col-md-6">
                                <input class="validate-required" name="phone" placeholder="Nomor Kontak" type="text">
                                </input>
                            </div>
                            <div class="col-md-12">
                                <input class="validate-required" name="email" placeholder="Alamat Email" type="text">
                                </input>
                            </div>
                            <div class="col-md-12">
                                <p class="bold mb8">
                                    Layanan voffice.co.id yang anda minati *
                                </p>
                                <div class="select-option p0">
                                    <i class="ti-angle-down">
                                    </i>
                                    <select class="validate-required" name="service">
                                        <option disabled="" selected="" value="">
                                            Layanan yang dipilih —
                                        </option>
                                        <option value="CV">
                                            Buat CV Full
                                        </option>
                                        <option value="CV-VO">
                                            Buat CV + Virtual Office Lite
                                        </option>
                                        <option value="CV-VO-PRE">
                                            Buat CV + Virtual Office Premium
                                        </option>
                                        <option value="PT-LITE">
                                            Buat PT Lite
                                        </option>
                                        <option value="PT-FULL">
                                            Buat PT Full
                                        </option>
                                        <option value="PT-FULL-VO">
                                            Buat PT Full + Virtual Office Lite
                                        </option>
                                        <option value="PT-FULL-VO-PRE">
                                            Buat PT Full + Virtual Office Premium
                                        </option>
                                        <option value="OTHER">
                                            Other Services
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label>
                                    Apa bisnis utama anda (Bidang apa)?
                                </label>
                                <textarea class="" name="message" placeholder="Jelaskan bisnis yang Anda maksudkan — jika Anda tidak yakin, Anda boleh membiarkannya kosong terlebih dahulu.">
                                </textarea>
                            </div>
                            <div class="col-md-12">
                                <p class="bold mb8">
                                    Apakah Anda memiliki domisili untuk perusahaan Anda?
                                </p>
                                <div class="select-option p0">
                                    <i class="ti-angle-down">
                                    </i>
                                    <select class="validate-required" name="domisili">
                                        <option value="YES">
                                            Ya
                                        </option>
                                        <option value="NO">
                                            Tidak
                                        </option>
                                        <option value="NOT-SURE">
                                            Tidak Pasti
                                        </option>
                                    </select>
                                </div>
                            </div>
                            </input>
                        </div>
                        <div class="modal-footer clearfix">
                            <div class="col-md-6 col-md-offset-3">
                                <button type="submit">
                                    Submit
                                </button>
                            </div>
                        </div>
                        </input>
                    </form>
                </div>
            </div>
        </div>
        <!--=======================================End Of Modal Form========================================-->

    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/flexslider.min.js"></script>
    <script src="js/lightbox.min.js"></script>
    <script src="js/masonry.min.js"></script>
    <script src="js/twitterfetcher.min.js"></script>
    <script src="js/spectragram.min.js"></script>
    <script src="js/ytplayer.min.js"></script>
    <script src="js/countdown.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/parallax.js"></script>
    <script src="js/scripts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.js"></script>
    <script type="text/javascript" src="https://bartaz.github.io/sandbox.js/jquery.highlight.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#kbli').DataTable();
        });
        $(document).ready(function() {
            var oTable = $('#kbli').DataTable();
            $('#myInputTextField').keyup(function() {
                oTable.search($(this).val()).draw();
            })
            var table = $('#kbli').DataTable();

            table.on('draw', function() {
                var body = $(table.table().body());
                body.unhighlight();
                body.highlight(table.search());
            });

            (function(h, g, a) {
                function e(d, c) {
                    d.unhighlight();
                    c.rows({
                        filter: "applied"
                    }).data().length && (c.columns().every(function() {
                        this.nodes().flatten().to$().unhighlight({
                            className: "column_highlight"
                        });
                        this.nodes().flatten().to$().highlight(a.trim(this.search()).split(/\s+/), {
                            className: "column_highlight"
                        })
                    }), d.highlight(a.trim(c.search()).split(/\s+/)))
                }

                a(g).on("init.dt.dth", function(d, c) {
                    if ("dt" === d.namespace) {
                        var b = new a.fn.dataTable.Api(c),
                            f = a(b.table().body());
                        if (a(b.table().node()).hasClass("searchHighlight") ||
                            c.oInit.searchHighlight || a.fn.dataTable.defaults.searchHighlight) b.on("draw.dt.dth column-visibility.dt.dth column-reorder.dt.dth", function() {
                            e(f, b)
                        }).on("destroy", function() {
                            b.off("draw.dt.dth column-visibility.dt.dth column-reorder.dt.dth")
                        }), b.search() && e(f, b)
                    }
                })
            })(window, document, jQuery);

        });
    </script>

</body>

</html>