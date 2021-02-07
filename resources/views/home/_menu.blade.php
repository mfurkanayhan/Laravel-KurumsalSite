@php
    $parentMenus = \App\Http\Controllers\HomeController::menuList()
@endphp

<div class="navbar navbar-expand-lg bg-light navbar-light">
    <a href="#" class="navbar-brand">Menus</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="mainmenu">
        <ul class="nav navbar-nav collapse navbar-collapse">
            <li><a href="index.html" class="nav-item nav-link active">Home</a></li>
            <li><a href="about.html" class="nav-item nav-link">About Us</a></li>
            <li><a href="services.html" class="nav-item nav-link">Services</a></li>
            <li><a href="portfolio.html" class="nav-item nav-link">Portfolio</a></li>
            <li><a href="single.html" class="nav-item nav-link">Single Page</a></li>
            <li><a href="contact.html" class="nav-item nav-link">Contact Us</a></li>
            <li><a href="#" class="dropdown"> Menus <i class="fa fa-angle-down" ></i> </a>
                <ul role="menu" class="submenu">
                @foreach($parentMenus as $rs)
                    <li><a href=""> {{$rs->title}} </a> </li>
                    @endforeach
                </ul>
            </li>
            <a href="https://htmlcodex.com/bootstrap-agency-template" class="btn"><i class="fa fa-download"></i>Menus</a>
        </ul>
    </div>
</div>
