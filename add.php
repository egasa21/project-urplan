<?php

include "config.php"; // Using database connection file here

if(isset($_POST["submit"]))
{

    $daftar_ekstensi = array("bmp","jpg","gif","png","jpeg");
    $var1 = rand(1111,9999);  // generate random number in $var1 variable
    $var2 = rand(1111,9999);  // generate random number in $var2 variable
	
    $var3 = $var1.$var2;  // concatenate $var1 and $var2 in $var3
    $var3 = md5($var3);   // convert $var3 using md5 function and generate 32 characters hex number

    $fnm = $_FILES["image"]["name"];    // get the image name in $fnm variable
    $dst = "./all_images/".$var3.$fnm;  // storing image path into the {all_images} folder with 32 characters hex number and file name
    $dst_db = "all_images/".$var3.$fnm; // storing image path into the database with 32 characters hex number and file name
    $ekstensi = end(explode(".", $fnm));

      // move image into the {all_images} folder with 32 characters hex number and image name
	
   
    
    if(in_array($ekstensi,$daftar_ekstensi)){
        if(move_uploaded_file($_FILES["image"]["tmp_name"],$dst)){
            $check = mysqli_query($db,"insert into bukti(fname,images) values('$_POST[fname]','$dst_db')");  // executing insert query
        }else{
            echo '<script type="text/javascript"> alert("Error Uploading Data!"); </script>';  // when error occur
        }
    }
  
}
?>

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
    }
    p {
        display: inline-block;
          margin: 0;
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
.selection-wrapper:hover{
    transform: scale(0.9);
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
.selected-label .icon1{
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
    margin: -20px 0px;
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
	background: #3057d5;
	border-color: #3057d5;
	transform: scale(1.2);
}
.selected-label input:checked + .icon1{
	background: #3057d5;
	border-color: #3057d5;
	transform: scale(1.2);
}
.selected-label input:checked ~ .selected-content{
  box-shadow: 0 2px 4px 0 rgba(219, 215, 215, 0.5);
  border: solid 2px #3057d5;
}
    .maw{
        display: flex;
        font-size: 14px;
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
                width: 525px;
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
                font-size: 14px;
                margin: 20px 10px;
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
        <div class="container4" style="background: #D9EBFF;">
            <div class="wadah">
                <div class="baris">
                    <div class="grid-12" style="margin-bottom: 110px;">
                        <div style="background-color: #ffffff; padding: 30px;margin-top: 65px;">
                            <div class="krg">
                                <div class="grid-12">
                                    <div>
                                        <div>
                                            <div style="font-weight: 500;
                                            font-size: 22px;
                                            line-height: 33px;
                                            color: #16056B;">
                                                Detail
                                            </div>
                                                <div style="display: flex;">
                                                    <div class="grid-8">
                                                        <div style=" display: flex;">
                                                            <div><img src="assets/img/satu.png" alt=""></div>
                                                            <div style="margin-left:20px;">
                                                                Memilih event di UR Plan
                                                            </div>
                                                        </div>
                                                        <div style=" display: flex;">
                                                            <div><img src="assets/img/dua.png" alt=""></div>
                                                            <div style="margin-left:20px;">
                                                                Mengisi informasi data diri
                                                            </div>
                                                        </div>
                                                        <div style=" display: flex;">
                                                            <div><img src="assets/img/tiga.png" alt=""></div>
                                                            <div style="margin-left:20px;">
                                                                Melakukan pembayaran
                                                            </div>
                                                        </div>
                                                        <div style=" display: flex;">
                                                            <div><img src="assets/img/empat.png" alt=""></div>
                                                            <div style="margin-left:20px;">
                                                                Silahkan cek email untuk mendapatkan informasi tautan grup whatsapp dan/atau tautan zoom meeting
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="grid-4">
                                                        <div>
                                                            <div style="text-align: center;
                                                            font-size: 20px;
                                                            border-radius: 10px;
                                                            background-color: #1EFD19;
                                                            color: #fff;
                                                            margin-bottom: 10px;">
                                                                Sudah
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div style="text-align: center;
                                                            font-size: 20px;
                                                            border-radius: 10px;
                                                            background-color: #1EFD19;
                                                            color: #fff;
                                                            margin-bottom: 10px;">
                                                                Sudah
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div style="text-align: center;
                                                            font-size: 20px;
                                                            border-radius: 10px;
                                                            background-color: #1EFD19;
                                                            color: #fff;
                                                            margin-bottom: 10px;">
                                                                Sudah
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div style="text-align: center;
                                                            font-size: 20px;
                                                            border-radius: 10px;
                                                            background-color: #FD9519;
                                                            color: #fff;">
                                                                Proses
                                                                <p id="timer"></p>
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
    <script>
         var count = 600;
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
    </script>
</body>
</html>