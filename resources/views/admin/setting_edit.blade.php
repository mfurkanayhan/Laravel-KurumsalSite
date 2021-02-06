@extends('layouts.admin')

@section('title', 'Edit Setting')
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
                <form role="form" action="{{route('admin_setting_update')}}" method="post" data-parsley-validate=""
                      novalidate="" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Edit Setting</h2>
                                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta,
                                    fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#" class="breadcrumb-link">Edit Setting</a>
                                            </li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader -->
                    <!-- ============================================================== -->
                    <!-- justified tabs  -->
                    <!-- ============================================================== -->
                    <div class="col-12 col-sm-12">


                        <div class="section-block">
                            <h5 class="section-title">Justified Tabs</h5>
                            <p>Takes the basic nav from above and adds the .nav-tabs class to generate a tabbed
                                interface..</p>
                        </div>
                        <div class="tab-regular">
                            <ul class="nav nav-tabs nav-fill" id="myTab7" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="general-tab-justify" data-toggle="tab"
                                       href="#general-justify" role="tab" aria-controls="general" aria-selected="true">General</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="smtp-tab-justify" data-toggle="tab" href="#smtp-justify"
                                       role="tab" aria-controls="smtp" aria-selected="false">Smtp Email</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="social-tab-justify" data-toggle="tab" href="#social-justify"
                                       role="tab" aria-controls="social" aria-selected="false">Social Media</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="aboutus-tab-justify" data-toggle="tab"
                                       href="#aboutus-justify" role="tab" aria-controls="aboutus" aria-selected="false">About
                                        Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab-justify" data-toggle="tab"
                                       href="#contact-justify" role="tab" aria-controls="contact" aria-selected="false">Contact
                                        Page</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="references-tab-justify" data-toggle="tab"
                                       href="#references-justify" role="tab" aria-controls="references"
                                       aria-selected="false">References</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent7">
                                <div class="tab-pane fade show active" id="general-justify" role="tabpanel"
                                     aria-labelledby="general-tab-justify">

                                    <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">

                                    <div class="form-group row">
                                        <label class="col-3 col-lg-2 col-form-label text-right">Title</label>
                                        <div class="col-9 col-lg-10">
                                            <input type="text" id="title" name="title" value="{{$data->title}}"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-3 col-lg-2 col-form-label text-right">Keywords</label>
                                        <div class="col-9 col-lg-10">
                                            <input type="text" name="keywords" value="{{$data->keywords}}"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-3 col-lg-2 col-form-label text-right">Description</label>
                                        <div class="col-9 col-lg-10">
                                            <input type="text" name="description" value="{{$data->description}}"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-3 col-lg-2 col-form-label text-right">Company</label>
                                        <div class="col-9 col-lg-10">
                                            <input type="text" name="company" value="{{$data->company}}"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-3 col-lg-2 col-form-label text-right">Address</label>
                                        <div class="col-9 col-lg-10">
                                            <input type="text" name="address" value="{{$data->address}}"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-3 col-lg-2 col-form-label text-right">Phone</label>
                                        <div class="col-9 col-lg-10">
                                            <input type="text" name="phone" value="{{$data->phone}}"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-3 col-lg-2 col-form-label text-right">Fax</label>
                                        <div class="col-9 col-lg-10">
                                            <input type="text" name="fax" value="{{$data->fax}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-lg-2 col-form-label text-right">Email</label>
                                        <div class="col-9 col-lg-10">
                                            <input type="text" name="email" value="{{$data->email}}"
                                                   class="form-control">
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
                                    <a href="#" class="btn btn-secondary">Go somewhere</a>
                                </div>

                                <div class="tab-pane fade" id="smtp-justify" role="tabpanel"
                                     aria-labelledby="smtp-tab-justify">

                                    <div class="form-group row">
                                        <label class="col-3 col-lg-2 col-form-label text-right">Smtp Server</label>
                                        <div class="col-9 col-lg-10">
                                            <input type="text" name="smtpserver" value="{{$data->smtpserver}}"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-lg-2 col-form-label text-right">Smtp Email</label>
                                        <div class="col-9 col-lg-10">
                                            <input type="text" name="smtpemail" value="{{$data->smtpemail}}"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-lg-2 col-form-label text-right">Smtp Password</label>
                                        <div class="col-9 col-lg-10">
                                            <input type="password" name="smtppassword" value="{{$data->smtppassword}}"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-lg-2 col-form-label text-right">Smtp Port</label>
                                        <div class="col-9 col-lg-10">
                                            <input type="number" name="smtpport" value="{{$data->smtpport}}"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="social-justify" role="tabpanel"
                                     aria-labelledby="social-tab-justify">
                                    <div class="form-group row">
                                        <label class="col-3 col-lg-2 col-form-label text-right">Facebook</label>
                                        <div class="col-9 col-lg-10">
                                            <input type="text" name="facebook" value="{{$data->facebook}}"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-lg-2 col-form-label text-right">Instagram</label>
                                        <div class="col-9 col-lg-10">
                                            <input type="text" name="instagram" value="{{$data->instagram}}"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-lg-2 col-form-label text-right">Twitter</label>
                                        <div class="col-9 col-lg-10">
                                            <input type="text" name="twitter" value="{{$data->twitter}}"
                                                   class="form-control">
                                        </div>
                                    </div>


                                </div>

                                <div class="tab-pane fade" id="aboutus-justify" role="tabpanel"
                                     aria-labelledby="aboutus-tab-justify">
                                    <div class="form-group row">
                                        <label class="col-3 col-lg-2 col-form-label text-right">About Us</label>
                                        <div class="col-9 col-lg-10">
                                            <textarea id="aboutus" name="aboutus" value="{{$data->aboutus}}"
                                                      class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact-justify" role="tabpanel"
                                     aria-labelledby="contact-tab-justify">
                                    <div class="form-group row">
                                        <label class="col-3 col-lg-2 col-form-label text-right">Contact</label>
                                        <div class="col-9 col-lg-10">
                                            <textarea id="contact" name="contact" value="{{$data->contact}}"
                                                      class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="references-justify" role="tabpanel"
                                     aria-labelledby="references-tab-justify">
                                    <div class="form-group row">
                                        <label class="col-3 col-lg-2 col-form-label text-right">References</label>
                                        <div class="col-9 col-lg-10">
                                            <textarea id="references" name="references" value="{{$data->references}}"
                                                      class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <script>
                                        CKEDITOR.replace('aboutus');
                                        CKEDITOR.replace('contact');
                                        CKEDITOR.replace('references');
                                    </script>
                                </div>
                                <div class="col-sm-6 pl-0">
                                    <p class="text-right">
                                        <button type="submit" class="btn btn-space btn-primary">Update Setting</button>
                                        <button class="btn btn-space btn-secondary">Cancel</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ============================================================== -->
                    <!-- end justified tabs  -->
                </form>
            </div>
            <!-- ============================================================== -->

        </div>
    </div>
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- end main wrapper -->
@endsection
