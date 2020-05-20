<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-primary text-center"><?php echo $_SESSION['User']['FullName']; ?></h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <img src="assets/img/users/<?php echo $_SESSION['User']['Photo']; ?>" width="200px" height="200px" class="img-thumbnail mb-5">
                            <p>
                                <a class="btn btn-warning btn-sm" a href="index.php?page=update_user&id=<?php echo $_SESSION['User']['IdUser'] ?>"><span class="fas fa-edit"></span> Ubah</a>
                                <a class="btn btn-secondary btn-sm" href="index.php" role="button"><span class="fas fa-reply"></span> Kembali</a>
                            </p>
                        </div>
                        <div class="col-md-7">
                            <div class="table-responsive">
                                <table class="table table-borderless">
                                    <tr>
                                        <th>Username</th>
                                        <td>:</td>
                                        <td><?php echo $_SESSION['User']['Username']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Password</th>
                                        <td>:</td>
                                        <td>Password Terenkripsi</td>
                                    </tr>
                                    <tr>
                                        <th>Nama</th>
                                        <td>:</td>
                                        <td><?php echo $_SESSION['User']['FullName']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tempat & Tanggal Lahir</th>
                                        <td>:</td>
                                        <td><?php
                                                $date = date('d-m-Y',strtotime($_SESSION['User']['DateOfBirth']));
                                            ?>
                                        <?php echo $_SESSION['User']['PlaceOfBirth']; ?>, <?= $date; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <td>:</td>
                                        <td><?php echo $_SESSION['User']['Gender']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Agama</th>
                                        <td>:</td>
                                        <td><?php echo $_SESSION['User']['Religion']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>No Telepon</th>
                                        <td>:</td>
                                        <td><?php echo $_SESSION['User']['PhoneNumber']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td>:</td>
                                        <td><?php echo $_SESSION['User']['Address']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>:</td>
                                        <td><?php echo $_SESSION['User']['Email']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Mulai Bekerja</th>
                                        <td>:</td>
                                        <td><?php
                                            $date2 = date('d-M-Y',strtotime($_SESSION['User']['Active']));
                                        ?>
                                        <?= $date2; ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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