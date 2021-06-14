@extends('admin.layouts.layout')
@section('title', 'Create Banner')


@section('content')
<section class="content">
    <!-- SELECT2 EXAMPLE -->
    <div class="box box-success ">

        <div class="box-header with-border">
            <div class="box-header pull-left">
                <span class="box-title">Create Banner</span>
            </div>

            <div class="box-tools pull-right">
                <a href="{{route('banner.index')}}" class="btn btn-xs btn-success pull-left text-white" title="Add New"><i class="fa fa-arrow-left"></i> <span class="text-capitalize">back</span></a>
            </div>
        </div>

        <!-- /.box-header -->
        <div class="box-body ">
            <div class="container">

                <div class="row ">

                    <form method="POST" action="{{route('banner.store')}}" enctype="multipart/form-data">

                        @csrf

                        <div class="col-md-6">

                            <div class="form-group">
                                <div class="ml-5">
                                    <label>Photo</label><br>
                                    <label  for="pro_pic1"><img id="up_44" width="200px" height="200px" style="cursor: pointer; border: 2px solid #3C8DBC; padding: 4px;" src="{{ asset('admin_assets/defult_media/banner.png') }}" width="150px" alt=""></label>
                                    <input name="photo" id="pro_pic1" class="upload_image" code="up_44"  type="file" >
                                </div>
                                <br>


                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="banner[name]" placeholder="name" class="form-control" />
                            </div>
                            <div class="form-group">

                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Chief
                                    </label>


                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Regular
                                    </label>

                            </div>
                            <div class="form-group">
                                <label>Department</label>
                                <select name="banner[positaion]" class="custom-select mr-sm-2 form-control" id="inlineFormCustomSelect">
                                    <option value="null" selected>select positaion...</option>
                                    <option value="home page">Home page</option>
                                    <option value="Dr page">Dr page</option>
                                    <option value="Service Page">Service Page</option>
                                  </select>
                            </div>
                            <div class="form-group">
                                <label>Designation</label>
                                <input type="text" name="banner[designation]" placeholder="Designation" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Designation</label>
                                <input type="text" name="banner[designation]" placeholder="Designation" class="form-control" />
                            </div>


                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Banner Positaion</label>
                                <select name="banner[positaion]" class="custom-select mr-sm-2 form-control" id="inlineFormCustomSelect">
                                    <option value="null" selected>select positaion...</option>
                                    <option value="home page">Home page</option>
                                    <option value="Dr page">Dr page</option>
                                    <option value="Service Page">Service Page</option>
                                  </select>
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="banner[title]" placeholder="Covid package" class="form-control" />

                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea id="ck-editor" name="banner[short_desc]" class="form-control"></textarea>

                            </div>
                            <br>

                            <div class="pull-right">
                                <button class="btn btn-success">Save</button>
                            </div>
                            <br>

                        </div>


                    </form>

                </div>
                <div class="row">
                    <form class="form-row col-md-12 " method="POST" action="">
                        @csrf

                            <div class="repeater pl-3">
                                <div data-repeater-list="information">
                                    <div data-repeater-item>
                                        <div class="inner-repeater">
                                            <div style="width: 40%; float:left" data-repeater-list="information">
                                                <div data-repeater-item>
                                                    <div class="row mt-3">
                                                        <div class="col-md-11">
                                                            <div class="form-group">
                                                                <label for="inputRole">Service Name</label>
                                                                <input type="text" name="service" placeholder="Description" class="form-control form-control-sm" id="inputRole" />
                                                            </div>
                                                        </div>

                                                        <div class="col-md-1 pt-5 pl-0" style="padding-top: 26px;">
                                                            <div data-repeater-delete class="btn btn-sm btn-success btn-danger">Delete</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button style="float: left;margin-left:56px; margin-top:26px;" data-repeater-create type="button" class="btn btn-success btn-sm float-right my-3">Add New</button>
                                            <button style="float: left;margin-left:30px; margin-top:26px;" type="submit" class="btn btn-sm btn-info">SAVE</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.box-body -->

    </div>
    <!-- /.box -->

    <!-- /.row -->
</section>
@endsection

@push('page-scripts')
<script defer src="{{asset('admin_assets\assets\js\jquery.repeater.min.js')}}"></script>
@endpush

