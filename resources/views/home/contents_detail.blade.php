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
                <ul>
                    <li>{{\App\Http\Controllers\Admin\MenuController::getParentsTree($data->menu, $data->menu->title)}}</li>
                    <ul>
                        <li class="active">{{$data->title}}</li>
                    </ul>
                </ul>
            </ul>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">

                <!-- Testimonial Start -->
                <div class="testimonial">
                    <div class="container">

                        <div class>
                            <div class="col-md-12">
                                <div class="testimonial-slider-nav">
                                    <div class="slider-nav">
                                        <img src="{{ Storage::url($data->image) }} " style="height: 350px"
                                             alt="testimonial">
                                    </div>

                                    @foreach($datalist as $rs)
                                        <div class="row">
                                            <div class="col-md-3">
                                            <h6>{{$rs->type}}</h6>
                                            <img src="{{ Storage::url($rs->image) }}" style="height: 250px"
                                                 alt="testimonial">
                                            <h6>{{$rs->title}} </h6>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="section-header">
                                    <h2>Clients Review</h2>
                                    <p>{{!! $data->detail !!}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial End -->
            </div>
        </div>
    </div>

@endsection
