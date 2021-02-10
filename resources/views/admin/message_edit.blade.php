<!-- Favicon -->
<link href="img/favicon.ico" rel="icon">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet">

<!-- CSS Libraries -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="{{asset('assets')}}/lib/slick/slick.css" rel="stylesheet">
<link href="{{asset('assets')}}/lib/slick/slick-theme.css" rel="stylesheet">
<link href="{{asset('assets')}}/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="{{asset('assets')}}/css/style.css" rel="stylesheet">
<!-- wrapper  -->
<!-- ============================================================== -->
<section class="content">
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3 class="text-center">Message Detail</h3>
                    @include('home.message')
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
                            <h5 class="card-header">Edit Contents</h5>
                            <div class="card-body">
                                <form role="form" action="{{route('admin_message_update',['id'=>$data->id])}}"
                                      method="post" enctype="multipart/form-data">
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

                                    <table class="table">

                                        <tr class="border-0">
                                            <th class="border-0">Id</th>
                                            <td>{{$data->id}}</td>
                                        </tr>
                                        <tr>
                                            <th class="border-0">Name</th>
                                            <td>{{$data->name}}</td>
                                        </tr>
                                        <tr>
                                            <th class="border-0">Email</th>
                                            <td>{{$data->email}}</td>
                                        </tr>
                                        <tr>
                                            <th class="border-0">Phone</th>
                                            <td>{{$data->phone}}</td>
                                        </tr>
                                        <tr>
                                            <th class="border-0">Phone</th>
                                            <td>{{$data->subject}}</td>
                                        </tr>
                                        <tr>
                                            <th class="border-0">Message</th>
                                            <td>{{$data->message}}</td>
                                        </tr>
                                        <tr>
                                            <th class="border-0">Admin Note</th>
                                            <td>
                                                <textarea id="note" name="note">{{$data->note}}</textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="col-sm-6 pl-0">
                                                    <p class="text-right">
                                                        <button type="submit" class="btn btn-space btn-primary">Update
                                                            Message
                                                        </button>
                                                        <button class="btn btn-space btn-secondary">Cancel</button>
                                                    </p>
                                                </div>
                                            </td>
                                        </tr>

                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end horizontal form -->
                <!-- ============================================================== -->
            </div>
        </div>
    </div>
</section>
<!-- ============================================================== -->
<!-- end footer -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- end main wrapper -->


