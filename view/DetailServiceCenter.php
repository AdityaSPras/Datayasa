<?php
$ambil = $koneksi->query("SELECT * FROM tb_service_center WHERE IdServiceCenter = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="row">
					<div class="col-md-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Detail : <?= $pecah['NameOfServiceCenter']; ?></h5>
        </div>
        <div class="card-body">
        <div class="row">
									<div class="col-md-3 text-center">
                                        <img src="assets/img/service_center/<?= $pecah['Photo']; ?>" class="img-thumbnail mb-4"><p>
                                        <a class="btn btn-secondary btn-sm" href="index.php?page=service_center" role="button"><span class="fas fa-reply"></span> Kembali</a></p>
									</div>
									<div class="col-md-9">
            <div class="table-responsive">
                <table class="table table-borderless">
                <tr>
                        <th>Nama</th>
                        <td>:</td>
                        <td><?= $pecah['NameOfServiceCenter']; ?></td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>:</td>
                        <td><?= $pecah['Address']; ?></td>
                    </tr>
                    <tr>
                        <th>No Telepon</th>
                        <td>:</td>
                        <td><?= $pecah['PhoneNumber']; ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>:</td>
                        <td><?= $pecah['Email']; ?></td>
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