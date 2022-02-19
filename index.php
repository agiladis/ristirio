<html lang="en">
<?php date_default_timezone_set('Asia/Jakarta'); ?>
<?php include 'koneksi.php' ?>
<?php
//Menampilkan wish pada kolom wish
$query = mysqli_query($koneksi, "SELECT * FROM tbl_harapan");
$row_query = mysqli_fetch_assoc($query);
$date_time = date("Y:m:d h:i:sa");

// Jika tombol konfirmasi kehadiran di klik
if (isset($_POST['konfirmasi'])) {
    $nama = $_POST['nama'];
    $nomor = $_POST['nomor'];
    $konfirmasi_kehadiran = $_POST['konfirmasi_kehadiran'];
    $sesi = $_POST['sesi'];

    $query_insert_rsvp = mysqli_query($koneksi, "INSERT INTO tbl_kehadiran(nama, nomor, konfirmasi_kehadiran, sesi) VALUES ('$nama', '$nomor', '$konfirmasi_kehadiran', '$sesi') ");

    if ($query_insert_rsvp) {
        empty($nama);
        empty($nomor);
        empty($konfirmasi_kehadiran);
        empty($sesi);
        header("Location: index.php?konfirmasi=berhasil&#data-kehadiran");
    } else {
        header("Location: index.php?konfirmasi=gagal");
    }
}

// Jika tombol wish ditekan
if (isset($_POST['kirim'])) {
    $nama_tamu = $_POST['nama_tamu'];
    $harapan = $_POST['harapan'];

    echo `
    <script>
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();

        today = mm + '/' + dd + '/' + yyyy;
        console.log(today)
    </script>
    `;

    $query_insert_wish = mysqli_query($koneksi, "INSERT INTO tbl_harapan(nama_tamu, harapan, waktu) VALUES ('$nama_tamu', '$harapan', '$date_time')");
    if ($query_insert_wish) {
        empty($nama_tamu);
        empty($harapan);
        header("Location: index.php?sent_wish=berhasil&#ucapan-doa");
    } else {
        header("Location: index.php?sent_wish=gagal");
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risti & Rio</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cedeen.netlify.app/font-awesome-5-pro/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="./css/lightbox.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <?= $date_time; ?>
    <main>
        <div id="content">
            <div class="landing-page">
                <div class="image-holder" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1300"></div>
                <div class="landpage-caption text-center pt-3 overflow-x-hidden" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1300">
                    <p class="text-secondary text font-italic">The Wedding Of :</p>
                    <p class="font-alexBrush m-0 text-size-xl" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="1800">Risti</p>
                    <h1 class="font-alexBrush m-0">&</h1>
                    <p class="font-alexBrush m-0 text-size-xl" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="1800">Rio</p>
                </div> <!-- end landpage-caption -->
                <div class="text-center mt-3">
                    <img class="w-25" src="./img/leaf.png" alt="">
                </div>
            </div> <!-- end landing-page -->
            <div class=" container intro-person mt-4">
                <div class="hadith col-md-8">
                    <p data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="800">"Bismillahhirrahmanirrahim"</p>
                    <p data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
                        Maha Suci Allah SWT
                        yang telah menciptakan makhluk-Nya berpasang-pasangan
                        perkenankan kami melaksanakan syariat agamamu mengikuti sunnah Rasul-mu, membentuk keluarga Sakinah Mawadah Warahmah.
                    </p>
                </div> <!-- end hadith -->
                <div class="container-couple overflow-x-hidden">
                    <div class="couple-half" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="1000">
                        <div class="photo-holder">
                            <img src="./img/risti-min.jpg" alt="">
                        </div> <!-- end photo-holder -->
                        <div class="desc-groom">
                            <h1 class="font-alexBrush m-0">Risti</h1>
                            <p class="text-secondary">Risti Rofiatun Nissa</p>
                            <p>
                                <small><i>Putri Pertama Dari</i></small>
                                <br>
                                Bapak Sunardani &
                                <br>
                                Ibu Uti Lutfiyah
                            </p>
                        </div> <!-- end desc-groom -->
                    </div> <!-- end couple-half -->
                    <div class="m-auto">
                        <h1 class="font-alexBrush">- & -</h1>
                    </div>
                    <div class="couple-half text-right" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="1000">
                        <div class="desc-groom">
                            <h1 class="font-alexBrush m-0">Rio</h1>
                            <p class="text-secondary">Rio Mardani</p>
                            <p>
                                <small><i>Putra Kedua Dari</i></small>
                                <br>
                                Bapak Sumaryo &
                                <br>
                                Ibu Rakiyem
                            </p>
                        </div> <!-- end desc-groom -->
                        <div class="photo-holder">
                            <img src="./img/rio-min.jpg" alt="">
                        </div> <!-- end photo-holder -->
                    </div> <!-- end couple-half -->
                </div> <!-- end container-couple -->
            </div> <!-- end intro-person -->
            <div class="container schedule-container">
                <div class="hadith col-md-8" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <p>
                        Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu istri-istri dari
                        jenismu sendiri, supaya kamu cenderung dan merasa tentram kepadanya, dan dijadikan-Nya
                        diantaramu rasa kasih dan sayang. Sesungguhnya pada demikian itu benar-benar terdapat
                        tanda-tanda bagi kaum yang berfikir.
                    </p>
                    <p class="font-weight-bold">- Surat Ar-Rum Ayat 21 -</p>
                </div> <!-- end hadith -->
                <div class="schedule">
                    <div class="akad" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <h1 class="font-alexBrush text-center">Akad Nikah</h1>
                        <div class="mb-2">
                            <img class="w-100" src="./img/date_akad.svg" alt="Akad pada pukul 10.00 - 11.00 WIB">
                        </div>
                    </div> <!-- end akad -->
                    <div class="akad" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <h1 class="font-alexBrush text-center">Resepsi</h1>
                        <div class="">
                            <img class="w-100" src="./img/date_resepsi.svg" alt="Resepsi pada pukul 11.00 - 17.00 WIB">
                        </div>
                    </div> <!-- end akad -->
                </div> <!-- end schedule -->
                <div class="location d-flex flex-column col-md-8 mb-5" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <i class="fas fa-map-marker-alt mb-2"></i>
                    <div>Perumnas Jl.Pesut Raya Lapangan serbaguna (Kantor RW 10) RT.01 RW.10 Perumnas II, Kayuringin Jaya, Bekasi Selatan, Kota Bekasi, Jawa Barat 17144</div>
                </div> <!-- end location -->
                <div class="mb-5 text-center" data-aos="zoom-in-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1aqUlRAlq9FQ3cZBRGQkJFA5Gu6rrD2GN" class="mb-4"></iframe>
                    <div class="col-md-8 m-auto d-flex justify-content-center">
                        <a href="https://goo.gl/maps/6RsbHn9rCE1UtM7E7" class="btn btn-brown mr-2 slide" target="_blank"><i class="fas fa-location-arrow mr-2"></i> Google Maps</a>
                        <a href="./img/maps_code.jpeg" data-lightbox="mapsCode" data-title="Google Maps QRCode" style="cursor: pointer; outline: 20px;">
                            <p class="btn btn-brown m-0"><i class="fas fa-qrcode mr-2"></i> Scan QR Code</p>
                        </a>
                    </div>
                </div>
            </div> <!-- end schedule-container -->
            <div class="countdown-container">
                <div class="container">
                    <h1 class="font-alexBrush text-center" data-aos="zoom-in-down" data-aos-easing="ease-in-sine" data-aos-duration="1000">Countdown</h1>
                    <h5 class="text-center mb-4" data-aos="zoom-in-down" data-aos-easing="ease-in-sine" data-aos-duration="1000">SUNDAY, 30 MAY 2021</h5>
                    <div class="d-flex mb-5">
                        <div class="part-countdown">
                            <h1 id="days" class="m-0"></h1>
                            <p class="m-0">Days</p>
                        </div>
                        <div class="part-countdown">
                            <h1 id="hours" class="m-0"></h1>
                            <p class="m-0">Hours</p>
                        </div>
                        <div class="part-countdown">
                            <h1 id="minutes" class="m-0"></h1>
                            <p class="m-0">Minutes</p>
                        </div>
                        <div class="part-countdown">
                            <h1 id="seconds" class="m-0"></h1>
                            <p class="m-0">Seconds</p>
                        </div>
                    </div>
                    <div class="text-center" data-aos="zoom-in-up" data-aos-easing="ease-in-sine" data-aos-duration="1000">
                        <a href="https://www.google.com/calendar/render?action=TEMPLATE&text=Risti+%26+Rio+Wedding+Party&details=Hari+bahagia+Risti+%26+Rio&location=Perumnas+Jl.Pesut+Raya+Lapangan+serbaguna+%28Kantor+RW+10%29+RT.01+RW.10+Perumnas+II%2C+Kayuringin+Jaya%2C+Bekasi+Selatan%2C+Kota+Bekasi%2C+Jawa+Barat+17144&dates=20210530T040000Z%2F20210530T100000Z" class="btn btn-outline-brown m-auto"><i class="far fa-calendar-alt mr-2"></i> Ingatkan Saya</a>
                    </div>
                </div> <!-- end container -->
            </div> <!-- end countdown-container -->
            <div class="container">
                <h1 class="font-alexBrush text-center">Protokol Kesehatan</h1>
                <div class="hadith col-md-8">
                    <p>
                        Di masa <b>Pandemi Covid-19</b> ini kami memohon agar seluruh tamu undangan yang hadir dalam acara ini
                        dapat mengikuti protokol kesehatan yang berlaku dan mengikuti himbauan pemerintah
                    </p>
                </div>
                <div class="protokol-kesehatan">
                    <div data-aos="zoom-in-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <img src="./img/protokol_masker.png" alt="Menggunakan masker">
                        <p>Membawa dan menggunakan masker</p>
                    </div>
                    <div data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <img src="./img/protokol_cucitangan.png" alt="Cuci tangan">
                        <p>Mencuci tangan dengan sabun/hand sanitizer</p>
                    </div>
                    <div data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <img src="./img/protokol_jarak.png" alt="Jaga jarak">
                        <p>Menjaga jarak minimal 1 meter selama acara berlangsung</p>
                    </div>
                    <div data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <img src="./img/protokol_suhu.png" alt="Pengecekan suhu badan">
                        <p>Suhu badan normal dan tidak sedang flu</p>
                    </div>
                    <div data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <img src="./img/protokol_namaste.png" alt="Salam namaste">
                        <p>Tidak bersalaman, diganti dengan salam namaste</p>
                    </div>
                </div> <!-- end protokol-kesehatan -->
            </div> <!-- end container -->
            <div class="love-story-wrapper">
                <div class="container ">
                    <h1 class="font-alexBrush text-center mb-4" data-aos="zoom-in-down" data-aos-easing="ease-in-sine" data-aos-duration="900">Love Story</h1>
                    <div class="timelines overflow-x-hidden">
                        <div class="timeline ">
                            <div class="timelineBar"></div> <!-- end timelineBar -->
                            <section data-aos="zoom-in-left" data-aos-easing="ease-in-sine" data-aos-duration="1000">
                                <div class="year">
                                    <p><small class="font-weight-bold">FEBRUARY 2020</small></p>
                                </div>
                                <div class="timelineContent">
                                    <p>Awal bertemu dan kenalan</p>
                                    <p><small class="text-secondary">22 Ferbuari 2020 pertama ketemu di salah satu alfamart, lalu beberapa kali jalan bareng hingga saling merasa nyaman</small></p>
                                </div> <!-- end timelineContent -->
                            </section>
                        </div> <!-- end timeline -->
                        <div class="timeline ">
                            <div class="timelineBar"></div> <!-- end timelineBar -->
                            <section data-aos="zoom-in-left" data-aos-easing="ease-in-sine" data-aos-duration="1000">
                                <div class="year">
                                    <p><small class="font-weight-bold">MARCH 2020</small></p>
                                </div>
                                <div class="timelineContent">
                                    <p>Pada tanggal ini kita jadian</p>
                                    <p><small class="text-secondary">Tepat pada tanggal 09 Maret 2020 Kita jadian. Langkah awal kita memulai suatu hubungan</small></p>
                                </div> <!-- end timelineContent -->
                            </section>
                        </div> <!-- end timeline -->
                        <div class="timeline ">
                            <div class="timelineBar"></div> <!-- end timelineBar -->
                            <section data-aos="zoom-in-left" data-aos-easing="ease-in-sine" data-aos-duration="1000">
                                <div class="year">
                                    <p><small class="font-weight-bold">JULY 2020</small></p>
                                </div>
                                <div class="timelineContent">
                                    <p>Lamaran !</p>
                                    <p><small class="text-secondary">Pada hari itu kita lamaran, untuk mengikat hubungan dan membuktikan keseriusan hubungan ini</small></p>
                                </div> <!-- end timelineContent -->
                            </section>
                        </div> <!-- end timeline -->
                        <div class="timeline ">
                            <div class="timelineBar"></div> <!-- end timelineBar -->
                            <section data-aos="zoom-in-left" data-aos-easing="ease-in-sine" data-aos-duration="1000">
                                <div class="year">
                                    <p><small class="font-weight-bold">MAY 2021</small></p>
                                </div>
                                <div class="timelineContent">
                                    <p>Kita Menikah <span class="text-secondary">(SOON)</span></p>
                                    <p><small class="text-secondary">30 Mei 2021 akan menjadi awal dari hubungan yang serius ini. kita akan melangsungkan pernikahan dan membangun keluarga yang sakinah, mawaddah, warahmah bersama. Amiin &#10084;</small></p>
                                </div> <!-- end timelineContent -->
                            </section>
                        </div> <!-- end timeline -->
                    </div> <!-- end timelines -->
                </div> <!-- end container -->
            </div> <!-- end love-story-wrapper -->
            <div class="gallery-container">
                <h1 class="font-alexBrush text-center mb-4">Gallery</h1>
                <div class="gallery container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-12" data-aos="fade-up" data-aos-easing="ease-in-sine">
                            <img src="./img/3178-min.jpg" alt="">
                        </div>
                        <div class="col-md-6 col-sm-6 col-12" data-aos="fade-up" data-aos-easing="ease-in-sine">
                            <img src="./img/3107-min.jpg" alt="">
                        </div>
                        <div class="col-md-6 col-sm-6 col-12" data-aos="fade-up" data-aos-easing="ease-in-sine">
                            <img src="./img/3126-min.jpg" alt="">
                        </div>
                        <div class="col-md-6 col-sm-6 col-12" data-aos="fade-up" data-aos-easing="ease-in-sine">
                            <img src="./img/3136-min.jpg" alt="">
                        </div>
                    </div> <!-- end row -->
                </div> <!-- end gallery -->
            </div> <!-- end gallery-container -->
            <div id="data-kehadiran" class="rsvp container">
                <h1 class="font-alexBrush text-center mb-4">Data Kehadiran</h1>
                <form method="POST" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600">
                    <div class="form-group">
                        <label for="namaTamu">Nama</label>
                        <input type="text" name="nama" class="form-control" id="namaTamu" placeholder="Nama Lengkap Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="noWhatsapp">Nomor Whatsapp</label>
                        <input type="text" name="nomor" class="form-control" id="noWhatsapp" placeholder="08xxxxxxxxxx" required>
                    </div>
                    <div class="form-group">
                        <label for="konfirmasi">Konfirmasi Kehadiran</label>
                        <select name="konfirmasi_kehadiran" class="form-control" id="konfirmasi" onchange="checkKonfirmasi()">
                            <option selected>- pilih Jawaban -</option>
                            <option id="hadir" value="hadir">Hadir</option>
                            <option value="tidak hadir">Maaf, Berhalangan hadir</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="konfirmasiSesi">Kehadiran Sesi</label>
                        <select name="sesi" class="form-control" id="konfirmasiSesi" disabled>
                            <option>- pilih Jawaban -</option>
                            <option value="1">Sesi 1 : 11.00 - 14.00</option>
                            <option value="2">Sesi 2 : 14.00 - 17.00</option>
                        </select>
                    </div>
                    <button type="submit" name="konfirmasi" class="btn btn-brown">Konfirmasi</button>
                </form>
            </div> <!-- end rsvp -->
            <div class="container-fluid closing-hadith" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="600">
                <div class="hadith col-md-8">
                    <p data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="800">
                        Barangsiapa menikah maka ia telah melengkapi separuh agamanya.
                        Dan hendaklah ia bertaqwa kepala Allah dalam memelihara yang separuhnya lagi.
                    </p>
                    <p class="font-alexBrush" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="800">- HR. Al Baihaqi -</p>
                </div> <!-- end hadith -->
            </div> <!-- end container-fluid -->
            <div class="container">
                <h1 class="font-alexBrush text-center mb-4">Angpao Online</h1>
                <div class="hadith col-md-8 mb-4">
                    <p>
                        Klik pada barcode untuk memperbesar
                    </p>
                </div>
                <div class="qrcode-container">
                    <div class="ovo" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600">
                        <h5 class="text-center">OVO</h5>
                        <a href="./img/ovo.png" data-lightbox="OVO" data-title="QR Code OVO" style="cursor: pointer; outline: 20px;">
                            <img src="./img/ovo.png" alt="OVO">
                        </a>
                    </div>
                    <div class="dana" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="600">
                        <h5 class="text-center">DANA</h5>
                        <a href="./img/dana.png" data-lightbox="DANA" data-title="QR Code DANA" style="cursor: pointer; outline: 20px;">
                            <img src="./img/dana.png" alt="DANA">
                        </a>
                    </div>
                </div>
            </div> <!-- end container -->
            <div id="ucapan-doa" class="chatbox-container overflow-x-hidden">
                <h1 class="font-alexBrush text-center mb-4" data-aos="zoom-out-down" data-aos-easing="ease-in-sine" data-aos-duration="1000">Ucapan dan Do'a</h1>
                <div class="hadith col-md-8 mb-4" data-aos="zoom-out-down" data-aos-easing="ease-in-sine" data-aos-duration="1000">
                    <p>
                        Tinggalkan pesan dan Do'a anda untuk kami
                    </p>
                </div>
                <div class="container d-flex justify-content-between">
                    <div class="chatbox">
                        <ul id="wish-room" class="mb-0" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="1000">
                            <?php do { ?>
                                <li>
                                    <div class="message-data">
                                        <span class="message-data-name">
                                            <img src="./img/profile.svg" alt="Profile Foto">
                                            <?= $row_query['nama_tamu']; ?>
                                        </span> <!-- end message-data-name -->
                                        <span class="message-data-time">
                                            <?php echo date('h:i A, F d', strtotime($row_query['waktu'])); ?>
                                        </span> <!-- end message-data-time -->
                                    </div> <!-- end message-data -->
                                    <div class="message">
                                        <?= $row_query['harapan']; ?>
                                    </div> <!-- end message -->
                                </li>
                            <?php } while ($row_query = mysqli_fetch_assoc($query)); ?>
                        </ul>
                        <span id="new-messages-icon" class="fa-stack fa-sm" onclick="scrollToBottom()">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fas fa-angle-double-down fa-stack-1x fa-inverse"></i>
                        </span>
                    </div> <!-- end chatbox -->
                    <div class="form-wishes">
                        <form method="POST">
                            <div class="form-group">
                                <input name="nama_tamu" id="wish-from" type="text" class="form-control" placeholder="Nama Lengkap Anda" required>
                            </div>
                            <div class="form-group">
                                <textarea name="harapan" id="wish-content" class="form-control" rows="5" placeholder="Tulis harapan dan do'a" required></textarea>
                            </div>
                            <button type="submit" name="kirim" class="btn btn-outline-brown">Kirim</button>
                            <!-- <a href="Javascript:void(0);" onclick="addWishes()" type="submit" class="btn btn-outline-brown">Kirim</a> -->
                        </form>
                    </div> <!-- end form-wishes -->
                </div> <!-- end container -->
            </div> <!-- end chatbox-container -->
        </div> <!-- end #content -->
        <!-- Background Music -->
        <audio id="music" preload="auto" loop>
            <source src="./music/elvis_cover.mp3" type="audio/mpeg">
            Browsermu tidak mendukung tag audio
        </audio>

        <span id="playButton" onclick="playAudio()" class="fa-stack fa-lg">
            <i class="fas fa-circle fa-stack-2x"></i>
            <i class="fas fa-play fa-stack-1x fa-inverse"></i>
        </span>
        <span id="pauseButton" onclick="pauseAudio()" class="fa-stack fa-lg d-none">
            <i class="fas fa-circle fa-stack-2x"></i>
            <i class="fas fa-pause fa-stack-1x fa-inverse"></i>
        </span>
        <!-- <a id="playButton" onclick="playAudio()" class="btn btn-brown" title="Play"><i class="far fa-play fa-2x"></i></a> -->
        <!-- <a id="pauseButton" onclick="pauseAudio()" class="btn btn-brown d-none" title="Pause"><i class="fas fa-pause fa-2x"></i></i></a> -->
    </main>
    <footer>
        <span>&copy; AGIL ADI SAPUTRO 2021</span>
        <div class="social-media">
            <a href="mailto:agiladisaputro@gmail.com" target="_blank"><i class="fas fa-envelope"></i></a>
            <a href="https://www.instagram.com/agiladis_/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://github.com/agiladis/" target="_blank"><i class="fab fa-github"></i></a>
            <a href="https://agiladis.github.io/agiladisaputro/" target="_blank"><i class="fab fa-chrome"></i></a>
            <a href="https://www.facebook.com/agil.adi.121/" target="_blank"><i class="fab fa-facebook"></i></a>
        </div> <!-- end social-media -->
    </footer>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/lightbox-plus-jquery.min.js"></script>
    <script src="./js/countdown.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        const music = document.querySelector('#music');
        const playButton = document.querySelector('#playButton');
        const pauseButton = document.querySelector('#pauseButton');
        const hadir = document.querySelector('#hadir')
        const wishRoom = document.querySelector('#wish-room')
        const wishFrom = document.querySelector('#wish-from')
        const wishContent = document.querySelector('#wish-content')

        function playAudio() {
            music.play();
            playButton.classList.add('d-none')
            pauseButton.classList.remove('d-none')
        }

        function pauseAudio() {
            music.pause();
            pauseButton.classList.add('d-none')
            playButton.classList.remove('d-none')
        }

        function checkKonfirmasi() {
            if (hadir.selected == true) {
                $('#konfirmasiSesi').attr('disabled', false);
            } else {
                $('#konfirmasiSesi').attr('disabled', true);
            }
        }

        function addWishes() {
            // Get time
            var date = new Date(); // for now

            let hours = date.getHours();
            let minutes = date.getMinutes();
            let ampm = hours >= 12 ? 'PM' : 'AM';
            hours = hours % 12;
            // hours = hours ? hours : 12; // the hour '0' should be '12'
            minutes = minutes < 10 ? '0' + minutes : minutes;
            let strTime = hours + ':' + minutes + ' ' + ampm;
            wishRoom.innerHTML += `
                            <li>
                                <div class="message-data">
                                    <span class="message-data-name">
                                        <img src="./img/profile.svg" alt="Profile Foto">
                                        ${wishFrom.value}
                                    </span> <!-- end message-data-name -->
                                    <span class="message-data-time">
                                        ${strTime}, Today
                                    </span> <!-- end message-data-time -->
                                </div> <!-- end message-data -->
                                <div class="message">
                                    ${wishContent.value}
                                </div> <!-- end message -->
                            </li>`
            // Abis pencet kirim ilangin valuenya di form
            wishFrom.value = ""
            wishContent.value = ""
        }


        // Ngehapus icon new message pada wish jika berada di bawah
        // document.querySelector('.chatbox').addEventListener("scroll", evt => {
        //     console.log(evt.target.scrollTop)
        //     console.log( document.querySelector('.chatbox').scrollHeight)
        //     if(evt.target.scrollTop == wishRoom.scrollHeight) {
        //         console.log("mentok")
        //     }
        // })
        function scrollToBottom() {
            document.querySelector('.chatbox').scrollTo(0, document.querySelector('.chatbox').scrollHeight);
        }
    </script>
</body>

</html>