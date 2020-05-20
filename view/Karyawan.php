<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Karyawan</h1>
  </div>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-0">
    </div>
    <div class="card-body">
      <div class="table-responsive">
      <table class="table table-striped table-sm myTable">
          <thead class="thead bg-dark text-center text-light">
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Foto</th>
              <th>Divisi</th>
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
                <td class="align-middle"><img src="assets/img/users/<?php echo $pecah['Photo']; ?>" width="50" height="70"></td>
                <td class="align-middle"><?php echo $pecah['DivisionName']; ?></td>
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