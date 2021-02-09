@extends('layouts.home')

@section('title','References -' , $setting->title)
@section('description'){{$setting->description}}@endsection
@section('keywords',$setting->keywords)

@section('content')

    <div id="blank">
        <div class="container">
            <ul class="blank">
                <a href="{{route('home')}}">Home</a>
                <a class="active">References</a>
            </ul>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                {!! $setting -> references !!}
            </div>
        </div>
    </div>

@endsection
