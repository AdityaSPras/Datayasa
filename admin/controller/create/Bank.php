<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="h3 mb-2 text-gray-800 text-center">Tambah Bank</h1>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form method="POST">
                    <div class="form-group">
                        <label for="BankName">Nama Bank</label>
                        <input type="text" class="form-control" name="BankName" required>
                    </div>
                    <div class="form-group">
                        <label for="BankCode">Kode Bank</label>
                        <input type="text" class="form-control" name="BankCode" required>
                    </div>
                    <div class="button text-center">
                        <button type="submit" class="btn btn-primary btn-sm" name="simpan" id="simpan"><span class="fas fa-save"></span> Simpan</button>
                        <button type="reset" class="btn btn-warning btn-sm"><span class="fas fa-eraser"></span> Reset</button>
                        <a class="btn btn-secondary btn-sm" href="index.php?page=bank" role="button"><span class="fas fa-reply"></span> Kembali</a>
                    </div>
                </form>
                <?php
                if (isset($_POST['simpan'])) {
                    $koneksi->query("INSERT INTO tb_bank(BankName, BankCode) VALUES('$_POST[BankName]' , '$_POST[BankCode]')");

                    echo "<br><div class='alert alert-success text-center'>Bank Berhasil Ditambahkan</div>";
                    echo "<meta http-equiv='refresh' content='1;url=index.php?page=bank'>";
                }
                ?>
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