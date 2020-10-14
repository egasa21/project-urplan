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
                            <div class="bold">Tips Public Speaking Bagi Pemula</div> <br>
                            Public speaking, adalah kemampuan untuk berkomunikasi secara langsung kepada
                            banyak orang. Komunikasi yang dimaksud adalah upaya penyampaian informasi secara
                            efisien, efektif dan akurat. Pendengar pun akan mampu menangkap dengan mudah apa
                            yang ingin disampaikan oleh pembicara.
                            Banyak orang-orang yang menggangap kalau berbicara di depan umum itu mudah dan
                            sering kali mereka mengejek jika ada orang yang salah berbicara didepan umum,
                            sedangkan mereka sendiri belum tentu bisa berbicara dengan baik dindepan umum, public
                            speaking walaupun terlihat sangat mudah dan sepele karna hanya perlu berbica didepan
                            orang dan memberikan tips-tips dari sebuah masalah tetapi buktinya hal ini sangat sulit
                            untuk dilakukan terutama untuk seorang pemula. <br><br>
                            <div style=" display: flex;">
                                <div><img src="assets/img/satu.png" alt=""></div>
                                <div style="margin-left:20px;">
                                    <div class="bold">Kuasai materi</div>
                                </div>
                            </div>                              
                            Saat akan berbicara didepan umum pastikan anda menguasai materi yang akan dibahas,
                            banyak sekali orang-orang yang gagal saat public speaking karna kurang menguasai materi
                            yang akan dibicarakan biasanya mereka yang gagal ini karna terlalu menyepelekan materi
                            yang diberikan sehingga mereka malas untuk belajar jadi saat akan public speaking
                            menguasai materi adalah hal yang paling dasar jika anda tidak mengusai materi itu sama
                            saja dengan mempermalukan diri sendiri. <br><br>
                            <div style=" display: flex;">
                                <div><img src="assets/img/dua.png" alt=""></div>
                                <div style="margin-left:20px;">
                                    <div class="bold">Menggunakan Bahasa Yang Mudah Dipahami</div>
                                </div>
                            </div>                               
                            Menggunakan bahasa yang mudah dipahami tidak hanya berguna untuk sang pembicara
                            tetapi juga untuk pendengar, banyak sekali orang yang menggunakan bahasa-bahasa yang
                            sulit untuk dipahami sehinggaa para pendengar dapat mengerti dengan baik apa yang
                            dikatakan oleh si pemateri. <br><br>
                            <div style=" display: flex;">
                                <div><img src="assets/img/tiga.png" alt=""></div>
                                <div style="margin-left:20px;">
                                    <div class="bold">Berlatih Berbicara Di Depan Cermin</div>
                                </div>
                            </div>                              
                            Agar dapat memberikan penampilan dengan baik saat berbicara di depan umum kita harus
                            latihan berbicara dulu, cara yang paling efektif adalah berlatih berbicara di depan cermin
                            dengan melihat diri sendiri saat berbicara maka kita akan tau dimana kesalahan-kesalahan
                            kita saat berbicara cara ini juga bisa membuat percaya diri kita lebih tinggi. <br><br>
                            <div style=" display: flex;">
                                <div><img src="assets/img/empat.png" alt=""></div>
                                <div style="margin-left:20px;">
                                    <div class="bold">Berbicaralah Dengan Orang Lain Sebelum Tampil</div>
                                </div>
                            </div>                            
                            Banyak sekali orang yang yang gagap atau tidak bisa berbicara dengan baik saat berbicara
                            di depan umum itu karena rasa gugup yang dia alami, tapi cara ini dapat di antisipasi
                            dengan cara berbicara terlebih dahulu dengan seseorang di dekat kita, karna hal ini dapat
                            membuat anda terbiasa untuk berbicara dan menghilangkan rasa gugup anda saat akan
                            tampil. <br><br>
                            <div style=" display: flex;">
                                <div><img src="assets/img/lima.png" alt=""></div>
                                <div style="margin-left:20px;">
                                    <div class="bold">Senam Bibir</div>
                                </div>
                            </div>                             
                            Agar dapat berbica dengan baik terlebih dahulu lebih baik melakukan senam bibir agar
                            mulut kita terbiasa saat berbicara dan tidak gagap. Senam bibir ini seperti memanyungkan
                            bibir ke atas, kebawah,kekiri dan kekanan, juga dengan cara mengucapkan A,I,U,E,O juga
                            merupakan salah satu senam bibir. <br><br>
                            <div style=" display: flex;">
                                <div><img src="assets/img/enam.png" alt=""></div>
                                <div style="margin-left:20px;">
                                    <div class="bold">Gunakan Seni Berbicara</div>
                                </div>
                            </div>                             
                            Saat berbicara kita juga harus tau dimana tempo kita untuk berbicara santai, cepat, lembut,
                            keras, dan berhenti sejenak. Karna public speaking juga membutuhkan seni berbicara, jika
                            seorang pembicara hanya menggunakan tempo yang datar itu akan membuat para
                            pendengar menjadi bosan dan materi yang diberikan menjadi tidak menarik. <br><br>
                            <div style=" display: flex;">
                                <div><img src="assets/img/tujuh.png" alt=""></div>
                                <div style="margin-left:20px;">
                                    <div class="bold">Gunakanlah Bahasa Tubuh Saat Berbicara</div>
                                </div>
                            </div> 
                            Saat berbicara di depan umum Kita juga harus menggunakan bahasa tubuh, karna jika kita
                            hanya berbicara dan tidak menggunakan bahasa tubuh, materi yang kita berikan akan akan
                            terdengar garing/basi untuk para pendengar, menggerakkan tubuh juga dapat membuat kita
                            lebih rileks dan rasa gugup kita bisa sedikit menghilang, menggunakan bahasa tubuh juga
                            memberikan kesan kepada pendengar jika anda tidak hanya menghafal materi yang ingin
                            diberikan tetapi juga memahami nya dengan baik. <br> <br>
                            <div style=" display: flex;">
                                <div><img src="assets/img/delapan.png" alt=""></div>
                                <div style="margin-left:20px;">
                                    <div class="bold">Jaga Kontak Mata dengan Audience</div>
                                </div>
                            </div>                            
                            Kontak mata merupakan salah satu hal yang perlu diperhatikan saat melakukan public
                            speaking. Jika belum terbiasa dan gugup untuk memandang audience tepat di mata, coba
                            alihkan pandanganmu ke bagian batang hidung atau dahi.
                            Lalu, usahakan agar pandanganmu tidak terus-terusan beralih dari satu sisi ke sisi lain.
                            Namun coba untuk menahan pandangan lebih lama. Cara ini juga efektif lho untuk
                            menghilangkan rasa gugup dan membuatmu lebih fokus saat melakukan public speaking. <br><br>
                            <div style=" display: flex;">
                                <div><img src="assets/img/sembilan.png" alt=""></div>
                                <div style="margin-left:20px;">
                                    <div class="bold">Percaya Diri Dan Terus Senyum</div>
                                </div>
                            </div>                            
                            Yang paling utama saat berbicara di depan umum adalah memiliki percaya diri yang tinggi,
                            jika anda sudah menguasai tips-tips yang di atas semuanya akan sia-sia saja jika anda tidak
                            memiliki percaya diri. Jika anda sudah memiliki percaya diri anda akan dapat menguasai
                            panggung. Saat berbica di depan umum sering sekali pembicara lupa materi yang ingin
                            disampaikan tetapi jangan pernah menunjukan ekspresi muka cemas atau gelisah,
                            berhentilah sejenak dan senyumlah dan berikan kesan bahwa tidak ada masalah apa-apa
                            setelah itu teruslah berbicara walaupun yang anda bicarakan itu tidak sesuai dengan materi
                            awal yang ingin dibicarakan.
                            Semoga tips yang saya sampaikan dapat bermanfaat bagi teman - teman sekalian☺
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


