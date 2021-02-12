<html>
<head>
    <title>Image Gallery</title>
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendor/fonts/circular-std/style.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/libs/css/style.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendor/fonts/flag-icon-css/flag-icon.min.css">
</head>
<body>
                    <!-- horizontal form -->
                    <!-- ============================================================== -->
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Contents : {{$data->title}}</h5>
                            <div class="card-body">
                                <form role="form" action="{{route('user_image_store',['contents_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-3 col-lg-2 col-form-label text-right">Title</label>
                                        <div class="col-9 col-lg-10">
                                            <input type="text" id="title" name="title" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-3 col-lg-2 col-form-label text-right">Image</label>
                                        <div class="col-9 col-lg-10">
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row pt-2 pt-sm-5 mt-1">
                                        <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                            <label class="be-checkbox custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"><span class="custom-control-label">Add Image</span>
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

                                <table class="table">
                                    <thead class="bg-light">
                                    <tr class="border-0">
                                        <th class="border-0">Image</th>
                                        <th class="border-0">Id</th>
                                        <th class="border-0">Title</th>
                                        <th class="border-0">Actions</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($images as $rs)
                                        <tr>
                                            <td>
                                                @if ($rs->image)
                                                    <div class="m-r-10"><img src="{{Storage::url($rs->image)}}" height="70" alt=""></div>
                                                @endif
                                            </td>
                                            <td>{{$rs->id}}</td>
                                            <td>{{$rs->title}}</td>
                                            <td><a href="{{route('user_image_delete', ['id' => $rs-> id,'contents_id'=>$data->id])}}" onclick="return confirm('Record will be Delete ! Are you sure?')"><img src="{{asset('assets/admin/images')}}/delete.png" height="45"></a>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

</body>
</html>
