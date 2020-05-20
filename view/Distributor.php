<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Distributor</h1>
  </div>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-0">
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped myTable">
          <thead class="thead bg-dark text-center text-light">
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $nomor = 1; ?>
            <?php $ambil = $koneksi->query("SELECT * FROM tb_supplier"); ?>
            <?php while ($pecah = $ambil->fetch_assoc()) {

              /* $tanggal = date('d-m-Y',strtotime($pecah['TglTransaksi'])); */
            ?>
              <tr>
                <td class="text-center"><?php echo $nomor; ?></td>
                <td class="text-center"><?php echo $pecah['SupplierName']; ?></td>
                <td class="text-center"><a href="index.php?page=detail_supplier&id=<?php echo $pecah['IdSupplier'] ?>" class="btn btn-success btn-sm"><span class="fas fa-eye"></span> Detail</a></td>
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