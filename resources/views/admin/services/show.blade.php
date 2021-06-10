@extends('admin.layouts.layout')
@section('title', 'Show Service')

@section('content')

<section class="content" >
    <div class="box box-success" style="padding: 2%;">
        <div class="box-header with-border">
            <h3 class="box-title">{{$service->name}}</h3>
            <div class="box-tools pull-right">
                <a href="{{route('services.index')}}" class="btn btn-xs btn-success pull-left text-white router-link-active" title="Add New"><i class="fa fa-arrow-left"></i> <span>Back</span></a>
            </div>
        </div>
        <div class="box-body box-min-height">
            <div class="form-group">
            <img style="height:300px; width:300px;" src="{{ asset('storage/'.$service->photo) }}" alt="">


            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Short discriptaion:</label>
                <p> {{$service->short_desc}}</p>

            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Long discriptaion:</label>
                <p> {!! ($service->long_desc) !!} .</p>

            </div>



        </div>
    </div>
    <!---->
</section>

@endsection
