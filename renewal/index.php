<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vOffice</title>
    <!-- Style CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css" integrity="sha512-9YHSK59/rjvhtDcY/b+4rdnl0V4LPDWdkKceBl8ZLF5TB6745ml1AfluEU6dFWqwDw9lPvnauxFgpKvJqp7jiQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/all.css">
</head>

<body>

    <?php include "components/header-primary.php" ?>

    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="text-center mb-5 pb-2">
                        <h1 class="text-white bold mb-0" data-aos="fade-up">Layanan Kantor Virtual</h1>

                        <h1 class="text-white" data-aos="fade-up" data-aos-delay="200">Lengkap Dengan Perizinan Usaha</h1>

                        <div class="review-google" data-aos="fade-up" data-aos-delay="300">
                            <img src="assets/img/google.svg" alt="Review Google" class="mt-2 mr-3" />
                            <a href="#section_2" class="btn custom-btn smoothscroll mt-3">2.531++ Review</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-md-12">
                    <?php include "components/slider-service.php" ?>
                </div>
            </div>
        </div>
    </section>

    <section class="section-about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="text-left bold hover-underline-animation">
                        Tentang Kami
                    </h3>
                    <p class="text-left">
                        vOffice adalah penyedia layanan kantor bersama seperti Virtual
                        Office dan Serviced Office yang telah memiliki pengalaman lebih
                        dari 19 tahun melayani lebih dari <strong>50.000</strong> klien
                        dengan berbagai latar belakang di seluruh dunia.
                    </p>
                    <a href="/about-us" class="bold hover-underline-animation">
                        Lihat Selengkapnya ➚</a>
                </div>
                <div class="col-md-6">
                    <img src="assets/img/index/about-us-new-pc.png" alt="" class="img-fluid w-100" />
                </div>
            </div>
        </div>
    </section>

    <?php include "components/slider-location.php" ?>

    <section class="why-choice-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-left">
                    <h3 class="bold hover-underline-animation">Why Choice Us?</h3>
                    <p>
                        vOffice adalah Virtual Office percontohan yang dipercaya oleh KPP
                        (Kantor Pelayanan Pajak) untuk memberikan penyuluhan Laporan Pajak
                        Virtual Office dengan benar. vOffice disertifikasi dan diakui oleh
                        PERJAKBI (Perhimpunan Jasa Kantor Bersama Indonesia).
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "components/footer-primary.php" ?>

    <!-- Javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>