@extends('layouts.home')

@section('title', $search . " Contents List")
@section('description'){{$data->description }} @endsection
@section('keywords', $data->keywords)

@section('content')
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div id="blank">
        <div class="container">
            <ul class="blank">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active"><a href="{{$search}}"> ContentsList</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">

            <div class="col-sm-12 padding-right">
                @foreach($datalist as $rs)
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <a class="btn" href="{{route('contents',['id'=>$rs->id,'type'=>$rs->type])}}">Learn More</a>
                                    <img src="{{ Storage::url($rs->image) }}" style="height: 400px" alt="" />
                                    <h2>{{$rs->title}} </h2>
                                    <p>{{$rs->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="text-md-right footer-links d-none d-sm-block">
                            <a href="javascript: void(0);">About</a>
                            <a href="javascript: void(0);">Support</a>
                            <a href="javascript: void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->

@endsection
