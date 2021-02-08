@php
    $setting = \App\Models\Setting::first();
    $setting=\App\Http\Controllers\HomeController::getSetting()
@endphp
<!-- Footer Start -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="footer-about">
                    <h2>About Us</h2>
                    <p style="color:Grey">{{$setting->company}}</p>
                    <P><i class="fa fa-id-card"></i>Muhammet Furkan Ayhan</P>
                    <p><i class="fa fa-address-book"></i>Murtaza Mah. Hüseyin Karadeniz Cad. No:48/B 67300 KDZ.Ereğli / Zonguldak</p>
                    <p><i class="fa fa-phone"></i>+905346507385</p>
                    <p><i class="fa fa-envelope"></i>mfurkana067@gmail.com</p>
                </div>
            </div>
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-link">
                            <h2>Useful Link</h2>
                            <a href="{{route('aboutus')}}">About Us</a>
                            <a href="">Our Story</a>
                            <a href="">Our Services</a>
                            <a href="">Our Portfolio</a>
                            <a href="">Our Projects</a>
                            <a href="">Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-link">
                            <h2>Useful Link</h2>
                            <a href="">Our Clients</a>
                            <a href="">Clients Review</a>
                            <a href="">Ongoing Customer</a>
                            <a href="">Customer Support</a>
                            <a href="">FAQs</a>
                            <a href="">Site Map</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container copyright">
        <div class="row">
            <div class="col-md-6">
                <label style="color:Grey">   <script>document.write(new Date().getFullYear());</script>  All rights reserved | {{$setting->company}} </label>
            </div>
            <div class="col-md-6">
                <p> <a href="#">Beats By Dr.Dre</a></p>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
<!-- JavaScript Libraries -->
<script src="{{asset('assets')}}/https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="{{asset('assets')}}/https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets')}}/lib/slick/slick.min.js"></script>
<script src="{{asset('assets')}}/lib/isotope/isotope.pkgd.min.js"></script>
<script src="{{asset('assets')}}/lib/lightbox/js/lightbox.min.js"></script>

<!-- Template Javascript -->
<script src="{{asset('assets')}}/js/main.js"></script>
