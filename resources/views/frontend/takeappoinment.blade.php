@extends('frontend.layouts.app')
@section('main')

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
									{{-- <div class="form-group mt-3">
										<label for="exampleInputEmail1">Select Dr <span class="text-danger">*</span></label>
										<select id="inlineFormCustomSelect2" name="appoinment['drname']" class="custom-select doctor" required>
											<option>Select Doctor *</option>  
											@foreach ($doctors as $valu)
												
											<option value="{{ $valu ->name }}">{{ $valu ->name }} ________ {{$valu ->time}}</option>
											@endforeach
											  
										</select>
									</div> --}}
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
						 <!-- END SERVICE DETAILS -->


					</div>	<!-- End row -->	
				</div>	 <!-- End container -->
			</div>	
			<!-- END APPOINTMENT PAGE -->

@endsection
