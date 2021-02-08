@php
    $setting = \App\Models\Setting::first();
    $parentMenus = \App\Http\Controllers\HomeController::menuList()
@endphp

<div class="navbar navbar-expand-lg bg-light navbar-light">
    <a href="#" class="navbar-brand">Menus</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="mainmenu">
        <ul class="nav navbar-nav collapse navbar-collapse">
            <li><a href="{{route('home')}}" class="nav-item nav-link active">Home</a></li>
            <li><a href="{{route('aboutus')}}" class="nav-item nav-link">About Us</a></li>
            <li><a href="{{route('aboutus')}}" class="nav-item nav-link">Services</a></li>
            <li><a href="{{route('aboutus')}}" class="nav-item nav-link">Portfolio</a></li>
            <li><a href="{{route('aboutus')}}" class="nav-item nav-link">Single Page</a></li>
            <li><a href="{{route('aboutus')}}" class="nav-item nav-link">Contact Us</a></li>
            <li><a href="{{route('aboutus')}}" class="dropdown"> Menus <i class="fa fa-angle-down" ></i> </a>
                <ul role="menu" class="submenu" class="btn">
                @foreach($parentMenus as $rs)
                    <li><a href=""> {{$rs->title}} </a> </li>
                    @endforeach
                </ul>
            </li>
            @auth
                <li><a href="{{route('login')}}" class="btn">{{ Auth::user()->name }}</a></li>
                <li><a href="{{route('logout')}}" class="btn">Logout</a></li>
            @endauth
            @guest
                <li><a href="{{route('login')}}" class="btn">Login</a></li>
                <li><a href="{{route('register')}}" class="btn">Register</a></li>
            @endguest
        </ul>
    </div>
</div>
