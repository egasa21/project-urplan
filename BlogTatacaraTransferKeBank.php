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
                            Halloooo guys, apa kabarrr?? Semoga kalian sehat dan sukses selalu yaaa :-)
                            Disini saya ingin menjelaskan sesuatu nih..
                            Di era globalisasi sekarang, sudah banyak orang yang menggunakan teknologi canggih
                            untuk mempermudah segala urusan. Contohnya dalam masalah menyimpan uang,
                            pengiriman uang atau dalam melakukan transaksi. Zaman sekarang transaksi uang tidak
                            hanya melalui teller bank, tetapi juga bisa melalui media digital seperti ATM, Mbanking, Ovo,
                            Gopay, Dana dan sebagainya. Hal ini tentunya sangat membantu kita dalam menyimpan
                            uang atau melakukan transaksi dengan mudah.
                            Bagi teman - teman yang belum tahu atau masih bingung bagaimana cara melakukan
                            transaksi transfer uang melalui media digital tersebut, disini saya akan menjelaskan cara –
                            caranya : <br><br>
                            <div style=" display: flex;">
                                <div><img src="assets/img/satu.png" alt=""></div>
                                <div style="margin-left:20px;">
                                    <div class="bold">Cara mentransfer uang melalui Teller Bank</div>
                                </div>
                            </div>
                            ● Yang pertama, anda bisa datang ke bank yang anda tuju (BRI, BNI, BCA dan
                            MANDIRI) <br>
                            ● Jika anda sudah masuk ke dalam bank, misal bank BRI. Nanti anda akan diberi
                            nomor antrian oleh teller. Dan jangan lupa untuk mengambil dulu slip transferannya. <br>
                            ● Lalu ambil slip/formulir untuk SETOR TUNAI warna biru. <br>
                            ● Isikan datanya: Nomor rekening tujuannya dan juga nama rekening yang mau di 
                            transfer dan isikan nominal uang yang ingin anda transfer, nama pengirim (anda) dan
                            nomor hp, keterangan isi misal : untuk Bayar PDAM, dan sebagainya. <br><br>
                            <div style=" display: flex;">
                                <div><img src="assets/img/dua.png" alt=""></div>
                                <div style="margin-left:20px;">
                                    <div class="bold">Cara mentransfer uang melalui ATM</div>
                                </div>
                            </div>                            
                            ● Yang pertama, sesuaikan ATM dengan bank tempat anda menabung. Misalnya anda
                            menabung di Bank BRI, maka anda cari ATM yang berlogo BRI atau ATM bersama. <br>
                            ● Lalu, masukkan kartu ATM anda ke slot kartu mesin ATM (pastikan posisi kartu tidak
                            terbalik). <br>
                            ● Pilih Bahasa yang ingin anda gunakan : Pilih bahasa Indonesia. <br>
                            ● Masukkan PIN ATM anda. Usahakan selalu menjaga keamanan PIN ATM anda,
                            seperti saat mengetik tombol PIN ATM, tutup tombol dengan tangan. Nomor PIN
                            ATM sangatlah rahasia, maka jangan memberikan PIN ATM anda kepada orang lain. <br>
                            ● Pilih jenis transaksi : Pilih “Transfer”. <br>
                            ● Pilih Bank Tujuan Transfer Anda 
                            Jika sesama Bank maka pilih "Sesama Bank". Jika berbeda bank, maka pilih "Bank
                            Lain" <br>
                            ● Masukkan nomor referensi (Anda bisa mengosongkan jika tidak ada). Kemudian,
                            ketik kembali kode bank dan nomor rekening tujuan anda. Setelah itu, pilih “BENAR”. <br>
                            ● Masukkan jumlah transfer. Pastikan nominal angkanya sudah benar. Lalu klik
                            “BENAR” untuk proses selanjutnya. <br>
                            ● Transaksi akan di proses. Dilayar ATM nanti, anda diminta untuk konfirmasi ulang
                            tentang kebenaran data yang telah anda masukkan sebelumnya. Periksa semua 
                            data hingga benar semua. Jika sudah, pilih “YA” jika semua data sudah sesuai. <br>
                            ● Transfer berhasil <br> <br>
                            <div style=" display: flex;">
                                <div><img src="assets/img/tiga.png" alt=""></div>
                                <div style="margin-left:20px;">
                                    <div class="bold">Cara mentransfer uang mentransfer uang melalui Mbanking</div> 
                                </div>
                            </div>                            
                            ● Yang pertama, anda harus mempunyai aplikasi mbanking terlebih dahulu. <br>
                            ● Lalu buka aplikasi mbanking anda <br>
                            ● Pilih menu “m-Banking Anda” di ponsel anda dan tekan OK/YES <br>
                            ● Lalu pilih menu “m-Transfer” dan tekan OK/YES <br>
                            ● Pilih menu “Antar Bank” untuk transfer ke lain bank dan tekan OK/YES. Dan jika
                            ingin transfer ke sesama Bank, pilih menu "Sesama Bank" <br>
                            ● Masukkan kode bank tujuan anda, jika transfer berbeda bank. Dan tekan OK/YES <br>
                            ● Masukkan nomor rekening bank tujuan anda dan tekan OK/YES <br>
                            ● Masukkan nominal uang yang akan ditransfer <br>
                            ● Selanjutnya, masukkan PIN m-Banking anda <br>
                            ● Lalu konfirmasi data anda, pastikan semua data yang anda masukkan sudah benar
                            semua. Jika sudah, tekan OK/YES dan masukkan nomor PIN m-Banking anda. Lalu
                            tekan OK/YES <br>
                            ● Transfer berhasil <br><br>
                            <div style=" display: flex;">
                                <div><img src="assets/img/empat.png" alt=""></div>
                                <div style="margin-left:20px;">
                                    <div class="bold">Cara mentransfer uang melalui OVO</div>
                                </div>
                            </div>                            
                            ● Yang pertama, anda harus mempunyai aplikasi OVO dan sudah log in <br>
                            ● Masuk pada menu “Transfer” pada layar utama OVO <br>
                            ● Kemudian masukkan nominal uang yang ingin kamu transfer. Kamu bisa pilih Antar
                            OVO/Scan/Rekening Bank. <br>
                            ● Masukkan nomor telepon penerima <br>
                            ● Kolom pesan yang ada boleh diisi atau tidak <br>
                            ● Lalu klik “Transfer”<br>
                            ● Konfirmasi data, jika semua nominal dan nomor telepon sudah benar, maka klik
                            “konfirmasi” <br>
                            ● Transfer berhasil <br><br>
                            <div style=" display: flex;">
                                <div><img src="assets/img/lima.png" alt=""></div>
                                <div style="margin-left:20px;">
                                    <div class="bold">Cara mentransfer uang melalui Go-Pay</div>
                                </div>
                            </div>                            
                            ● Pastikan kamu dan orang yang akan akan kamu kirimkan uang sudah mempunyai
                            aplikasi Go-jek di Ponsel <br>
                            ● Lalu buka aplikasi Go-jek tersebut, kemudian pilih menu Bayar <br>
                            ● Lalu klik gambar simbol telepon dengan keterangan “Nomor HP” yang artinya bayar
                            atau transfer lewat nomor Hp <br>
                            ● Pilih nomor Hp yang dituju pada daftar kontak telepon kamu <br>
                            ● Masukan jumlah uang yang akan di transfer <br>
                            ● Klik Konfirmasi <br>
                            ● Tambahkan catatan berupa ‘transfer uang jajan,’ ‘pembayaran barang,’ dan lainnya. <br>
                            ● Klik Bayar dan masukan PIN yang terdiri dari 6 digit <br>
                            ● Jika transfermu berhasil, kamu akan segera mendapatkan notifikasi ‘pembayaran
                            berhasil <br><br>
                            <div style=" display: flex;">
                                <div><img src="assets/img/enam.png" alt=""></div>
                                <div style="margin-left:20px;">
                                    <div class="bold">Cara mentransfer uang melalui DANA</div>
                                </div>
                            </div>                            
                            ● Pastikan kamu sudah mempunyai aplikasi DANA <br>
                            ● Login akun DANAmu <br>
                            ● Klik ‘kirim’ pada layar utama yang terdapat pada kolom atas <br>
                            ● Pilih ‘Kontak,’ kemudian pilih nomor telepon penerima di daftar kontak yang ada di
                            teleponmu. <br>
                            ● Masukkan nominal uang yang akan dikirimkan <br>
                            ● Klik ‘lanjut’. Cek kembali apakah no tujuan dan nominal sudah benar, jika ya tap
                            Kirim DANA. <br>
                            ● Masukkan PIN DANA <br>
                            ● Jika transfer berhasil, maka kamu akan menerima laporan ‘pembayaran sukses’ <br><br>
                            <div style=" display: flex;">
                                <div><img src="assets/img/tujuh.png" alt=""></div>
                                <div style="margin-left:20px;">
                                    <div class="bold">Cara mentransfer uang melalui LinkAja</div>
                                </div>
                            </div>                            
                            ● Yang pertama, pastikan kamu sudah mempunyai aplikasi LinkAja <br>
                            ● Buka aplikasi LinkAja di ponsel kamu, lalu pilih menu Kirim Uang. <br>
                            ● Selanjutnya pilih Tab Bank, kemudian pilih nama bank tujuan transfer misalnya
                            Mandiri, BNI, BRI, BTN, BCA dan lainnya. <br>
                            ● Setelah itu masukan nomor rekening bank tujuan transfer lalu tap tombol Lanjut. <br>
                            ● Masukan nominal uang yang akan dikirim kemudian tap tombol Ceklis. <br>
                            ● Cek kembali apakah nama pemilik rekening dan jumlah uang sudah benar, jika ya
                            maka tap tombol Konfirmasi.
                            Nanti akan ada biaya admin sebesar 6.500 setiap kali kita transfer saldo linkaja ke
                            rekening bank baik itu bank swasta maupun bank BUMN seperti Mandiri, BRI, BNI
                            dan BTN jadi tidak gratis berbeda dengan saat kita mengisi saldo. <br>
                            ● Terakhir masukan PIN LinkAja dan tunggu sampai transaksi selesai. Jika transaksi
                            berhasil maka akan muncul pemberitahuan di aplikasi LinkAja dan kita juga akan
                            menerima sms notifikasi dari linkaja ke nomor yang terdaftar. <br><br>
                            <div style=" display: flex;">
                                <div><img src="assets/img/delapan.png" alt=""></div>
                                <div style="margin-left:20px;">
                                    <div class="bold">Cara mentransfer uang melalui Alfamart</div>
                                </div>
                            </div>                            
                            ● Yang pertama, anda harus menyiapkan persyaratan yang diperlukan <br>
                            ● Anda dapat pergi ke Alfamart terdekat dan menyampaikan kepada kasir bahwa Anda
                            ingin melakukan pengiriman uang <br>
                            ● Selanjutnya Anda akan dimintai identitas diri dan persyaratannya yaitu kartu identitas
                            yang masih berlaku dan nomor telepon aktif <br>
                            ● Selanjutnya Anda akan dimintai data calon penerima uang <br>
                            ● Setelah data diproses Anda dapat memberikan sejumlah uang yang ingin Anda kirim
                            beserta biaya administrasi yang dibebankan <br>
                            ● Kemudian, Anda akan menerima kode MTCN (Money Transfer Control Number)
                            sebagai kode rahasia <br>
                            ● Kode tersebut Anda berikan kepada calon penerima uang yang Anda kirimkan. Anda
                            harus berhati-hati dalam mengirimkan kode ke penerima, sehingga tidak terjadi
                            kebocoran informasi yang dapat menyebabkan uang tersebut diambil orang lain,
                            bukan penerima yang seharusnya <br>
                            ● Kode MTCN merupakan kode khusus keamanan mengirim uang lewat Alfamart. <br><br>
                            <div style=" display: flex;">
                                <div><img src="assets/img/sembilan.png" alt=""></div>
                                <div style="margin-left:20px;">
                                    <div class="bold">Cara mentransfer uang melalui Indomart</div>
                                </div>
                            </div>                            
                            ● Yang pertama, anda harus menyiapkan persyaratan yang diperlukan <br>
                            ● Lalu anda bisa pergi ke Indomaret terdekat <br>
                            ● Sampaikan ke kasir bahwa Anda ingin melakukan transfer uang <br>
                            ● Berikan kartu identitas Anda yang disyaratkan untuk proses pendataan <br>
                            ● Berikan identitas dan nomor telepon calon penerima uang untuk dicatat data
                            penerima <br>
                            ● Selanjutnya transfer akan diproses <br>
                            ● Ketika proses telah selesai, Anda akan menerima kode melalui SMS dari
                            DOMPETKU <br>
                            ● Terakhir, Anda dapat menyimpan dan menyampaikan kode tersebut kepada
                            penerima, untuk melakukan pengambilan uang
                            Bagaimana teman - teman? Mudah bukan??🤗 Jika kita mengerti teknologi dan mengerti
                            cara pemakaian teknologi tersebut, maka semakin mudah tentunya kita dalam
                            menyelesaikan pekerjaan. Praktis dan tidak memakan waktu tentunyaa!😉 Hehehe
                            Semoga penjelasan dari saya ini dapat bermanfaat yaa untuk teman - teman🤗🤗
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


