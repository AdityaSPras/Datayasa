<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Bank</h1>
  </div>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <div class="button">
        <a href="index.php?page=create_bank" role="button" class="btn btn-primary btn-sm">
          <span class="fas fa-plus"></span> Tambah Bank</a>
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped table-sm myTable">
          <thead class="thead bg-dark text-center text-light">
            <tr>
              <th>No</th>
              <th>Nama Bank</th>
              <th>Kode Bank</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $nomor = 1; ?>
            <?php $ambil = $koneksi->query("SELECT * FROM tb_bank"); ?>
            <?php while ($pecah = $ambil->fetch_assoc()) {
            ?>
              <tr>
                <td class="text-center"><?php echo $nomor; ?></td>
                <td><?php echo $pecah['BankName']; ?></td>
                <td><?php echo $pecah['BankCode']; ?></td>
                <td class="text-center"><a href="index.php?page=update_bank&id=<?php echo $pecah['IdBank'] ?>" class="btn btn-warning btn-sm"><span class="fas fa-edit"></span> Ubah</a>
                  <a href="index.php?page=delete_bank&id=<?php echo $pecah['IdBank'] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini...?')" class="btn btn-danger btn-sm"><span class="fas fa-trash"></span> Hapus</a>
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