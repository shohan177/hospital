@extends('admin.layouts.layout')
@section('title', 'Show Materials')

@section('content')

<section class="content">
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Materials View</h3>
            <div class="box-tools pull-right">
                <a href="{{route('materials.index')}}" class="btn btn-xs btn-success pull-left text-white router-link-active" title="Add New"><i class="fa fa-arrow-left"></i> <span>Back</span></a>
            </div>
        </div>
        <div class="box-body box-min-height">
            <h2>
             {{$material->name}}
            </h2>

        </div>
    </div>
    <!---->
</section>

@endsection
