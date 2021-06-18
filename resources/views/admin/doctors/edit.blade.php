@extends('admin.layouts.layout')
@section('title', 'Edit Doctors')


@section('content')
<section class="content">
    <!-- SELECT2 EXAMPLE -->
    <div class="box box-success">

        <div class="box-header with-border">
            <div class="box-header pull-left">
                <span class="box-title">Edit Doctor</span>
            </div>

            <div class="box-tools pull-right">
                <a href="{{route('doctors.index')}}" class="btn btn-xs btn-success pull-left text-white" title="Add New"><i class="fa fa-arrow-left"></i> <span class="text-capitalize">back</span></a>
            </div>
        </div>

        <!-- /.box-header -->
        <div class="box-body">
            <div class="container">
                <div class="row">

                    <form method="POST" action="{{route('doctors.update',$doctors->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        @csrf

                        <div class="col-md-6">
                            <div class="col-3">
                            <div class="form-group">
                                <div class="ml-5">
                                    <label>Photo</label><br>
                                    <label  for="pro_pic1"><img id="up_44" width="200px" height="200px" style="cursor: pointer; border: 2px solid #3C8DBC; padding: 4px;" src="{{ asset('storage/'.$doctors->photo) }}" width="150px" alt=""></label>
                                    <input name="photo" id="pro_pic1"  class="upload_image" code="up_44"  type="file" >
                                    <input name="old_photo"  value="{{ $doctors->photo }}" type="hidden" >
                                    <input name="id"  value="{{ $doctors->id }}" class="upload_image"  type="hidden" >

                                </div>
                                <br>
                            </div>
                            </div>
                            <div class="col-3">

                            </div>

                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" value="{{ $doctors->name }}" name="dr[name]" placeholder="name" class="form-control" />
                            </div>
                            <div class="form-group">
                                   @if ($doctors->rank == 0)
                                        <input class="form-check-input" type="radio" name="dr[rank]" id="exampleRadios1" value="1" >
                                        <label class="form-check-label" for="exampleRadios1">
                                            Chief
                                        </label>


                                        <input class="form-check-input" type="radio" name="dr[rank]" id="exampleRadios2" value="0" checked>
                                        <label class="form-check-label" for="exampleRadios2">
                                            Regular
                                        </label>

                                   @else
                                        <input class="form-check-input" type="radio" name="dr[rank]" id="exampleRadios1" value="1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Chief
                                        </label>


                                        <input class="form-check-input" type="radio" name="dr[rank]" id="exampleRadios2" value="0" >
                                        <label class="form-check-label" for="exampleRadios2">
                                            Regular
                                        </label>
                                   @endif

                            </div>
                            <div class="form-group">
                                <label>Department</label>
                                <select name="dr[department_id]" class="custom-select mr-sm-2 form-control" id="inlineFormCustomSelect">
                                    <option value="null" selected>select positaion...</option>
                                    @foreach ($department as $valu)
                                    @if ($valu->id == $doctors->department_id)
                                        <option value="{{ $valu->id }}" selected>{{ $valu->name }}</option>
                                    @else
                                        <option value="{{ $valu->id }}">{{ $valu->name }}</option>
                                    @endif

                                    @endforeach
                                  </select>
                            </div>
                            <div class="form-group">
                                <label>Designation</label>
                                <input value="{{ $doctors->designation }}" type="text" name="dr[designation]" placeholder="Designation" class="form-control" />
                            </div>



                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Working Day</label><br><br>
                                @php
                                    $days = json_decode($doctors->working_days);
                                    $demedays = '["0","1","2","3","4","5","6"]';
                                    $alldays =  json_decode($demedays);








                                //$unselectedDays = array_diff_key($allDays,$days)
                                @endphp
                                @foreach ($days as $day)


                                        @if ($day == "0")
                                            <input type="checkbox" id="vehicle1" name="working[]" value="0" checked>
                                            <label for="vehicle1"> SUN </label>
                                        @elseif ($day == "1")
                                            <input type="checkbox" id="vehicle2" name="working[]" value="1" checked>
                                            <label for="vehicle2"> MON </label>
                                        @elseif ($day == "2")
                                            <input type="checkbox" id="vehicle3" name="working[]" value="2" checked>
                                            <label for="vehicle3"> TUE </label>
                                        @elseif ($day == "3")
                                            <input type="checkbox" id="vehicle1" name="working[]" value="3" checked>
                                            <label for="vehicle4"> WED </label>
                                        @elseif ($day == "4")
                                            <input type="checkbox" id="vehicle4" name="working[]" value="4" checked>
                                            <label for="vehicle5"> THU </label>
                                        @elseif ($day == "5")
                                            <input type="checkbox" id="vehicle5" name="working[]" value="5" checked>
                                            <label for="vehicle6"> FRI </label>
                                        @elseif ($day == "6")
                                            <input type="checkbox" id="vehicle6" name="working[]" value="6" checked>
                                            <label for="vehicle7"> SAT </label>
                                        @endif


                                @endforeach
                                <input type="checkbox" id="vehicle1" name="working[]" value="0">
                                <label for="vehicle1"> SUN </label>
                                <input type="checkbox" id="vehicle2" name="working[]" value="1">
                                <label for="vehicle2"> MON </label>
                                <input type="checkbox" id="vehicle3" name="working[]" value="2">
                                <label for="vehicle3"> TUE </label>
                                <input type="checkbox" id="vehicle1" name="working[]" value="3">
                                <label for="vehicle4"> WED </label>
                                <input type="checkbox" id="vehicle4" name="working[]" value="4">
                                <label for="vehicle5"> THU </label>
                                <input type="checkbox" id="vehicle5" name="working[]" value="5">
                                <label for="vehicle6"> FRI </label>
                                <input type="checkbox" id="vehicle6" name="working[]" value="6">
                                <label for="vehicle7"> SAT </label>


                            </div>
                            <div class="form-group">
                                <label for="appt">Select a time:</label>
                                <input value="{{ $doctors->time }}" type="time" id="appt" class="form-control" name="dr[time]">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input value="{{ $doctors->phone }}" type="text" name="dr[phone]" placeholder="+8801878745684" class="form-control" />
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea id="ck-editor" name="dr[description]" class="form-control">{{ $doctors->description }}</textarea>

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
