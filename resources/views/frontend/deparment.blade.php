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
								    	<li class="breadcrumb-item active" aria-current="page">Department</li>
								  	</ol>
								</nav>

								<!-- Title -->
								<h4 class="h4-sm steelblue-color">{{ $department ->name  }}</h4>

							</div>
						</div>
					</div>  <!-- End row -->
				</div>	<!-- End container -->
			</div>	<!-- END BREADCRUMB -->




			<!-- DEPARTMENT DETAILS
			============================================= -->
			<div id="department-page" class="wide-60 department-page-section division">
				<div class="container">
				 	<div class="row">


				 		<!-- DEPARTMENT DETAILS -->
				 		<div class="col-lg-8">
				 			<div class="txt-block pr-30">


				 				<!-- CONTENT BLOCK -->
				 				<div class="content-block mb-40">



									<!-- Small Title -->
									<h5 class="h5-md steelblue-color">এক নজরে</h5>

									<!-- CONTENT BOX #1 -->
									<div class="box-list">
										<div class="box-list-icon"><i class="fas fa-genderless"></i></div>
										<p>
                                            {!! ($department ->short_desc) !!}
										</p>
									</div>



									<!-- Image -->
									<div class="content-block-img">
										<img class="img-fluid" src="{{ asset('storage/'.$department->photo) }}" alt="content-image">
									</div>

									<!-- Small Title -->
									<h5 class="h5-md steelblue-color">বিস্তারিত</h5>

									<!-- Text -->
									<p class="mb-30">
                                        {!! ($department ->long_desc) !!}
									</p>




								</div>	<!-- END CONTENT BLOCK -->





				 			</div>
				 		</div>	<!-- END DEPARTMENT DETAILS -->


				 		<!-- SIDEBAR  -->
						<aside id="sidebar" class="col-lg-4">


							<!-- TEXT WIDGET -->
							<div id="txt-widget" class="sidebar-div mb-50">

								<!-- Title -->
								<h5 class="h5-sm steelblue-color">The Heart Of Clinic</h5>

								<!-- Head of Clinic -->
								<div class="txt-widget-unit mb-15 clearfix d-flex align-items-center">

									<!-- Avatar -->
									<div class="txt-widget-avatar">
										<img src="{{ asset('frontend_assets/images/head-of-clinic.jpg') }}" alt="testimonial-avatar">
									</div>

									<!-- Data -->
									<div class="txt-widget-data">
										<h5 class="h5-md steelblue-color">Dr. Jonathan Barnes</h5>
										<span>Chief Medical Officer, Founder</span>
										<p class="blue-color">1-800-1234-567</p>
									</div>

								</div>	<!-- End Head of Clinic -->

								<!-- Text -->
								<p class="p-sm">An enim nullam tempor sapien at gravida donec pretium ipsum porta justo
								   integer at odiovelna vitae auctor integer congue magna purus
								</p>

								<!-- Button -->
								<a href="about.html" class="btn btn-blue blue-hover">Learn More</a>

							</div>	<!-- END TEXT WIDGET -->


							<!-- SIDEBAR TABLE -->
							<div class="sidebar-table blue-table sidebar-div mb-50">

								<!-- Title -->
								<h5 class="h5-md">Working Time</h5>

								<!-- Text -->
								<p class="p-sm">Porta semper lacus cursus, feugiat primis ultrice ligula risus auctor at
								   tempus feugiat dolor lacinia cursus nulla vitae massa
								</p>

								<!-- Table -->
								<table class="table">
									<tbody>
									    <tr>
									      	<td>Mon – Wed</td>
									      	<td> - </td>
									      	<td class="text-right">9:00 AM - 7:00 PM</td>
									    </tr>
									    <tr>
									      	<td>Thursday</td>
									      	<td> - </td>
									      	<td class="text-right">9:00 AM - 6:30 PM</td>
									    </tr>
									     <tr>
									      	<td>Friday</td>
									      	<td> - </td>
									      	<td class="text-right">9:00 AM - 6:00 PM</td>
									    </tr>
									    <tr class="last-tr">
									      	<td>Sun - Sun</td>
									      	<td>-</td>
									      	<td class="text-right">CLOSED</td>
									   	 </tr>
									  </tbody>
								</table>

								<!-- Title -->
								<h5 class="h5-xs">Need a personal health plan?</h5>

								<!-- Text -->
								<p class="p-sm">Porta semper lacus cursus, and feugiat primis ultrice ligula at risus auctor</p>

							</div>	<!-- END SIDEBAR TABLE -->


							<!-- SIDEBAR TIMETABLE -->
							<div class="sidebar-timetable sidebar-div mb-50">

								<!-- Title -->
								<h5 class="h5-md mb-20">Doctors Timetable</h5>

								<!-- Text -->
								<p class="p-sm">Porta semper lacus cursus, feugiat primis ultrice ligula risus auctor at
								   tempus feugiat dolor lacinia cursus nulla vitae massa
								</p>

								<!-- Button -->
								<a href="about.html" class="btn btn-blue blue-hover mt-10">View Timetable</a>

							</div>	<!-- END SIDEBAR TABLE -->


							<!-- IMAGE WIDGET -->
							<div id="image-widget" class="sidebar-div">
								<a href="#">
									<img class="img-fluid" src="{{ asset('frontend_assets/images/blog/image-widget.jpg') }}" alt="image-widget" />
								</a>
							</div>


						</aside>   <!-- END SIDEBAR -->


					</div>	<!-- End row -->
				</div>	 <!-- End container -->
			</div>	<!-- END DEPARTMENT DETAILS -->




			<!-- DOCTORS-1
			============================================= -->
			<section id="doctors-1" class="bg-lightgrey wide-40 doctors-section division">
				<div class="container">


			 		<!-- SECTION TITLE -->
					<div class="row">
						<div class="col-lg-10 offset-lg-1 section-title">

							<!-- Title 	-->
							<h3 class="h3-md steelblue-color">Our Medical Specialists</h3>

							<!-- Text -->
							<p>Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero at tempus,
							   blandit posuere ligula varius congue cursus porta feugiat
							</p>

						</div>
					</div>	 <!-- END SECTION TITLE -->


					<div class="row">


						<!-- DOCTOR #1 -->
						<div class="col-md-6 col-lg-3">
							<div class="doctor-1">

								<!-- Doctor Photo -->
								<div class="hover-overlay text-center">

									<!-- Photo -->
									<img class="img-fluid" src="{{ asset('frontend_assets/images/doctor-1.jpg') }}" alt="doctor-foto">
									<div class="item-overlay"></div>

									<!-- Profile Link -->
									<div class="profile-link">
										<a class="btn btn-sm btn-tra-white black-hover" href="doctor-1.html" title="">View More Info</a>
									</div>

								</div>

								<!-- Doctor Meta -->
								<div class="doctor-meta">

									<h5 class="h5-sm steelblue-color">Jonathan Barnes D.M.</h5>
									<span class="blue-color">Cardiology</span>

									<p class="p-sm grey-color">Donec vel sapien augue integer turpis cursus porta, mauris sed
									   augue luctus magna dolor luctus ipsum neque
									</p>

								</div>

							</div>
						</div>	<!-- END DOCTOR #1 -->


						<!-- DOCTOR #2 -->
						<div class="col-md-6 col-lg-3">
							<div class="doctor-1">

								<!-- Doctor Photo -->
								<div class="hover-overlay text-center">

									<!-- Photo -->
									<img class="img-fluid" src="{{ asset('frontend_assets/images/doctor-2.jpg') }}" alt="doctor-foto">
									<div class="item-overlay"></div>

									<!-- Profile Link -->
									<div class="profile-link">
										<a class="btn btn-sm btn-tra-white black-hover" href="doctor-2.html" title="">View More Info</a>
									</div>

								</div>

								<!-- Doctor Meta -->
								<div class="doctor-meta">

									<h5 class="h5-sm steelblue-color">Hannah Harper D.M.</h5>
									<span class="blue-color">Cardiology</span>

									<p class="p-sm grey-color">Donec vel sapien augue integer turpis cursus porta, mauris sed
									   augue luctus magna dolor luctus ipsum neque
									</p>

								</div>

							</div>
						</div>	<!-- END DOCTOR #2 -->


						<!-- DOCTOR #3 -->
						<div class="col-md-6 col-lg-3">
							<div class="doctor-1">

								<!-- Doctor Photo -->
								<div class="hover-overlay text-center">

									<!-- Photo -->
									<img class="img-fluid" src="{{ asset('frontend_assets/images/doctor-3.jpg') }}" alt="doctor-foto">
									<div class="item-overlay"></div>

									<!-- Profile Link -->
									<div class="profile-link">
										<a class="btn btn-sm btn-tra-white black-hover" href="doctor-1.html" title="">View More Info</a>
									</div>

								</div>

								<!-- Doctor Meta -->
								<div class="doctor-meta">

									<h5 class="h5-sm steelblue-color">Matthew Anderson D.M.</h5>
									<span class="blue-color">Anesthesiologist</span>

									<p class="p-sm grey-color">Donec vel sapien augue integer turpis cursus porta, mauris sed
									   augue luctus magna dolor luctus ipsum neque
									</p>

								</div>

							</div>
						</div>	<!-- END DOCTOR #3 -->


						<!-- DOCTOR #4 -->
						<div class="col-md-6 col-lg-3">
							<div class="doctor-1">

								<!-- Doctor Photo -->
								<div class="hover-overlay text-center">

									<!-- Photo -->
									<img class="img-fluid" src="{{ asset('frontend_assets/images/doctor-4.jpg') }}" alt="doctor-foto">
									<div class="item-overlay"></div>

									<!-- Profile Link -->
									<div class="profile-link">
										<a class="btn btn-sm btn-tra-white black-hover" href="doctor-2.html" title="">View More Info</a>
									</div>

								</div>

								<!-- Doctor Meta -->
								<div class="doctor-meta">

									<h5 class="h5-sm steelblue-color">Megan Coleman D.M.</h5>
									<span class="blue-color">Nurse</span>

									<p class="p-sm grey-color">Donec vel sapien augue integer turpis cursus porta, mauris sed
									   augue luctus magna dolor luctus ipsum neque
									</p>

								</div>

							</div>
						</div>	<!-- END DOCTOR #4 -->


					</div>	    <!-- End row -->


					<!-- ALL DOCTORS BUTTON -->
					<div class="row">
						<div class="col-md-12 text-center">
							<div class="all-doctors mb-40">
								<a href="all-doctors.html" class="btn btn-blue blue-hover">Meet All Doctors</a>
							</div>
						</div>
					</div>


				</div>	   <!-- End container -->
			</section>	<!-- END DOCTORS-1 -->




			<!-- ABOUT-5
			============================================= -->
			<section id="about-5" class="pt-100 about-section division">
				<div class="container">
					<div class="row d-flex align-items-center">


						<!-- IMAGE BLOCK -->
						<div class="col-lg-6">
							<div class="about-img text-center wow fadeInUp" data-wow-delay="0.6s">
								<img class="img-fluid" src="{{ asset('frontend_assets/images/image-03.png')}}" alt="about-image">
							</div>
						</div>


						<!-- TEXT BLOCK -->
						<div class="col-lg-6">
							<div class="txt-block pc-30 wow fadeInUp" data-wow-delay="0.4s">

								<!-- Section ID -->
					 			<span class="section-id blue-color">Highest Quality Care</span>

								<!-- Title -->
								<h3 class="h3-md steelblue-color">Complete Medical Solutions in One Place</h3>

								<!-- Text -->
								<p>Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus feugiat
								   dolor lacinia cubilia curae integer congue leo metus, eu mollislorem primis in orci integer
								   metus mollis faucibus. An enim nullam tempor sapien gravida donec pretium and ipsum porta
								   justo integer at velna vitae auctor integer congue
								</p>

								<!-- Singnature -->
								<div class="singnature mt-35">

									<!-- Text -->
									<p class="p-small mb-15">Randon Pexon, Head of Clinic</p>

									<!-- Singnature Image -->
									<!-- Recommended sizes for Retina Ready displays is 400x68px; -->
									<img class="img-fluid" src="{{ asset('frontend_assets/images/signature.png')}}" width="200" height="34" alt="signature-image" />

								</div>

							</div>
						</div>	<!-- END TEXT BLOCK -->


					</div>    <!-- End row -->
				</div>	   <!-- End container -->
			</section>	<!-- END ABOUT-5 -->

@endsection
