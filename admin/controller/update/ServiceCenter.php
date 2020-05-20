<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="h3 mb-2 text-gray-800 text-center">Ubah Data Service Center</h1>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php
                $ambil = $koneksi->query("SELECT * FROM tb_service_center WHERE IdServiceCenter = '$_GET[id]'");
                $pecah = $ambil->fetch_assoc();
                ?>
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama Service Center</label>
                        <input type="text" name="NameOfServiceCenter" class="form-control" value="<?php echo $pecah['NameOfServiceCenter'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="Address">Alamat</label>
                        <textarea name="Address" cols="30" rows="5" class="form-control"><?php echo $pecah['Address'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>No Telepon</label>
                        <input type="tel" name="PhoneNumber" class="form-control" value="<?php echo $pecah['PhoneNumber'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="Email" class="form-control" value="<?php echo $pecah['Email'] ?>">
                    </div>
                    <div class="form-group text-center">
                        <img src="../assets/img/service_center/<?php echo $pecah['Photo']; ?>" width="150" height="200">
                    </div>
                    <div class="form-group">
                        <label for="Photo">Ubah Foto</label>
                        <input type="file" class="form-control" name="Photo">
                    </div>
                    <div class="button text-center">
                        <button class="btn btn-warning btn-sm" name="edit"><span class="fas fa-save"></span> Simpan</button>
                        <a class="btn btn-secondary btn-sm" href="index.php?page=service_center" role="button"><span class="fas fa-arrow-left"></span> Kembali</a>
                    </div>
                </form>

                <?php
                if (isset($_POST['edit'])) {
                    $Photo1 = $_FILES['Photo']['name'];
                    $Location = $_FILES['Photo']['tmp_name'];
                    
                    if (!empty($Location)) {
                        move_uploaded_file($Location, "../assets/img/service_center/" . $Photo1);

                        $koneksi->query("UPDATE tb_service_center SET NameOfServiceCenter = '$_POST[NameOfServiceCenter]' , Address = '$_POST[Address]' , PhoneNumber = '$_POST[PhoneNumber]' , Email = '$_POST[Email]' , Photo = '$Photo1' WHERE IdServiceCenter = '$_GET[id]'");
                    } else {
                        $koneksi->query("UPDATE tb_service_center SET NameOfServiceCenter = '$_POST[NameOfServiceCenter]' , Address = '$_POST[Address]' , PhoneNumber = '$_POST[PhoneNumber]' , Email = '$_POST[Email]' WHERE IdServiceCenter = '$_GET[id]'");
                    }

                    echo "<br><div class='alert alert-success text-center'>Data Service Center Berhasil Diubah</div>";
                    echo "<meta http-equiv='refresh' content='1;url=index.php?page=service_center'>";
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