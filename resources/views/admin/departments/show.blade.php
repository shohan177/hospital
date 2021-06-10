@extends('admin.layouts.layout')
@section('title', 'Show Department')

@section('content')

<section class="content" >
    <div class="box box-success" style="padding: 2%;">
        <div class="box-header with-border">
            <h3 class="box-title">{{$department->name}}</h3>
            <div class="box-tools pull-right">
                <a href="{{route('department.index')}}" class="btn btn-xs btn-success pull-left text-white router-link-active" title="Add New"><i class="fa fa-arrow-left"></i> <span>Back</span></a>
            </div>
        </div>
        <div class="box-body box-min-height">
            <div class="form-group">
            <img style="height:300px; width:300px;" src="{{ asset('storage/'.$department->photo) }}" alt="">


            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Short discriptaion:</label>
                <p> {{$department->short_desc}}</p>

            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Long discriptaion:</label>
                <p> {!! ($department->long_desc) !!} .</p>

            </div>



        </div>
    </div>
    <!---->
</section>

@endsection
