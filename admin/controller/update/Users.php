<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="h3 mb-2 text-gray-800 text-center">Ubah Karyawan</h1>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php
                $ambil = $koneksi->query("SELECT * FROM tb_users WHERE IdUser = '$_GET[id]'");
                $pecah = $ambil->fetch_assoc();
                ?>
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="FullName" class="form-control" value="<?php echo $pecah['FullName'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" name="PlaceOfBirth" class="form-control" value="<?php echo $pecah['PlaceOfBirth'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="DateOfBirth" class="form-control" value="<?php echo $pecah['DateOfBirth'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                            <br><input type="radio" name="Gender" value="Laki-Laki" <?php if($pecah['Gender']=='Laki-Laki') echo 'checked'?>>Laki-Laki
                            <br><input type="radio" name="Gender" value="Perempuan" <?php if($pecah['Gender']=='Perempuan') echo 'checked'?>>Perempuan
                    </div>
                    <div class="form-group">
                        <label for="Address">Alamat</label>
                        <textarea name="Address" cols="30" rows="5" class="form-control"><?php echo $pecah['Address'] ?></textarea>
                    </div>
                    <div class="form-group text-center">
                        <img src="../assets/img/users/<?php echo $pecah['Photo']; ?>" width="150" height="200">
                    </div>
                    <div class="form-group">
                        <label for="Photo">Ubah Foto</label>
                        <input type="file" class="form-control" name="Photo">
                    </div>
                    <div class="form-group">
                        <label>No Telepon</label>
                        <input type="tel" name="PhoneNumber" class="form-control" value="<?php echo $pecah['PhoneNumber'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="Email" class="form-control" value="<?php echo $pecah['Email'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Agama</label>
                        <select name="Religion" class="form-control">
                            <option value="Islam" <?php if($pecah['Religion'] == "Islam") { echo "selected";} ?>>Islam</option>
                            <option value="Hindu" <?php if($pecah['Religion'] == "Hindu") { echo "selected";} ?>>Hindu</option>
                            <option value="Kristen" <?php if($pecah['Religion'] == "Kristen") { echo "selected";} ?>>Kristen</option>
                            <option value="Katolik" <?php if($pecah['Religion'] == "Katolik") { echo "selected";} ?>>Katolik</option>
                            <option value="Buddha" <?php if($pecah['Religion'] == "Buddha") { echo "selected";} ?>>Buddha</option>
                            <option value="Konghucu" <?php if($pecah['Religion'] == "Konghucu") { echo "selected";} ?>>Konghucu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="IdDivision">Divisi</label>
                        <select class="form-control" name="IdDivision" id="IdDivision">
                            <option value=""></option>
                            <?php
                            include "../koneksi.php";
                            $show = mysqli_query($koneksi, "SELECT * FROM tb_division");
                            while ($row = mysqli_fetch_array($show)) {
                                echo "<option value='$row[IdDivision]'>$row[DivisionName]</option>";
                            }
                            ?>
                        </select>
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
                        <a class="btn btn-secondary btn-sm" href="index.php?page=users" role="button"><span class="fas fa-arrow-left"></span> Kembali</a>
                    </div>
                </form>

                <?php
                if (isset($_POST['edit'])) {
                    $Password = base64_encode($_POST['Password']);
                    $Photo1 = $_FILES['Photo']['name'];
                    $Location = $_FILES['Photo']['tmp_name'];

                    if (!empty($Location)) {
                        move_uploaded_file($Location, "assets/img/users/" . $Photo1);

                        $koneksi->query("UPDATE tb_users SET IdDivision = '$_POST[IdDivision]', Username = '$_POST[Username]', Password = '$Password', FullName = '$_POST[FullName]' , PlaceOfBirth = '$_POST[PlaceOfBirth]' , DateOfBirth = '$_POST[DateOfBirth]' , Gender = '$_POST[Gender]' , Photo = '$Photo1' , Religion = '$_POST[Religion]' , Address = '$_POST[Address]' , PhoneNumber = '$_POST[PhoneNumber]' , Email = '$_POST[Email]' WHERE IdUser = '$_GET[id]'");
                    } else {
                        $koneksi->query("UPDATE tb_users SET IdDivision = '$_POST[IdDivision]', Username = '$_POST[Username]', Password = '$Password', FullName = '$_POST[FullName]' , PlaceOfBirth = '$_POST[PlaceOfBirth]' , DateOfBirth = '$_POST[DateOfBirth]' , Gender = '$_POST[Gender]' , Religion = '$_POST[Religion]' , Address = '$_POST[Address]' , PhoneNumber = '$_POST[PhoneNumber]' , Email = '$_POST[Email]' WHERE IdUser = '$_GET[id]'");
                    }

                    echo "<br><div class='alert alert-success text-center'>Data User Berhasil Diubah</div>";
                    echo "<meta http-equiv='refresh' content='1;url=index.php?page=users'>";
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