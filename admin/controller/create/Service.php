<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="h3 mb-2 text-gray-800 text-center">Tambah Service</h1>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="CustomerName">Nama Pelanggan</label>
                        <input type="text" class="form-control" name="CustomerName" required>
                    </div>
                    <div class="form-group">
                        <label for="NameOfItem">Nama Barang</label>
                        <input type="text" class="form-control" name="NameOfItem" required>
                    </div>
                    <div class="form-group">
                        <label for="TypeOfItem">Tipe Barang</label>
                        <input type="text" class="form-control" name="TypeOfItem">
                    </div>
                    <div class="form-group">
                        <label for="SerialNumber">Serial Number</label>
                        <input type="text" class="form-control" name="SerialNumber">
                    </div>
                    <div class="form-group">
                        <label for="Completness">Kelengkapaan Barang</label>
                        <textarea name="Completness" cols="30" rows="5" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="Problem">Permasalahaan</label>
                        <textarea name="Problem" cols="30" rows="5" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="IdServiceCenter">Service Center</label>
                        <select class="form-control" name="IdServiceCenter" id="IdServiceCenter">
                            <option value="">--- Pilih Service Center ---</option>
                            <option value=""></option>
                            <?php
                            include "../koneksi.php";
                            $show1 = mysqli_query($koneksi, "SELECT * FROM tb_service_center");
                            while ($row1 = mysqli_fetch_array($show1)) {
                                echo "<option value='$row1[IdServiceCenter]'>$row1[NameOfServiceCenter]</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Photo">Foto</label>
                        <input type="file" class="form-control" name="Photo">
                    </div>
                    <div class="form-group">
                        <label for="PhoneNumber">No Telepon/Handphone</label>
                        <input type="tel" class="form-control" name="PhoneNumber" required>
                    </div>
                    <div class="form-group">
                        <label for="StatusService">Status</label>
                        <select name="StatusService" class="form-control">
                            <option value="">---Pilih Status---</option>
                            <option value="Diproses">Diproses</option>
                            <option value="Selesai">Selesai</option>
                            <option value="Sudah Diambil">Sudah Diambil</option>
                        </select>
                    </div>
                    <div class="button text-center">
                        <button type="submit" class="btn btn-primary btn-sm" name="simpan" id="simpan"><span class="fas fa-save"></span> Simpan</button>
                        <button type="reset" class="btn btn-warning btn-sm"><span class="fas fa-eraser"></span> Reset</button>
                        <a class="btn btn-secondary btn-sm" href="index.php?page=service" role="button"><span class="fas fa-arrow-left"></span> Kembali</a>
                    </div>
                </form>
                <?php
                if (isset($_POST['simpan'])) {

                    $date = date("Y-m-d H:i:s");
                    $Photo = $_FILES['Photo']['name'];
                    $Location = $_FILES['Photo']['tmp_name'];
                    move_uploaded_file($Location, "../assets/img/service/" . $Photo);
                    $koneksi->query("INSERT INTO tb_service (SerialNumber, CustomerName, TypeOfItem, NameOfItem, Problem, Completness, Photo, PhoneNumber, StatusService, DateOfEntry, IdServiceCenter) VALUES('$_POST[SerialNumber]' , '$_POST[CustomerName]' , '$_POST[TypeOfItem]' , '$_POST[NameOfItem]' , '$_POST[Problem]' , '$_POST[Completness]' , '$Photo' , '$_POST[PhoneNumber]' , '$_POST[StatusService]' , '$date' , '$_POST[IdServiceCenter]')");

                    echo "<br><div class='alert alert-success text-center'>Service Berhasil Ditambahkan</div>";
                    echo "<meta http-equiv='refresh' content='1;url=index.php?page=service'>";
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