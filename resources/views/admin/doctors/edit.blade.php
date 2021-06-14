@extends('admin.layouts.layout')
@section('title', 'Edit Slider')


@section('content')
<section class="content">
    <!-- SELECT2 EXAMPLE -->
    <div class="box box-success">

        <div class="box-header with-border">
            <div class="box-header pull-left">
                <span class="box-title">Edit Banner</span>
            </div>

            <div class="box-tools pull-right">
                <a href="{{route('banner.index')}}" class="btn btn-xs btn-success pull-left text-white" title="Add New"><i class="fa fa-arrow-left"></i> <span class="text-capitalize">back</span></a>
            </div>
        </div>

        <!-- /.box-header -->
        <div class="box-body">
            <div class="container">
                <div class="row">

                    <form method="POST" action="{{route('banner.update',$banner->id)}}" enctype="multipart/form-data">

                        @csrf
                        @method('PUT')

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Name</label>
                                <input value="{{ $banner ->name }}" type="text" name="banner[name]" placeholder="Home page banner" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Button Text</label>
                                <input value="{{ $banner ->button_text }}" type="text" name="banner[button_text]" placeholder="Read more" class="form-control" />

                            </div>
                            <div class="form-group">
                                <label>Button Url</label>
                                <input value="{{ $banner ->button_url }}" type="text" name="banner[button_url]" placeholder="https://www.google.com/" class="form-control" />

                            </div>
                            <div class="form-group">
                                <div class="ml-5">
                                    <label>Photo</label><br>
                                    <label  for="pro_pic1"><img id="up_44" width="200px" height="200px" style="cursor: pointer; border: 2px solid #3C8DBC; padding: 4px;" src="{{ asset('storage/'.$banner->photo) }}" width="150px" alt=""></label>
                                    <input  name="photo" id="pro_pic1" class="upload_image" code="up_44"  type="file" >
                                    <input type="hidden" name='old_photo' value="{{ $banner ->photo }}">
                                </div>
                                <br>


                            </div>


                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Banner Positaion</label>
                                <select name="banner[positaion]" class="custom-select mr-sm-2 form-control" id="inlineFormCustomSelect">
                                    <option value="{{ $banner ->positaion }}" selected>{{ $banner ->positaion }}</option>
                                    <option value="home page">Home page</option>
                                    <option value="Dr page">Dr page</option>
                                    <option value="Service Page">Service Page</option>
                                  </select>
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input value="{{ $banner ->title }}" type="text" name="banner[title]" placeholder="Covid package" class="form-control" />

                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea id="ck-editor" name="banner[short_desc]" class="form-control">{{ $banner ->short_desc }}</textarea>

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
