<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="h3 mb-2 text-gray-800 text-center">Ubah Admin</h1>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php
                $ambil = $koneksi->query("SELECT * FROM tb_admin WHERE IdAdmin = '$_GET[id]'");
                $pecah = $ambil->fetch_assoc();
                ?>
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="FullName" class="form-control" value="<?php echo $pecah['FullName'] ?>">
                    </div>
                    <div class="form-group">
                        <label>No Telepon</label>
                        <input type="tel" name="PhoneNumber" class="form-control" value="<?php echo $pecah['PhoneNumber'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="Address" cols="30" rows="5" class="form-control"><?php echo $pecah['Address'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Fax</label>
                        <input type="tel" name="Fax" class="form-control" value="<?php echo $pecah['Fax'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="Email" class="form-control" value="<?php echo $pecah['Email'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Website</label>
                        <input type="text" name="Website" class="form-control" value="<?php echo $pecah['Website'] ?>">
                    </div>
                    <div class="form-group text-center">
                        <img src="../assets/img/admin/<?php echo $pecah['Photo']; ?>" width="150" height="150">
                    </div>
                    <div class="form-group">
                        <label for="Photo">Ubah Foto</label>
                        <input type="file" class="form-control" name="Photo">
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="Username" class="form-control" value="<?php echo $pecah['Username'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="password" class="form-control" name="Password" required>
                    </div>
                    <div class="button text-center">
                        <button class="btn btn-warning btn-sm" name="edit"><span class="fas fa-save"></span> Simpan</button>
                        <a class="btn btn-secondary btn-sm" href="index.php?page=profile" role="button"><span class="fas fa-arrow-left"></span> Kembali</a>
                    </div>
                </form>

                <?php
                if (isset($_POST['edit'])) {
                    $Password = base64_encode($_POST['Password']);
                    $Photo1 = $_FILES['Photo']['name'];
                    $Location = $_FILES['Photo']['tmp_name'];

                    if (!empty($Location)) {
                        move_uploaded_file($Location, "../assets/img/admin/" . $Photo1);

                        $koneksi->query("UPDATE tb_admin SET Username = '$_POST[Username]', Password = '$Password', FullName = '$_POST[FullName]' , Photo = '$Photo1' , PhoneNumber = '$_POST[PhoneNumber]' , Address = '$_POST[Address]' , Fax = '$_POST[Fax]' , Website = '$_POST[Website]' , Email = '$_POST[Email]' WHERE IdAdmin = '$_GET[id]'");
                    } else {
                        $koneksi->query("UPDATE tb_admin SET Username = '$_POST[Username]', Password = '$Password', FullName = '$_POST[FullName]', PhoneNumber = '$_POST[PhoneNumber]' , Address = '$_POST[Address]' , Fax = '$_POST[Fax]' , Website = '$_POST[Website]' , Email = '$_POST[Email]' WHERE IdAdmin = '$_GET[id]'");
                    }

                    echo "<br><div class='alert alert-success text-center'>Data Admin Berhasil Diubah, Silahkan Logout Terlebih Dahulu Untuk Melihat Perubahan</div>";
                    echo "<meta http-equiv='refresh' content='1;url=index.php'>";
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