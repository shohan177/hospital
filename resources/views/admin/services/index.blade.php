@extends('admin.layouts.layout')
@section('title', 'List Services')

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
                        <span class="box-title">Services list</span>
                    </div>

                	<div class="box-header pull-left">
	                    <!-- <span class="box-title">All Roles</span> -->
	                </div>

	                <div class="box-tools pull-right">
	                    <a href="{{route('services.create')}}" class="btn btn-xs btn-success pull-left text-white" title="Add New"><i class="fa fa-plus"></i> <span class="text-capitalize">Add Services</span></a>
	                </div>
	            </div>

                <!-- /.box-header -->
                <div class="box-body box-min-height">

                    <table class="table table-bordered table-hover table-striped list-data">
                        <thead class="bg-purple text-white">
                            <tr>
                                <th class="serial">#</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Short Discripation</th>
                                <th>Time</th>
                                <th class="action">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @php $count = 0 @endphp
                        	@foreach($datas as $service)

                            <tr>
                                <td>{{ $loop -> index+1 }}</td>
                                <td><img style="height: 50px; width:50px;" src="{{ asset('storage/'.$service->photo) }}" alt=""></td>
                                <td>{{$service->name}}</td>
                                <td>{!! Str::limit($service->short_desc, 90) !!} .</td>
                                <td>{{($service->updated_at)->diffForHumans()}}</td>


                                <td>

                                	<a href="{{route('services.show', $service->id)}}" class="btn btn-xs btn-success action-view" title="View"><i class="fa fa-eye"></i></a>

                                	<a href="{{route('services.edit', $service->id)}}" class="btn btn-xs btn-primary action-pencil" title="Edit"><i class="fa fa-pencil"></i></a>

                                	<form action="{{route('services.destroy', $service->id)}}" method="POST">
									    @csrf
									    @method('DELETE')
									    <button class="btn btn-xs btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete this item?');">
									    	<i class="fa fa-trash"></i>
									    </button>
									</form>
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
