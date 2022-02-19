<html lang="en">

<?php
include 'inc/cek_session.php';
include 'inc/koneksi.php';
?>

<?php
$query = mysqli_query($koneksi, "SELECT * FROM tbl_harapan");
$row_query = mysqli_fetch_assoc($query);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data - Inventaris</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <?php include 'inc/nav.php'; ?>
    </header>

    <main>
        <div id="content" class="container m-auto pt-4 pb-5">
            <table class="table">
                <thead class="btn-bronze">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Tamu</th>
                        <th scope="col">Harapan</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    do { ?>
                        <tr>
                            <th scope="row"><?php echo $no++; ?></th>
                            <td><?php echo $row_query['nama_tamu']; ?></td>
                            <td><?php echo $row_query['harapan']; ?></td>
                            <td><?php echo $row_query['waktu']; ?></td>
                            <td>
                                <a href="delete.php?delete_wish=<?php echo $row_query['id_wish'] ?>" onclick="return confirm('Yakin ingin menghapus data ?')" class="btn btn-danger" title="Hapus Data"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } while ($row_query = mysqli_fetch_assoc($query)); ?>
                </tbody>
            </table>
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