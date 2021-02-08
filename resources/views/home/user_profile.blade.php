@extends('layouts.home')

@section('title','User Profile')

@section('content')
    <br>
    <!--section -->
    <div class="section">
        <!--container -->
        <div class="container">
            <!--row -->
            <div class="row">
                <!--page-aside -->
                <div id="page-aside" class="col-md-2">
                    @include('home.usermenu')
                </div>
                <!--page-aside -->

                <!--main -->
                <div id="main" class="col-md-10">
                    @include('profile.show')
                </div>
                <!--main -->
            </div>
            <!--row -->
        </div>
        <!--container -->
    </div>
    <!--section -->

@endsection
