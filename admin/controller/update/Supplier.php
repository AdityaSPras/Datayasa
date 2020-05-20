<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="h3 mb-2 text-gray-800 text-center">Ubah Data Distributor</h1>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php
                $ambil = $koneksi->query("SELECT * FROM tb_supplier WHERE IdSupplier = '$_GET[id]'");
                $pecah = $ambil->fetch_assoc();
                ?>
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama Distributor</label>
                        <input type="text" name="SupplierName" class="form-control" value="<?php echo $pecah['SupplierName'] ?>">
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
                    <div class="form-group">
                        <label for="Bank">Bank</label>
                        <select class="form-control" name="Bank" id="Bank">
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
                        <label>No Rekening</label>
                        <input type="number" name="AccountNumber" class="form-control" value="<?php echo $pecah['AccountNumber'] ?>">
                    </div>
                    <div class="form-group text-center">
                        <img src="../assets/img/supplier/<?php echo $pecah['Photo']; ?>" width="150" height="200">
                    </div>
                    <div class="form-group">
                        <label for="Photo">Ubah Foto</label>
                        <input type="file" class="form-control" name="Photo">
                    </div>
                    <div class="button text-center">
                        <button class="btn btn-warning btn-sm" name="edit"><span class="fas fa-save"></span> Simpan</button>
                        <a class="btn btn-secondary btn-sm" href="index.php?page=supplier" role="button"><span class="fas fa-arrow-left"></span> Kembali</a>
                    </div>
                </form>

                <?php
                if (isset($_POST['edit'])) {
                    $Photo1 = $_FILES['Photo']['name'];
                    $Location = $_FILES['Photo']['tmp_name'];
                    
                    if (!empty($Location)) {
                        move_uploaded_file($Location, "../assets/img/supplier/" . $Photo1);

                        $koneksi->query("UPDATE tb_supplier SET SupplierName = '$_POST[SupplierName]' , Address = '$_POST[Address]' , PhoneNumber = '$_POST[PhoneNumber]' , Photo = '$Photo1' , Email = '$_POST[Email]' , Bank = '$_POST[Bank]' , AccountNumber = '$_POST[AccountNumber]' WHERE IdSupplier = '$_GET[id]'");
                    } else {
                        $koneksi->query("UPDATE tb_supplier SET SupplierName = '$_POST[SupplierName]' , Address = '$_POST[Address]' , PhoneNumber = '$_POST[PhoneNumber]' , Email = '$_POST[Email]' , Bank = '$_POST[Bank]' , AccountNumber = '$_POST[AccountNumber]' WHERE IdSupplier = '$_GET[id]'");
                    }

                    echo "<br><div class='alert alert-success text-center'>Data Distributor Berhasil Diubah</div>";
                    echo "<meta http-equiv='refresh' content='1;url=index.php?page=supplier'>";
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