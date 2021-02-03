@extends('layouts.admin')

@section('title', 'Add Contents')
@section('javascript')
    <script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
    @endsection

@section('content')
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <!-- ============================================================== -->
            <!-- pageheader -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Add Contents</h2>
                        <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Add Contents</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3 class="text-center">Add Contents</h3>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <!-- horizontal form -->
                    <!-- ============================================================== -->
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Horizontal Form</h5>
                            <div class="card-body">
                                <form role="form" action="{{route('admin_contents_store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-3 col-lg-2 col-form-label text-right">Parent</label>
                                        <div class="col-9 col-lg-10">
                                            <select class="form-control" name="menu_id">
                                                @foreach( $datalist as $rs)
                                                    <option value="{{ $rs->id }}">{{$rs->title}}</option>
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
                                        <label class="col-3 col-lg-2 col-form-label text-right">Menu Id</label>
                                        <div class="col-9 col-lg-10">
                                            <input type="number" name="menu_id" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-lg-2 col-form-label text-right">Detail</label>
                                        <textarea name="detail"></textarea>
                                        <script>
                                            CKEDITOR.replace( 'detail' );
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
                    <!-- ============================================================== -->
                    <!-- end horizontal form -->
                    <!-- ============================================================== -->
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
