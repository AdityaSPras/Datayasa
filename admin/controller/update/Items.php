<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="h3 mb-2 text-gray-800 text-center">Edit Data Barang</h1>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php
                $ambil = $koneksi->query("SELECT * FROM tb_items WHERE IdItem = '$_GET[id]'");
                $pecah = $ambil->fetch_assoc();
                ?>
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" name="NameOfItem" class="form-control" value="<?php echo $pecah['NameOfItem'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Jenis Barang</label>
                        <select class="form-control" name="IdCategory" id="IdCategory">
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
                        <label>Satuan</label>
                        <input type="text" name="Unit" class="form-control" value="<?php echo $pecah['Unit'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="Supplier">Distributor</label>
                        <select class="form-control" name="IdSupplier" id="IdSupplier">
                            <option value=""></option>
                            <?php
                            include "../koneksi.php";
                            $show = mysqli_query($koneksi, "SELECT * FROM tb_supplier");
                            while ($row = mysqli_fetch_array($show)) {
                                echo "<option value='$row[IdSupplier]'>$row[SupplierName]</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Harga Beli</label>
                        <input type="number" name="PurchasePrice" class="form-control" value="<?php echo $pecah['PurchasePrice'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Harga Jual</label>
                        <input type="number" name="SellingPrice" class="form-control" value="<?php echo $pecah['SellingPrice'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Stok</label>
                        <input type="number" name="Stock" class="form-control" value="<?php echo $pecah['Stock'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Kondisi Barang</label>
                        <select name="ConditionItems" class="form-control">
                            <option value="Baru" <?php if($pecah['ConditionItems'] == "Baru") { echo "selected";} ?>>Baru</option>
                            <option value="Bekas" <?php if($pecah['ConditionItems'] == "Bekas") { echo "selected";} ?>>Bekas</option>
                        </select>
                    </div>
                    <div class="form-group text-center">
                        <img src="../assets/img/items/<?php echo $pecah['Photo']; ?>" width="150" height="200">
                    </div>
                    <div class="form-group">
                        <label for="Photo">Ubah Foto</label>
                        <input type="file" class="form-control" name="Photo">
                    </div>
                    <div class="button text-center">
                        <button type="submit" class="btn btn-warning btn-sm" name="update" id="update"><span class="fas fa-save"></span> Simpan</button>
                        <a class="btn btn-secondary btn-sm" href="index.php?page=items" role="button"><span class="fas fa-arrow-left"></span> Kembali</a>
                    </div>
                </form>

                <?php
                if (isset($_POST['update'])) {
                    $Photo1 = $_FILES['Photo']['name'];
                    $Location = $_FILES['Photo']['tmp_name'];

                    if (!empty($Location)) {
                        move_uploaded_file($Location, "../assets/img/items/" . $Photo1);

                        $koneksi->query("UPDATE tb_items SET IdCategory = '$_POST[IdCategory]', IdSupplier = '$_POST[IdSupplier]', NameOfItem = '$_POST[NameOfItem]', Unit = '$_POST[Unit]', Stock = '$_POST[Stock]', ConditionItems = '$_POST[ConditionItems]', PurchasePrice = '$_POST[PurchasePrice]', SellingPrice = '$_POST[SellingPrice]' , Photo = '$Photo1' WHERE IdItem = '$_GET[id]'");
                    } else {
                        $koneksi->query("UPDATE tb_items SET IdCategory = '$_POST[IdCategory]', IdSupplier = '$_POST[IdSupplier]', NameOfItem = '$_POST[NameOfItem]', Unit = '$_POST[Unit]', Stock = '$_POST[Stock]', ConditionItems = '$_POST[ConditionItems]', PurchasePrice = '$_POST[PurchasePrice]', SellingPrice = '$_POST[SellingPrice]' WHERE IdItem = '$_GET[id]'");
                    }

                    echo "<br><div class='alert alert-success text-center'>Barang Berhasil Di Ubah</div>";
                    echo "<meta http-equiv='refresh' content='1;url=index.php?page=items'>";
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