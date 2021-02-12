@extends('layouts.home')

@section('title','Add Contents')
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
                <form role="form" action="{{route('user_contents_store')}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-3 col-lg-2 col-form-label text-right">Menu</label>
                        <div class="col-9 col-lg-10">
                            <select class="form-control" name="menu_id">
                                @foreach( $datalist as $rs)
                                    <option
                                        value="{{ $rs->id }}">{{ \App\Http\Controllers\Admin\MenuController::getParentsTree($rs, $rs->title) }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-lg-2 col-form-label text-right">Title</label>
                        <div class="col-9 col-lg-10">
                            <input type="text" id="title" name="title" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-lg-2 col-form-label text-right">Keywords</label>
                        <div class="col-9 col-lg-10">
                            <input type="text" name="keywords" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-lg-2 col-form-label text-right">Description</label>
                        <div class="col-9 col-lg-10">
                            <input type="text" name="description" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-lg-2 col-form-label text-right">Detail</label>
                        <textarea name="detail"></textarea>
                        <script>
                            CKEDITOR.replace('detail');
                        </script>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-lg-2 col-form-label text-right">Type</label>
                        <div class="col-9 col-lg-10">
                            <input type="text" name="type" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-3 col-lg-2 col-form-label text-right">Image</label>
                        <div class="col-9 col-lg-10">
                            <input type="file" name="image" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-3 col-lg-2 col-form-label text-right">Status</label>
                        <div class="col-9 col-lg-10">
                            <select class="form-control" name="status" id="input-select">
                                <option>Choose Example</option>
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
                                <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                <button class="btn btn-space btn-secondary">Cancel</button>
                            </p>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
@endsection
