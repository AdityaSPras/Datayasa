<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<?php include 'topbar.php'; ?>

<?php

// Index (Halaman Utama)
if (isset($_GET['page'])) {
    if ($_GET['page'] == "index") {
        include 'index.php';
    }

    // Admin (Administrator)
    else if ($_GET['page'] == "profile") {
        include 'view/Profile.php';
    } else if ($_GET['page'] == "update_admin") {
        include 'controller/update/Admin.php';
    }

    // Users (Karyawan)
    else if ($_GET['page'] == "users") {
        include 'view/Users.php';
    } else if ($_GET['page'] == "details_users") {
        include 'view/DetailUsers.php';
    } else if ($_GET['page'] == "create_users") {
        include 'controller/create/Users.php';
    } else if ($_GET['page'] == "update_users") {
        include 'controller/update/Users.php';
    } else if ($_GET['page'] == "delete_users") {
        include 'controller/delete/Users.php';
    }

    // Division (Divisi)
    else if ($_GET['page'] == "division") {
        include 'view/Division.php';
    } else if ($_GET['page'] == "create_division") {
        include 'controller/create/Division.php';
    } else if ($_GET['page'] == "update_division") {
        include 'controller/update/Division.php';
    } else if ($_GET['page'] == "delete_division") {
        include 'controller/delete/Division.php';
    }

    // Supplier (Distributor)
    else if ($_GET['page'] == "supplier") {
        include 'view/Supplier.php';
    } else if ($_GET['page'] == "details_supplier") {
        include 'view/DetailSupplier.php';
    } else if ($_GET['page'] == "create_supplier") {
        include 'controller/create/Supplier.php';
    } else if ($_GET['page'] == "update_supplier") {
        include 'controller/update/Supplier.php';
    } else if ($_GET['page'] == "delete_supplier") {
        include 'controller/delete/Supplier.php';
    }

    // Service Center
    else if ($_GET['page'] == "service_center") {
        include 'view/ServiceCenter.php';
    } else if ($_GET['page'] == "details_service_center") {
        include 'view/DetailServiceCenter.php';
    } else if ($_GET['page'] == "create_service_center") {
        include 'controller/create/ServiceCenter.php';
    } else if ($_GET['page'] == "update_service_center") {
        include 'controller/update/ServiceCenter.php';
    } else if ($_GET['page'] == "delete_service_center") {
        include 'controller/delete/ServiceCenter.php';
    }

    // Items (Barang)
    else if ($_GET['page'] == "items") {
        include 'view/Items.php';
    } else if ($_GET['page'] == "details_items") {
        include 'view/DetailItems.php';
    } else if ($_GET['page'] == "create_items") {
        include 'controller/create/Items.php';
    } else if ($_GET['page'] == "update_items") {
        include 'controller/update/Items.php';
    } else if ($_GET['page'] == "delete_items") {
        include 'controller/delete/Items.php';
    }

    // Items Category (Kategori Barang)
    else if ($_GET['page'] == "items_category") {
        include 'view/ItemsCategory.php';
    } else if ($_GET['page'] == "create_items_category") {
        include 'controller/create/ItemsCategory.php';
    } else if ($_GET['page'] == "update_items_category") {
        include 'controller/update/ItemsCategory.php';
    } else if ($_GET['page'] == "delete_items_category") {
        include 'controller/delete/ItemsCategory.php';
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
        include 'controller/delete/Service.php';
    }

    // Bank
    else if ($_GET['page'] == "bank") {
        include 'view/Bank.php';
    } else if ($_GET['page'] == "create_bank") {
        include 'controller/create/Bank.php';
    } else if ($_GET['page'] == "update_bank") {
        include 'controller/update/Bank.php';
    } else if ($_GET['page'] == "delete_bank") {
        include 'controller/delete/Bank.php';
    }

    // Logout
    else if ($_GET['page'] == "logout") {
        include 'logout.php';
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