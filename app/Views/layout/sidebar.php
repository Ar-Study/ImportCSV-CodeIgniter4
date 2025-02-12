<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
        <!--begin::Brand Link-->
        <a href="./index.html" class="brand-link">
            <span class="brand-text fw-light">Uji Kompetensi</span>
            <!--end::Brand Text-->
        </a>
        <!--end::Brand Link-->
    </div>
    <!--end::Sidebar Brand-->
    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>
                            Dashboard

                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="<?= base_url('algoritma'); ?>" class="nav-link">
                        <i class="nav-icon bi bi-palette"></i>
                        <p>Algoritma </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('crud'); ?>" class="nav-link">
                        <i class="nav-icon bi bi-palette"></i>
                        <p>CRUD </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('enkripsi'); ?>" class="nav-link">
                        <i class="nav-icon bi bi-palette"></i>
                        <p>Enkripsi </p>
                    </a>
                </li>
            </ul>
            <!--end::Sidebar Menu-->
        </nav>
    </div>
    <!--end::Sidebar Wrapper-->
</aside>