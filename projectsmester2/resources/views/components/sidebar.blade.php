<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/index" class="app-brand-link">
            <i class="bx bxs-car-mechanic bx-lg"></i>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">MeQueen</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Dashboard</span>
        </li>
        <!-- Dashboard -->
        <li class="menu-item {{request()->segment(1) == "index" ? "active" : ""}}">
            <a href="/index" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home bx-sm"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Admin | Pages</span>
        </li>
        <!-- Montir -->
        <li class="menu-item {{request()->segment(1) == "montir" ? "active" : ""}}">
            <a href="/montir" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user bx-sm"></i>
                <div data-i18n="Basic">Montir</div>
            </a>
        </li>
        <!-- Layanan -->
        <li class="menu-item  {{request()->segment(1) == "layanan" ? "active" : ""}}">
            <a href="/layanan" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-car-mechanic bx-sm"></i>
                <div data-i18n="Boxicons">Layanan</div>
            </a>
        </li>
        <!-- Detail Layanan -->
        <li class="menu-item  {{request()->segment(1) == "detailLayanan" ? "active" : ""}}">
            <a href="/detailLayanan" class="menu-link">
                <i class="menu-icon tf-icons bx bx-receipt bx-sm"></i>
                <div data-i18n="Boxicons">Detail Layanan</div>
            </a>
        </li>
        <!-- Kategori Montir -->
        <li class="menu-item  {{request()->segment(1) == "kategori_montir" ? "active" : ""}}">
            <a href="/kategori_montir" class="menu-link">
                <i class="menu-icon tf-icons bx bx-id-card bx-sm"></i>
                <div data-i18n="Boxicons">Kategori Montir</div>
            </a>
        </li>
    </ul>
</aside>