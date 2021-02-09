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
                    <h3 class="side-title" >İletişim Formu</h3>
                </div>
            </div>
        </div>
    </div>

@endsection
