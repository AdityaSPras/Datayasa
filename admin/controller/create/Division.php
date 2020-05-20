<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="h3 mb-2 text-gray-800 text-center">Tambah Divisi</h1>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form method="POST">
                    <div class="form-group">
                        <label for="DivisionName">Nama Divisi</label>
                        <input type="text" class="form-control" name="DivisionName" required>
                    </div>
                    <div class="button text-center">
                        <button type="submit" class="btn btn-primary btn-sm" name="simpan" id="simpan"><span class="fas fa-save"></span> Simpan</button>
                        <button type="reset" class="btn btn-warning btn-sm"><span class="fas fa-eraser"></span> Reset</button>
                        <a class="btn btn-secondary btn-sm" href="index.php?page=division" role="button"><span class="fas fa-arrow-left"></span> Kembali</a>
                    </div>
                </form>
                <?php
                if (isset($_POST['simpan'])) {
                    $koneksi->query("INSERT INTO tb_division(DivisionName) VALUES('$_POST[DivisionName]')");

                    echo "<br><div class='alert alert-success text-center'>Divisi Berhasil Ditambahkan</div>";
                    echo "<meta http-equiv='refresh' content='1;url=index.php?page=division'>";
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