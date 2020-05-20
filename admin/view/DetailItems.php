<?php
$ambil = $koneksi->query("SELECT IC.CategoryName, S.SupplierName, I.NameOfItem, I.Unit, I.Stock, I.ConditionItems, I.PurchasePrice, I.SellingPrice, I.Photo FROM (tb_items I LEFT JOIN tb_items_category IC ON I.IdCategory = IC.IdCategory) LEFT JOIN tb_supplier S ON I.IdSupplier = S.IdSupplier WHERE IdItem = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-primary">Detail : <?= $pecah['NameOfItem']; ?></h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2 text-center">
                            <img src="../assets/img/items/<?= $pecah['Photo']; ?>" class="img-thumbnail mb-4">
                            <p>
                                <a class="btn btn-secondary btn-sm" href="index.php?page=items" role="button"><span class="fas fa-reply"></span> Kembali</a></p>
                        </div>
                        <div class="col-md-10">
                            <div class="table-responsive">
                                <table class="table table-borderless">
                                    <tr>
                                        <th>Nama Barang</th>
                                        <td>:</td>
                                        <td><?= $pecah['NameOfItem']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kategori Barang</th>
                                        <td>:</td>
                                        <td><?= $pecah['CategoryName']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kondisi Barang</th>
                                        <td>:</td>
                                        <td><?= $pecah['ConditionItems']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Satuan</th>
                                        <td>:</td>
                                        <td><?= $pecah['Unit']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Supplier</th>
                                        <td>:</td>
                                        <td><?= $pecah['SupplierName']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Harga Beli</th>
                                        <td>:</td>
                                        <td>Rp.<?= number_format($pecah['PurchasePrice']); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Harga Jual</th>
                                        <td>:</td>
                                        <td>Rp.<?= number_format($pecah['SellingPrice']); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Stok</th>
                                        <td>:</td>
                                        <td><?= $pecah['Stock']; ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
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