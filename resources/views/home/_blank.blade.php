@extends('layouts.home')
@php
    $setting = \App\Models\Setting::first();
@endphp
@section('title',$data->title)
@section('description'){{$data->description}}@endsection
@section('keywords',$data->keywords)

@section('content')

    <div id="blank">
        <div class="container">
            <ul class="blank">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Blank</li>
            </ul>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                İçerik Alanı
            </div>
        </div>
    </div>

@endsection
