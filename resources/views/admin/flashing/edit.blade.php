@extends('admin.layouts.layout')
@section('title', 'Edit Flashing')


@section('content')
<section class="content">
    <!-- SELECT2 EXAMPLE -->
    <div class="box box-success">

        <div class="box-header with-border">
            <div class="box-header pull-left">
                <span class="box-title">Edit Flashing</span>
            </div>

            <div class="box-tools pull-right">
                <a href="{{route('flashing.index')}}" class="btn btn-xs btn-success pull-left text-white" title="Add New"><i class="fa fa-arrow-left"></i> <span class="text-capitalize">back</span></a>
            </div>
        </div>

        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">

                <form method="POST" action="{{route('flashing.update', $flashing->id)}}">

                    @csrf
                    @method('PUT')

                    <div class="col-md-6">

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" placeholder="Name" class="form-control" value="{{$flashing->name}}" />
                        </div>


                        <div class="pull-right">
                            <button class="btn btn-success">Update</button>
                        </div>
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
