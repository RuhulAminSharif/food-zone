<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                        class="fas fa-search"></i></a></li>
        </ul>
    </form>
    <ul class="navbar-nav navbar-right">

        <li class="dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="{{ asset(auth()->user()->avatar) }}" class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">Hi, {{ auth()->user()->name }}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="{{ route('admin.profile') }}" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>

                <div class="dropdown-divider"></div>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="#"
                        onclick="event.preventDefault();
                    this.closest('form').submit();"
                        class="dropdown-item has-icon text-danger">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </form>
            </div>
        </li>
    </ul>
</nav>
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#"></a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#"></a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="active"><a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="fas fa-fire"></i>
                    Dashboard</a>
            </li>


            <li class="menu-header">Food Zone</li>

            <li><a class="nav-link" href="{{ route('admin.slider.index') }}"><i class="far fa-square"></i>
                    <span>Slider</span></a></li>
            <li><a class="nav-link" href="{{ route('admin.why-choose-us.index') }}"><i class="far fa-square"></i>
                    <span> Why choose us</span></a></li>

            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Manage Restaurant </span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.category.index') }}"> Product Categories </a></li>
                    <li><a class="nav-link" href="{{ route('admin.product.index') }}"> Products</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Orders </span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.orders.index') }}">All Orders</a></li>
                    <li><a class="nav-link" href="{{ route('admin.pending-orders') }}">Pending Orders</a></li>
                    <li><a class="nav-link" href="{{ route('admin.inprocess-orders') }}">In Process Orders</a></li>
                    <li><a class="nav-link" href="{{ route('admin.delivered-orders') }}">Delivered Orders</a></li>
                    <li><a class="nav-link" href="{{ route('admin.declined-orders') }}">Declined Orders</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Manage Ecommerce </span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.coupon.index') }}"> Coupon</a></li>
                    <li><a class="nav-link" href="{{ route('admin.delivery-area.index') }}"> Delivery Areas</a></li>
                    <li><a class="nav-link" href="{{ route('admin.payment-setting.index') }}"> Payment Gateway</a></li>

                </ul>
            </li>

            <li><a class="nav-link" href="{{ route('admin.setting.index') }}"><i class="far fa-square"></i>
                    <span>Settings</span></a></li>
        </ul>

    </aside>
</div>
