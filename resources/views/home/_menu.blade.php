@php
    $setting = \App\Models\Setting::first();
    $parentMenus = \App\Http\Controllers\HomeController::menuList()
@endphp

<div class="navbar navbar-expand-lg bg-light navbar-light @if (!isset($page)) show-on-click @endif">
    <span class="navbar-brand">Menus <i class="fa fa-list"></i></span>
    <ul class="category-list">
        @foreach($parentMenus as $rs)
            <li><a href="{{route('menucontents',['id'=>$rs->id,'type'=>$rs->title])}}">{{$rs->title}}</a></li>
        @endforeach
    </ul>


    @auth
        <li><a href="{{route('myprofile')}}" class="btn">{{ Auth::user()->name }}</a></li>
        <li><a href="{{route('logout')}}" class="btn">Logout</a></li>
    @endauth
    @guest
        <li><a href="{{route('login')}}" class="btn">Login</a></li>
        <li><a href="{{route('register')}}" class="btn">Register</a></li>
    @endguest

</div>


