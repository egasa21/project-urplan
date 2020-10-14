<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cara membayar teller bank</title>
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
            padding-top: 40px;
            padding-bottom: 40px;
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
        .button-label{
            background: #F3F3F3;
            opacity: 0.75;
            border-radius: 100px;
            text-align: center;
            width: 150px;
            height: 40px;
            padding-top: 7px;
        }
        .search{
            border: 1px solid #16056B;
            /* width: 500px; */
            overflow-x: hidden;
            display: flex;
            border-radius: 50px;
            font-size: 18px;
            position: relative;
    }
    .grs{
        border: 3px solid #16056B;
        border-top: 0px;
        border-right: 0px;
        border-left: 0px;
        width: 80%;
    }
    .grs1{
        border: 3px solid #16056B;
        border-top: 0px;
        border-right: 0px;
        border-left: 0px;
        width: 80%;
    }
    .bg{
        background-color: #fff;
        border: 1px solid #16056B;
        box-sizing: border-box;
        border-radius: 10px;
        padding: 20px;
        width: 80%;
    }
    .jdl{
        font-weight: 600;
        font-size: 64px;
        line-height: 96px;
        color: #16056B;
        text-align: center;
    }
    .optn{
        padding: 10px;
        background: #F3F3F3;
        opacity: 0.75;
        border-radius: 30px;
        width: 100%;
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
    .btn3 input{
        background: #FD9519;
        border-radius: 40px;
        border: none;
        color: #fff;
        padding: 20px;
        width: 40%;
        margin: 30px;
    }
    .btn3 input:hover{
            background-color: #16056B;
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
        @media screen and (max-width: 767px) {
            .konten-header{
                text-align: center;
            }
            .navbar{
                margin-top: -60px;
                margin-left: -60px;
            }
            .logo img{
                max-width: 70px;
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
        }
        @media screen and (max-width: 575px){
            .head {
                font-size: 12px;
            }
            .konten-header{
                text-align: center;
            }
            .navbar{
                margin-top: -60px;
                margin-left: -50px;
            }
            .jdl{
                font-size: 50px;
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
            .jdl{
                font-size: 50px;
            }
            .btn{
                margin-top: -70px;
            }
            .btn2{
                width: 70px;
                height: 40px;
                margin-top: 22px;
            }
            .logo img {
                    max-width: 50px;
            }
            .kiri{
                margin-left: 5px;
            }
            form{
                font-size: 10px;
            }
            .footer-content{
                display: block;
            }
            .grs1{
                border: 2px solid #16056B;
                border-top: 0px;
                border-right: 0px;
                border-left: 0px;
                width: 75%;
            }
            .grs{
                border: 2px solid #16056B;
                border-top: 0px;
                border-right: 0px;
                border-left: 0px;
            }
            #datemin{
                font-size: 10px;
            }
            .bg{
                padding: 5px;
                width: 80%;
            }
            .optn{
                padding: 0px;
                width: 100%;
                font-size: 10px;
            }
            .btn3 input{
                padding: 5px;
                width: 30%;
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
    <div class="wadah-semua"  style="background-color: #D9EBFF; ">
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
                                        <li class="atas">
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
                        <div class="jdl">
                            Cara Pembayaran
                        </div>
                        <div style="font-size: 20px;
                        line-height: 36px;
                        /* identical to box height, or 180% */
                        text-align: center;
                        color: #16056B;
                        opacity: 0.5;">
                            Bagaimana Cara Membayar melalui Mbanking?
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section"></div>
        <div class="container2">
            <div class="wadah">
                <div class="baris">
                    <div class="grid-12">
                        <div style="background-color: #ffffff;">
                            <div style="margin: 20px 0px 0px 15px;display: block">
                                <div class="grid-12" style="padding: 20px;">
                                    Cara mentransfer uang mentransfer uang melalui Mbanking <br><br>
                                    <div style=" display: flex;">
                                        <div><img src="assets/img/satu.png" alt=""></div>
                                        <div style="margin-left:20px;">
                                            Yang pertama, anda harus mempunyai aplikasi mbanking terlebih dahulu.
                                        </div>
                                    </div>
                                    <div style=" display: flex;">
                                        <div><img src="assets/img/dua.png" alt=""></div>
                                        <div style="margin-left:20px;">
                                            Lalu buka aplikasi mbanking anda
                                        </div>
                                    </div>
                                    <div style=" display: flex;">
                                        <div><img src="assets/img/tiga.png" alt=""></div>
                                        <div style="margin-left:20px;">
                                            Pilih menu “m-Banking Anda” di ponsel anda dan tekan OK/YES 
                                        </div>
                                    </div>
                                    <div style=" display: flex;">
                                        <div><img src="assets/img/empat.png" alt=""></div>
                                        <div style="margin-left:20px;">
                                            Lalu pilih menu “m-Transfer” dan tekan OK/YES
                                        </div>
                                    </div>
                                    <div style=" display: flex;">
                                        <div><img src="assets/img/lima.png" alt=""></div>
                                        <div style="margin-left:20px;">
                                            Pilih menu “Antar Bank” untuk transfer ke lain bank dan tekan OK/YES. Dan jika ingin transfer ke sesama Bank, pilih menu "Sesama Bank"
                                        </div>
                                    </div>
                                    <div style=" display: flex;">
                                        <div><img src="assets/img/enam.png" alt=""></div>
                                        <div style="margin-left:20px;">
                                            Masukkan kode bank tujuan anda, jika transfer berbeda bank. Dan tekan OK/YES
                                        </div>
                                    </div>
                                    <div style=" display: flex;">
                                        <div><img src="assets/img/tujuh.png" alt=""></div>
                                        <div style="margin-left:20px;">
                                            Masukkan nomor rekening bank tujuan anda dan tekan OK/YES yaitu ke no rekening ini  Bank BNI (kode bank 009) No.Rek 0899111480 
                                            A.n Abdul Rozzak Junaidi
                                        </div>
                                    </div>
                                    <div style=" display: flex;">
                                        <div><img src="assets/img/delapan.png" alt=""></div>
                                        <div style="margin-left:20px;">
                                            Masukkan nominal uang yang akan ditransfer
                                        </div>
                                    </div>
                                    <div style=" display: flex;">
                                        <div><img src="assets/img/sembilan.png" alt=""></div>
                                        <div style="margin-left:20px;">
                                            Selanjutnya, masukkan PIN m-Banking anda
                                        </div>
                                    </div>
                                    <div style=" display: flex;">
                                        <div><img src="assets/img/sepuluh.png" alt=""></div>
                                        <div style="margin-left:20px;">
                                            Lalu konfirmasi data anda, pastikan semua data yang anda masukkan sudah benar 
                                            semua. Jika sudah, tekan OK/YES dan masukkan nomor PIN m-Banking anda. Lalu 
                                            tekan OK/YES
                                        </div>
                                    </div>
                                    <div style=" display: flex;">
                                        <div><img src="assets/img/sebelas.png" alt=""></div>
                                        <div style="margin-left:20px;">
                                            Transfer berhasil 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container3" style="background: #D9EBFF;">
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