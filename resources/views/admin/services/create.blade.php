@extends('admin.layouts.layout')
@section('title', 'Create Services')


@section('content')
<section class="content">
    <!-- SELECT2 EXAMPLE -->
    <div class="box box-success ">

        <div class="box-header with-border">
            <div class="box-header pull-left">
                <span class="box-title">Create Service</span>
            </div>

            <div class="box-tools pull-right">
                <a href="{{route('services.index')}}" class="btn btn-xs btn-success pull-left text-white" title="Add New"><i class="fa fa-arrow-left"></i> <span class="text-capitalize">back</span></a>
            </div>
        </div>

        <!-- /.box-header -->
        <div class="box-body ">
            <div class="row ">

                <form method="POST" action="{{route('services.store')}}" enctype="multipart/form-data">

                    @csrf

                    <div class="col-md-8">

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="service[name]" placeholder="Service name" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Short Discripation</label>
                            <textarea type="text" name="service[short_desc]"  class="form-control"> </textarea>
                        </div>
                        <div class="form-group">
                            <label>long Discripation</label>
                            <textarea id="ck-editor" name="service[long_desc]" class="form-control"></textarea>

                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="ml-5">
                            <label>Photo</label><br>
                            <label  for="pro_pic1"><img id="up_44" width="350px" height="350px" style="cursor: pointer; border: 2px solid #3C8DBC; padding: 4px;" src="{{ asset('admin_assets/defult_media/services.png') }}" width="150px" alt=""></label>
                            <input name="photo" id="pro_pic1" class="upload_image" code="up_44"  type="file" >
                        </div>
                        <br>
                        <br>
                        <div class="pull-right">
                            <button class="btn btn-success">Save</button>
                        </div>

                    </div>

                </form>

            </div>
            <!-- /.row -->
        </div>
        <!-- /.box-body -->

    </div>
    <!-- /.box -->

    <!-- /.row -->
</section>
@endsection
