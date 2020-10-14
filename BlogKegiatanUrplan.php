<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="assets/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/OwlCarousel/owl.theme.default.min.css">
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        * {
            font-family: 'Poppins', sans-serif;
            outline: none;
        }

        html {
            overflow-x: hidden;
        }

        body {
            margin: 0;
            background: #f7f7f7;
            overflow-x: hidden;
        }
        .wadah {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
            }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0;
        }
        ul {
            margin: 0;
            /* padding: 0px 140px;
            display: flex; */
        }

        li {
            list-style: none;
            /* margin: 0px 32px; */
            
        }
        a{
            text-decoration: none;
        }
        .bold{
            font-weight: bold;
        }
        .tgh{
            max-width: 400px;
            margin: auto;
            display: block;
        }
        header .baris {
            align-items: center
        }

        header .baris.header-top {
            padding: 20px 0;
        }
        .navbar .lr{
            text-align: center;
            color: #16056B;
            float: right;
            display: flex;
        }
        .navbar .atas{
            margin: 0px 25px;
            font-size: 18px;
        }
        .logo img{
            max-width: 80px;
        }
        .footer-content{
            display: flex;
            
        }
        .footer-content ul{
            margin:0px 25px;
        }
        .head{
            font-weight: bold;
            font-size: 18px;
            color: #16056B;
            margin-bottom: 10px;
        }
        .footeri{
            display: flex;
            font-size: 16px;
            margin: auto;
            color: #636363;
        }

        @media screen and (max-width: 767px) {
            .konten-header{
                text-align: center;
            }
            .navbar{
                margin-top: -60px;
                margin-left: -60px;
            }
            .navbar .atas {
                font-size: 14px;
                margin: 0px 10px;
            }
            .btn{
                margin-top: -70px;
            }
            .footer-content{
                display: block;
            }
            .logo img{
                max-width: 70px;
            }
            
        }
        @media screen and (max-width: 575px){
            .tgh{
                max-width: 250px;
            }
            .dm{
                font-size: 12px;
            }
            .konten-header{
                text-align: center;
            }
            .navbar{
                margin-top: -60px;
                margin-left: -50px;
            }
            .btn{
                margin-top: -70px;
            }
            .footer-content ul {
                margin: 0px 20px;
            }
            .footer-content{
                display: block;
                margin: auto;
            }
            .footeri{
                font-size: 10px;
            }
            .logo img{
                max-width: 70px;
            }
        }
        @media screen and (max-width: 400px){
            .konten-header{
                text-align: center;
            }
            .navbar{
                margin-top: -60px;
                margin-left: -60px;
            }
            .navbar .atas{
                font-size: 10px;
                margin: 20px 10px;
            }
            .logo img {
                    max-width: 50px;
            }
            .footer-content{
                display: block;
            }
            .footer-content{
                margin: 0px 50px;
            }
            footer{
                    margin: 20px -90px;
            }
            .footeri{
                font-size: 10px;
            }
        }

        @media (min-width: 576px) {
            .wadah {
                max-width: 540px;
            }
        }

        @media (min-width: 768px) {
            .wadah {
                max-width: 720px;
            }
        }

        @media (min-width: 992px) {
            .wadah {
                max-width: 960px;
            }
        }

        @media (min-width: 1200px) {
            .wadah {
                max-width: 1140px;
            }
        }

        .baris {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        .grid-1,
        .grid-2,
        .grid-3,
        .grid-4,
        .grid-5,
        .grid-6,
        .grid-7,
        .grid-8,
        .grid-9,
        .grid-10,
        .grid-11,
        .grid-12,
        .grid {
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }

        .grid {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%;
        }

        .invisible-grid {
            visibility: hidden;
        }

        .no-margin {
            margin-right: 0 !important;
            margin-left: 0 !important;
        }

        .showup {
            display: block;
        }
        @media (min-width: 768px) {
            .grid {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -webkit-box-flex: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%;
            }

            .grid-auto {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: no-marginnone;
            }

            .grid-1 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 8.333333%;
                flex: 0 0 8.333333%;
                max-width: 8.333333%;
            }

            .grid-2 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%;
            }

            .grid-3 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }

            .grid-4 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }

            .grid-5 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 41.666667%;
                flex: 0 0 41.666667%;
                max-width: 41.666667%;
            }

            .grid-6 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }

            .grid-7 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 58.333333%;
                flex: 0 0 58.333333%;
                max-width: 58.333333%;
            }

            .grid-8 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
                max-width: 66.666667%;
            }

            .grid-9 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%;
            }

            .grid-10 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 83.333333%;
                flex: 0 0 83.333333%;
                max-width: 83.333333%;
            }

            .grid-11 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 91.666667%;
                flex: 0 0 91.666667%;
                max-width: 91.666667%;
            }

            .grid-12 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="wadah-semua" style="background-color: #ffffff;">
        <header>
            <div class="wadah">
                <div class="baris header-top">
                    <div class="grid-3">
                        <a href="index">
                            <div class="logo">
                                <img src="assets/img/logo.png" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="grid-9">
                        <div class="navbar">
                            <nav>
                                <ul class="lr">
                                    <a href="index">
                                        <li class="atas">
                                            Beranda
                                        </li>
                                    </a>
                                    <a href="Seminar">
                                        <li class="atas">
                                            Seminar
                                        </li>
                                    </a>
                                    <a href="Webinar">
                                        <li class="atas">
                                            Webinar
                                        </li>
                                    </a>
                                    <a href="Donasi">
                                        <li class="atas">
                                            Donasi
                                        </li>
                                    </a>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container1">
            <div class="wadah">
                <div class="baris">
                    <div class="grid-12" style="margin: 20px;">
                        <div class="dm">
                            <div class="bold">Kegiatan URPLAN GROUP</div>
                            Halooo, teman-teman! Disini saya mau ngasih tau nih, kegiatan atau event apa saja sih
                            yang diselenggarakan oleh URPLAN GROUP?? Tentunya semua kegiatan yang
                            diselenggarakan URPLAN GROUP adalah kegiatan yang gak hanya kegiatan biasa, tetapi
                            kegiatan yang memberikan banyak sekali wawasan dan ilmu yang bermanfaat untuk kita
                            semua dengan mengundang banyak narasumber hebat mulai dari narasumber nasional
                            sampai narasumber internasional. Waah, menarik sekali bukaaannn??🤗
                            Nah, apa saja sih kegiatan-kegiatannya? Disini akan saya jelaskan satu per satu kegiatan
                            atau event URPLAN GROUP. <br><br>
                            <div style=" display: flex;">
                                <div><img src="assets/img/satu.png" alt=""></div>
                                <div style="margin-left:20px;">
                                    <div class="bold">Power of Inspire (POINS)</div>
                                </div>
                            </div>
                            POINS, adalah sebuah event webinar ekslusif yang diadakan satu tahun sekali dengan
                            menghadirkan 21 narasumber hebat yang akan membahas tuntas kesuksesan.
                            Seru banget nih teman-teman! Kenapa sih teman - teman harus mengikuti event POINS ini? <br>
                            ● Teman - teman pasti akan paham makna dari kesuksesan <br>
                            ● Teman - teman berkesempatan mendapat 21 sertifikat kegiatan <br>
                            ● Teman - teman berkesempatan mendapat doorprize dengan total 1,5 juta rupiah <br>
                            ● Teman - teman bisa berpartisipasi dalam berkurban <br>
                            ● Karene POINS adalah event eksklusif yang diadakan satu tahun sekali <br><br>
                            <div style=" display: flex;">
                                <div><img src="assets/img/dua.png" alt=""></div>
                                <div style="margin-left:20px;">
                                    <div class="bold">Ramadhan Siap, adalah sebuah kegiatan yang diadakan dari sebelum ramadhan, saat</div>
                                </div>
                            </div>
                            ramadhan sampai setelah ramadhan. Nah, dalam Ramadhan Siap ini kami mempunyai
                            program bernama MIRAS. Apa sih yang dimaksud MIRAS itu?
                            Muhasabah Diri Ramadhan Asyik (MIRAS), adalah program yang dijalankan oleh UR
                            PLAN GROUP untuk mengisi kegiatan bulan Ramadhan. Di dalam program ini, kami
                            memiliki beberapa kegiatan yang luar biasa, diantara nya : <br>
                            ● Program One Day One Juz <br>
                            ● Daily Reminder, mulai dari sholat dhuha, tahajud, dan amalan sunnah lainnya setiap
                            hari <br>
                            ● Islamic Sharing, di dalam kegiatan ini kami mengundang beberapa narasumber yang
                            ahli dalam bidangnya dan juga sharing bersama yang dilakukan secara daring
                            melalui aplikasi Google Meet. <br>
                            Yuk, buat Ramdhanmu seru dan bermanfaat! Kita bersama - sama khatam Al - Qur'an dan
                            belajar bersama narasumber hebat tentunya. <br><br>
                            <div style=" display: flex;">
                                <div><img src="assets/img/tiga.png" alt=""></div>
                                <div style="margin-left:20px;">
                                    <div class="bold">Safari Sharing Online Business Internasional (SSOBI)</div>
                                </div>
                            </div>
                            SSOBI, merupakan event sharing online yang diadakan secara daring melalui aplikasi
                            Google Meet dan WhatsApp Application. Di dalam event ini, kami mengundang beberapa
                            narasumber hebat dan luar biasa dalam bidang nya. Bidang yang kami bahas dalam event
                            ini adalah : <br>
                            ● Business <br>
                            ● Psychology <br>
                            ● Self-Improvement <br>
                            ● Financial <br>
                            ● Organization <br>
                            Dimasa pandemi seperti ini, teman - teman tidak perlu takut jadi tidak produktif atau takut
                            bisnis tidak berjalan dengan lancar. Karena dari event ini kita bisa dapet banyak banget ilmu
                            lhooo. <br><br>
                            <div style=" display: flex;">
                                <div><img src="assets/img/empat.png" alt=""></div>
                                <div style="margin-left:20px;">
                                    <div class="bold">Sedekah On The Road</div>
                                </div>
                            </div>
                            Sedekah On The Road, adalah program yang diselenggarakan oleh URPLAN GROUP
                            dengan melakukan kegiatan bakti sosial seperti penyaluran sembako atau makanan kepada
                            kaum dhuafa dan anak - anak yatim piatu. Sembako dan makanan yang diberikan
                            merupakan donasi dari teman - teman yang disalurkan melalui URPLAN GROUP.
                            Nah, jadi itu adalah kegiatan - kegiatan yang diselenggarakan oleh URPLAN GROUP. Seru
                            dan menariikk bangett bukaann?🤩 Teman - teman bisa dapat banyak banget wawasan dan
                            ilmu yang bermanfaat. Yuk, selalu ikuti kegiatan URPLAN GROUP! Jangan sampai
                            ketinggalan😉 Karena sayang banget lhoo kalau sampai gak ikut.
                            Untuk info lainnya, teman - teman bisa lihat di instagram @ur_plan yaaa!☺
                            Semoga teman - teman sehat dan sukses selalu☺☺ <br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container2" style="background: #D9EBFF;">
            <div class="wadah">
                <div class="baris">
                    <div class="grid-12">
                        <footer>
                            <div class="footer-wadah">
                                <div class="grid-12">
                                    <div style="display: flex;padding: 20px;">
                                        <!-- <div class="grid-3">
                                            <div class="footer-logo">
                                                <div>
                                                    <img src="assets/img/logo.png" alt="">
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="grid-12">
                                            <div class="footer-content">
                                                <div class="footeri">
                                                    <div>
                                                        <a href="index">
                                                            <div class="logo">
                                                                <img src="assets/img/logo.png" alt="">
                                                            </div>
                                                        </a>
                                                        <li>Motivation, Inspiration, and Dedication</li>
                                                    </div>
                                                    <ul>
                                                        <li class="head">Fitur</li>
                                                        <li><a href="#search">Cari Event</a></li>
                                                        <li><a href="#rekomendasi"></a> Rekomendasi</li>
                                                        <li><a href="#kategori">Kategori</a></li>
                                                        <li><a href="#blog"></a> Blog</li>
                                                    </ul>
                                                    <ul>
                                                        <li class="head">Kontak</li>
                                                        <li>Facebook</li>
                                                        <li>Instagram</li>
                                                        <li>Bantuan</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


