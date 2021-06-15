@extends('admin.layouts.layout')
@section('title', 'Create Banner')


@section('content')
<section class="content">
    <!-- SELECT2 EXAMPLE -->
    <div class="box box-success ">

        <div class="box-header with-border">
            <div class="box-header pull-left">
                <span class="box-title">Add doctor</span>
            </div>

            <div class="box-tools pull-right">
                <a href="{{route('doctors.index')}}" class="btn btn-xs btn-success pull-left text-white" title="Add New"><i class="fa fa-arrow-left"></i> <span class="text-capitalize">back</span></a>
            </div>
        </div>

        <!-- /.box-header -->
        <div class="box-body ">
            <div class="container">

                <div class="row ">

                    <form method="POST" action="{{route('doctors.store')}}" enctype="multipart/form-data">

                        @csrf

                        <div class="col-md-6">
                            <div class="col-3">
                            <div class="form-group">
                                <div class="ml-5">
                                    <label>Photo</label><br>
                                    <label  for="pro_pic1"><img id="up_44" width="200px" height="200px" style="cursor: pointer; border: 2px solid #3C8DBC; padding: 4px;" src="{{ asset('admin_assets/defult_media/banner.png') }}" width="150px" alt=""></label>
                                    <input name="photo" id="pro_pic1" class="upload_image" code="up_44"  type="file" >
                                </div>
                                <br>
                            </div>
                            </div>
                            <div class="col-3">

                            </div>
                   
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="dr[name]" placeholder="name" class="form-control" />
                            </div>
                            <div class="form-group">

                                    <input class="form-check-input" type="radio" name="dr[rank]" id="exampleRadios1" value="1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Chief
                                    </label>


                                    <input class="form-check-input" type="radio" name="dr[rank]" id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Regular
                                    </label>

                            </div>
                            <div class="form-group">
                                <label>Department</label>
                                <select name="dr[department_id]" class="custom-select mr-sm-2 form-control" id="inlineFormCustomSelect">
                                    <option value="null" selected>select positaion...</option>
                                    @foreach ($department as $valu)
                                     <option value="{{ $valu->id }}">{{ $valu->name }}</option>
                                    @endforeach
                                  </select>
                            </div>
                            <div class="form-group">
                                <label>Designation</label>
                                <input type="text" name="dr[designation]" placeholder="Designation" class="form-control" />
                            </div>
                        


                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Working Day</label><br><br>
                                <input type="checkbox" id="vehicle1" name="working[]" value="SUN">
                                <label for="vehicle1"> SUN </label>
                                <input type="checkbox" id="vehicle2" name="working[]" value="MON">
                                <label for="vehicle2"> MON </label>
                                <input type="checkbox" id="vehicle3" name="working[]" value="TUE">
                                <label for="vehicle3"> TUE </label>
                                <input type="checkbox" id="vehicle1" name="working[]" value="WED">
                                <label for="vehicle4"> WED </label>
                                <input type="checkbox" id="vehicle4" name="working[]" value="THU">
                                <label for="vehicle5"> THU </label>
                                <input type="checkbox" id="vehicle5" name="working[]" value="FRI">
                                <label for="vehicle6"> FRI </label>
                                <input type="checkbox" id="vehicle6" name="working[]" value="SAT">
                                <label for="vehicle7"> SAT </label>
                                                               
                            </div>
                            <div class="form-group">
                                <label for="appt">Select a time:</label>
                                <input type="time" id="appt" class="form-control" name="dr[time]">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" name="dr[phone]" placeholder="+8801878745684" class="form-control" />
                            </div>
                        
                            <div class="form-group">
                                <label>Description</label>
                                <textarea id="ck-editor" name="dr[description]" class="form-control"></textarea>

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



