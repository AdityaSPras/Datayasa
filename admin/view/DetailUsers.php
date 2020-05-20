<?php
$ambil = $koneksi->query("SELECT * FROM tb_users U INNER JOIN tb_division D ON U.IdDivision=D.IdDivision WHERE IdUser = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$date = date('d-m-Y',strtotime($pecah['DateOfBirth']));
$date2 = date('d-M-Y',strtotime($pecah['Active']));
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="row">
					<div class="col-md-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Detail - <?= $pecah['FullName']; ?></h5>
        </div>
        <div class="card-body">
        <div class="row">
									<div class="col-md-2 text-center">
                                        <img src="../assets/img/users/<?= $pecah['Photo']; ?>" class="img-thumbnail mb-4"><p>
                                        <a class="btn btn-secondary btn-sm" href="index.php?page=users" role="button"><span class="fas fa-reply"></span> Kembali</a></p>
									</div>
									<div class="col-md-7">
            <div class="table-responsive">
                <table class="table table-borderless">
                <tr>
                        <th>Username</th>
                        <td>:</td>
                        <td><?= $pecah['Username']; ?></td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td>:</td>
                        <td><?= $pecah['FullName']; ?></td>
                    </tr>
                    <tr>
                        <th>Tempat & Tanggal Lahir</th>
                        <td>:</td>
                        <td><?= $pecah['PlaceOfBirth']; ?>, <?= $date; ?></td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td>:</td>
                        <td><?= $pecah['Gender']; ?></td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>:</td>
                        <td><?= $pecah['Address']; ?></td>
                    </tr>
                    <tr>
                        <th>Agama</th>
                        <td>:</td>
                        <td><?= $pecah['Religion']; ?></td>
                    </tr>
                    <tr>
                        <th>No Handphone</th>
                        <td>:</td>
                        <td><?= $pecah['PhoneNumber']; ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>:</td>
                        <td><?= $pecah['Email']; ?></td>
                    </tr>
                    <tr>
                        <th>Mulai Kerja</th>
                        <td>:</td>
                        <td><?= $date2; ?></td>
                    </tr>
                    <tr>
                        <th>Divisi</th>
                        <td>:</td>
                        <td><?= $pecah['DivisionName']; ?></td>
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