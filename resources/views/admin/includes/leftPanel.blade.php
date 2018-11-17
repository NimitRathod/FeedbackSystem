<!-- Left Panel --> 
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li>
                <a class="dropdown-item" href="{{ url('') }}">
                    <i class="la la-home"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="#">
                    <i class="la la-bank"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">
                        Academic
                    </span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="{{ url('/department') }}" data-i18n="nav.dash.ecommerce">
                            Department
                        </a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{ url('/program') }}" data-i18n="nav.dash.crypto">
                            Program
                        </a>
                    </li>
                    <li>
                        <a class="menu-item" href="dashboard-sales.html" data-i18n="nav.dash.sales">
                            Add Menu
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>