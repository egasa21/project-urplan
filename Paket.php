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
            margin: 20px;  
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
        .trbk {
            width: 260px;
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
   


    .tbl{
        font-weight: 600;
        font-size: 48px;
        line-height: 72px;
        color: #16056B;
    }
    .bnt{
        display: flex;
        margin-left: 45px;
        margin-bottom: 30px;
        margin-top: 30px;
    }
    .krg {
        display: flex;
    }
    .krg1 {
        display: flex;
        margin-left: 200px;
    }
    p {
        text-align: center;
        font-size: 60px;
        margin-top: 0px;
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
    .content-judul{
            font-weight: 600;
            font-size: 44px;
            line-height: 72px;
            color: #16056B;
            text-align: center;
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
        label, input{
	cursor: pointer;
}
       .txt{
           margin: 15px;
       }
/* img{
	max-width: 100%;
	
} */

.top-text-wrapper {
	margin: 20px 0 30px 0;
}
.top-text-wrapper h4{
	font-size: 24px;
  margin-bottom: 10px;
}
.top-text-wrapper code{
  font-size: .85em;
  background: linear-gradient(90deg,#fce3ec,#ffe8cc);
  color: #ff2200;
  padding: .1rem .3rem .2rem;
  border-radius: .2rem;
}
.tab-section-wrapper{
  padding: 30px 0;
}
        /* ******************* Selection Radio Item */
.selection-wrapper{
  margin: 5px;
}
.selected-content{
	text-align: center;
	border-radius: 3px;
    box-shadow: 0 2px 6px 0 rgba(28,29,29,.25);
  border: solid 2px transparent;
	background: #fff;
	height: 330px;
	padding: 15px;
	place-content: center;
	transition: .3s ease-in-out all;
}

.selected-content img {
    
		margin: 0 auto;
}
.selected-content h4 {
	font-size: 16px;
  letter-spacing: -0.24px;
  text-align: center;
  color: #1f2949;
}
.selected-content h5 {
	font-size: 14px;
  line-height: 1.4;
  text-align: center;
  color: #686d73;
}

.selected-label{
	position: relative;
}
.selected-label input{
	display: none;
}
.selected-label .icon{
	width: 20px;
  height: 20px;
  border: solid 2px #e3e3e3;
	border-radius: 50%;
	position: absolute;
	top: 15px;
	left: 15px;
	transition: .3s ease-in-out all;
	transform: scale(1);
	z-index: 1;
}
    .don{
        font-weight: 600;
        font-size: 18px;
        line-height: 27px;
        color: #000000;
        border: 5px solid #FF883B;
        border-top: none;
        border-right: none; 
        border-left: none;
    }
/* .selected-label .icon:before{
	content: "\f00c";
	position: absolute;
	width: 100%;
	height: 100%;
	font-family: "Font Awesome 5 Free";
	font-weight: 900;
	font-size: 12px;
	color: #000;
	text-align: center;
	opacity: 0;
	transition: .2s ease-in-out all;
	transform: scale(2);
} */
.selected-label input:checked + .icon{
	background: #16056b;
	border-color: #16056b;
	transform: scale(1.2);
}

.selected-label input:checked ~ .selected-content{
  box-shadow: 0 2px 4px 0 rgba(219, 215, 215, 0.5);
  border: solid 2px #16056b;
}
    .maw{
        display: flex;
        font-size: 14px;
    }
    .waw{
        width: 260px;
    height: 57px;
    /* left: 403px; */
    top: -35px;
    color: #fff;
    font-size: 20px;
    font-weight: bold;
    text-align: center;
    background: #FD9519;
    border-radius: 15px;
    position: absolute;
    }
    .cf{
        background: #FFFFFF;
        border: 1px solid #E5E5E5;
        box-sizing: border-box;
        border-radius: 10px;
        width: 160px;
        height: 60px;
    }
    .cm{
        border-right: 2px solid #F3F3F3;
    }
    .bwh1{
        height: 570px;
    }
    .bwh2{
        height: 780px;
    }
    .bwh3{
        height: 990px;
    }
    .bwh4{
        height: 1150px;
    }
    .tghe{
        width: 230px; 
        margin: auto; 
        display: block;
    }
    .kri{
        margin-left: 30px;
        display: flex;
    }
/* .cf{
    background: #3057d5;
	border-color: #3057d5;
	transform: scale(1.2);
}
.cf {
    box-shadow: 0 2px 4px 0 rgba(219, 215, 215, 0.5);
    border: solid 2px #3057d5;
} */

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
            .logo img{
            max-width: 70px;
            }
            .krg{
                display: block;
                margin: auto;
            }
            .cm{
                border: none;
            }
            .krg1{
                display: block;
                margin: auto;
            }
            .label{
                text-align: center;
                margin: auto;
                margin-left: 185px;
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
            .tbl{
                text-align: center;
            }
            .bnt{
                margin: auto;
            }
            .krg{
                display: block;
                margin: auto;
                font-size: 12px;
            }
            
            .selected-label .icon1{
                margin: 0px;
            }
            .txt{
                margin: 5px;
                font-size: 10px;
            }
            .cm{
                border: none;
            }
            .label{
                text-align: center;
                margin: auto;
                margin-left: 185px;
            }
            .don{
                font-size: 14px;
            }
            .footer-content{
                display: block;
            }
            .selection-wrapper {
                margin: 60px;
            }
            .cf img{
                max-width: 100px;
            }
        }
        @media screen and (max-width: 400px){
            .logo img {
                    max-width: 50px;
            }
            .txt{
                margin: 5px;
                font-size: 10px;
            }
            .selected-label .icon1{
                margin: 0px;
            }
            .navbar{
                margin-top: -60px;
                margin-left: -60px;
            }
            .navbar .atas{
                font-size: 10px;
                margin: 20px 10px;
                
            }
            .bwh1{
                height: 640px;
            }
            .bwh2{
                height: 930px;
            }
            .bwh3{
                height: 1200px;
            }
            .bwh4{
                height: 1440px;
            }
            .kri{
                margin-left: 0px;
                display: flex;
            }
            .topmrgn{
                margin-top: 15px;
            }
            .tghe{
                width: 200px; 
                margin: auto; 
                display: block;
            }
            .waw{
                width: 272px;
                top: 650px;
                position: absolute;
            }
            .trbk {
                width: 210px;
                margin-top: 30px;
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
                        <a href="Beranda.html">
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
                        <div style="margin: 50px;">
                            <div style="border: 1px solid #16056b;
                                        box-sizing: border-box;
                                        border-radius: 10px;
                                        height: 55px;
                                        display: flex;">
                                <div style="width: 260px;
                                            font-size: 35px;
                                            border-radius: 10px;
                                            background-color: #16056b;
                                            color: #fff;">
                                        <p style=" font-size: 20px; margin: 13px;" id="timer"></p>
                                </div>
                                <div class="txt">
                                    <div>
                                        selesaikan pesanan kamu segera
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container2">
            <div class="wadah">
                <div class="baris">
                    <div class="grid-12">
                        <div>
                            <div class="label" style="text-align: center;margin: auto;">
                                PEMBAYARAN
                            </div>
                            <div class="content-judul">
                                Pilih Paket Pembayaran
                            </div>
                        </div>
                    </div>
                    <div class="section"></div>
                    <div class="grid-12">

                   
                        <form action="add-paket.php" method="POST">
                            <div class="krg"  style="margin-top: 50px;">
                                <div class="selection-wrapper">
                                  <label for="selected-item-1" class="selected-label">
                                    <input type="radio" name="paket" value="bronze"  id="selected-item-1">
                                  
                                    <span class="icon"></span>
                                    
                                    <div class="selected-content bwh1" >
                                        <div>
                                            <div style="font-weight: bold;
                                        font-size: 20px; 
                                        text-align: center;                                   
                                        color: #16056B;">
                                            Paket Bronze                                      
                                        </div>
                                        <div style="text-align: center; font-size: 12px;">
                                            Cocok Untuk Pemula
                                        </div>
                                        </div>
                                        <div class="kri">
                                            <div>
                                                <img src="assets/img/diss1.png" alt="">
                                            </div>
                                            <div>
                                                <img src="assets/img/diss1.1.png" alt="">
                                            </div>
                                        </div>
                                        <div>
                                            <div style="font-weight: bold;
                                            font-size: 24px;
                                            text-align: center;                                   
                                            color: #16056B;">
                                                Rp.49.000
                                            </div>
                                        </div>
                                        <div style="margin-top:20px;">
                                            <div class="maw">
                                                <div><img src="assets/img/Ceklis.png" alt=""></div>
                                                <div style="text-align: initial;">Bisa berdonasi</div>
                                            </div>
                                            <div class="maw">
                                                <div><img src="assets/img/Ceklis.png" alt=""></div>
                                                <div style="text-align: initial;">Bisa mengikuti webinar bersama
                                                    Syakir Daulay</div>
                                            </div>
                                            <div class="maw">
                                                <div><img src="assets/img/Ceklis.png" alt=""></div>
                                                <div style="text-align: initial;">Bisa berpeluang mendapatkan doorprize 
                                                    dari Syakir Daulay</div>
                                            </div>
                                            <div class="maw">
                                                <div><img src="assets/img/Ceklis.png" alt=""></div>
                                                <div style="text-align: initial;">Bisa mendapat akses gratis untuk 
                                                    Mentoring Bisnis Regular bersama Founder 
                                                    dari UR Plan selama satu bulan</div>
                                            </div>
                                            <div class="maw">
                                                <div><img src="assets/img/Ceklis.png" alt=""></div>
                                                <div style="text-align: initial;">Bisa mendapat 2 modul Mentoring 
                                                    Bisnis diantaranya : <br>
                                                    ●  Mindset of Entrepreneur <br>
                                                    ●  Showing Idea, Innovation, and  <br>
                                                    ●  Creativity </div>
                                            </div>                                        
                                        </div>
                                        <!-- <button class="bn" name="selected-item" id="selected-item-1">Pilih Paket</button> -->
                                    </div>
                                    
                                  </label>
                                </div>
                                <div class="selection-wrapper" style="margin-top: -72px;">
                                    <div>
                                        <img src="assets/img/Pilihanterbaik.png" class="trbk" alt="">
                                    </div>
                                  <label for="selected-item-2" class="selected-label">
                                    <input type="radio" checked name="paket" value="silver"  id="selected-item-2">
                                    <span class="icon"></span>
                                    <div class="selected-content bwh2" >
                                        <div>
                                            <div style="font-weight: bold;
                                        font-size: 20px; 
                                        text-align: center;                                   
                                        color: #16056B;">
                                            Paket Silver                                      
                                        </div>
                                        <div style="text-align: center; font-size: 12px;">
                                            Cocok Untuk Memulai Bisnis
                                        </div>
                                        </div>
                                        <div class="kri">
                                            <div>
                                                <img src="assets/img/diss2.png" alt="">
                                            </div>
                                            <div>
                                                <img src="assets/img/diss2.2.png" alt="">
                                            </div>
                                        </div>
                                        <div>
                                            <div style="font-weight: bold;
                                            font-size: 24px;
                                            text-align: center;                                   
                                            color: #16056B;">
                                                Rp.89.000
                                            </div>
                                        </div>
                                        <div style="margin-top:20px;">
                                            <div class="maw">
                                                <div><img src="assets/img/Ceklis.png" alt=""></div>
                                                <div style="text-align: initial;">Bisa berdonasi</div>
                                            </div>
                                            <div class="maw">
                                                <div><img src="assets/img/Ceklis.png" alt=""></div>
                                                <div style="text-align: initial;">Bisa mengikuti webinar bersama
                                                    Syakir Daulay</div>
                                            </div>
                                            <div class="maw">
                                                <div><img src="assets/img/Ceklis.png" alt=""></div>
                                                <div style="text-align: initial;">Bisa berpeluang mendapatkan doorprize 
                                                    dari Syakir Daulay)</div>
                                            </div>
                                            <div class="maw">
                                                <div><img src="assets/img/Ceklis.png" alt=""></div>
                                                <div style="text-align: initial;">Bisa mendapat eksklusif e-sertifikat 
                                                    webinar bersama Syakir Daulay</div>
                                            </div>
                                            <div class="maw">
                                                <div><img src="assets/img/Ceklis.png" alt=""></div>
                                                <div style="text-align: initial;">Bisa mendapat akses gratis untuk
                                                    Mentoring Bisnis Intens bersama Founder
                                                    dari UR Plan selama tiga bulan</div>
                                            </div>
                                            <div class="maw">
                                                <div><img src="assets/img/Ceklis.png" alt=""></div>
                                                <div style="text-align: initial;">Bisa mendapat 6 modul Mentoring 
                                                    Bisnis diantaranya :<br>
                                                    ●  Mindset of Entrepreneur <br>
                                                    ●  Showing Idea, Innovation, and 
                                                     Creativity <br>
                                                    ●   Creating Business Plan <br>
                                                    ●   Finding Strategies, Marketing, and 
                                                    Positioning a Business <br>
                                                    ●   Operational Aspect of Business <br>
                                                    ●   Financial Aspec of Business <br>
                                                 </div>
                                            </div>
    
                                            
                                        </div>
                                    </div>
                                  </label>
                                </div>
                                <div class="selection-wrapper">
                                    <label for="selected-item-3" class="selected-label">
                                      <input type="radio" checked name="paket" id="selected-item-3" value="gold" >
                                      <span class="icon"></span>
                                      <div class="selected-content bwh3" >
                                          <div>
                                              <div style="font-weight: bold;
                                          font-size: 20px; 
                                          text-align: center;                                   
                                          color: #16056B;">
                                              Paket Gold                                      
                                          </div>
                                          <div style="text-align: center; font-size: 12px;">
                                            Cocok Untuk Mengembangkan Bisnis
                                          </div>
                                          </div>
                                          <div class="kri">
                                              <div>
                                                  <img src="assets/img/diss3.png" alt="">
                                              </div>
                                              <div>
                                                  <img src="assets/img/diss3.3.png" alt="">
                                              </div>
                                          </div>
                                          <div>
                                              <div style="font-weight: bold;
                                              font-size: 24px;
                                              text-align: center;                                   
                                              color: #16056B;">
                                                  Rp.169.000
                                              </div>
                                          </div>
                                          <div style="margin-top:20px;">
                                              <div class="maw">
                                                  <div><img src="assets/img/Ceklis.png" alt=""></div>
                                                  <div style="text-align: initial;">Bisa berdonasi</div>
                                              </div>
                                              <div class="maw">
                                                  <div><img src="assets/img/Ceklis.png" alt=""></div>
                                                  <div style="text-align: initial;">Bisa mengikuti webinar bersama
                                                      Syakir Daulay</div>
                                              </div>
                                              <div class="maw">
                                                  <div><img src="assets/img/Ceklis.png" alt=""></div>
                                                  <div style="text-align: initial;">Bisa berpeluang mendapatkan doorprize 
                                                      dari Syakir Daulay</div>
                                              </div>
                                                <div class="maw">
                                                    <div><img src="assets/img/Ceklis.png" alt=""></div>
                                                    <div style="text-align: initial;">Bisa mendapat eksklusif e-sertifikat 
                                                        webinar bersama Syakir Daulay</div>
                                                </div>
                                                </div>
                                              <div class="maw">
                                                  <div><img src="assets/img/Ceklis.png" alt=""></div>
                                                  <div style="text-align: initial;">Bisa mendapat emas Minigold Exclusive 
                                                    24K dengan bobot 0,05 gram, belum
                                                    termasuk biaya ongkos kirim</div>
                                              </div>
                                              <div class="maw">
                                                <div><img src="assets/img/Ceklis.png" alt=""></div>
                                                <div style="text-align: initial;">Bisa mendapat akses gratis untuk 
                                                    Mentoring Bisnis Super Intens bersama 
                                                    Founder dari UR Plan selama enam bulan 
                                                    </div>
                                            </div>
                                              <div class="maw">
                                                  <div><img src="assets/img/Ceklis.png" alt=""></div>
                                                  <div style="text-align: initial;">Bisa mendapat 8 modul Mentoring
                                                    Bisnis diantaranya :<br>
                                                      ●  Mindset of Entrepreneur <br>
                                                      ●  Showing Idea, Innovation, and 
                                                        Creativity <br>
                                                      ● Creating Business Plan <br>
                                                      ● Finding Strategies, Marketing, and 
                                                      Positioning a Business <br>
                                                      ● Operational Aspect of Business <br>
                                                      ● Financial Aspec of Business <br>
                                                      ● Pitching Formula With Investors <br>
                                                      ● Implementation of Business Plan and 
                                                      Cashflow Strategy <br> 
                                                   </div>    
                                              </div>      
                                        </div>
                                    </label>
                                </div>                        
                                <div class="selection-wrapper">
                                        <label for="selected-item-4" class="selected-label">
                                          <input type="radio" checked name="paket" value="Platinum" id="selected-item-4">
                                          <span class="icon"></span>
                                          <div class="selected-content bwh4">
                                            <div class="topmrgn">
                                                <div style="font-weight: bold;
                                            font-size: 20px; 
                                            text-align: center;                                   
                                            color: #16056B;">
                                                Paket Platinum                                      
                                            </div>
                                            <div style="text-align: center; font-size: 12px;">
                                                Cocok Untuk Menduplikasi Bisnis
                                            </div>
                                            </div>
                                            <div class="kri">
                                                <div>
                                                    <img src="assets/img/diss4.png" alt="">
                                                </div>
                                                <div>
                                                    <img src="assets/img/diss4.4.png" alt="">
                                                </div>
                                            </div>
                                            <div>
                                                <div style="font-weight: bold;
                                                font-size: 24px;
                                                text-align: center;                                   
                                                color: #16056B;">
                                                    Rp.429.000
                                                </div>
                                            </div>
                                            <div style="margin-top:20px;">
                                                <div class="maw">
                                                    <div><img src="assets/img/Ceklis.png" alt=""></div>
                                                    <div style="text-align: initial;">Bisa berdonasi</div>
                                                </div>
                                                <div class="maw">
                                                    <div><img src="assets/img/Ceklis.png" alt=""></div>
                                                    <div style="text-align: initial;">Bisa mengikuti webinar bersama
                                                        Syakir Daulay</div>
                                                </div>
                                                <div class="maw">
                                                    <div><img src="assets/img/Ceklis.png" alt=""></div>
                                                    <div style="text-align: initial;">Bisa berpeluang mendapatkan doorprize 
                                                        dari Syakir Daulay</div>
                                                </div>
                                                  <div class="maw">
                                                      <div><img src="assets/img/Ceklis.png" alt=""></div>
                                                      <div style="text-align: initial;">Bisa mendapat eksklusif e-sertifikat 
                                                          webinar bersama Syakir Daulay</div>
                                                  </div>
                                                  </div>
                                                <div class="maw">
                                                    <div><img src="assets/img/Ceklis.png" alt=""></div>
                                                    <div style="text-align: initial;">Bisa mendapat emas Minigold Exclusive 
                                                      24K dengan bobot 0,25 gram, belum
                                                      termasuk biaya ongkos kirim</div>
                                                </div>
                                                <div class="maw">
                                                  <div><img src="assets/img/Ceklis.png" alt=""></div>
                                                  <div style="text-align: initial;">Bisa mendapat akses gratis untuk 
                                                    Mentoring Bisnis Special bersama Founder 
                                                    dari UR Plan selama enam bulan
                                                      </div>
                                              </div>
                                                <div class="maw">
                                                    <div><img src="assets/img/Ceklis.png" alt=""></div>
                                                    <div style="text-align: initial;">Bisa mendapat 12 modul + 2 modul 
                                                        Mentoring Bisnis diantaranya :<br>
                                                        ●  Mindset of Entrepreneur <br>
                                                        ●  Showing Idea, Innovation, and 
                                                          Creativity <br>
                                                        ● Creating Business Plan <br>
                                                        ● Finding Strategies, Marketing, and 
                                                        Positioning a Business <br>
                                                        ● Operational Aspect of Business <br>
                                                        ● Financial Aspec of Business <br>
                                                        ● Pitching Formula With Investors <br>
                                                        ● Implementation of Business Plan and 
                                                        Cashflow Strategy <br>
                                                        ● Setting Your Business Goals <br>
                                                        ● Leadership Aspect <br>
                                                        ● Teamwork Aspect <br>
                                                        ● Negotiation Strategies With Business
                                                        Partners <br> 
                                                        ● Motivation Aspect <br>
                                                        ● Evaluation Business Plan<br>  
                                                    </div>
                                                </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div style="margin: 40px;"><input style="background: #FD9519;
                                border-radius: 40px;
                                border: none;
                                color: #fff;
                                padding: 10px;
                                width: 40%;
                                margin: auto;
                                display: block;" type="submit" name="simpan" value="Next"></div>
                            <div class="don">
                                Uang yang dikumpulkan dari total pembayaran, 100% akan disalurkan untuk
                                Pengembangan Yayasan UR Plan, dan 5 Ranah Penyaluran lainnya seperti terlampir dibawah ini
                            </div>
                            <div class="section">
                                
                            </div>
                            <div>
                                <div class="label" style="text-align: center;margin: auto;">
                                    PENYALURAN
                                </div>
                                <div class="content-judul">
                                    Ranah-Ranah Penyaluran Donasi
                                </div>
                            </div>
                            <div class="krg">
                                <div style="margin: 30px 40px;">
                                    <div class="card">
                                        <div style="padding: 9px;">
                                            <div class="bk">
                                                <img src="assets/img/Sedekah.png" alt="" class="tghe">
                                            </div>
                                            <div style="text-align: center;color: #16056B;">
                                                Sedekah On The Road
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="margin: 30px 40px;">
                                    <div class="card">
                                        <div style="padding: 9px;">
                                            <div class="bk">
                                                <img src="assets/img/Biayapendidikan.png" alt="" class="tghe">
                                            </div>
                                            <div style="text-align: center;color: #16056B;">
                                                Biaya Pendidikan
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="margin: 30px 40px;">
                                    <div class="card">
                                        <div style="padding: 9px;">
                                            <div class="bk">
                                                <img src="assets/img/BantuanKesehatan.png" alt="" class="tghe">
                                            </div>
                                            <div style="text-align: center;color: #16056B;">
                                                Bantuan Kesehatan
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="krg1">
                                <div style="margin: 30px 40px;">
                                    <div class="card">
                                        <div style="padding: 9px;">
                                            <div class="bk">
                                                <img src="assets/img/Terkenamusibah.png" alt="" class="tghe">
                                            </div>
                                            <div style="text-align: center;color: #16056B;">
                                                Terkena Musibah
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="margin: 30px 40px;">
                                    <div class="card">
                                        <div style="padding: 9px;">
                                            <div class="bk">
                                                <img src="assets/img/Waqaf.png" alt="" class="tghe ">
                                            </div>
                                            <div style="text-align: center;color: #16056B;">
                                                Waqaf Al-Qur’an
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </form>
                     
                        
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
    <script>
         var count = 900;
       var counter = setInterval(timer, 1000);
       function timer() {
           count = count - 1;
           if (count == -1) {
               clearInterval(counter);
               return;
           }
       
           var seconds = count % 60;
           var minutes = Math.floor(count / 60);
           var hours = Math.floor(minutes / 60);
           minutes %= 60;
           hours %= 60;
       
           document.getElementById("timer").innerHTML = hours + ":" + minutes + ":" + seconds  ;
       }
        var timer = setTimeout(function(){
           window.location='FormulirIdentitas.php'
       }, 900000);
       </script>
</body>
</html>