<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Event</title>
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
            padding-top: 80px;
            padding-bottom: 80px;
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
            cursor: pointer;
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
        .button-label{
            background: #F3F3F3;
            opacity: 0.75;
            border-radius: 100px;
            text-align: center;
            width: 150px;
            height: 40px;
            padding-top: 7px;
            margin: 20px 40px;
            cursor: pointer;
        }
        .button-label:hover, .button-src button:hover{
            background-color: #16056B;
            color: #fff;
        }
        .search{
            border: 1px solid #16056B;
            /* width: 500px; */
            overflow-x: hidden;
            display: flex;
            border-radius: 50px;
            font-size: 18px;
            position: relative;
            margin-bottom: 30px;
    }
        .pdg{
            margin: auto;
            display: block;
        }
    .jdl{
        font-weight: 600;
        font-size: 64px;
        text-align: center;
        color: #16056B;
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
    .content-judul{
            font-weight: 600;
            font-size: 48px;
            color: #16056B;
        }
    .bnt{
        display: flex;
        margin-bottom: 30px;
        margin-top: 30px;
    }
    .krg {
        display: flex;
    }
    .krg1 {
        display: flex;
    }
    .search input{
        width: 300px;
        height:65px;
        border: none;
        padding: 8px 20px;
        outline: none;
        font-size: 18px;
       
    }
    .button-src{
        display: inline-block;
    }
    .button-src button{
        padding: 10px 35px 10px 35px;
        border-radius: 50px;
        border: none;
        margin: 9px 7px 0px 95px;
        background-color: #FD9519;
        color: #ffffff;
        font-size: 18px;
        cursor: pointer;
    }
        .dm{
            margin: 20px;
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
            .navbar .atas {
                font-size: 14px;
                margin: 0px 10px;
            }
            .button-src{
                margin: 0px 0px 0px 90px;
            }
            .content-judul{
                text-align: center;
            }
            .card{
                width: 250px;
                margin: auto;
            }
            .search{
                margin-bottom: 50px;
            }
            .bnt{
                margin: auto;
            }
            .krg{
                display: block;
                margin: auto;
            }
            .krg1{
                display: block;
                margin: auto;
                width: 525px;
            }
            .label{
                text-align: center;
                margin: auto;
                
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
            .search{
                margin: auto;
                width: 300px;
                height: 50px;
            }
            .search input {
                width: 300px;
                height: 50px;
                border: none;
                padding: 0px 20px;
                outline: none;
                font-size: 12px;
            }
            .button-src button {
                padding: 5px 15px 5px 15px;
                border-radius: 50px;
                border: none;
                margin: 11px 7px;
                background-color: #FD9519;
                color: #ffffff;
                font-size: 12px;
            }
            .card {
                margin: auto;
                display: block;
                margin-bottom: 30px;
            }
            .logo img{
                max-width: 70px;
            }
            .btn{
                margin-top: -70px;
            }
            .button-src{
                margin: 0px 0px 0px -90px;
            }
            .button-label{
                width: 120px;
                font-size: 12px;
                height: 35px;
            }
            .content-judul{
                text-align: center;
            }
            .bnt{
                margin: auto;
            }
            .krg{
                display: block;
                margin: auto;
            }
            .krg1{
                display: block;
                margin: auto;
                width: 525px;
            }
            .label{
                text-align: center;
                margin: auto;
                
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
            .konten-header{ 
                text-align: center;
                }
            .jdl{
                font-size: 50px;
            }
            .content-judul{
                font-size: 34px;
            }
            .search{
                width: 300px;
                margin: 35px;
            }
            .button-src {
                margin: 0px 0px 0px -80px;
            }
            .krg{
                display: block;
                margin: auto;
            }
            .card {
                width: 250px;
            }
            .bk img {
                width: 220px;
            }
            .button-label{
                width: 120px;
                font-size: 12px;
                height: 35px;
                margin: 20px 25px;
            }
            .bnt{
                margin: auto;
            }
            .search{
                width: 300px;
                height: 50px;
                margin-left: 20px;
            }
            .dm{
                margin: 0px;
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
                                        <li class="atas" style="font-weight: bold;">
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
                        <div class="konten-header">
                            <div>
                                <div class="jdl">
                                    Temukan event seru selanjutnya disini!
                                </div>
                            </div>
                        <div style="line-height: 36px;
                        text-align: center;
                        color: #16056B;
                        opacity: 0.5;">
                            Pilih dari kategori atau kata kunci dibawah ini untuk membantu kamu menemukan event impianmu
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container2">
            <div>
                <div class="section">
                </div>
            </div>
            <div class="wadah">
                <div class="baris">
                    <div class="grid-12">
                        <div class="label">
                            KATEGORI
                        </div>
                        <div class="content-judul">
                            Pilih kategori event
                        </div>
                    </div>
                    <div class="grid-12">
                        <div class="krg" style="margin: 30px 0px;">
                            <div class="krg">
                                <div style="margin: 30px 30px;">
                                    <div class="card">
                                        <div style="padding: 9px;">
                                            <div class="bk">
                                                <img src="assets/img/PublicSpeaking.png" alt="" style=" width: 230px;">
                                            </div>
                                            <div style="text-align: center;color: #16056B;">
                                                Public Speaking
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="margin: 30px 30px;">
                                    <div class="card">
                                        <div style="padding: 9px;">
                                            <div class="bk">
                                                <img src="assets/img/Leadership.png" alt="" style=" width: 230px;">
                                            </div>
                                            <div style="text-align: center;color: #16056B;">
                                                Leadership
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="krg">
                                <div style="margin: 30px 30px;">
                                    <div class="card">
                                        <div style="padding: 9px;">
                                            <div class="bk">
                                                <img src="assets/img/Bisnis.png" alt="" style=" width: 230px;">
                                            </div>
                                            <div style="text-align: center;color: #16056B;">
                                                Business
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="margin: 30px 30px;">
                                    <div class="card">
                                        <div style="padding: 9px;">
                                            <div class="bk">
                                                <img src="assets/img/Investasi.png" alt="" style=" width: 230px;">
                                            </div>
                                            <div style="text-align: center;color: #16056B;">
                                                Investment
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
        <div class="section" style="background: url(assets/img/bg1.png);
            background-repeat: no-repeat;
            margin-top: -130px;">
            </div>
            <div class="section">
            </div>
            <div class="container3">
                <div class="wadah">
                    <div class="baris">
                        <div style="margin: auto;">
                            <div class="label" style="margin: auto;">
                                KATA KUNCI
                            </div>
                            <div class="content-judul">
                                Temukan event dari kata kunci
                            </div>
                        </div>
                        <div class="pdg">
                            <div class="grid-12">
                                <div class="bnt">
                                    <div>
                                        <div class="krg">
                                            <div class="button-label">
                                                Semua Tanggal
                                            </div>
                                            <div class="button-label">
                                                Hari Ini
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="krg">
                                            <div class="button-label">
                                                Besok
                                             </div>
                                            <div class="button-label">
                                                Akhir pekan
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-12">
                                <div class="bnt" style="margin-top: -20px;">
                                    <div>
                                        <div class="krg">
                                            <div class="button-label">
                                                Minggu Ini
                                            </div>
                                            <div class="button-label">
                                                Minggu Depan
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="krg">
                                            <div class="button-label">
                                                Bulan Ini
                                             </div>
                                            <div class="button-label">
                                                Bulan Depan
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
            <!-- <div class="container4">
                <div class="wadah" style="background: url(assets/img/bg2.png);background-repeat: no-repeat;">
                    <div class="baris">
                        <div style="padding: 80px 0px;">
                            <div class="grid-12">
                                <div style="margin: 0px 15px;">
                                    <div class="label">
                                        LOKASI EVENT
                                    </div>
                                </div>
                            </div>
                            <div class="grid-12">
                                <div style="display: flex;">
                                    <div class="grid-3">
                                        <div style="font-weight: 600;
                                        font-size: 48px;
                                        line-height: 65px;
                                        color: #16056B;">
                                            Temukan event di kota lainnya
                                        </div>
                                    </div>
                                    <div class="grid-3">
                                        <div class="card2">
                                            <div style="padding: 9px;">
                                                <div>
                                                    <img src="assets/img/gambar4.png" alt="">
                                                </div>
                                                <div style="text-align: center;color: #16056B;">
                                                    Jakarta
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-3">
                                        <div class="card2">
                                            <div style="padding: 9px;">
                                                <div>
                                                    <img src="assets/img/gambar4.png" alt="">
                                                </div>
                                                <div style="text-align: center;color: #16056B;">
                                                    Jakarta
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-3">
                                        <div class="card2">
                                            <div style="padding: 9px;">
                                                <div>
                                                    <img src="assets/img/gambar4.png" alt="">
                                                </div>
                                                <div style="text-align: center;color: #16056B;">
                                                    Jakarta
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-12">
                                <div style="display: flex;margin: 30px 0px;">
                                    <div class="grid-3">
                                        <div class="card2">
                                            <div style="padding: 9px;">
                                                <div>
                                                    <img src="assets/img/gambar4.png" alt="">
                                                </div>
                                                <div style="text-align: center;color: #16056B;">
                                                    Jakarta
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-3">
                                        <div class="card2">
                                            <div style="padding: 9px;">
                                                <div>
                                                    <img src="assets/img/gambar4.png" alt="">
                                                </div>
                                                <div style="text-align: center;color: #16056B;">
                                                    Jakarta
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-3">
                                        <div class="card2">
                                            <div style="padding: 9px;">
                                                <div>
                                                    <img src="assets/img/gambar4.png" alt="">
                                                </div>
                                                <div style="text-align: center;color: #16056B;">
                                                    Jakarta
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-3">
                                        <div class="card2">
                                            <div style="padding: 9px;">
                                                <div>
                                                    <img src="assets/img/gambar4.png" alt="">
                                                </div>
                                                <div style="text-align: center;color: #16056B;">
                                                    Jakarta
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-12">
                                <div style="margin: 80px 490px;">
                                    <button style="background: #FD9519;
                                    border-radius: 100px;
                                    border: none;
                                    color: #ffffff;
                                    width: 130px;
                                    height: 40px;">Selengkapnya</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="container5">
                <div class="wadah">
                    <div class="baris">
                        <div style="margin: auto;">
                            <div class="label" style="margin: auto;">
                                TYPE EVENT
                            </div>
                            <div class="content-judul">
                                Admisi masuk
                            </div>
                        </div>
                        <div class="grid-12">
                            <div class="krg1">
                                <div class="dm">
                                    <div class="search">
                                        <input type="text"placeholder="Event berbayar">
                                        <div class="button-src">
                                            <button>Mulai</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="dm">
                                    <div class="search">
                                        <input type="text"placeholder="Event gratis">
                                        <div class="button-src">
                                            <button>Mulai</button>
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
            <div class="container6" style="background: #D9EBFF;">
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
                                                            <a href="index.php">
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