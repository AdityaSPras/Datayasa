<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="h3 mb-2 text-gray-800 text-center">Ubah Data Service</h1>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php
                $ambil = $koneksi->query("SELECT * FROM tb_service WHERE IdService = '$_GET[id]'");
                $pecah = $ambil->fetch_assoc();
                ?>
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama Pelanggan</label>
                        <input type="text" name="CustomerName" class="form-control" value="<?php echo $pecah['CustomerName'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" name="NameOfItem" class="form-control" value="<?php echo $pecah['NameOfItem'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Tipe Barang</label>
                        <input type="text" name="TypeOfItem" class="form-control" value="<?php echo $pecah['TypeOfItem'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Serial Number</label>
                        <input type="text" name="SerialNumber" class="form-control" value="<?php echo $pecah['SerialNumber'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="Completness">Kelengkapan Barang</label>
                        <textarea name="Completness" cols="30" rows="5" class="form-control"><?php echo $pecah['Completness'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="Problem">Permasalahan</label>
                        <textarea name="Problem" cols="30" rows="5" class="form-control"><?php echo $pecah['Problem'] ?></textarea>
                    </div>

                    <div class="form-group text-center">
                        <img src="assets/img/service/<?php echo $pecah['Photo']; ?>" width="150" height="200">
                    </div>
                    <div class="form-group">
                        <label for="Photo">Ubah Foto</label>
                        <input type="file" class="form-control" name="Photo">
                    </div>
                    <div class="form-group">
                        <label>No Telepon/Handphone</label>
                        <input type="tel" name="PhoneNumber" class="form-control" value="<?php echo $pecah['PhoneNumber'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="StatusService" class="form-control">
                            <option value="Diproses" <?php if($pecah['StatusService'] == "Diproses") { echo "selected";} ?>>Diproses</option>
                            <option value="Selesai" <?php if($pecah['StatusService'] == "Selesai") { echo "selected";} ?>>Selesai</option>
                            <option value="Sudah Diambil" <?php if($pecah['StatusService'] == "Sudah Diambil") { echo "selected";} ?>>Sudah Diambil</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="IdServiceCenter">Service Center</label>
                        <select class="form-control" name="IdServiceCenter" id="IdServiceCenter">
                            <option value=""></option>
                            <?php
                            include "../koneksi.php";
                            $show = mysqli_query($koneksi, "SELECT * FROM tb_service_center");
                            while ($row = mysqli_fetch_array($show)) {
                                echo "<option value='$row[IdServiceCenter]'>$row[NameOfServiceCenter]</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="DateOfEntry">Tanggal Masuk</label>
                        <input type="date" class="form-control" name="DateOfEntry" value="<?php echo $pecah['DateOfEntry'] ?>" readonly="">
                    </div>
                    <div class="button text-center">
                        <button class="btn btn-warning btn-sm" name="edit"><span class="fas fa-save"></span> Simpan</button>
                        <a class="btn btn-secondary btn-sm" href="index.php?page=service" role="button"><span class="fas fa-arrow-left"></span> Kembali</a>
                    </div>
                </form>

                <?php
                if (isset($_POST['edit'])) {
                    $Photo1 = $_FILES['Photo']['name'];
                    $Location = $_FILES['Photo']['tmp_name'];
                    
                    if (!empty($Location)) {
                        move_uploaded_file($Location, "assets/img/service/" . $Photo1);

                        $koneksi->query("UPDATE tb_service SET SerialNumber = '$_POST[SerialNumber]' , CustomerName = '$_POST[CustomerName]' , TypeOfItem = '$_POST[TypeOfItem]' , NameOfItem = '$_POST[NameOfItem]' , Problem = '$_POST[Problem]' , Completness = '$_POST[Completness]' , Photo = '$Photo1' , PhoneNumber = '$_POST[PhoneNumber]' , StatusService = '$_POST[StatusService]' , DateOfEntry = '$_POST[DateOfEntry]' , IdServiceCenter = '$_POST[IdServiceCenter]' WHERE IdService = '$_GET[id]'");
                    } else {
                        $koneksi->query("UPDATE tb_service SET SerialNumber = '$_POST[SerialNumber]' , CustomerName = '$_POST[CustomerName]' , TypeOfItem = '$_POST[TypeOfItem]' , NameOfItem = '$_POST[NameOfItem]' , Problem = '$_POST[Problem]' , Completness = '$_POST[Completness]' , PhoneNumber = '$_POST[PhoneNumber]' , StatusService = '$_POST[StatusService]' , DateOfEntry = '$_POST[DateOfEntry]' , IdServiceCenter = '$_POST[IdServiceCenter]' WHERE IdService = '$_GET[id]'");
                    }

                    echo "<br><div class='alert alert-success text-center'>Data Service Berhasil Diubah</div>";
                    echo "<meta http-equiv='refresh' content='1;url=index.php?page=service'>";
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