@extends('frontend.layouts.app')
@section('main')
<!-- BREADCRUMB
			============================================= -->
			<div id="breadcrumb" class="division">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class=" breadcrumb-holder">

								<!-- Breadcrumb Nav -->
								<nav aria-label="breadcrumb">
								  	<ol class="breadcrumb">
								    	<li class="breadcrumb-item"><a href="{{ route('mainHome') }}">Home</a></li>
								    	<li class="breadcrumb-item active" aria-current="page">Appoinment</li>
								  	</ol>
								</nav>



							</div>
						</div>
					</div>  <!-- End row -->
				</div>	<!-- End container -->
			</div>	<!-- END BREADCRUMB -->

	<!-- APPOINTMENT PAGE
			============================================= -->
			<div id="appointment-page" class="wide-60 appointment-page-section division">
				<div class="container col-lg-5">
				 	<div class="row">


				 		<!-- SERVICE DETAILS -->
				 		<div class="col-lg-12">
				 			<div class="txt-block pr-30">

				 				<!-- Title -->
								<h3 class="h3-md steelblue-color">Book an Appointment</h3>


								<!-- APPOINTMENT FORM -->

								<form method="POST" action="{{ route('StoreAppoinment')}}">
									@csrf
                                    <div class="form-group mt-3">
										<label for="exampleInputEmail1">Name <span class="text-danger">*</span></label>
										<input value="{{ old('name') }}" type="text" name="name" class="form-control name" placeholder="Enter Your Name *" required>
									</div>
                                    <div class="form-group mt-3">
										<label for="exampleInputEmail1">Birth date <span class="text-danger">*</span></label>
										<div class="input-group">
                                            <input class="form-control" value="{{ old('day') }}" name="day" type="text" placeholder="day" required>
                                            <select class="form-control" value="{{ old('month') }}" name="month" required>
                                                <option value="1">January</option>
                                                <option value="2">February</option>
                                                <option value="3">March</option>
                                                <option value="4">April</option>
                                                <option value="5">May</option>
                                                <option value="6">Jun</option>
                                                <option value="7">Jul</option>
                                                <option value="8">Aug</option>
                                                <option value="9">Sep</option>
                                                <option value="10">Oct</option>
                                                <option value="11">Nov</option>
                                                <option value="12">Dec</option>

                                            </select>
                                            <input class="form-control" value="{{ old('year') }}" name="year" type="text" placeholder="year" required>
                                        </div>
									</div>


                                    <div class="form-group mt-3">
										<label for="exampleInputEmail1">Select Department <span class="text-danger">*</span></label>
										<select  onchange="getSelectValue()" id="departmentselection" name="department" class="custom-select doctor" required>
											<option>Select Departmnet ---</option>
                                            @foreach ($department as $item)

											    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach



										</select>
									</div>

									<div class="form-group mt-3">
										<label for="exampleInputEmail1">Select Dr <span class="text-danger">*</span></label>
										<select onchange="getDrSelectValue()" id="Drselection" name="" class="custom-select doctor" required disabled>
                                            <option value="">Select Your Doctor</option>

										</select>
									</div>
                                    <div id=''>
                                        <input id="drvalu" value="{{ old('drName') }}" type="hidden" name="drName">
                                    </div>

                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group mt-3">
                                                <label for="exampleInputEmail1">Date <span class="text-danger">*</span></label>
                                                <input value="{{ old('date') }}" id="datepicker" type="text" name="date" class="form-control name" placeholder="Select Date" required disabled>


                                              </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group mt-3">
                                                <label for="exampleInputEmail1">Patient Type <span class="text-danger">*</span></label>
                                                <select value="{{ old('type') }}" id="typeselection" name="type" class="custom-select patient" required disabled>
                                                  <option>Select Type *</option>
                                                  <option value="Old">Old</option>
                                                  <option value="New">New</option>
                                              </select>

                                              </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group mt-3">
                                                <label for="exampleInputEmail1">Gander<span class="text-danger"> *</span></label>
                                                <select value="{{ old('gander') }}" name="gander" class="custom-select patient" required >
                                                    <option>Select gander *</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                    <option value="other">Other</option>
                                                </select>
                                              </div>
                                        </div>
                                    </div>





									  <div class="form-group mt-3">
										<label for="exampleInputEmail1">Address <span class="text-danger">*</span></label>
										<input value="{{ old('adress') }}" type="text" name="adress" class="form-control" placeholder="Your address *" required>

									  </div>
									  <div class="form-group mt-3">
										<label for="exampleInputEmail1">Phone <span class="text-danger">*</span></label>
										<input value="{{ old('phone') }}" type="tel" name="phone" class="form-control phone" placeholder="Phone Number " required>

									  </div>

									  <div class="form-group mt-3">
										<label for="exampleInputEmail1">Email <span class="text-success"> (optional)</span></label>
										<input value="{{ old('eamil') }}" type="text" name="eamil" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

									  </div>
									  <div class="form-group mt-3">
										<label for="exampleInputEmail1">Note <span class="text-success"> (optional)</span></label>
										<textarea  class="form-control message" name="note" rows="6" placeholder="Your Message ..."></textarea>

									  </div>
									  <div class="form-group mt-3">
										<div class="row">
											<div class="col-4">
												<label for="exampleInputEmail1">Spam Check<sup style="color: red">*</sup> 9+2 =</label>
											</div>
											<div class="col-8">
												<input value="{{ old('spam_check') }}" type="text" name="spam_check" class="form-control" id="exampleInputEmail1" placeholder="Enter equation">
											</div>
										</div>


										@if(Session::has('error'))
											<div class="alert alert-danger alert-dismissible fade show mt-1" role="alert">
												<strong>{{ Session::get('error') }}</strong>.
											</div>
										@endif
									</div>
									  <div class="button-group mt-3">

                                        <a class="btn bg-warning" href="{{ route('appoinmentForm') }}">RESET</a>
										<button type="submit" class="btn btn-blue blue-hover submit">REQUEST AN APPOINMENT</button>

									  </div>


								  </form>




				 			</div>
				 		</div>
						 <!-- END SERVICE DETAILS -->


					</div>	<!-- End row -->
				</div>	 <!-- End container -->
			</div>
			<!-- END APPOINTMENT PAGE -->



@endsection
@push('page-scripts')
<script src="{{ asset('frontend_assets/js/jquery-ui.js') }}"></script>
@endpush
