<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Halaman Utama</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Karyawan/Users -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Karyawan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                require_once 'koneksi.php';
                                $jumlah = "SELECT COUNT(*) FROM tb_users";
                                $data = mysqli_query($koneksi, $jumlah);
                                $row = mysqli_fetch_row($data);
                                echo $row[0];
                                mysqli_free_result($data);
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Distributor/Supplier -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Distributor</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                require_once 'koneksi.php';
                                $jumlah = "SELECT COUNT(*) FROM tb_supplier";
                                $data = mysqli_query($koneksi, $jumlah);
                                $row = mysqli_fetch_row($data);
                                echo $row[0];
                                mysqli_free_result($data);
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-hands fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Service Center -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Service Center</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                require_once 'koneksi.php';
                                $jumlah = "SELECT COUNT(*) FROM tb_service_center";
                                $data = mysqli_query($koneksi, $jumlah);
                                $row = mysqli_fetch_row($data);
                                echo $row[0];
                                mysqli_free_result($data);
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users-cog fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Barang/Items -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Barang</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                require_once 'koneksi.php';
                                $jumlah = "SELECT COUNT(*) FROM tb_items";
                                $data = mysqli_query($koneksi, $jumlah);
                                $row = mysqli_fetch_row($data);
                                echo $row[0];
                                mysqli_free_result($data);
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dolly-flatbed fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Service -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Service</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                require_once 'koneksi.php';
                                $jumlah = "SELECT COUNT(*) FROM tb_service WHERE StatusService NOT LIKE 'Sudah Diambil%'";
                                $data = mysqli_query($koneksi, $jumlah);
                                $row = mysqli_fetch_row($data);
                                echo $row[0];
                                mysqli_free_result($data);
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-cogs fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12 card shadow">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary text-center">SELAMAT DATANG</h5>
            </div>
            <div class="card-body">
                <h6 class="text-center"><b>SISTEM INFORMASI INVENTARIS BARANG DAN SERVICE PERANGKAT KOMPUTER</b><p>Anda Telah Login Sebagai <b><?php echo $_SESSION['User']['FullName']; ?></b></p>
                    <p>
                        <?php
                        $tanggal = mktime(date("m"), date("d"), date("Y"));
                        echo "Tanggal : <b>" . date("d-M-Y", $tanggal) . "</b> ";
                        date_default_timezone_set('Asia/Makassar');
                        $jam = date("H:i");
                        echo "| Pukul : <b>" . $jam . " " . " WITA</b>";
                        ?>
                    </p>
                </h6>
                <p></p><br><br>
            </div>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Content Column -->
            <div class="col-lg-12 mb-1">

                <div class="col-lg-12 mb-1">

                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->