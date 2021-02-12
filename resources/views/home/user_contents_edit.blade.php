@extends('layouts.home')

@section('title','Edit Contents')

@section('headerjs')
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                @include('home.usermenu')
            </div>
            <div class="col-md-10">
                <form role="form" action="{{route('user_contents_update',['id'=>$data->id])}}" method="post"
                      enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label class="col-3 col-lg-2 col-form-label text-right">Image</label>
                        <div class="col-9 col-lg-10">
                            <input type="file" name="image" class="form-control">

                            @if ($data->image),
                            <img src="{{ Storage::url($data->image)}}" height="100" alt="">
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-3 col-lg-2 col-form-label text-right">Menus</label>
                        <div class="col-9 col-lg-10">
                            <select class="form-control" name="menu_id">
                                @foreach( $datalist as $rs)
                                    <option value="{{ $rs->id }}"
                                            @if ($rs->id == $data->menu_id) selected="selected" @endif >
                                        {{ \App\Http\Controllers\Admin\MenuController::getParentsTree($rs, $rs->title) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-lg-2 col-form-label text-right">Title</label>
                        <div class="col-9 col-lg-10">
                            <input type="text" id="title" name="title" value="{{$data->title}}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-lg-2 col-form-label text-right">Keywords</label>
                        <div class="col-9 col-lg-10">
                            <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-lg-2 col-form-label text-right">Description</label>
                        <div class="col-9 col-lg-10">
                            <input type="text" name="description" value="{{$data->description}}" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-3 col-lg-2 col-form-label text-right">Menu Id</label>
                        <div class="col-9 col-lg-10">
                            <input type="number" name="menu_id" value="{{$data->menu_id}}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-lg-2 col-form-label text-right">Detail</label>
                        <textarea id="detail" name="detail"></textarea>
                        <script>
                            CKEDITOR.replace('detail');
                        </script>
                        <div class="col-9 col-lg-10">

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-lg-2 col-form-label text-right">Type</label>
                        <div class="col-9 col-lg-10">
                            <input type="text" name="type" value="{{$data->type}}" class="form-control">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-3 col-lg-2 col-form-label text-right">Status</label>
                        <div class="col-9 col-lg-10">
                            <select class="form-control" name="status" id="input-select">
                                <option selected="selected">{{$data->status}}</option>
                                <option>True</option>
                                <option>False</option>
                            </select>
                        </div>
                    </div>

                    <div class="row pt-2 pt-sm-5 mt-1">
                        <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                            <label class="be-checkbox custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"><span class="custom-control-label">Remember me</span>
                            </label>
                        </div>
                        <div class="col-sm-6 pl-0">
                            <p class="text-right">
                                <button type="submit" class="btn btn-space btn-primary">Update Contents</button>
                                <button class="btn btn-space btn-secondary">Cancel</button>
                            </p>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
@endsection
