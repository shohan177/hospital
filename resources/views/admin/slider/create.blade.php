@extends('admin.layouts.layout')
@section('title', 'Create Slider')


@section('content')
<section class="content">
    <!-- SELECT2 EXAMPLE -->
    <div class="box box-success ">

        <div class="box-header with-border">
            <div class="box-header pull-left">
                <span class="box-title">Create Slider</span>
            </div>

            <div class="box-tools pull-right">
                <a href="{{route('slider.index')}}" class="btn btn-xs btn-success pull-left text-white" title="Add New"><i class="fa fa-arrow-left"></i> <span class="text-capitalize">back</span></a>
            </div>
        </div>

        <!-- /.box-header -->
        <div class="box-body ">
            <div class="container">

                <div class="row ">

                    <form method="POST" action="{{route('slider.store')}}" enctype="multipart/form-data">

                        @csrf

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="slider[name]" placeholder="slider one" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Button Text</label>
                                <input type="text" name="slider[button_text]" placeholder="Read more" class="form-control" />

                            </div>
                            <div class="form-group">
                                <label>Button Url</label>
                                <input type="text" name="slider[button_url]" placeholder="https://www.google.com/" class="form-control" />

                            </div>
                            <div class="form-group">
                                <div class="ml-5">
                                    <label>Photo</label><br>
                                    <label  for="pro_pic1"><img id="up_44" width="550px" height="200px" style="cursor: pointer; border: 2px solid #3C8DBC; padding: 4px;" src="{{ asset('admin_assets/defult_media/slide-1.jpg') }}" width="150px" alt=""></label>
                                    <input name="photo" id="pro_pic1" class="upload_image" code="up_44"  type="file" >
                                </div>
                                <br>


                            </div>


                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Title first line</label>
                                <input type="text" name="slider[line_one]" placeholder="Newborn" class="form-control" />

                            </div>
                            <div class="form-group">
                                <label>Title second line</label>
                                <input type="text" name="slider[line_two]" placeholder="Care Services" class="form-control" />

                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea id="ck-editor" name="slider[short_desc]" class="form-control"></textarea>

                            </div>
                            <br>

                            <div class="pull-right">
                                <button class="btn btn-success">Save</button>
                            </div>
                            <br>

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
