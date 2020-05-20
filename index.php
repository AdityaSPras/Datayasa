<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<?php include 'topbar.php'; ?>
<?php

if (isset($_GET['page'])) {
    if ($_GET['page'] == "index") {
        include 'index.php';
    }

    // Profile
    else if ($_GET['page'] == "profile") {
        include 'view/Profile.php';
    } else if ($_GET['page'] == "update_user") {
        include 'controller/update/User.php';
    }

    // Users (Karyawan)
    else if ($_GET['page'] == "users") {
        include 'view/Karyawan.php';
    }

    // Items (Barang)
    else if ($_GET['page'] == "items") {
        include 'view/Barang.php';
    } else if ($_GET['page'] == "details_items") {
        include 'view/DetailBarang.php';
    } else if ($_GET['page'] == "create_items") {
        include 'controller/create/Barang.php';
    } else if ($_GET['page'] == "update_items") {
        include 'controller/update/Barang.php';
    } else if ($_GET['page'] == "delete_items") {
        include 'controller/delete/Barang.php';
    }

    // Items Category (Kategori Barang)
    else if ($_GET['page'] == "items_category") {
        include 'view/KategoriBarang.php';
    } else if ($_GET['page'] == "details_items_category") {
        include 'view/DetailKategoriBarang.php';
    } else if ($_GET['page'] == "create_items_category") {
        include 'controller/create/KategoriBarang.php';
    } else if ($_GET['page'] == "update_items_category") {
        include 'controller/update/KategoriBarang.php';
    } else if ($_GET['page'] == "delete_items_category") {
        include 'controller/delete/KategoriBarang.php';
    }

    // Division (Divisi)
    else if ($_GET['page'] == "division") {
        include 'view/Divisi.php';
    }

    // Bank
    else if ($_GET['page'] == "bank") {
        include 'view/Bank.php';
    }

    // Supplier (Distributor)
    else if ($_GET['page'] == "supplier") {
        include 'view/Distributor.php';
    } else if ($_GET['page'] == "detail_supplier") {
        include 'view/DetailDistributor.php';
    }

     // Service Center
     else if ($_GET['page'] == "service_center") {
        include 'view/ServiceCenter.php';
    } else if ($_GET['page'] == "detail_service_center") {
        include 'view/DetailServiceCenter.php';
    }

    // Service
    else if ($_GET['page'] == "service") {
        include 'view/Service.php';
    } else if ($_GET['page'] == "details_service") {
        include 'view/DetailService.php';
    } else if ($_GET['page'] == "create_service") {
        include 'controller/create/Service.php';
    } else if ($_GET['page'] == "update_service") {
        include 'controller/update/Service.php';
    } else if ($_GET['page'] == "delete_service") {
        include 'controller/delete/service.php';
    }

} else {
    include 'home.php';
}

?>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include 'footer.php'; ?>