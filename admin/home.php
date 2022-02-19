<html lang="en">

<?php
include 'inc/cek_session.php';
include 'inc/koneksi.php';
?>

<?php
// data tamu 
$q_guest = mysqli_query($koneksi, "SELECT (SELECT COUNT(id_kehadiran) FROM tbl_kehadiran) as total, (SELECT COUNT(id_kehadiran) FROM tbl_kehadiran WHERE konfirmasi_kehadiran ='hadir') as total_hadir, (SELECT COUNT(id_kehadiran) FROM tbl_kehadiran WHERE sesi = 1) as sesi1, (SELECT COUNT(id_kehadiran) FROM tbl_kehadiran WHERE sesi = 2) as sesi2, (SELECT COUNT(id_kehadiran) FROM tbl_kehadiran WHERE konfirmasi_kehadiran ='tidak hadir') as tidak_hadir");
$row_guest = mysqli_fetch_assoc($q_guest);

// Data wishes 
$q_wish = mysqli_query($koneksi, "SELECT COUNT(id_wish) as total_wish FROM tbl_harapan");
$row_wish = mysqli_fetch_assoc($q_wish);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Inventaris</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <?php include "inc/nav.php"; ?>
    </header>

    <main>
        <div id="content" class="container m-auto">
            <h2>Welcome ! <?php echo $_SESSION['nama']; ?></h2>
            <br>
            <p>Jumlah Tamu yang mengisi form : <?= $row_guest['total']; ?></p>
            <p>Jumlah Tamu yang akan datang : <?= $row_guest['total_hadir']; ?></p>
            <ul>
                <li>Sesi 1 (11.00 - 14.00) : <?= $row_guest['sesi1']; ?></li>
                <li>Sesi 2 (14.00 - 17.00) : <?= $row_guest['sesi2']; ?></li>
            </ul>
            <p>Jumlah Tamu yang tidak datang : <?= $row_guest['tidak_hadir']; ?></p>
            <p>Jumlah Harapan yang masuk : <?= $row_wish['total_wish']; ?></p>
        </div> <!-- end content -->
    </main>

    <footer id="footer-top" class="d-flex justify-content-between">
        <span class="m-0">&copy; Agiladisaputro 2021</span>
        <div class="social-media">
            <a href="" class="mr-2"><i class="fa fa-instagram"></i></a>
            <a href=""><i class="fa fa-twitter"></i></a>
        </div> <!-- end social-media -->
    </footer>
    <script src="js/jquery-3.5.1.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>