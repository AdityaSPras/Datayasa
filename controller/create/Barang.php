<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="h3 mb-2 text-gray-800 text-center">Tambah Barang</h1>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="NameOfItem">Nama Barang</label>
                        <input type="text" class="form-control" name="NameOfItem" required>
                    </div>
                    <div class="form-group">
                        <label for="IdCategory">Kategori Barang</label>
                        <select class="form-control" name="IdCategory" id="IdCategory">
                            <option value="">--- Pilih Kategori Barang ---</option>
                            <option value=""></option>
                            <?php
                            include "../koneksi.php";
                            $show = mysqli_query($koneksi, "SELECT * FROM tb_items_category");
                            while ($row = mysqli_fetch_array($show)) {
                                echo "<option value='$row[IdCategory]'>$row[CategoryName]</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="IdSupplier">Distributor</label>
                        <select class="form-control" name="IdSupplier" id="IdSupplier">
                            <option value="">--- Pilih Distributor ---</option>
                            <option value=""></option>
                            <?php
                            include "../koneksi.php";
                            $show1 = mysqli_query($koneksi, "SELECT * FROM tb_supplier");
                            while ($row1 = mysqli_fetch_array($show1)) {
                                echo "<option value='$row1[IdSupplier]'>$row1[SupplierName]</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ConditionItems">Kondisi</label>
                        <select class="form-control" name="ConditionItems">
                            <option value="">--- Pilih Kondisi Barang ---</option>
                            <option value=""></option>
                            <option value="Baru">Baru</option>
                            <option value="Bekas">Bekas</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Unit">Satuan</label>
                        <input type="text" class="form-control" name="Unit" required>
                    </div>
                    <div class="form-group">
                        <label for="PurchasePrice">Harga Beli</label>
                        <input type="number" class="form-control" name="PurchasePrice" required>
                    </div>
                    <div class="form-group">
                        <label for="SellingPrice">Harga Jual</label>
                        <input type="number" class="form-control" name="SellingPrice" required>
                    </div>
                    <div class="form-group">
                        <label for="Stock">Stok</label>
                        <input type="number" class="form-control" name="Stock" required>
                    </div>
                    <div class="form-group">
                        <label for="Photo">Foto</label>
                        <input type="file" class="form-control" name="Photo">
                    </div>
                    <div class="button text-center">
                        <button type="submit" class="btn btn-primary btn-sm" name="simpan" id="simpan"><span class="fas fa-save"></span> Simpan</button>
                        <button type="reset" class="btn btn-warning btn-sm"><span class="fas fa-eraser"></span> Reset</button>
                        <a class="btn btn-secondary btn-sm" href="index.php?page=items" role="button"><span class="fas fa-arrow-left"></span> Kembali</a>
                    </div>
                </form>
                <?php
                if (isset($_POST['simpan'])) {

                    $Photo = $_FILES['Photo']['name'];
                    $Location = $_FILES['Photo']['tmp_name'];
                    move_uploaded_file($Location, "assets/img/items/" . $Photo);
                    $koneksi->query("INSERT INTO tb_items(IdCategory, IdSupplier, NameOfItem, Unit, Stock, ConditionItems, PurchasePrice, SellingPrice, Photo) VALUES('$_POST[IdCategory]' , '$_POST[IdSupplier]' , '$_POST[NameOfItem]' , '$_POST[Unit]' , '$_POST[Stock]' , '$_POST[ConditionItems]' , '$_POST[PurchasePrice]' , '$_POST[SellingPrice]' , '$Photo')");

                    echo "<br><div class='alert alert-success text-center'>Barang Berhasil Ditambahkan</div>";
                    echo "<meta http-equiv='refresh' content='1;url=index.php?page=items'>";
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