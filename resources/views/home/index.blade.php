@extends('layouts.home')

@section('title', 'Sub Page Title')

@section('sidebar')
    @parent

    <p> Sub page data </p>

@endsection

@section('content')
    <p>This is my body content.</p>
    aaaaaaaaaaaaaaaaa<br>
    vbbbbbbbbbbbbbbbb<br>
@endsection
