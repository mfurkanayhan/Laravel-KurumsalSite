<!-- ============================================================== -->
<!-- left sidebar -->
<!-- ============================================================== -->
<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false"
                           data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Menu
                            <span class="badge badge-success">6</span></a>
                        <div id="submenu-1" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                       data-target="#submenu-1-2" aria-controls="submenu-1-2">E-Commerce</a>
                                    <div id="submenu-1-2" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{route('admin_menu')}}">Menu</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{route('admin_contents')}}">Contents</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ecommerce-product-single.html">Contents
                                                    Single</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ecommerce-product-checkout.html">Contents
                                                    Checkout</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="dashboard-finance.html">Finance</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="dashboard-sales.html">Sales</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                       data-target="#submenu-1-1" aria-controls="submenu-1-1">Infulencer</a>
                                    <div id="submenu-1-1" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="dashboard-influencer.html">Influencer</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="influencer-finder.html">Influencer Finder</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="influencer-profile.html">Influencer
                                                    Profile</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                           data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>UI
                            Elements</a>
                        <div id="submenu-2" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/cards.html">Cards <span
                                            class="badge badge-secondary">New</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/general.html">General</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/carousel.html">Carousel</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/listgroup.html">List Group</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/typography.html">Typography</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/accordions.html">Accordions</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/tabs.html">Tabs</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                           data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Chart</a>
                        <div id="submenu-3" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/chart-c3.html">C3 Charts</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/chart-chartist.html">Chartist Charts</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/chart-charts.html">Chart</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/chart-morris.html">Morris</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/chart-sparkline.html">Sparkline</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/chart-gauge.html">Guage</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-divider">
                        Features
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                           data-target="#submenu-7" aria-controls="submenu-7"><i
                                class="fas fa-fw fa-inbox"></i>Panel<span class="badge badge-secondary">New</span></a>
                        <div id="submenu-7" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin_setting')}}">Setting</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin_message')}}">Contact Messages</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- ============================================================== -->
<!-- end left sidebar -->
<!-- ============================================================== -->
