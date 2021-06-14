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
								    	<li class="breadcrumb-item"><a href="demo-1.html">Home</a></li>
								    	<li class="breadcrumb-item active" aria-current="page">{{ $service ->name }}</li>
								  	</ol>
								</nav>

								<!-- Title -->
								{{-- <h4 class="h4-sm steelblue-color">Service Single #1</h4> --}}

							</div>
						</div>
					</div>  <!-- End row -->
				</div>	<!-- End container -->
			</div>
			<!-- END BREADCRUMB -->




			<!-- SERVICE DETAILS
			============================================= -->
			<div id="service-page" class="wide-60 service-page-section division">
				<div class="container">


					<!-- TEXT -->
					<div class="row">
				 		<div class="col-xl-10 offset-xl-1">
				 			<div class="s1-page content-block text-center">

				 				<!-- Title -->
								<h3 class="h3-xl blue-color">{{ $service ->name }}</h3>
								{{-- <h4 class="h4-md blue-color">Maecenas gravida porttitor nunc, magna luctus tempor viverra</h4> --}}

								<p class="p-lg">
                                    {{ $service ->short_desc }}
								</p>

				 			</div>
				 		</div>
				 	</div>  <!-- End row -->


				 	<!-- IMAGE -->
				 	<div class="row">
				 		<div class="col-md-12">
							<div class="content-block-img text-center">
								<img class="img-fluid" src="{{ asset('storage/'.$service ->photo) }}" alt="content-image">
							</div>
						</div>
					</div>


					<!-- TEXT -->
					<div class="row">
				 		<div class="col-xl-10 offset-xl-1">
				 			<div class="s1-page content-block text-center mb-40">

				 				<!-- Text -->
								<p class="p-lg">Ligula risus auctor tempus dolor feugiat, felis lacinia risus interdum
								   auctor id viverra dolor iaculis luctus bibendum luctus neque rhoncus ipsum tempor varius
								   iaculis at luctus  neque rhoncus ipsum tempor varius cubilia laoreet augue vitae laoreet
								   augue undo cubilia feugiat suscipit emper lacus cursus
								</p>



								{{-- <!-- Button -->
								<a href="appointment.html" class="btn btn-md btn-blue blue-hover">Book an Appointment</a>

								<!-- Text -->
								<h4 class="h4-lg">Service Cost: <span class="blue-color">$145.00</span></h4>
								<h5 class="h5-md">Duration: 0h 23m</h5> --}}

				 			</div>
				 		</div>

				 	</div>  <!-- End row -->


				</div>	<!-- End container -->
			</div>
			<!-- END SERVICE DETAILS -->




			<!-- TESTIMONIALS-2
			============================================= -->
			{{-- <section id="reviews-2" class="bg-lightgrey wide-100 reviews-section division">
				<div class="container">


					<!-- SECTION TITLE -->
					<div class="row">
						<div class="col-lg-10 offset-lg-1 section-title">

							<!-- Title 	-->
							<h3 class="h3-md steelblue-color">What Our Patients Say</h3>

							<!-- Text -->
							<p>Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero at tempus,
							   blandit posuere ligula varius congue cursus porta feugiat
							</p>

						</div>
					</div>	 <!-- END SECTION TITLE -->


					<!-- TESTIMONIALS CONTENT -->
					<div class="row">
						<div class="col-md-12">
							<div class="owl-carousel owl-theme reviews-holder">


								<!-- TESTIMONIAL #1 -->
								<div class="review-2">
									<div class="review-txt text-center">

										<!-- Quote -->
										<div class="quote"><img src="images/quote.png" alt="quote-img" /></div>

										<!-- Author Avatar -->
										<div class="testimonial-avatar">
											<img src="images/review-author-1.jpg" alt="testimonial-avatar">
										</div>

										<!-- Testimonial Text -->
										<p>Etiam sapien sem at sagittis congue an augue massa varius egestas a suscipit
										   magna undo tempus aliquet porta vitae
										</p>

										<!-- Testimonial Author -->
										<div class="review-author">
											<h5 class="h5-sm">Scott Boxer</h5>
											<span>Programmer</span>
										</div>

									</div>
								</div>	<!--END  TESTIMONIAL #1 -->


								<!-- TESTIMONIAL #2 -->
								<div class="review-2">
									<div class="review-txt text-center">

										<!-- Quote -->
										<div class="quote"><img src="images/quote.png" alt="quote-img" /></div>

										<!-- Author Avatar -->
										<div class="testimonial-avatar">
											<img src="images/review-author-2.jpg" alt="testimonial-avatar">
										</div>

										<!-- Testimonial Text -->
										<p>Mauris donec ociis magnisa a sapien etiam sapien congue augue egestas et ultrice
										   vitae purus diam integer congue magna ligula egestas
										</p>

										<!-- Testimonial Author -->
										<div class="review-author">
											<h5 class="h5-sm">Penelopa Peterson</h5>
											<span>Project Manager</span>
										</div>

									</div>
								</div>	<!-- END TESTIMONIAL #2 -->


								<!-- TESTIMONIAL #3 -->
								<div class="review-2">
									<div class="review-txt text-center">

										<!-- Quote -->
										<div class="quote"><img src="images/quote.png" alt="quote-img" /></div>

										<!-- Author Avatar -->
										<div class="testimonial-avatar">
											<img src="images/review-author-3.jpg" alt="testimonial-avatar">
										</div>

										<!-- Testimonial Text -->
										<p>At sagittis congue augue an egestas magna ipsum vitae purus ipsum primis undo cubilia
										   laoreet augue
										</p>

										<!-- Testimonial Author -->
										<div class="review-author">
											<h5 class="h5-sm">M.Scanlon</h5>
											<span>Photographer</span>
										</div>

									</div>
								</div>	<!-- END TESTIMONIAL #3 -->


								<!-- TESTIMONIAL #4 -->
								<div class="review-2">
									<div class="review-txt text-center">

										<!-- Quote -->
										<div class="quote"><img src="images/quote.png" alt="quote-img" /></div>

										<!-- Author Avatar -->
										<div class="testimonial-avatar">
											<img src="images/review-author-4.jpg" alt="testimonial-avatar">
										</div>

										<!-- Testimonial Text -->
										<p>Mauris donec ociis magnis sapien etiam sapien congue augue pretium ligula
										   a lectus aenean magna mauris
										</p>

										<!-- Testimonial Author -->
										<div class="review-author">
											<h5 class="h5-sm">Jeremy Kruse</h5>
											<span>Graphic Designer</span>
										</div>

									</div>
								</div>	<!-- END TESTIMONIAL #4 -->


								<!-- TESTIMONIAL #5 -->
								<div class="review-2">
									<div class="review-txt text-center">

										<!-- Quote -->
										<div class="quote"><img src="images/quote.png" alt="quote-img" /></div>

										<!-- Author Avatar -->
										<div class="testimonial-avatar">
											<img src="images/review-author-5.jpg" alt="testimonial-avatar">
										</div>

										<!-- Testimonial Text -->
										<p>An augue in cubilia laoreet magna suscipit egestas magna ipsum at purus ipsum
										   primis in augue ulta ligula egestas
										</p>

										<!-- Testimonial Author -->
										<div class="review-author">
											<h5 class="h5-sm">Evelyn Martinez</h5>
											<span>Senior UX/UI Designer</span>
										</div>

									</div>
								</div>	<!-- END TESTIMONIAL #5 -->


								<!-- TESTIMONIAL #6 -->
								<div class="review-2">
									<div class="review-txt text-center">

										<!-- Quote -->
										<div class="quote"><img src="images/quote.png" alt="quote-img" /></div>

										<!-- Author Avatar -->
										<div class="testimonial-avatar">
											<img src="images/review-author-6.jpg" alt="testimonial-avatar">
										</div>

										<!-- Testimonial Text -->
										<p>An augue cubilia laoreet undo magna at risus suscipit egestas magna an ipsum ligula
										   vitae and purus ipsum primis
										</p>

										<!-- Testimonial Author -->
										<div class="review-author">
											<h5 class="h5-sm">Dan Hodges</h5>
											<span>Internet Surfer</span>
										</div>

									</div>
								</div>	<!-- END TESTIMONIAL #6 -->


								<!-- TESTIMONIAL #7 -->
								<div class="review-2">
									<div class="review-txt text-center">

										<!-- Quote -->
										<div class="quote"><img src="images/quote.png" alt="quote-img" /></div>

										<!-- Author Avatar -->
										<div class="testimonial-avatar">
											<img src="images/review-author-7.jpg" alt="testimonial-avatar">
										</div>

										<!-- Testimonial Text -->
										<p>Augue egestas volutpat egestas augue in cubilia laoreet magna suscipit luctus
										   and dolor blandit vitae
										</p>

										<!-- Testimonial Author -->
										<div class="review-author">
											<h5 class="h5-sm">Isabel M.</h5>
											<span>SEO Manager</span>
										</div>

									</div>
								</div>	<!-- END TESTIMONIAL #7 -->


								<!-- TESTIMONIAL #8 -->
								<div class="review-2">
									<div class="review-txt text-center">

										<!-- Quote -->
										<div class="quote"><img src="images/quote.png" alt="quote-img" /></div>

										<!-- Author Avatar -->
										<div class="testimonial-avatar">
											<img src="images/review-author-8.jpg" alt="testimonial-avatar">
										</div>

										<!-- Testimonial Text -->
										<p>Augue egestas volutpat egestas augue in cubilia laoreet magna suscipit luctus
										   and dolor blandit vitae
										</p>

										<!-- Testimonial Author -->
										<div class="review-author">
											<h5 class="h5-sm">Alex Ross</h5>
											<span>Patient</span>
										</div>

									</div>
								</div>	<!-- END TESTIMONIAL #8 -->


								<!-- TESTIMONIAL #9-->
								<div class="review-2">
									<div class="review-txt text-center">

										<!-- Quote -->
										<div class="quote"><img src="images/quote.png" alt="quote-img" /></div>

										<!-- Author Avatar -->
										<div class="testimonial-avatar">
											<img src="images/review-author-9.jpg" alt="testimonial-avatar">
										</div>

										<!-- Testimonial Text -->
										<p>Augue egestas volutpat egestas augue in cubilia laoreet magna suscipit luctus
										   magna dolor neque vitae
										</p>

										<!-- Testimonial Author -->
										<div class="review-author">
											<h5 class="h5-sm">Alisa Milano</h5>
											<span>Housewife</span>
										</div>

									</div>
								</div>	<!-- END TESTIMONIAL #9 -->


							</div>
						</div>
					</div>	<!-- END TESTIMONIALS CONTENT -->


				</div>	   <!-- End container -->
			</section> --}}
			<!-- END TESTIMONIALS-2 -->




			<!-- DOCTORS-1
			============================================= -->
			{{-- <section id="doctors-1" class="wide-40 doctors-section division">
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
									<img class="img-fluid" src="images/doctor-1.jpg" alt="doctor-foto">
									<div class="item-overlay"></div>

									<!-- Profile Link -->
									<div class="profile-link">
										<a class="btn btn-sm btn-tra-white black-hover" href="doctor-1.html" title="">View More Info</a>
									</div>

								</div>

								<!-- Doctor Meta -->
								<div class="doctor-meta">

									<h5 class="h5-sm steelblue-color">Jonathan Barnes D.M.</h5>
									<span class="blue-color">Chief Medical Officer</span>

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
									<img class="img-fluid" src="images/doctor-2.jpg" alt="doctor-foto">
									<div class="item-overlay"></div>

									<!-- Profile Link -->
									<div class="profile-link">
										<a class="btn btn-sm btn-tra-white black-hover" href="doctor-2.html" title="">View More Info</a>
									</div>

								</div>

								<!-- Doctor Meta -->
								<div class="doctor-meta">

									<h5 class="h5-sm steelblue-color">Hannah Harper D.M.</h5>
									<span class="blue-color">Anesthesiologist</span>

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
									<img class="img-fluid" src="images/doctor-3.jpg" alt="doctor-foto">
									<div class="item-overlay"></div>

									<!-- Profile Link -->
									<div class="profile-link">
										<a class="btn btn-sm btn-tra-white black-hover" href="doctor-1.html" title="">View More Info</a>
									</div>

								</div>

								<!-- Doctor Meta -->
								<div class="doctor-meta">

									<h5 class="h5-sm steelblue-color">Matthew Anderson D.M.</h5>
									<span class="blue-color">Cardiology</span>

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
									<img class="img-fluid" src="images/doctor-4.jpg" alt="doctor-foto">
									<div class="item-overlay"></div>

									<!-- Profile Link -->
									<div class="profile-link">
										<a class="btn btn-sm btn-tra-white black-hover" href="doctor-2.html" title="">View More Info</a>
									</div>

								</div>

								<!-- Doctor Meta -->
								<div class="doctor-meta">

									<h5 class="h5-sm steelblue-color">Megan Coleman D.M.</h5>
									<span class="blue-color">Neurosurgeon</span>

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
			</section> --}}
			<!-- END DOCTORS-1 -->
@endsection
