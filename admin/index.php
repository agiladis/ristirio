<html lang="en">
<?php
ini_set('session.save_path', realpath(dirname($_SERVER['DOCUMENT_ROOT']) . '/../session'));
session_start();
?>
<?php include 'inc/koneksi.php'; ?>
<?php
if (isset($_POST['login'])) {
    //cek data user di database
    $username = $_POST['username'];
    $password_hint = $_POST['password'];
    $password = sha1($password_hint);
    $query = mysqli_query($koneksi, "SELECT * FROM tbl_admin WHERE username = '$username' AND password = '$password'");
    $check_data = mysqli_num_rows($query);
    $row_data = mysqli_fetch_assoc($query);

    if ($check_data > 0) {
        $_SESSION['username'] = $row_data['username'];
        $_SESSION['nama'] = $row_data['nama'];
        header("Location: home.php");
    } else {
        header("Location: index.php?login=failed");
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Inventaris</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="login-page">
    <main>
        <div id="content" class="text-center m-auto">
            <div class="box-login">
                <div class="login-logo">
                    <h1>RISTIRIO WEDDING</h1>
                </div> <!-- end login-logo -->
                <div class="login-box-body">
                    <div class="login-box-msg">
                        <p>log in untuk memulai !!!</p>
                    </div> <!-- end login-box-msg -->
                    <form method="POST">
                        <div class="login-form">
                            <input type="text" name="username" class="form-control control rounded-0" placeholder="Username">
                            <br>
                            <input type="password" name="password" class="form-control control rounded-0" placeholder="Password">
                        </div> <!-- end login-form -->
                        <br>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <button type="submit" name="login" class="btn btn-block btn-flat btn-success rounded-0">Masuk</button>
                            </div>
                        </div> <!-- end row -->

                        <div class="login-help text-left">
                            <a href="JavaScript:Void(0);" class="text-info">saya lupa password</a>
                            <br>
                            <a href="JavaScript:Void(0);" class="text-info">daftar akun baru</a>
                        </div> <!-- end login-help -->
                    </form>
                </div>
            </div> <!-- end box-login -->
        </div> <!-- end content -->
    </main>

    <script src="./js/jquery-3.5.1.js"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
</body>

</html>