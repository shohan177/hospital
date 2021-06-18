@extends('admin.layouts.layout')
@section('title', 'Show Dr')

@section('content')

<section class="content" >
    <div class="box box-success" style="padding: 2%;">

        <div class="box-header with-border">
            <h3 class="box-title">{{$doctors->name}}</h3>
            <div class="box-tools pull-right">
                <a href="{{route('doctors.index')}}" class="btn btn-xs btn-success pull-left text-white router-link-active" title="Add New"><i class="fa fa-arrow-left"></i> <span>Back</span></a>
            </div>
        </div>
        <div class="box-body box-min-height">
            <div class="form-group">
            <img style="height:300px; width:300px;" src="{{ asset('storage/'.$doctors->photo) }}" alt="">


            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">name:</label>
                <h4>{{ $doctors->name }}</>

            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">working days:</label><br>
                @php
                $days = json_decode($doctors ->working_days);
                    @endphp



                        @foreach ($days as $day)

                        @if ($day == "0")
                        Sun
                        @elseif ($day == "1")
                        Mon
                        @elseif ($day == "2")
                        Tue
                        @elseif ($day == "3")
                        We
                        @elseif ($day == "4")
                        Thu
                        @elseif ($day == "5")
                        Fri
                        @elseif ($day == "6")
                        Sat
                        @endif

                        |
                        @endforeach



            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Designation:</label>
                <p>{{ $doctors->designation }}</p>

            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Phone:</label>
                <p>{{ $doctors->phone }}</p>

            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Doctors:</label>
                <p>{{ $doctors->department->name }}</p>

            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Description:</label>
                <p> {!! ($doctors->description) !!}.</p>

            </div>




        </div>
    </div>
    <!---->
</section>

@endsection
