<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url("admin/dashboard") }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">GEAR Admin <sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url("admin/dashboard") }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Quản lý Website
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url("#") }}" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Khách hàng & Đơn hàng</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Khách hàng & Đơn hàng:</h6>
                <a class="collapse-item" href="{{ route('users.index') }}">Khách hàng</a>
                <a class="collapse-item" href="{{ route('orders.index') }}">Đơn hàng</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url("#") }}" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Quản lý sản phẩm</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Sản phẩm & Loại sản phẩm:</h6>
                <a class="collapse-item" href="{{ route('products.index') }}">Sản phẩm</a>
                <a class="collapse-item" href="{{ route('product-types.index') }}">Loại sản phẩm</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url("#") }}" data-toggle="collapse" data-target="#collapseNews"
            aria-expanded="true" aria-controls="collapseNews">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Quản lý tin tức</span>
        </a>
        <div id="collapseNews" class="collapse" aria-labelledby="headingNews"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tin Tức:</h6>
                <a class="collapse-item" href="{{ route('news.index') }}">Quản lý tin tức</a>
            </div>
        </div>
    </li>
    <li class="nav-item {{ request()->routeIs('settings') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('settings') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Settings</span>
        </a>
    </li>

    {{-- <!-- Sidebar Message -->
    <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="{{ asset("/img/undraw_rocket.svg") }}" alt="...">
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
    </div> --}}

</ul>
