<?php
$ambil = $koneksi->query("SELECT tb_service.SerialNumber, tb_service.CustomerName, tb_service.TypeOfItem, tb_service.NameOfItem, tb_service.Problem, tb_service.Completness, tb_service.Photo, tb_service.PhoneNumber, tb_service.StatusService, tb_service.DateOfEntry, tb_service_center.NameOfServiceCenter FROM tb_service JOIN tb_service_center ON tb_service.IdServiceCenter = tb_service_center.IdServiceCenter WHERE IdService = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$date = date('d-M-Y',strtotime($pecah['DateOfEntry']));
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="row">
					<div class="col-md-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Detail Service : <?= $pecah['CustomerName']; ?></h5>
        </div>
        <div class="card-body">
        <div class="row">
									<div class="col-md-3 text-center">
                                        <img src="../assets/img/service/<?= $pecah['Photo']; ?>" class="img-thumbnail mb-4"><p>
                                        <a class="btn btn-secondary btn-sm" href="index.php?page=service" role="button"><span class="fas fa-reply"></span> Kembali</a></p>
									</div>
									<div class="col-md-9">
            <div class="table-responsive">
                <table class="table table-borderless">
                <tr>
                        <th>Nama Pelanggan</th>
                        <td>:</td>
                        <td><?= $pecah['CustomerName']; ?></td>
                    </tr>
                    <tr>
                        <th>Nama Barang</th>
                        <td>:</td>
                        <td><?= $pecah['NameOfItem']; ?></td>
                    </tr>
                    <tr>
                        <th>Tipe Barang</th>
                        <td>:</td>
                        <td><?= $pecah['TypeOfItem']; ?></td>
                    </tr>
                    <tr>
                        <th>Serial Number</th>
                        <td>:</td>
                        <td><?= $pecah['SerialNumber']; ?></td>
                    </tr>
                     <tr>
                        <th>Permasalahan</th>
                        <td>:</td>
                        <td><?= $pecah['Problem']; ?></td>
                    </tr>
                     <tr>
                        <th>Kelengkapan</th>
                        <td>:</td>
                        <td><?= $pecah['Completness']; ?></td>
                    </tr>
                    <tr>
                        <th>No Telepon</th>
                        <td>:</td>
                        <td><?= $pecah['PhoneNumber']; ?></td>
                    </tr>
                    <tr>
                        <th>Tanggal Masuk</th>
                        <td>:</td>
                        <td><?= $date; ?></td>
                    </tr>
                    <tr>
                        <th>Service Center</th>
                        <td>:</td>
                        <td><?= $pecah['NameOfServiceCenter']; ?></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>:</td>
                        <td><?= $pecah['StatusService']; ?></td>
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