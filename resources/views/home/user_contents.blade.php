@extends('layouts.home')
@php
    $setting = \App\Models\Setting::first();
@endphp

@section('title',$setting->title)
@section('description'){{$setting->description}}@endsection
@section('keywords',$setting->keywords)


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                @include('home.usermenu')
            </div>
            <div class="row">
                <div class="col-md-10">
                    <a href="{{route('user_contents_add')}}" type="button" class="btn btn-rounded btn-primary" >User Contents</a>
                    @include('home.message')

                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-light">
                            <tr class="border-0">
                                <th class="border-0">Image</th>
                                <th class="border-0">Image Gallery</th>
                                <th class="border-0">Id</th>
                                <th class="border-0">Menus</th>
                                <th class="border-0">Title</th>
                                <th class="border-0">Keywords</th>
                                <th class="border-0">Description</th>
                                <!-- <th class="border-0">Detail</th> -->
                                <th class="border-0">Type</th>
                                <th class="border-0">User Id</th>
                                <th class="border-0">Status</th>
                                <th class="border-0">Created At</th>
                                <th class="border-0">Updated At</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($datalist as $rs)
                                <tr class="border-0">
                                    <td>
                                        @if ($rs->image)
                                            <div class="m-r-10"><img src="{{Storage::url($rs->image)}}" height="70" alt=""></div>
                                        @endif
                                    </td>
                                    <td><a href="{{route('user_image_add',['contents_id' => $rs->id])}}" onclick="return !window.open(this.href, '', 'top=50 left=100 width=1100, height=700')">
                                            <img src="{{asset('assets/admin/images')}}/gallery.png" height="45"></a>
                                    </td>
                                    <td>{{$rs->id}}</td>
                                    <td>
                                        {{\App\Http\Controllers\Admin\MenuController::getParentsTree($rs->menu, $rs->menu->title) }}
                                    </td>
                                    <td>{{$rs->title}}</td>
                                    <td>{{$rs->keywords}}</td>
                                    <td>{{$rs->description}}</td>
                                <!-- <td>{{$rs->detail}}</td> -->
                                    <td>{{$rs->type}}</td>
                                    <td>{{$rs->user_id}}</td>
                                    <td>{{$rs->status}}</td>
                                    <td>{{$rs->created_at}}</td>
                                    <td>{{$rs->updated_at}}</td>
                                    <td> <a href="{{route('user_contents_edit', ['id' => $rs->id])}}"><img src="{{asset('assets/admin/images')}}/edit.png" height="45"></a>
                                        </a>
                                    </td>
                                    <td><a href="{{route('user_contents_delete', ['id' => $rs-> id])}}" onclick="return confirm('Delete ! Are you sure?')"><img src="{{asset('assets/admin/images')}}/delete.png" height="45"></a>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
