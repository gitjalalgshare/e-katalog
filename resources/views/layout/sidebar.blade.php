<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="{{ asset('lte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">E-Katalog</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-header">DATA MASTER</li>
                <li class="nav-item  {{ request()->is('dataBarang', 'dataJasa', 'dataVendor') ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link  {{ request()->is('dataBarang', 'dataJasa', 'dataVendor') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Input Data
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('data.barang') }}"
                                class="nav-link {{ request()->is('dataBarang') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Barang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('data.jasa') }}"
                                class="nav-link {{ request()->is('dataJasa') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Jasa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('data.vendor') }}"
                                class="nav-link {{ request()->is('dataVendor') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Vendor</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('data.purchase') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Purchase</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-header">LIST KATALOG</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Data Katalog
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">6</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('katalog.barang') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Katalog Barang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('katalog.jasa') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Katalog Jasa</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">USERS</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Management Users
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('user') }}" class="nav-link">
                                <i class="far fa-user nav-icon"></i>
                                <p>Data User</p>
                            </a>
                        </li>

                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
