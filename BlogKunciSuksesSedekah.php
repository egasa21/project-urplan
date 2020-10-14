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
                            <div class="bold">Kunci Sukses Sedekah </div> 
                            <div style="margin: 50px 0px;">
                                <img src="assets/img/blog2.jpeg" alt="" class="tgh" >
                            </div>
                            Percayakah kamu, kalau sedekah ternyata bisa menjadi kunci kesuksesan?
                            Ya, saya percaya sekali kalau sedekah bisa menjadi kunci sukses kita. "Situ sedekah
                            emangnya gak takut miskin?" sering sekali terdengar kalimat seperti ini. Banyak orang
                            yang takut miskin karena bersedekah. Padahal dengan bersedekah, Allah akan bukakan
                            pintu rezeki kita. Dan Allah pun sudah berjanji dalam Al - Qur'an barangsiapa yang
                            bersedekah, niscaya Allah akan melipatgandakan. Itu adalah janji Allah kepada kita semua
                            sebagai umat Islam. Sebagaimana dalam firman-Nya dalam Q.S Al - Baqarah ayat 245 yang
                            artinya : <br><br>
                            "Siapakah yang mau memberi pinjaman kepada Allah, pinjaman yang baik (menafkahkan
                            hartanya di jalan Allah), maka Allah akan melipatgandakan pembayaran kepadanya dengan
                            lipat ganda yang banyak". <br> <br>
                            Itu adalah janji Allah, yang tidak perlu diragukan lagi. Sudah pasti akan berlaku, tinggal
                            kitanya saja yang harus bersabar☺
                            Sedekah juga merupakan sesuatu yang wajib karena ada sebagian dalam harta kita yang
                            menjadi hak orang lain. Allah SWT yang maha pemberi menitipkan sebagian rizki orang lain
                            kepada kita. Jadi, kewajiban kita adalah mengembalikannya.
                            Jika sampai tidak, maka kesengsaraan yang akan kita dapat karena telah menggunakan
                            harta yang sebenarnya bukan menjadi milik kita. Na'udzubillahiminzalik..
                            Adapun keutamaan - keutamaan bersedekah, yaitu : <br><br>
                            <div style=" display: flex;">
                                <div><img src="assets/img/satu.png" alt=""></div>
                                <div style="margin-left:20px;">
                                    Menyucikan Diri
                                </div>
                            </div>
                            <div style=" display: flex;">
                                <div><img src="assets/img/dua.png" alt=""></div>
                                <div style="margin-left:20px;">
                                    Pahala Berlipat Ganda
                                </div>
                            </div>
                            <div style=" display: flex;">
                                <div><img src="assets/img/tiga.png" alt=""></div>
                                <div style="margin-left:20px;">
                                    Mendapat Imbalan Berlipat-lipat
                                </div>
                            </div>
                            <div style=" display: flex;">
                                <div><img src="assets/img/empat.png" alt=""></div>
                                <div style="margin-left:20px;">
                                    Terhindar dari Marabahaya
                                </div>
                            </div>
                            <div style=" display: flex;">
                                <div><img src="assets/img/lima.png" alt=""></div>
                                <div style="margin-left:20px;">
                                    Dapat menghapus dosa - dosa
                                </div>
                            </div>
                            <div style=" display: flex;">
                                <div><img src="assets/img/enam.png" alt=""></div>
                                <div style="margin-left:20px;">
                                    Sebagai Jaminan Hari Akhir
                                </div>
                            </div>
                            <div style=" display: flex;">
                                <div><img src="assets/img/tujuh.png" alt=""></div>
                                <div style="margin-left:20px;">
                                    Terbebaskan dari Siksa Kubur
                                </div>
                            </div>
                            <div style=" display: flex;">
                                <div><img src="assets/img/delapan.png" alt=""></div>
                                <div style="margin-left:20px;">
                                    Menyembuhkan Orang Sakit
                                </div>
                            </div>
                            <div style=" display: flex;">
                                <div><img src="assets/img/sembilan.png" alt=""></div>
                                <div style="margin-left:20px;">
                                    Menambahkan umur
                                </div>
                            </div>
                            <div style=" display: flex;">
                                <div><img src="assets/img/sepuluh.png" alt=""></div>
                                <div style="margin-left:20px;">
                                    Dijauhkan dari api neraka
                                </div>
                            </div>
                            MasyaAllah, banyak sekali hikmah jika kita bersedekah..
                            Bahkan sebuah ilmu ekonomi islam mengatakan bahwa ada beberapa hal yang membuat
                            orang bisa menjadi mapan secara financial, yaitu: berdagang, investasi, emas, dan sedekah.
                            Ke empat hal inilah yang diajarkan untuk mencapai kekayaan dalam islam, bukan
                            menabung atau menumpuk-numpuk harta. <br> <br>
                            Dalam sebuah ceramah, ustadz Yusuf Mansur juga selalu mengait-ngaitkan ibadah sedekah
                            ini dengan shalat dhuha. Sedekah akan lebih afdol jika dibarengi dengan shalat dhuha,
                            kenapa? Karena shalat dhuha merupakan shalat pembuka pintu rizki kita.
                            Jika hanya dengan sedekah saja Allah SWT akan mengganti harta berkali lipat, ditambah
                            lagi dengan shalat pembuka pintu rizki, bisa teman - teman bayangkan kesuksesan macam
                            apa yang bisa diberikan Allah SWT kepada orang-orang yang rajin malakukan ibadah
                            sedekah dan melaksanakan shalat dhuha. <br>
                            Maka dari itu, jangan takut harta kita akan habis dengan bersedekah. Karena dengan
                            bersedekah sama saja kita menabung untuk diakhirat kelak, semakin kita rajin bersedekah
                            maka semakin banyak pula tabungan kita diakhirat nanti.
                            Yuk, sama - sama kita belajar dan mulai rajin bersedekah agar dibukakan pula pintu rezeki
                            lainnya oleh Allah SWT☺
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


