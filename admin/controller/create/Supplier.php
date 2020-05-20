<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="h3 mb-2 text-gray-800 text-center">Tambah Distributor</h1>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="SupplierName">Nama Distributor</label>
                        <input type="text" class="form-control" name="SupplierName" required>
                    </div>
                    <div class="form-group">
                        <label for="Address">Alamat</label>
                        <textarea name="Address" cols="30" rows="5" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="PhoneNumber">No Telepon</label>
                        <input type="tel" class="form-control" name="PhoneNumber" required>
                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="email" class="form-control" name="Email">
                    </div>
                    <div class="form-group">
                        <label for="Photo">Foto</label>
                        <input type="file" class="form-control" name="Photo">
                    </div>
                    <div class="form-group">
                        <label for="Bank">Bank</label>
                        <select class="form-control" name="Bank" id="Bank">
                            <option value="">--- Pilih Bank ---</option>
                            <option value=""></option>
                            <?php
                            include "../koneksi.php";
                            $show = mysqli_query($koneksi, "SELECT * FROM tb_bank");
                            while ($row = mysqli_fetch_array($show)) {
                                echo "<option value='$row[BankName]'>$row[BankName]</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="AccountNumber">No Rekening</label>
                        <input type="number" class="form-control" name="AccountNumber">
                    </div>
                    <div class="button text-center">
                        <button type="submit" class="btn btn-primary btn-sm" name="simpan" id="simpan"><span class="fas fa-save"></span> Simpan</button>
                        <button type="reset" class="btn btn-warning btn-sm"><span class="fas fa-eraser"></span> Reset</button>
                        <a class="btn btn-secondary btn-sm" href="index.php?page=supplier" role="button"><span class="fas fa-arrow-left"></span> Kembali</a>
                    </div>
                </form>
                <?php
                if (isset($_POST['simpan'])) {

                    $Photo = $_FILES['Photo']['name'];
                    $Location = $_FILES['Photo']['tmp_name'];
                    move_uploaded_file($Location, "../assets/img/supplier/" . $Photo);
                    $koneksi->query("INSERT INTO tb_supplier(SupplierName, Address, PhoneNumber, Photo, Email, Bank, AccountNumber) VALUES('$_POST[SupplierName]' , '$_POST[Address]' , '$_POST[PhoneNumber]' , '$Photo' , '$_POST[Email]' , '$_POST[Bank]' , '$_POST[AccountNumber]')");

                    echo "<br><div class='alert alert-success text-center'>Distributor Berhasil Ditambahkan</div>";
                    echo "<meta http-equiv='refresh' content='1;url=index.php?page=supplier'>";
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