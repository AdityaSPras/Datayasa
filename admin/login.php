<?php
session_start();
include '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LOGIN | DATAYASA</title>

    <!-- Custom fonts for this template-->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link rel="icon" type="image/png" href="../assets/img/Logo.png">

    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h6 text-gray-900 mb-4"><b>SISTEM INFORMASI INVENTARIS BARANG DAN SERVICE PERANGKAT KOMPUTER</b><br><br>
                                            <p><img src="../assets/img/Logo.png" width="100px" height="100px"></p>
                                        </h1>
                                    </div>
                                    <hr>
                                    <form class="user" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user text-center" name="Username" placeholder="Masukkan Username" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user text-center" name="Password" placeholder="Masukkan Password" required>
                                        </div>
                                        <button type="submit" name="login" class="btn btn-primary btn-user btn-block">Masuk</button>
                                    </form>
                                    <?php

                                    if (isset($_POST['login'])) {
                                        $Username = $_POST['Username'];
                                        $Password = base64_encode($_POST['Password']);
                                        $cek = $koneksi->query("SELECT * FROM tb_admin WHERE Username = '$Username' AND Password = '$Password'");
                                        $login = $cek->num_rows;
                                        if ($login == 1) {
                                            $_SESSION['Admin'] = $cek->fetch_assoc();
                                            echo "<br><div class='alert alert-success text-center'>Berhasil Masuk</div>";
                                            echo "<meta http-equiv='refresh' content='1;url=index.php'>";
                                        } else {
                                            echo "<br><div class='alert alert-danger text-center'>Gagal Masuk Silahkan Cek Kembali Username & Password Anda</div>";
                                            echo "<meta http-equiv='refresh' content='1;url=login.php'>";
                                        }
                                    }
                                    ?>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>

</body>

</html>