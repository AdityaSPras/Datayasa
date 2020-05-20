<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="h3 mb-2 text-gray-800 text-center">Ubah Bank</h1>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php
                $ambil = $koneksi->query("SELECT * FROM tb_bank WHERE IdBank = '$_GET[id]'");
                $pecah = $ambil->fetch_assoc();
                ?>
                <form method="POST">
                    <div class="form-group">
                        <label>Nama Bank</label>
                        <input type="text" name="BankName" class="form-control" value="<?php echo $pecah['BankName'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="BankCode">Kode Bank</label>
                        <input type="text" name="BankCode" class="form-control" value="<?php echo $pecah['BankCode'] ?>">
                    </div>
                    <div class="button text-center">
                        <button class="btn btn-warning btn-sm" name="edit"><span class="fas fa-save"></span> Simpan</button>
                        <a class="btn btn-secondary btn-sm" href="index.php?page=bank" role="button"><span class="fas fa-arrow-left"></span> Kembali</a>
                    </div>
                </form>

                <?php
                if (isset($_POST['edit'])) {
                    $koneksi->query("UPDATE tb_bank SET BankName = '$_POST[BankName]' , BankCode = '$_POST[BankCode]'  WHERE IdBank = '$_GET[id]'");

                    echo "<br><div class='alert alert-success text-center'>Bank Berhasil Diubah</div>";
                    echo "<meta http-equiv='refresh' content='1;url=index.php?page=bank'>";
                }
                ?>

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
        </div>
    </div>
</div>