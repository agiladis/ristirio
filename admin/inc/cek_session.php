<?php
ini_set('session.save_path', realpath(dirname($_SERVER['DOCUMENT_ROOT']) . '/../session'));
session_start();

//cek apakah session ada
if (!isset($_SESSION['username'])) {
header("Location: index.php?alert=access_denied");
}
