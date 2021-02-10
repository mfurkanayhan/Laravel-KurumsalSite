@extends('layouts.home')

@section('title','Contact us -' , $setting->title)
@section('description'){{$setting->description}}@endsection
@section('keywords',$setting->keywords)

@section('content')

    <div id="blank">
        <div class="container">
            <ul class="blank">
                <a href="{{route('home')}}">Home</a>
                <a class="active">Contact Us</a>
            </ul>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    {!! $setting->contactus !!}
                </div>

                <div class="col-md-6">
                    <!-- basic form  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">İletişim Formu</h5>
                                @include('home.message')
                                <div class="card-body">
                                    <form action="{{route('sendmessage')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="name"
                                                   placeholder="Name & Surname">
                                        </div>

                                        <div class="form-group">
                                            <input class="form-control" type="text" name="phone"
                                                   placeholder="Phone Number">
                                        </div>

                                        <div class="form-group">
                                            <input class="form-control" type="email" name="email"
                                                   placeholder="name@example.com">
                                            <p>We'll never share your email with anyone else.</p>
                                        </div>

                                        <div class="form-group">
                                            <input class="form-control" type="text" name="subject"
                                                   placeholder="Subject">
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control" name="message" placeholder="Your message..."
                                                      rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block">Send Message
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic form  -->
                </div>
            </div>
        </div>
    </div>

@endsection
