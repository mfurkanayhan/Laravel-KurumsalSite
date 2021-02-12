@php
    $setting = \App\Models\Setting::first();

@endphp
<!-- Header Start -->
<div class="header">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-2">
                <div class="brand">
                    <a href="{{route('home')}}">
                        <img src="{{asset('assets')}}/img/logo.png" alt="Logo">
                    </a>
                </div>
            </div>

            <!-- search -->
            <div class="header-search">
                <form action="{{route('getcontents')}}" method="post">
                    @csrf
                    @livewire('search')
                    <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                </form>
                @livewireScripts
            </div>
            <!-- /search -->

            <div class="col-lg-10">
                <div class="topbar">
                    <div class="topbar-col">
                        <a href="tel:+012 345 67890"><i class="fa fa-phone-alt"></i>+905346507385</a>
                    </div>
                    <div class="topbar-col">
                        <a href="mailto:info@example.com"><i class="fa fa-envelope"></i>mfurkana067@gmail.com</a>
                    </div>
                    <div class="topbar-col">
                        <div class="topbar-social">
                            @if($setting->twitter != null)<a href="{{$setting->twitter}}" target="_blank"><i
                                    class="fab fa-twitter"></i></a> @endif
                            @if($setting->facebook != null)<a href="{{$setting->facebook}}" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a> @endif
                            @if($setting->youtube != null)<a href="{{$setting->youtube}}" target="_blank"><i
                                    class="fab fa-youtube"></i></a> @endif
                        </div>
                    </div>
                </div>
                @include('home._menu')
            </div>
        </div>
    </div>
</div>
<!-- Header End -->
