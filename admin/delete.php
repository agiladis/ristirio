<?php
include 'inc/cek_session.php';
include 'inc/koneksi.php';
?>
<?php
// DELETE data tamu
if (isset($_GET['delete'])) {
    // Ambil id
    $kode = $_GET['delete'];

    // Drop row data dari db
    $query_delete = mysqli_query($koneksi, "DELETE FROM tbl_kehadiran WHERE id_kehadiran = '" . $kode . "'");

    //jika berhasil
    if ($query_delete) {
        header("Location: dataTamu.php?delete=success");
    }
}

// DELETE data wish
if (isset($_GET['delete_wish'])) {
    // Ambil id
    $kode = $_GET['delete_wish'];

    // Drop row data dari db
    $query_delete = mysqli_query($koneksi, "DELETE FROM tbl_harapan WHERE id_wish = '" . $kode . "'");

    //jika berhasil
    if ($query_delete) {
        header("Location: dataHarapan.php?delete=success");
    }
}
?>