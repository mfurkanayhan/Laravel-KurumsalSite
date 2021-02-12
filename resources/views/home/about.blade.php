@extends('layouts.home')
@php
    $setting = \App\Models\Setting::first();
@endphp
@section('title','About Us -' , $setting->title)
@section('description'){{$setting->description}}@endsection
@section('keywords',$setting->keywords)

@section('content')

    <div id="blank">
        <div class="container">
            <ul class="blank">
                <a href="{{route('home')}}">Home</a>
                <a class="active">About Us</a>
            </ul>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                {!! $setting -> aboutus !!}
            </div>
        </div>
    </div>

@endsection
