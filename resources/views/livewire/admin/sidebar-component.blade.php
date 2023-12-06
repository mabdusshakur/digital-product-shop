<div>
    <aside class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
            <div>
                <img src="{{ asset('resources/admin/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
            </div>
            <div>
                <h4 class="logo-text">Snacked</h4>
            </div>
            <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
            </div>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="fa-solid fa-shop"></i>
                    </div>
                    <div class="menu-title">Products</div>
                </a>
                <ul>
                    <li> <a href="{{ route('admin.products') }}"><i class="bi bi-circle"></i>All Products</a>
                    </li>
                    <li> <a href="{{ route('admin.add-products') }}"><i class="bi bi-circle"></i>Add Products</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="fa-solid fa-layer-group"></i>
                    </div>
                    <div class="menu-title">Category & Brands</div>
                </a>
                <ul>
                    <li> <a href="{{ route('admin.categories') }}"><i class="bi bi-circle"></i>All Categories</a>
                    </li>
                    <li> <a href="{{ route('admin.add-categories') }}"><i class="bi bi-circle"></i>Add Category</a>
                    </li>
                </ul>
                <ul>
                    <li> <a href="{{ route('admin.brands') }}"><i class="bi bi-circle"></i>All Brands</a>
                    </li>
                    <li> <a href="{{ route('admin.add-brands') }}"><i class="bi bi-circle"></i>Add Brands</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="fa-solid fa-gear"></i>
                    </div>
                    <div class="menu-title">Settings</div>
                </a>
                <ul>
                    <li> <a href="{{ route('admin.settings') }}"><i class="bi bi-circle"></i>General Setting</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="fa-solid fa-cart-shopping"></i>
                    </div>
                    <div class="menu-title">Orders</div>
                </a>
                <ul>
                    <li> <a href=""><i class="bi bi-circle"></i>All Orders</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="fa-solid fa-headset"></i>
                    </div>
                    <div class="menu-title">Support</div>
                </a>
                <ul>
                    <li> <a href=""><i class="bi bi-circle"></i>Ticket's</a></li>
                </ul>
            </li>
        </ul>
        <!--end navigation-->
    </aside>
</div>
