@extends('admin.layouts.layout')
@section('title', 'Show Banner')

@section('content')

<section class="content" >
    <div class="box box-success" style="padding: 2%;">
        <div class="box-header with-border">
            <h3 class="box-title">{{$banner->name}}</h3>
            <div class="box-tools pull-right">
                <a href="{{route('banner.index')}}" class="btn btn-xs btn-success pull-left text-white router-link-active" title="Add New"><i class="fa fa-arrow-left"></i> <span>Back</span></a>
            </div>
        </div>
        <div class="box-body box-min-height">
            <div class="form-group">
            <img style="height:300px; width:300px;" src="{{ asset('storage/'.$banner->photo) }}" alt="">


            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">Title:</label>
                <p>{{ $banner->title }}</p>

            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Discriptaion:</label>
                <p> {!! ($banner->short_desc) !!}.</p>

            </div>



        </div>
    </div>
    <!---->
</section>

@endsection
