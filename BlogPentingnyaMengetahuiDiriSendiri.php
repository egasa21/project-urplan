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
                                <div class="bold">Pentingnya Mengetahui Diri Sendiri</div> 
                            <div style="margin: 50px 0px;">
                                <img src="assets/img/blog1.jpg" alt="" class="tgh" >
                            </div>
                            Banyak sekali orang yang tidak mengenal dirinya sendiri. Merasa paham tentang banyak 
                            hal, tetapi tidak paham dengan diri sendiri. Padahal, mengenal diri sendiri adalah hal yang 
                            penting, langkah awal untuk menjalani hidup kedepannya. Jika kita tidak mengenal tentang 
                            diri kita seperti 'Siapa saya?' 'Apa kekurangan dan kelebihan saya?' 'Apa kemauan saya?' 
                            'Hal apa saja yang saya suka dan tidak suka?' 'Mau bagaimana nanti saya kedepannya?' 
                            bnyak orang yang tidak tahu akan hal itu, lalu bagaimana kita bisa menjalani kehidupan kita 
                            kedepannya? Padahal hal itu melekat pada diri kita. 
                            Mengenal tipe kepribadian dalam diri bisa membantu anda mengenali diri sendiri lebih baik. 
                            Salah satunya, membantu anda untuk mendapatkan lingkungan yang mendukung. Tidak 
                            hanya mengenal diri sendiri, anda juga harus mempelajarinya lebih dalam tentang diri anda. 
                            Apa saja manfaat jika anda mengenal diri anda sendiri : <br> <br>
                            <div style=" display: flex;">
                                <div><img src="assets/img/satu.png" alt=""></div>
                                <div style="margin-left:20px;">
                                    Membantu Anda memahami orang lain lebih baik Mengenali tipe kepribadian yang dimiliki, membantu Anda memahami reaksi dan persepsi
                                    orang lain yang berbeda, sekalipun itu terjadi pada situasi yang sama. Anda tidak akan lagi
                                    memaksakan pemikiran maupun pendapat Anda agar disetujui oleh orang yang memiliki tipe
                                    kepribadian berlawanan dengan Anda.
                                    Contohnya: Anda yang ekstrovert berteman dengan orang yang introvert. Anda tentu tidak
                                    akan memaksanya ikut ke suatu acara yang melibatkan banyak orang karena itu akan
                                    membuatnya tidak nyaman. 
                                </div>
                            </div>
                            <div style=" display: flex;">
                                <div><img src="assets/img/dua.png" alt=""></div>
                                <div style="margin-left:20px;">
                                    Tahu kelemahan dan kelebihan diri sendiri Salah satu keuntungan mengenal tipe kepribadian adalah mengetahui apa saja kelemahan
                                    diri sendiri. Paham akan kelemahan diri, memungkinkan Anda untuk berhati-hati dalam
                                    melakukan sesuatu dan tidak bertindak ceroboh pada situasi tertentu.
                                    Anda akan menemukan cara baru untuk mendekati masalah dan mencari solusinya.
                                    Misalnya, Anda termasuk orang yang mudah panik dan cemas. Mengetahui kekurangan ini,
                                    Anda tentu bisa mempelajari cara untuk menenangkan diri agar dapat mengatasi situasi
                                    tersebut dengan baik. Selain itu, Anda juga tahu kelebihan yang Anda miliki. Anda bisa
                                    mengembangkan kelebihan ini menjadi sebuah potensi.
                                    
                                </div>
                            </div>
                            <div style=" display: flex;">
                                <div><img src="assets/img/tiga.png" alt=""></div>
                                <div style="margin-left:20px;">
                                    Tahu mana yang disukai dan tidak disukai Setiap orang memiliki hal yang disukai dan tidak yang berbeda-beda. Contohnya, Anda tidak
                                    menyukai suasana yang berisik atau bertemu banyak orang. Bila Anda mengetahui hal ini,
                                    tentu Anda akan menghindari hal yang bisa membuat Anda risih dan terganggu.
                                    Ya, dengan mengenal tipe kepribadian yang dimiliki, Anda bisa menempatkan diri pada hal
                                    yang Anda sukai dan menghindari hal yang tak Anda sukai terjadi pada diri Anda.
                                </div>
                            </div>
                            <div style=" display: flex;">
                                <div><img src="assets/img/empat.png" alt=""></div>
                                <div style="margin-left:20px;">
                                    Mampu Menentukan Jalan Hidup atau Menentukan Pilihan Dalam menjalani kehidupan, kita dihadapkan pada banyak pilihan. Mulai dari pilihan dalam
                                    berkarir, asmara, tempat berlibur, dan lain sebagainya. Bila kita sudah mengenali diri sendiri,
                                    tentu kita jauh lebih mudah menentukan pilihan yang tepat. Ambil contoh kecilnya kita
                                    menyukai menulis, tentu kita dapat dengan mudah memilih berkarir di dunia tulis menulis.
                                </div>
                            </div>
                            <div style=" display: flex;">
                                <div><img src="assets/img/lima.png" alt=""></div>
                                <div style="margin-left:20px;">
                                    Mampu Menerima Kondisi Diri Ketika kita mulai mengerti kelebihan dan kekurangan yang kita punya, tentu kita turut
                                    terbantu pula untuk menerima ikhlas segala kelebihan dan kekurangan diri sendiri. Begitu
                                    juga keikhlasan menerima dan bertoleransi terhadap kelebihan dan kelemahan orang lain.
                                    Supaya tidak ada perasaan iri maupun cemburu berlebih yang memberikan efek buruk.
                                </div>
                            </div>
                            <div style=" display: flex;">
                                <div><img src="assets/img/enam.png" alt=""></div>
                                <div style="margin-left:20px;">
                                    Mampu Mengetahui Potensi Diri Saat mencoba mengenali diri, tentu kita mendapati beberapa potensi yang kita punya.
                                    Dengan mengetahui potensi-potensi yang ada pada diri, kita bisa mengoptimalkannya untuk
                                    kesuksesan dalam karir maupun kehidupan.
                                    Itulah beberapa hal yang sangat bermanfaat dalam pentingnya mengenali diri sendiri.
                                    Karena pada dasarnya jika kita mampu mengenali diri sendiri maka kita pun akan dapat
                                    mengenali orang lain. Jika kita mampu mengenali orang lain, maka apapun yang kita
                                    sampaikan dan perbuat, maka mudah sekali untuk mengendalikan orang lain. Dan titik
                                    akhirnya dengan mengenali diri sendiri, maka anda akan memahami betapa sempurnanya
                                    ciptaan Allah.
                                </div>
                            </div>
                            </div>
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


