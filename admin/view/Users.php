<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Karyawan</h1>
  </div>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <div class="button">
        <a href="index.php?page=create_users" role="button" class="btn btn-primary btn-sm">
          <span class="fas fa-plus"></span> Tambah Karyawan</a>
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-sm table-hover myTable">
          <thead class="thead bg-dark text-center text-light">
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Foto</th>
              <th>Divisi</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <?php $nomor = 1; ?>
            <?php $ambil = $koneksi->query("SELECT * FROM tb_users Division1 INNER JOIN tb_division Division2 ON Division1.IdDivision=Division2.IdDivision"); ?>
            <?php while ($pecah = $ambil->fetch_assoc()) {
            ?>
              <tr>
                <td class="align-middle"><?php echo $nomor; ?></td>
                <td class="align-middle"><?php echo $pecah['FullName']; ?></td>
                <td class="align-middle"><img src="../assets/img/users/<?php echo $pecah['Photo']; ?>" width="50" height="70"></td>
                <td class="align-middle"><?php echo $pecah['DivisionName']; ?></td>
                <td class="align-middle"><a href="index.php?page=update_users&id=<?php echo $pecah['IdUser'] ?>" class="btn btn-warning btn-sm"><span class="fas fa-edit"></span> Ubah</a>
                  <a href="index.php?page=delete_users&id=<?php echo $pecah['IdUser'] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini...?')" class="btn btn-danger btn-sm"><span class="fas fa-trash"></span> Hapus</a>
                  <a href="index.php?page=details_users&id=<?php echo $pecah['IdUser'] ?>" class="btn btn-success btn-sm"><span class="fas fa-eye"></span> Detail</a></td>
              </tr>
              <?php $nomor++; ?>
            <?php
            }
            ?>
          </tbody>
        </table>
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