<?php
@session_start();
?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="Wintsu Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Wintsu</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo $_SESSION['username']; ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="?page=buyer" class="nav-link">
                        <i class="nav-icon far fa-circle"></i>
                        <p>Orders</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?page=message" class="nav-link">
                        <i class="nav-icon far fa-circle"></i>
                        <p>Message</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?page=category_list" class="nav-link">
                        <i class="nav-icon far fa-circle"></i>
                        <p>Categories</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?page=product_list" class="nav-link">
                        <i class="nav-icon far fa-circle"></i>
                        <p>Products</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?page=add_category" class="nav-link">
                        <i class="nav-icon fa fa-plus"></i>
                        <p>Add Category</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="?page=add_product" class="nav-link">
                        <i class="nav-icon fa fa-plus"></i>
                        <p>Add Product</p>
                    </a>
                </li>

                <li class="nav-header">Account</li>

                <li class="nav-item">
                    <a href="logout.php" class="nav-link">
                        <i class="nav-icon fa fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>