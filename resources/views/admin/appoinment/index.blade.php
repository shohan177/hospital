@extends('admin.layouts.layout')
@section('title', 'Appoinment List')

@push('page-css')
    <link rel="stylesheet" href="{{asset('admin_assets/lte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" />
@endpush

@section('content')

<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <div class="box box-success">

                <div class="box-header with-border">
                    <div class="box-header pull-left">
                        <span class="box-title">Appoinment list</span>
                    </div>

                	<div class="box-header pull-left">
	                    <!-- <span class="box-title">All Roles</span> -->
	                </div>


	            </div>

                <!-- /.box-header -->
                <div class="box-body box-min-height">

                    <table class="table table-bordered table-hover table-striped list-data">
                        <thead class="bg-purple text-white">
                            <tr>
                                <th class="serial">#</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Phone</th>
                                <th>date</th>
                                <th>Doctor Name</th>




                                <th class="action">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @php $count = 0 @endphp
                        	@foreach($datas as $doctor)

                            <tr>
                                <td>{{ $loop -> index+1 }}</td>

                                <td>{{$doctor->name}}</td>
                                <td>{{$doctor->type}}</td>

                                <td>{{$doctor->phone}}</td>
                                <td>{{$doctor->date}}</td>

                                <td>{{$doctor->drName}}</td>



                                <td>

                                	<a href="{{route('appointment.show', $doctor->id)}}" class="btn btn-xs btn-success action-view" title="View"><i class="fa fa-eye"></i></a>

                                	<a href="{{route('appointment.edit', $doctor->id)}}" class="btn btn-xs btn-primary action-pencil" title="Edit"><i class="fa fa-pencil"></i></a>
                                	<a href="{{route('dleteAppoinment', $doctor->id)}}" class="btn btn-xs btn-danger" title="Edit"><i class="fa fa-pencil"></i></a>

                                	{{-- <form action="{{route('appointment.destroy', $doctor->id)}}" method="POST">
									    @csrf
									    @method('DELETE')
									    <button class="btn btn-xs btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete this item?');">
									    	<i class="fa fa-trash"></i>
									    </button>
									</form> --}}
                                </td>
                            </tr>

                            @php $count++ @endphp

                            @endforeach

                        </tbody>

                    </table>

                    <div class="col-md-12">
                        <div class="pull-right">
                            {{$datas->links()}}
                        </div>
                    </div>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>

@endsection

@push('page-scripts')
    <script src="{{asset('admin_assets/lte/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin_assets/lte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
@endpush
