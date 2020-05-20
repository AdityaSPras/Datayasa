<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-primary text-center"><?php echo $_SESSION['Admin']['FullName']; ?></h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <img src="../assets/img/admin/<?php echo $_SESSION['Admin']['Photo']; ?>" width="200px" height="200px" class="img-thumbnail mb-5">
                            <p>
                                <a class="btn btn-warning btn-sm" a href="index.php?page=update_admin&id=<?php echo $_SESSION['Admin']['IdAdmin'] ?>"><span class="fas fa-edit"></span> Ubah</a>
                                <a class="btn btn-secondary btn-sm" href="index.php" role="button"><span class="fas fa-reply"></span> Kembali</a>
                            </p>
                        </div>
                        <div class="col-md-7">
                            <div class="table-responsive">
                                <table class="table table-borderless">
                                    <tr>
                                        <th>Username</th>
                                        <td>:</td>
                                        <td><?php echo $_SESSION['Admin']['Username']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Nama</th>
                                        <td>:</td>
                                        <td><?php echo $_SESSION['Admin']['FullName']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>No Telepon</th>
                                        <td>:</td>
                                        <td><?php echo $_SESSION['Admin']['PhoneNumber']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td>:</td>
                                        <td><?php echo $_SESSION['Admin']['Address']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Fax</th>
                                        <td>:</td>
                                        <td><?php echo $_SESSION['Admin']['Fax']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>:</td>
                                        <td><?php echo $_SESSION['Admin']['Email']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Website</th>
                                        <td>:</td>
                                        <td><?php echo $_SESSION['Admin']['Website']; ?></td>
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