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
                <a href="{{route('appointment.index')}}" class="btn btn-xs btn-success pull-left text-white" title="Add New"><i class="fa fa-arrow-left"></i> <span class="text-capitalize">back</span></a>
            </div>
        </div>

        <!-- /.box-header -->
        <div class="box-body ">
            <div class="container">

                <div class="row ">

                    <form method="POST" action="{{route('appointment.store')}}" enctype="multipart/form-data">

                        @csrf

                        <div class="form-group mt-3">
                            <label for="exampleInputEmail1">Patient Type <span class="text-danger">*</span></label>
                            <select id="inlineFormCustomSelect3" name="appoinment['type']" class="custom-select patient" required>
                              <option>Select Type *</option>
                              <option value="new">New Patient</option>
                              <option value="old">Returning Patient</option>
                              <option value="other">Other</option>
                          </select>

                          </div>
                          <div class="form-group mt-3">
                              <label for="exampleInputEmail1">Date <span class="text-danger">*</span></label>
                              <input id="datepicker" type="text" name="appoinment['date']" class="form-control name" placeholder="Select Date" required>

                            </div>
                            <div class="form-group mt-3">
                              <label for="exampleInputEmail1">Name <span class="text-danger">*</span></label>
                              <input type="text" name="appoinment['name']" class="form-control name" placeholder="Enter Your Name *" required>

                            </div>
                            <div class="form-group mt-3">
                              <label for="exampleInputEmail1">Address <span class="text-danger">*</span></label>
                              <input type="text" name="appoinment['adress']" class="form-control" placeholder="Your address *" required>

                            </div>
                            <div class="form-group mt-3">
                              <label for="exampleInputEmail1">Phone <span class="text-danger">*</span></label>
                              <input type="tel" name="appoinment['phone']" class="form-control phone" placeholder="Phone Number " required>

                            </div>
                            <div class="form-group mt-3">
                              <label for="exampleInputEmail1">Email</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

                            </div>
                            <div class="form-group mt-3">
                              <label for="exampleInputEmail1">Note</label>
                              <textarea  class="form-control message" name="appoinment['note']" rows="6" placeholder="Your Message ..."></textarea>

                            </div>
                            <div class="form-group mt-3">

                              <button type="submit" class="btn btn-blue blue-hover submit">Submit</button>

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



