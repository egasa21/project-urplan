<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tiket</title>
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
        a{
            text-decoration: none;
        }
        header {
            background: #fff;
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
        .section{
            padding-top: 45px;
            padding-bottom: 45px;
        }
        .gambar img{
            border: 1px solid #16056B;
            box-sizing: border-box;
            border-radius: 20px;
            max-height: 475px;
        }
        .btn1{
            margin: 0px 80px;
        }
        .btn2{
            float: right;
            display: block;
            width: 125px;
            height: 50px;
            background: #FD9519;
            border-radius: 100px;
            border: none;
            color: #ffffff;
        }
        .card{
            position: relative;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            background: #B4D7FE;
            border-radius: 15px;
            -webkit-box-shadow: 0 2px 6px 0 rgba(28,29,29,.25);
            box-shadow: 0 2px 6px 0 rgba(28,29,29,.25);
            overflow: hidden;   
        }
        .card2{
            position: relative;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            background: #ffffff;
            border-radius: 15px;
            -webkit-box-shadow: 0 2px 6px 0 rgba(28,29,29,.25);
            box-shadow: 0 2px 6px 0 rgba(28,29,29,.25);
            overflow: hidden;
            
        }
        .label{
            background: rgba(180, 215, 254, 0.5);
            border-radius: 40px;
            width: 190px;
            padding: 5px 12px;
            letter-spacing: 0.3em;
            color: #5696F4;
            text-align: center;
        }
        .content-judul{
            font-weight: 600;
            font-size: 44px;
            line-height: 72px;
            color: #16056B;
            text-align: center;
        }
        .button-label{
            background: #F3F3F3;
            opacity: 0.75;
            border-radius: 100px;
            text-align: center;
            width: 150px;
            height: 40px;
            padding-top: 7px;
        }
        .krg{
            display: flex;
        }
        .krg1{
            display: flex;
        }
        /* button:focus,
input:focus,
textarea:focus,
select:focus {
  outline: none; }

.tabs {
  display: block;
  display: -webkit-flex;
  display: -moz-flex;
  display: flex;
  -webkit-flex-wrap: wrap;
  -moz-flex-wrap: wrap;
  flex-wrap: wrap;
  margin: 0;
  overflow: hidden; }
  .tabs [class^="tab"] label,
  .tabs [class*=" tab"] label {
    color: #16056B;
    cursor: pointer;
    display: block;
    font-weight: 600;
    font-size: 16px;
    line-height: 1em;
    padding: 2rem 0;
    text-align: center; }
  .tabs [class^="tab"] [type="radio"],
  .tabs [class*=" tab"] [type="radio"] {
    border-bottom: 1px solid rgba(239, 237, 239, 0.5);
    cursor: pointer;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    display: block;
    width: 100%;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out; }
    .tabs [class^="tab"] [type="radio"]:hover, .tabs [class^="tab"] [type="radio"]:focus,
    .tabs [class*=" tab"] [type="radio"]:hover,
    .tabs [class*=" tab"] [type="radio"]:focus {
      border-bottom: 1px solid #FD9519;; }
    .tabs [class^="tab"] [type="radio"]:checked,
    .tabs [class*=" tab"] [type="radio"]:checked {
      border-bottom: 2px solid #FD9519;; }
    .tabs [class^="tab"] [type="radio"]:checked + div,
    .tabs [class*=" tab"] [type="radio"]:checked + div {
      opacity: 1; }
    .tabs [class^="tab"] [type="radio"] + div,
    .tabs [class*=" tab"] [type="radio"] + div {
      display: block;
      opacity: 0;
      padding: 2rem 0;
      width: 90%;
      -webkit-transition: all 0.3s ease-in-out;
      -moz-transition: all 0.3s ease-in-out;
      -o-transition: all 0.3s ease-in-out;
      transition: all 0.3s ease-in-out; }
  .tabs .tab-2 {
    width: 50%; }
    .tabs .tab-2 [type="radio"] + div {
      width: 200%;
      margin-left: 200%; }
    .tabs .tab-2 [type="radio"]:checked + div {
      margin-left: 0; }
    .tabs .tab-2:last-child [type="radio"] + div {
      margin-left: 100%; }
    .tabs .tab-2:last-child [type="radio"]:checked + div {
      margin-left: -100%;} */

        button:hover{
            background-color: #16056B;
            
        }
        button{
            display: block;
            width: 160px;
            height: 50px;
            background: #FD9519;
            border-radius: 100px;
            border: none;
            color: #ffffff;
            margin: auto;
            cursor: pointer;
        }
        .footer-content{
            display: flex;
        }
        .footer-content ul{
            margin:0px 18px;
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
            color: #636363;
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
        @media screen and (max-width: 767px){
            .konten-header{
                text-align: center;
            }
            .navbar{
                margin-top: -60px;
                margin-left: -60px;
            }
            .logo img {
                    max-width: 70px;
            }
            .navbar .atas {
                font-size: 14px;
                margin: 0px 10px;
            }
            .btn{
                margin-top: -70px;
            }
            .button-src{
                margin: 0px;
            }
            .tbl{
                text-align: center;
            }
            .bnt{
                margin: auto;
            }
            .krg{
                display: block;
                margin: auto;
            }
            .gambar{
                margin-left: 40px;
            }
            
            .krg1{
                display: block;
                
            }
            .tgh img{
                margin: auto;
                display: block;
            }
            .label{
                text-align: center;
                margin: auto;
                margin-left: 185px;
            }
            .btn1{
                margin: auto;
                display: block;
            }
            .footer-content{
                display: block;
            }

        }
        @media screen and (max-width: 575px){
            .konten-header{
                text-align: center;
            }
            .navbar{
                margin-top: -60px;
                margin-left: -50px;
            }
            .card{
                margin: 10px;
            }
            .btn{
                margin-top: -70px;
            }
            .button-src{
                margin: 0px;
            }
            .gambar{
                margin: auto;
            }
            .gambar img{
                width: 100%;
            }
            .krg{
                display: block;
                margin: auto;
            }
            .krg1{
                display: block;
                
            }
            .tgh img{
                margin: auto;
                display: block;
            }
            .label{
                text-align: center;
                margin: auto;
                margin-left: 185px;
            }
            .btn1{
                margin: auto;
                display: block;
            }
            .footer-content{
                display: block;
            }
        }
        @media screen and (max-width: 400px){
            .logo img {
                    max-width: 50px;
            }
            .btn2{
                width: 70px;
                height: 40px;
                margin-top: 22px;
            }
            .navbar{
                margin-top: -60px;
                margin-left: -60px;
            }
            .navbar .atas{
                font-size: 10px;
                margin: 20px 10px;
            }
            .kiri{
                margin-left: 5px;
            }
            .gambar{
                margin: auto;
            }
            .gambar img{
                width: 100%;
            }
            .btn1{
                margin: auto;
                display: block;
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
    <div class="wadah-semua"  style="background-color: #ffffff;">
        <header>
            <div class="wadah">
                <div class="baris header-top">
                    <div class="grid-3">
                        <a href="index.php">
                            <div class="logo">
                                <img src="assets/img/logo.png" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="grid-9">
                        <div class="navbar">
                            <nav>
                                <ul class="lr">
                                    <a href="index.php">
                                        <li class="atas">
                                            Beranda
                                        </li>
                                    </a>
                                    <a href="Seminar.php">
                                        <li class="atas">
                                            Seminar
                                        </li>
                                    </a>
                                    <a href="Webinar.php">
                                        <li class="atas"style="font-weight: bold;">
                                            Webinar
                                        </li>
                                    </a>
                                    <a href="Donasi.php">
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
                    <div class="grid-12">
                        <div class="krg">
                            <div style="margin: 0px 30px;">
                                <div class="gambar">
                                    <img src="assets/img/Narsumm-03.png" alt="">
                                </div>
                            </div>
                            <div style="margin: 0px 30px;">
                                <div>
                                    <div>
                                        Bagikan
                                    </div>
                                    <div style="display: flex; margin: 11px 0px 20px 0px;">
                                        <a href="http://twitter.com/share?text=Im Sharing on Twitter&url=https://urplan.id/TiketAdindaM.php">
                                        <div class="icn" style="margin: 0px 10px 0px 0px;">
                                            <img src="assets/img/Twitter.png" alt="">
                                        </div>
                                        </a>
                                        <a href="http://www.facebook.com/sharer.php?u=https://urplan.id/TiketAdindaM.php" target="_blank">
                                        <div class="icn" style="margin: 0px 10px;">
                                            <img src="assets/img/FB.png" alt="">
                                        </div>
                                        </a>
                                        
                                    </div>
                                </div>
                                <div style="margin-bottom: 57px;">
                                    <div style="    background: #FFFFFF;
                                    border: 1px solid #16056B;
                                    box-sizing: border-box;
                                    border-radius: 15px;
                                    padding:30px;
                                    width:101%;">
                                        <div style="font-weight: 500;font-size: 24px;line-height: 36px;color: #16056B; margin: 20px 0px;">
                                            CARA SUKSES MENJADI COUPLEPRENEUR
                                        </div>
                                        <div style="font-size: 16px;line-height: 24px;color: #FD9519;">
                                            Workshop
                                            <div style="border: 1px solid #16056B; width: 90%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div style="    background: #FFFFFF;
                                    border: 1px solid #16056B;
                                    box-sizing: border-box;
                                    border-radius: 15px;
                                    padding:30px;
                                    width:101%;">
                                        <div class="krg">
                                            <div class="grid-4" style="margin: 0px 10px;">
                                                <div style="margin: 0px -15px;">
                                                    <div style="color: #16056B; font-weight: bold;">
                                                        Diselenggarakan oleh
                                                    </div>
                                                    <div style="display: flex;">
                                                        <div>
                                                            <img src="assets/img/logo.png" alt="" style="max-width:50px">
                                                        </div>
                                                        <div style="font-size: 14px;margin: 5px 0px 0px 5px;">
                                                            Ur Plan
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid-4">
                                                <div>
                                                    <div style="color: #16056B; font-weight: bold;">
                                                        Tanggal & Waktu
                                                    </div>
                                                    <div style="display: flex;">
                                                        <div>
                                                            <img src="assets/img/calendar.png" alt="">
                                                        </div>
                                                        <div style="font-size: 14px;margin: 5px 0px 0px 5px;">
                                                            18 Oktober 2020
                                                        </div>
                                                    </div>
                                                    <div style="display: flex;">
                                                        <div>
                                                            <img src="assets/img/clock.png" alt="">
                                                        </div>
                                                        <div style="font-size: 14px;margin: 5px 0px 0px 5px;">
                                                            15.00 - 17.30 WIB
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid-4">
                                                <div>
                                                    <div style="color: #16056B; font-weight: bold;">
                                                        Lokasi
                                                    </div>
                                                    <div style="display: flex;">
                                                        <div>
                                                            <img src="assets/img/map.png" alt="">
                                                        </div>
                                                        <div style="font-size: 14px;margin: 5px 0px 0px 5px;">
                                                            Event online
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
        </div>
        <div class="container2" style="background: #D9EBFF;">
            <div class="section"></div>
            <div class="wadah">
                <div class="baris">
                    <div class="grid-12">
                        <div>
                            <div class="label" style="text-align: center;margin: auto;">
                                DESKRIPSI
                            </div>
                            <div class="content-judul">
                                Deskripsi Event
                            </div>
                        </div>
                    </div>
                    <div class="grid-12" style="margin-bottom: 110px;">
                        <!-- <div style="font-weight: 600;
                        font-size: 16px;
                        line-height: 24px;
                        text-align: center;
                        color: #16056B;
                        padding: 20px;">
                            Deskripsi Event
                            <div style="background: #FD9519; width: 50px;height: 7px;background: #FD9519; border-radius: 10px; margin: auto;">
                            </div>
                        </div> -->
                        <div style="background-color: #ffffff; padding: 30px;">
                            <div>
                                INFO INI PENTING BANGET UNTUK KAMU PARA COUPLE MUDA, YANG SUDAH COUPLE ATAUPUN BELUM PUNYA COUPLE, INFO INI PENTING BANGET! <br><br>

                                Saya Adinda Amira, saya akan kasih tau kamu cara menjadi pasangan pengusaha hebat dan luar biasa! <br><br>
                                
                                Masa siii kamuu berpasangan masih pakai uang orang tua, malu dongg, ya kan? <br><br>
                                
                                Pasti dong ingin sekali mempunyai pasangan yang mempunyai bisnis, yaaa kann?? <br><br>
                                
                                Udahhh jangan kelamaan, ikutin webinar bareng saya! Exclusive banget, cuman 100 orang aja! Ga bakal rugi deh ikut webinar bareng saya. <br><br>
                                
                                Kenapa harus ikut webinar bareng saya?                                 
                                <div style=" display: flex;">
                                    <div><img src="assets/img/satu.png" alt=""></div>
                                    <div style="margin-left:20px;">
                                        Kamu pastinya akan mendapat insight pentingnya setiap pasangan mempunyai bisnis  
                                    </div>
                                </div>
                                <div style=" display: flex;">
                                    <div><img src="assets/img/dua.png" alt=""></div>
                                    <div style="margin-left:20px;">
                                        Kamu akan mendapat cara rahasia sukses menjadi pasangan pengusaha 
                                    </div>
                                </div>
                                <div style=" display: flex;">
                                    <div><img src="assets/img/tiga.png" alt=""></div>
                                    <div style="margin-left:20px;">
                                        Kamu akan mendapat relasi yang pastinya luar biasa banget deh  
                                    </div>
                                </div>
                                <div style=" display: flex;">
                                    <div><img src="assets/img/empat.png" alt=""></div>
                                    <div style="margin-left:20px;">
                                        Kamu bisa menginfakkan tenaga, fikiran, serta harta kamu di jalan Allah 
                                    </div>
                                </div>
                                <div style=" display: flex;">
                                    <div><img src="assets/img/lima.png" alt=""></div>
                                    <div style="margin-left:20px;">
                                       Kamu bisa dapet akses GRATIS! Mentoring Bisnis bersama Founder UR Plan secara intens untuk mengembangkan bisnis kamu hingga 12 bulan, modul modul mentoring bisa dilihat dibawah ini! Masyaa Allah!!! 
                                    </div>
                                </div>
                                <br><br>
                                MODUL MENTORING BISNIS BERSAMA FOUNDER UR PLAN 
                                <div style=" display: flex;">
                                    <div><img src="assets/img/satu.png" alt=""></div>
                                    <div style="margin-left:20px;">
                                        Mindset of Entrepreneur
                                    </div>
                                </div>
                                <div style=" display: flex;">
                                    <div><img src="assets/img/dua.png" alt=""></div>
                                    <div style="margin-left:20px;">
                                        Showing Idea, Innovation, and Creativity
                                    </div>
                                </div>
                                <div style=" display: flex;">
                                    <div><img src="assets/img/tiga.png" alt=""></div>
                                    <div style="margin-left:20px;">
                                        Creating Business Plan
                                    </div>
                                </div>
                                <div style=" display: flex;">
                                    <div><img src="assets/img/empat.png" alt=""></div>
                                    <div style="margin-left:20px;">
                                        Finding Strategies, Marketing, and Positioning a Business
                                    </div>
                                </div>
                                <div style=" display: flex;">
                                    <div><img src="assets/img/lima.png" alt=""></div>
                                    <div style="margin-left:20px;">
                                        Operational Aspect of Business
                                    </div>
                                </div>
                                <div style=" display: flex;">
                                    <div><img src="assets/img/enam.png" alt=""></div>
                                    <div style="margin-left:20px;">
                                         Financial Aspec of Business
                                    </div>
                                </div>
                                <div style=" display: flex;">
                                    <div><img src="assets/img/tujuh.png" alt=""></div>
                                    <div style="margin-left:20px;">
                                        Pitching Formula With Investors
                                    </div>
                                </div>
                                <div style=" display: flex;">
                                    <div><img src="assets/img/delapan.png" alt=""></div>
                                    <div style="margin-left:20px;">
                                        Implementation of Business Plan and Cashflow Strategy
                                    </div>
                                </div>
                                <div style=" display: flex;">
                                    <div><img src="assets/img/sembilan.png" alt=""></div>
                                    <div style="margin-left:20px;">
                                        Setting Your Business Goals
                                    </div>
                                </div>
                                <div style=" display: flex;">
                                    <div><img src="assets/img/sepuluh.png" alt=""></div>
                                    <div style="margin-left:20px;">
                                        Leadership Aspect
                                    </div>
                                </div>
                                <div style=" display: flex;">
                                    <div><img src="assets/img/sebelas.png" alt=""></div>
                                    <div style="margin-left:20px;">
                                        Teamwork Aspect
                                    </div>
                                </div>
                                <div style=" display: flex;">
                                    <div><img src="assets/img/duabelas.png" alt=""></div>
                                    <div style="margin-left:20px;">
                                        Negotiation Strategies With Business Partners
                                    </div>
                                </div>
                                <div style=" display: flex;">
                                    <div><img src="assets/img/tigabelas.png" alt=""></div>
                                    <div style="margin-left:20px;">
                                        Motivation Aspect
                                    </div>
                                </div>
                                <div style=" display: flex;">
                                    <div><img src="assets/img/empatbelas.png" alt=""></div>
                                    <div style="margin-left:20px;">
                                        Evaluation Business Plan
                                    </div>
                                </div>
                                
                                Masyaa Allah kan??? Udah jangan kebanyakan mikir, langsung action dehh! <br><br>
                                
                                Yuk klik Booking dibawah ini dan isi formulirnya dengan benar dan tepat! <br><br>
                                
                                Informasi lebih lanjut : <br>
                                IG : @ur_plan <br>
                                Hotline : 0877 3166 3744, atau 0859 6066 0747, atau 0859 6066 0748 <br>
                            </div>
                            <div class="section"></div>
                            <div>
                                <div style="font-weight: bold;">
                                    5 Langkah mudah untuk menjadi peserta Webinar Exclusive (CARA MENJALANI BISNIS UNTUK PEMULA)
                                </div>
                                <div style="margin-top: 20px;">
                                    <div style=" display: flex;">
                                        <div><img src="assets/img/satu.png" alt=""></div>
                                        <div style="margin-left:20px;">
                                            Kamu klik booking di bagian paling bawah pada halaman ini
                                        </div>
                                    </div>
                                    <div style=" display: flex;">
                                        <div><img src="assets/img/dua.png" alt=""></div>
                                        <div style="margin-left:20px;">
                                            Kamu mengisi formulir pendaftaran, lalu submit 
                                        </div>
                                    </div>
                                    <div style=" display: flex;">
                                        <div><img src="assets/img/tiga.png" alt=""></div>
                                        <div style="margin-left:20px;">
                                            Kamu bisa pilih paketmu
                                        </div>
                                    </div>
                                    <div style=" display: flex;">
                                        <div><img src="assets/img/empat.png" alt=""></div>
                                        <div style="margin-left:20px;">
                                            Kamu bisa melakukan pembayaran
                                        </div>
                                    </div>
                                    <div style=" display: flex;">
                                        <div><img src="assets/img/lima.png" alt=""></div>
                                        <div style="margin-left:20px;">
                                            Kamu berhasil menjadi peserta
                                        </div>
                                    </div>
                                    <div class="section"></div>
                                    <div>
                                        Yuk klik Booking dibawah ini dan isi formulirnya! 
                                        <br><br>
                                        Jadi jangan sampai salah yaa mengisi data diri dalam formulir
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="container3" style="background-color: #fff;">
            <div class="wadah">
                <div class="baris">
                    <div class="grid-12">
                        <div>
                            <div class="krg1" style="border: 1px solid #16056B;
                            box-sizing: border-box;
                            border-radius: 15px;
                            /* height: 137px; */
                            margin: 30px 0px;">
                                <div class="tgh" style="margin: 20px;">
                                    <img src="assets/img/Tiket.png" alt="">
                                </div>
                                <div style="margin: 40px;">
                                    <div style="text-align: center;
                                    color: #16056B;
                                    font-size: 20px;
                                    font-weight: bold;">
                                        CARA SUKSES MENJADI COUPLEPRENEUR
                                    </div>
                                    <div style="text-align: center;">
                                        Ayo booking sekarang juga dan dapatkan banyak benefitnya
                                    </div>
                                </div>
                                <div style="margin: 40px;">
                                    <div>
                                        <a href="FormulirIdentitas3.php">
                                            <div class="btn1">
                                                <button>Booking</button>
                                            </div>
                                        </a>
                                    </div>
                                </div>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
