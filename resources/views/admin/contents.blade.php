@extends('layouts.admin')

@section('title', 'Contents List')
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
                        <h2 class="pageheader-title">Contents </h2>
                        <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Contents</a></li>

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
                    <a href="{{route('admin_contents_add')}}" type="button" class="btn btn-rounded btn-primary" >Add Contents</a>

                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-light">
                            <tr class="border-0">
                                <th class="border-0">Image</th>
                                <th class="border-0">Id</th>
                                <th class="border-0">Title</th>
                                <th class="border-0">Keywords</th>
                                <th class="border-0">Description</th>
                                <th class="border-0">Menu Id</th>
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
                                    <tr>
                                        <td>
                                            <div class="m-r-10"><img src="{{asset('assets')}}/admin/images/product-pic.jpg" alt="user" class="rounded" width="45"></div>
                                        </td>
                                        <td>{{$rs->image}}</td>
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->title}}</td>
                                        <td>{{$rs->keywords}}</td>
                                        <td>{{$rs->description}}</td>
                                        <td>{{$rs->menu_id}}</td>
                                        <!-- <td>{{$rs->detail}}</td> -->
                                        <td>{{$rs->type}}</td>
                                        <td>{{$rs->user_id}}</td>
                                        <td>{{$rs->status}}</td>
                                        <td>{{$rs->created_at}}</td>
                                        <td>{{$rs->updated_at}}</td>
                                        <td> <a href="{{route('admin_contents_edit', ['id' => $rs->id])}}"> Edit</a></td>
                                        <td><a href="{{route('admin_contents_delete', ['id' => $rs-> id])}}" onclick="return confirm('Delete ! Are you sure?')"  >Delete</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
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
