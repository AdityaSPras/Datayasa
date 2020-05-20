<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="h3 mb-2 text-gray-800 text-center">Ubah Kategori Barang</h1>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php
                $ambil = $koneksi->query("SELECT * FROM tb_items_category WHERE IdCategory = '$_GET[id]'");
                $pecah = $ambil->fetch_assoc();
                ?>
                <form method="POST">
                    <div class="form-group">
                        <label>Nama Kategori</label>
                        <input type="text" name="CategoryName" class="form-control" value="<?php echo $pecah['CategoryName'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="Description">Keterangan</label>
                        <textarea name="Description" cols="30" rows="5" class="form-control"><?php echo $pecah['Description'] ?></textarea>
                    </div>
                    <div class="button text-center">
                        <button class="btn btn-warning btn-sm" name="edit"><span class="fas fa-save"></span> Simpan</button>
                        <a class="btn btn-secondary btn-sm" href="index.php?page=items_category" role="button"><span class="fas fa-arrow-left"></span> Kembali</a>
                    </div>
                </form>

                <?php
                if (isset($_POST['edit'])) {
                    $koneksi->query("UPDATE tb_items_category SET CategoryName = '$_POST[CategoryName]' , Description = '$_POST[Description]'  WHERE IdCategory = '$_GET[id]'");

                    echo "<br><div class='alert alert-success text-center'>Kategori Barang Berhasil Diubah</div>";
                    echo "<meta http-equiv='refresh' content='1;url=index.php?page=items_category'>";
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