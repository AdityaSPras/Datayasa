<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="h3 mb-2 text-gray-800 text-center">Tambah Karyawan</h1>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="FullName">Nama Lengkap</label>
                        <input type="text" class="form-control" name="FullName" required>
                    </div>
                    <div class="form-group">
                        <label for="PlaceOfBirth">Tempat Lahir</label>
                        <input type="text" class="form-control" name="PlaceOfBirth">
                    </div>
                    <div class="form-group">
                        <label for="DateOfBirth">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="DateOfBirth">
                    </div>
                    <div class="form-group">
                        <label for="Gender">Jenis Kelamin</label><br>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Gender" value="Laki-Laki">
                            <label class="form-check-label" for="Laki-Laki">Laki-Laki</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Gender" value="Perempuan">
                            <label class="form-check-label" for="Perempuan">Perempuan</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Address">Alamat</label>
                        <textarea class="form-control" rows="5" name="Address"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="Photo">Foto</label>
                        <input type="file" class="form-control" name="Photo">
                    </div>
                    <div class="form-group">
                        <label for="PhoneNumber">No Telepon/Handphone</label>
                        <input type="tel" class="form-control" name="PhoneNumber">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="Email">
                    </div>
                    <div class="form-group">
                        <label for="Religion">Agama</label>
                        <select class="form-control" name="Religion">
                            <option value="">--- Pilih Agama ---</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Konghucu">Konghucu</option>
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
                        <label for="Active">Mulai Kerja</label>
                        <input type="date" class="form-control" name="Active">
                    </div>
                    <div class="form-group">
                        <label for="Username">Username</label>
                        <input type="text" class="form-control" name="Username" required>
                    </div>
                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="password" class="form-control" name="Password" required>
                    </div>
                    <div class="button text-center">
                        <button type="submit" class="btn btn-primary btn-sm" name="simpan" id="simpan"><span class="fas fa-save"></span> Simpan</button>
                        <button type="reset" class="btn btn-warning btn-sm"><span class="fas fa-eraser"></span> Reset</button>
                        <a class="btn btn-secondary btn-sm" href="index.php?page=users" role="button"><span class="fas fa-arrow-left"></span> Kembali</a>
                    </div>
                </form>
                <?php
                if (isset($_POST['simpan'])) {

                    $Password = base64_encode($_POST['Password']);
                    $Photo = $_FILES['Photo']['name'];
                    $Location = $_FILES['Photo']['tmp_name'];
                    move_uploaded_file($Location, "../assets/img/users/" . $Photo);
                    $koneksi->query("INSERT INTO tb_users(IdDivision, Username, Password, FullName, PlaceOfBirth, DateOfBirth, Gender, Photo, Religion, Address, PhoneNumber, Email, Active) VALUES('$_POST[IdDivision]' , '$_POST[Username]' , '$Password' , '$_POST[FullName]' , '$_POST[PlaceOfBirth]' , '$_POST[DateOfBirth]' , '$_POST[Gender]' , '$Photo' , '$_POST[Religion]' , '$_POST[Address]' , '$_POST[PhoneNumber]' , '$_POST[Email]' , '$_POST[Active]')");

                    echo "<br><div class='alert alert-success text-center'>Pengguna Berhasil Di Tambah</div>";
                    echo "<meta http-equiv='refresh' content='1;url=index.php?page=users'>";
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