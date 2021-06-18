@extends('frontend.layouts.app')
@section('main')
<!-- HERO-3
			============================================= -->
			<section id="hero-3" class="hero-section division">


                <!-- SLIDER -->
                <div class="slider blue-nav">
                    <ul class="slides">


                        @foreach ($sliders as $slider)

                        <!-- SLIDE #2 -->
                        <li id="slide-2">

                          <!-- Background Image -->
                          <img src="{{ asset('storage/'.$slider->photo) }}" alt="slide-background">

                          <!-- Image Caption -->
                          <div class="caption d-flex align-items-center right-align">
                              <div class="container">
                                     <div class="row">
                                         <div class="col-sm-10 col-md-7 col-lg-6">
                                             <div class="caption-txt">

                                              <!-- Title -->
                                                <h2 class="steelblue-color"><span>{{ $slider->line_one }}</span><br>{{ $slider->line_two }}</h2>

                                                <!-- CONTENT BOX #1 -->
                                              <div class="box-list">
                                                  <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                                                  <p class="p-md">
                                                  {!! ($slider ->short_desc) !!}
                                                  </p>
                                              </div>
                                              <a href="about-us.html" class="btn btn-blue blue-hover">{{ $slider->button_text }}</a>



                                          </div>
                                       </div>
                                  </div>  <!-- End row -->
                              </div>  <!-- End container -->
                          </div>	<!-- End Image Caption -->

                       </li>
                       <!-- END SLIDE #2 -->

                        @endforeach






                    </ul>
                  </div>	<!-- END SLIDER -->


            </section>

            <!-- END HERO-3 -->




			<!-- ABOUT-3
			============================================= -->
			<section id="about-3" class="about-section division">
				<div class="container">
					<div class="abox-3-holder">
						<div class="row d-flex align-items-center">


							<!-- ABOUT BOX #1 -->
							<div class="col-lg-4">
								<div class="abox-3 b-right wow fadeInUp" data-wow-delay="0.4s">

									<!-- Small Title -->
									<p class="blue-color">Qualified Doctors</p>

									<!-- Title -->
									<h5 class="h5-xs steelblue-color">Where People Come First</h5>

									<!-- Text -->
									<p>An magnis nulla dolor at sapien augue erat iaculis purus tempor magna ipsum
									   vitae a purus primis ipsum magna ipsum
									</p>

								</div>
							</div>


							<!-- ABOUT BOX #3 -->
							<div class="col-lg-4">
								<div class="abox-3 b-right wow fadeInUp" data-wow-delay="0.6s">

									<!-- Small Title -->
									<p class="blue-color">24 Hour Service</p>

									<!-- Title -->
									<h5 class="h5-xs steelblue-color">Highest Quality Care</h5>

									<!-- Text -->
									<p>An magnis nulla dolor at sapien augue erat iaculis purus tempor magna ipsum
									   vitae a purus primis ipsum magna ipsum
									</p>

								</div>
							</div>


							<!-- ABOUT BOX #3 -->
							<div class="col-lg-4">
								<div class="abox-3 wow fadeInUp" data-wow-delay="0.8s">

									<!-- Small Title -->
									<p class="blue-color">Here For You</p>

									<!-- Title -->
									<h5 class="h5-xs steelblue-color">Emergency Department</h5>

									<!-- Text -->
									<p>An magnis nulla dolor at sapien augue erat iaculis purus tempor magna ipsum
									   vitae a purus primis ipsum magna ipsum
									</p>

								</div>
							</div>


						</div>    <!-- End row -->
					</div>	   <!-- End container -->
				</div>
			</section>
            <!-- END ABOUT-3 -->




			<!-- INFO-4
			============================================= -->
			<section id="info-4" class="wide-60 info-section division">
				<div class="container">
					<div class="row d-flex align-items-center">


						<!-- INFO IMAGE -->
						<div class="col-lg-6">
							<div class="info-4-img mb-40 text-center wow fadeInUp" data-wow-delay="0.6s">
								<img class="img-fluid" src="frontend_assets/images/pediatrics_700x800.jpg" alt="info-image">
							</div>
						</div>


						<!-- INFO TEXT -->
						<div class="col-lg-6">
							<div class="txt-block mb-40 pc-30 wow fadeInUp" data-wow-delay="0.4s">

								<!-- Section ID -->
					 			<span class="section-id blue-color">Welcome to MedService</span>

								<!-- Title -->
								<h3 class="h3-md steelblue-color">Complete Medical Solutions in One Place</h3>

								<!-- Text -->
								<p>
                                    একটা ছ াট মুঠ া ধীঠে ধীঠে বড় হয়। ছ াট হাঠেে মুঠ া আঠে আঠে বড় হয়, অনুভুতেে ধাোয়মমোয়, আশা, তবশ্বাস ও আস্থায়। মুঠ াে মুঠ ায় থাঠক নানা েকম গল্প । আে ছসই মুঠ া যতি হাতেঠয়
                                    যায় অসমঠয়, অকােঠে, অকাঠে। ছসই মুঠ া হােঠে খুুঁজি আতম-আমো-সকঠে ছশষ তবকাঠে। আে এই
                                    মায়া,মমো ও ভাঠোবাসাে মুঠ াগুঠো হাতেঠয় ছযন না যায় ছসই প্রতেশ্রুতে তনঠয় আমো আত মমো
                                    ছেশাতেস্ট হাসপাোে। আপনাে এবং আপনাে পতেবাঠেে ছসবায়।
								</p>

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
									<img class="img-fluid" src="frontend_assets/images/signature.png" width="200" height="34" alt="signature-image" />

								</div>

							</div>
						</div>	<!-- END TEXT BLOCK -->


					</div>    <!-- End row -->
				</div>	   <!-- End container -->
			</section>	<!-- END INFO-4 -->




			<!-- STATISTIC-1
			============================================= -->
			<div id="statistic-1" class="bg-scroll statistic-section division">
				<div class="container white-color">
					<div class="row">


						<!-- STATISTIC BLOCK #1 -->
						<div class="col-md-6 col-lg-3">
							<div class="statistic-block icon-lg wow fadeInUp" data-wow-delay="0.4s">

								<!-- Icon  -->
								<span class="flaticon-062-cardiogram-3"></span>

								<!-- Text -->
								<h5 class="statistic-number">9,<span class="count-element">632</span></h5>
								<p class="txt-400">Happy Patients</p>

							</div>
						</div>


						<!-- STATISTIC BLOCK #2 -->
						<div class="col-md-6 col-lg-3">
							<div class="statistic-block icon-lg wow fadeInUp" data-wow-delay="0.6s">

								<!-- Icon  -->
								<span class="flaticon-137-doctor"></span>

								<!-- Text -->
								<h5 class="statistic-number"><span class="count-element">{{ count($doctors) }}</span></h5>
								<p class="txt-400">Qualified Doctors</p>

							</div>
						</div>


						<!-- STATISTIC BLOCK #3 -->
						<div class="col-md-6 col-lg-3">
							<div class="statistic-block icon-lg wow fadeInUp" data-wow-delay="0.8s">

								<!-- Icon  -->
								<span class="flaticon-065-hospital-bed"></span>

								<!-- Text -->
								<h5 class="statistic-number"><span class="count-element">864</span></h5>
								<p class="txt-400">Clinic Rooms</p>

							</div>
						</div>


						<!-- STATISTIC BLOCK #4 -->
						<div class="col-md-6 col-lg-3">
							<div class="statistic-block icon-lg wow fadeInUp" data-wow-delay="1s">

								<!-- Icon  -->
								<span class="flaticon-040-placeholder"></span>

								<!-- Text -->
								<h5 class="statistic-number"><span class="count-element">473</span></h5>
								<p class="txt-400">Local Partners</p>

							</div>
						</div>


					</div>  <!-- End row -->
				</div>	 <!-- End container -->
			</div>	 <!-- END STATISTIC-1 -->




			<!-- INFO-2
			============================================= -->
			<section id="info-2" class="wide-60 info-section division">
				<div class="container">
					<div class="row d-flex align-items-center">


						<!-- TEXT BLOCK -->
						<div class="col-lg-6">
							<div class="txt-block pc-30 mb-40 wow fadeInUp" data-wow-delay="0.4s">

								<!-- Section ID -->
					 			<span class="section-id blue-color">Best Practices</span>

								<!-- Title -->
								<h3 class="h3-md steelblue-color">Clinic with Innovative Approach to Treatment</h3>

								<!-- Text -->
								<p class="mb-30">An enim nullam tempor sapien gravida donec enim ipsum blandit
								   porta justo integer odio velna vitae auctor integer congue magna at pretium
								   purus pretium ligula rutrum itae laoreet augue posuere and curae integer
								   congue leo metus mollis primis and mauris
								</p>

								<!-- Options List -->
								<div class="row">

									<div class="col-xl-6">

										<!-- Option #1 -->
										<div class="box-list m-top-15">
											<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
											<p class="p-sm">Nemo ipsam egestas volute and turpis dolores quaerat</p>
										</div>

										<!-- Option #2 -->
										<div class="box-list">
											<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
											<p class="p-sm">Magna luctus tempor</p>
										</div>

										<!-- Option #3 -->
										<div class="box-list">
											<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
											<p class="p-sm">An enim nullam tempor at pretium purus blandit</p>
										</div>

									</div>

									<div class="col-xl-6">

										<!-- Option #4 -->
										<div class="box-list">
											<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
											<p class="p-sm">Magna luctus tempor blandit a vitae suscipit mollis</p>
										</div>

										<!-- Option #5 -->
										<div class="box-list m-top-15">
											<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
											<p class="p-sm">Nemo ipsam egestas volute turpis dolores quaerat</p>
										</div>

										<!-- Option #6 -->
										<div class="box-list">
											<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
											<p class="p-sm">An enim nullam tempor</p>
										</div>

									</div>

								</div>	<!-- End Options List -->

							</div>
						</div>	<!-- END TEXT BLOCK -->


						<!-- IMAGE BLOCK -->
						<div class="col-lg-6">
							<div class="info-2-img wow fadeInUp" data-wow-delay="0.6s">
								<img class="img-fluid" src="frontend_assets/images/image-04.png" alt="info-image">
							</div>
						</div>


					</div>    <!-- End row -->
				</div>	   <!-- End container -->
			</section>	<!-- END INFO-2 -->




			<!-- GALLERY-1
			============================================= -->
			{{-- <div id="gallery-1" class="gallery-section division">


				<!-- SECTION TITLE -->
				<div class="container">
					<div class="row">
						<div class="col-lg-10 offset-lg-1 section-title">

							<!-- Title 	-->
							<h3 class="h3-md steelblue-color">Total Health Care Solutions</h3>

							<!-- Text -->
							<p>Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero at tempus,
							   blandit posuere ligula varius congue cursus porta feugiat
							</p>

						</div>
					</div>
				</div>


				<!-- GALLERY IMAGES -->
				<div class="row gallery-items-list">


					<!-- IMAGE #1 -->
					<div class="col-md-6 col-lg-3 gallery-item">
						<div class="hover-overlay">

							<!-- Gallery Image -->
							<img class="img-fluid" src="frontend_assets/images/gallery/image-1.jpg" alt="gallery-image" />
							<div class="item-overlay"></div>

							<!-- Image Zoom -->
							<div class="image-zoom">
								<a class="image-link" href="frontend_assets/images/gallery/image-1.jpg" title=""><i class="fas fa-search-plus"></i></a>
							</div>

						</div>
					</div>


					<!-- IMAGE #2 -->
					<div class="col-md-6 col-lg-3 gallery-item">
						<div class="hover-overlay">

							<!-- Gallery Image -->
							<img class="img-fluid" src="frontend_assets/images/gallery/image-2.jpg" alt="gallery-image" />
							<div class="item-overlay"></div>

							<!-- Image Zoom -->
							<div class="image-zoom">
								<a class="image-link" href="frontend_assets/images/gallery/image-2.jpg" title=""><i class="fas fa-search-plus"></i></a>
							</div>

						</div>
					</div>


					<!-- IMAGE #3 -->
					<div class="col-md-6 col-lg-3 gallery-item">
						<div class="hover-overlay">

							<!-- Gallery Image -->
							<img class="img-fluid" src="frontend_assets/images/gallery/image-3.jpg" alt="gallery-image" />
							<div class="item-overlay"></div>

							<!-- Image Zoom -->
							<div class="image-zoom">
								<a class="image-link" href="frontend_assets/images/gallery/image-3.jpg" title=""><i class="fas fa-search-plus"></i></a>
							</div>

						</div>
					</div>


					<!-- IMAGE #4 -->
					<div class="col-md-6 col-lg-3 gallery-item">
						<div class="hover-overlay">

							<!-- Gallery Image -->
							<img class="img-fluid" src="frontend_assets/images/gallery/image-4.jpg" alt="gallery-image" />
							<div class="item-overlay"></div>

							<!-- Image Zoom -->
							<div class="image-zoom">
								<a class="image-link" href="frontend_assets/images/gallery/image-4.jpg" title=""><i class="fas fa-search-plus"></i></a>
							</div>

						</div>
					</div>


					<!-- IMAGE #5 -->
					<div class="col-md-6 col-lg-3 gallery-item">
						<div class="hover-overlay">

							<!-- Gallery Image -->
							<img class="img-fluid" src="frontend_assets/images/gallery/image-5.jpg" alt="gallery-image" />
							<div class="item-overlay"></div>

							<!-- Image Zoom -->
							<div class="image-zoom">
								<a class="image-link" href="frontend_assets/images/gallery/image-5.jpg" title=""><i class="fas fa-search-plus"></i></a>
							</div>

						</div>
					</div>


					<!-- IMAGE #6 -->
					<div class="col-md-6 col-lg-3 gallery-item">
						<div class="hover-overlay">

							<!-- Gallery Image -->
							<img class="img-fluid" src="frontend_assets/images/gallery/image-6.jpg" alt="gallery-image" />
							<div class="item-overlay"></div>

							<!-- Image Zoom -->
							<div class="image-zoom">
								<a class="image-link" href="frontend_assets/images/gallery/image-6.jpg" title=""><i class="fas fa-search-plus"></i></a>
							</div>

						</div>
					</div>


					<!-- IMAGE #7 -->
					<div class="col-md-6 col-lg-3 gallery-item">
						<div class="hover-overlay">

							<!-- Gallery Image -->
							<img class="img-fluid" src="frontend_assets/images/gallery/image-7.jpg" alt="gallery-image" />
							<div class="item-overlay"></div>

							<!-- Image Zoom -->
							<div class="image-zoom">
								<a class="image-link" href="frontend_assets/images/gallery/image-7.jpg" title=""><i class="fas fa-search-plus"></i></a>
							</div>

						</div>
					</div>


					<!-- IMAGE #8 -->
					<div class="col-md-6 col-lg-3 gallery-item">
						<div class="hover-overlay">

							<!-- Gallery Image -->
							<img class="img-fluid" src="frontend_assets/images/gallery/image-8.jpg" alt="gallery-image" />
							<div class="item-overlay"></div>

							<!-- Image Zoom -->
							<div class="image-zoom">
								<a class="image-link" href="frontend_assets/images/gallery/image-8.jpg" title=""><i class="fas fa-search-plus"></i></a>
							</div>

						</div>
					</div>


				</div>  <!-- END GALLERY IMAGES -->


			</div>	  --}}
            <!-- END GALLERY-1 -->




			<!-- TABS-1
			============================================= -->
			<section id="tabs-1" class="wide-100 tabs-section division">
				<div class="container">
				 	<div class="row">
				 		<div class="col-md-12">


				 			<!-- TABS NAVIGATION -->
							<div id="tabs-nav" class="list-group text-center">
							    <ul class="nav nav-pills" id="pills-tab" role="tablist">

							    	<!-- TAB-1 LINK -->
								  	<li class="nav-item icon-xs">
								    	<a class="nav-link active" id="tab1-list" data-toggle="pill" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">
								    		<span class="flaticon-083-stethoscope"></span> Pediatrics
								    	</a>
								  	</li>

								  	<!-- TAB-2 LINK -->
									<li class="nav-item icon-xs">
									    <a class="nav-link" id="tab2-list" data-toggle="pill" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">
									       <span class="flaticon-005-blood-donation-3"></span> Hematology
									    </a>
									</li>

									<!-- TAB-3 LINK -->
									<li class="nav-item icon-xs">
									    <a class="nav-link" id="tab3-list" data-toggle="pill" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">
									       <span class="flaticon-031-scanner"></span> MRI
									    </a>
									</li>

									<!-- TAB-4 LINK -->
									<li class="nav-item icon-xs">
									    <a class="nav-link" id="tab4-list" data-toggle="pill" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">
									       <span class="flaticon-048-lungs"></span> X-Ray Diagnostics
									    </a>
									</li>

								</ul>

							</div>	<!-- END TABS NAVIGATION -->


							<!-- TABS CONTENT -->
							<div class="tab-content" id="pills-tabContent">


								<!-- TAB-1 CONTENT -->
								<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab1-list">
									<div class="row d-flex align-items-center">


										<!-- TAB-1 IMAGE -->
										<div class="col-lg-6">
											<div class="tab-img">
												<img class="img-fluid" src="frontend_assets/images/pediatrics_700x700.jpg" alt="tab-image" />
											</div>
										</div>


										<!-- TAB-1 TEXT -->
										<div class="col-lg-6">
											<div class="txt-block pc-30">

												<!-- Title -->
												<h3 class="h3-md steelblue-color">Pediatrics</h3>

												<!-- Text -->
												<p class="mb-30">An enim nullam tempor sapien gravida donec enim ipsum blandit
												   porta justo integer odio velna vitae auctor integer congue magna at pretium
												   purus pretium ligula rutrum itae laoreet augue in cubilia laoreet an augue
												   egestas ipsum vitae emo ligula vitae arcu mollis blandit ultrice ligula egestas
												   magna suscipit
												</p>

												<!-- Options List -->
												<div class="row">

													<div class="col-xl-6">

														<!-- Option #1 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Nemo ipsam egestas volute and turpis dolores quaerat</p>
														</div>

														<!-- Option #2 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Magna luctus tempor</p>
														</div>

														<!-- Option  #3 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">An enim nullam tempor at pretium purus blandit</p>
														</div>

													</div>

													<div class="col-xl-6">

														<!-- Option #4 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Magna luctus tempor blandit a vitae suscipit mollis</p>
														</div>

														<!-- Option #5 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Nemo ipsam egestas volute turpis dolores quaerat</p>
														</div>

														<!-- Option #6 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">An enim nullam tempor</p>
														</div>

													</div>

												</div>	<!-- End Options List -->

												<!-- Button -->
												<a href="service-1.html" class="btn btn-blue blue-hover mt-30">View More Details</a>

											</div>
										</div>	<!-- END TAB-1 TEXT -->


									</div>
								</div>	<!-- END TAB-1 CONTENT -->


								<!-- TAB-2 CONTENT -->
								<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab2-list">
									<div class="row d-flex align-items-center">


										<!-- TAB-2 IMAGE -->
										<div class="col-lg-6">
											<div class="tab-imgs">
												<img class="img-fluid" src="frontend_assets/images/hematology_700x700.jpg" alt="tab-image" />
											</div>
										</div>


										<!-- TAB-2 TEXT -->
										<div class="col-lg-6">
											<div class="txt-block pc-30">

												<!-- Title -->
												<h3 class="h3-md steelblue-color">Hematology</h3>

												<!-- Text -->
												<p class="mb-30">An enim nullam tempor sapien gravida donec enim ipsum blandit
												   porta justo integer odio velna vitae auctor integer congue magna at pretium
												   purus pretium ligula rutrum itae laoreet augue in cubilia laoreet an augue
												   egestas ipsum vitae emo ligula vitae arcu mollis blandit ultrice ligula egestas
												   magna suscipit
												</p>

												<!-- Options List -->
												<div class="row">

													<div class="col-xl-6">

														<!-- Option #1 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Nemo ipsam egestas volute and turpis dolores quaerat</p>
														</div>

														<!-- Option #2 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Magna luctus tempor</p>
														</div>

														<!-- Option #3 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">An enim nullam tempor at pretium purus blandit</p>
														</div>

													</div>

													<div class="col-xl-6">

														<!-- Option #4 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Magna luctus tempor blandit a vitae suscipit mollis</p>
														</div>

														<!-- Option #5 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Nemo ipsam egestas volute turpis dolores quaerat</p>
														</div>

														<!-- Option #6 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">An enim nullam tempor</p>
														</div>

													</div>

												</div>	<!-- End Options List -->

												<!-- Button -->
												<a href="service-2.html" class="btn btn-blue blue-hover mt-30">View More Details</a>

											</div>
										</div>	<!-- END TAB-2 TEXT -->


									</div>
								</div>	<!-- END TAB-2 CONTENT -->


								<!-- TAB-3 CONTENT -->
								<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab3-list">
									<div class="row d-flex align-items-center">


										<!-- TAB-3 IMAGE -->
										<div class="col-lg-6">
											<div class="tab-img">
												<img class="img-fluid" src="frontend_assets/images/mri_700x700.jpg" alt="tab-image" />
											</div>
										</div>


										<!-- TAB-3 TEXT -->
										<div class="col-lg-6">
											<div class="txt-block pc-30">

												<!-- Title -->
												<h3 class="h3-md steelblue-color">MRI Diagnostic</h3>

												<!-- Text -->
												<p class="mb-30">An enim nullam tempor sapien gravida donec enim ipsum blandit
												   porta justo integer odio velna vitae auctor integer congue magna at pretium
												   purus pretium ligula rutrum itae laoreet augue in cubilia laoreet an augue
												   egestas ipsum vitae emo ligula vitae arcu mollis blandit ultrice ligula egestas
												   magna suscipit
												</p>

												<!-- Options List -->
												<div class="row">

													<div class="col-xl-6">

														<!-- Option #1 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Nemo ipsam egestas volute and turpis dolores quaerat</p>
														</div>

														<!-- Option #2 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Magna luctus tempor</p>
														</div>

														<!-- Option #3 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">An enim nullam tempor at pretium purus blandit</p>
														</div>

													</div>

													<div class="col-xl-6">

														<!-- Option #4 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Magna luctus tempor blandit a vitae suscipit mollis</p>
														</div>

														<!-- Option #5 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Nemo ipsam egestas volute turpis dolores quaerat</p>
														</div>

														<!-- Option #6 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">An enim nullam tempor</p>
														</div>

													</div>

												</div>	<!-- End Options List -->

												<!-- Button -->
												<a href="service-1.html" class="btn btn-blue blue-hover mt-30">View More Details</a>

											</div>
										</div>	<!-- END TAB-3 TEXT -->


									</div>
								</div>	<!-- END TAB-3 CONTENT -->


								<!-- TAB-4 CONTENT -->
								<div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="tab4-list">
									<div class="row d-flex align-items-center">


										<!-- TAB-4 IMAGE -->
										<div class="col-lg-6">
											<div class="tab-img">
												<img class="img-fluid" src="frontend_assets/images/x-ray_700x700.jpg" alt="tab-image" />
											</div>
										</div>


										<!-- TAB-4 TEXT -->
										<div class="col-lg-6">
											<div class="txt-block pc-30">

												<!-- Title -->
												<h3 class="h3-md steelblue-color">X-Ray Diagnostic</h3>

												<!-- Text -->
												<p class="mb-30">An enim nullam tempor sapien gravida donec enim ipsum blandit
												   porta justo integer odio velna vitae auctor integer congue magna at pretium
												   purus pretium ligula rutrum itae laoreet augue in cubilia laoreet an augue
												   egestas ipsum vitae emo ligula vitae arcu mollis blandit ultrice ligula egestas
												   magna suscipit
												</p>

												<!-- Options List -->
												<div class="row">

													<div class="col-xl-6">

														<!-- Option #1 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Nemo ipsam egestas volute and turpis dolores quaerat</p>
														</div>

														<!-- Option #2 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Magna luctus tempor</p>
														</div>

														<!-- Option #3 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">An enim nullam tempor at pretium purus blandit</p>
														</div>

													</div>

													<div class="col-xl-6">

														<!-- Option #4 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Magna luctus tempor blandit a vitae suscipit mollis</p>
														</div>

														<!-- Option #5 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Nemo ipsam egestas volute turpis dolores quaerat</p>
														</div>

														<!-- Option #6 -->
														<div class="box-list">
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">An enim nullam tempor</p>
														</div>

													</div>

												</div>	<!-- End Options List -->

												<!-- Button -->
												<a href="service-2.html" class="btn btn-blue blue-hover mt-30">View More Details</a>

											</div>
										</div>	<!-- END TAB-4 TEXT -->


									</div>
								</div>	<!-- END TAB-4 CONTENT -->


							</div>	<!-- END TABS CONTENT -->


			 			</div>
				 	</div>     <!-- End row -->
				</div>     <!-- End container -->
			</section>	<!-- END TABS-1 -->




			<!-- SERVICES-3
			============================================= -->
			<section id="services-3" class="bg-lightgrey wide-100 services-section division">
				<div class="container">


					<!-- SECTION TITLE -->
					<div class="row">
						<div class="col-lg-10 offset-lg-1 section-title">

							<!-- Title 	-->
							<h3 class="h3-md steelblue-color">Total Health Care Solutions</h3>

							<!-- Text -->
							<p>Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero at tempus,
							   blandit posuere ligula varius congue cursus porta feugiat
							</p>

						</div>
					</div>


					<!-- SERVICES CONTENT -->
					<div class="row">
						<div class="col-md-12">
							<div class="owl-carousel owl-theme services-holder">


								<!-- SERVICE BOX #1 -->
								<div class="sbox-3 icon-sm">

									<!-- Icon -->
									<div class="sbox-3-icon">
										<span class="flaticon-083-stethoscope"></span>
									</div>

									<!-- Title -->
									<h5 class="h5-xs steelblue-color">Pediatrics</h5>

									<!-- Text -->
									<p>Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor
									   tempus feugiat dolor lacinia cubilia curae integer congue leo metus
									</p>

								</div>


								<!-- SERVICE BOX #2 -->
								<div class="sbox-3 icon-sm">

									<!-- Icon -->
									<div class="sbox-3-icon">
										<span class="flaticon-047-head"></span>
									</div>

									<!-- Title -->
									<h5 class="h5-xs steelblue-color">Neurology</h5>

									<!-- Text -->
									<p>Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor
									   tempus feugiat dolor lacinia cubilia curae integer congue leo metus
									</p>

								</div>


								<!-- SERVICE BOX #3 -->
								<div class="sbox-3 icon-sm">

									<!-- Icon -->
									<div class="sbox-3-icon">
										<span class="flaticon-015-blood-donation-1"></span>
									</div>

									<!-- Title -->
									<h5 class="h5-xs steelblue-color">Haematology</h5>

									<!-- Text -->
									<p>Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor
									   tempus feugiat dolor lacinia cubilia curae integer congue leo metus
									</p>

								</div>


								<!-- SERVICE BOX #4 -->
								<div class="sbox-3 icon-sm">

									<!-- Icon -->
									<div class="sbox-3-icon">
										<span class="flaticon-048-lungs"></span>
									</div>

									<!-- Title -->
									<h5 class="h5-xs steelblue-color">X-Ray Diagnostic</h5>

									<!-- Text -->
									<p>Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor
									   tempus feugiat dolor lacinia cubilia curae integer congue leo metus
									</p>

								</div>


								<!-- SERVICE BOX #5 -->
								<div class="sbox-3 icon-sm">

									<!-- Icon -->
									<div class="sbox-3-icon">
										<span class="flaticon-060-cardiogram-4"></span>
									</div>

									<!-- Title -->
									<h5 class="h5-xs steelblue-color">Cardiology</h5>

									<!-- Text -->
									<p>Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor
									   tempus feugiat dolor lacinia cubilia curae integer congue leo metus
									</p>

								</div>


								<!-- SERVICE BOX #6 -->
								<div class="sbox-3 icon-sm">

									<!-- Icon -->
									<div class="sbox-3-icon">
										<span class="flaticon-031-scanner"></span>
									</div>

									<!-- Title -->
									<h5 class="h5-xs steelblue-color">MRI</h5>

									<!-- Text -->
									<p>Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor
									   tempus feugiat dolor lacinia cubilia curae integer congue leo metus
									</p>

								</div>


								<!-- SERVICE BOX #7 -->
								<div class="sbox-3 icon-sm">

									<!-- Icon -->
									<div class="sbox-3-icon">
										<span class="flaticon-076-microscope"></span>
									</div>

									<!-- Title -->
									<h5 class="h5-xs steelblue-color">Laboratory Services</h5>

									<!-- Text -->
									<p>Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor
									   tempus feugiat dolor lacinia cubilia curae integer congue leo metus
									</p>

								</div>


								<!-- SERVICE BOX #8 -->
								<div class="sbox-3 icon-sm">

									<!-- Icon -->
									<div class="sbox-3-icon">
										<span class="flaticon-068-ambulance-3"></span>
									</div>

									<!-- Title -->
									<h5 class="h5-xs steelblue-color">Emergency Help</h5>

									<!-- Text -->
									<p>Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor
									   tempus feugiat dolor lacinia cubilia curae integer congue leo metus
									</p>

								</div>


							</div>
						</div>
					</div>	<!-- END SERVICES CONTENT -->


				</div>	   <!-- End container -->
			</section>	 <!-- END SERVICES-3 -->




			<!-- ABOUT-4
			============================================= -->
			<section id="about-4" class="wide-60 about-section division">
				<div class="container">
					<div class="row">


						<!-- ABOUT BOX #1 -->
						<div class="col-lg-4">
							<div class="abox-4 mb-40 wow fadeInUp" data-wow-delay="0.4s">

								<!-- Image -->
								<img class="img-fluid" src="frontend_assets/images/quality_care_800x600.jpg" alt="about-image" />

								<!-- Text -->
								<div class="abox-4-txt">

									<!-- Title -->
									<h5 class="h5-xs steelblue-color"><a href="all-services.html">Highest Quality Care</a></h5>

									<!-- Text -->
									<p>Porta semper lacus cursus, feugiat primis ultrice ligula risus auctor tempus feugiat
									   dolor lacinia cursus nulla vitae massa placerat at neque purus ultrice
									</p>
								</div>

							</div>
						</div>


						<!-- ABOUT BOX #2 -->
						<div class="col-lg-4">
							<div class="abox-4 mb-40 wow fadeInUp" data-wow-delay="0.6s">

								<!-- Image -->
								<img class="img-fluid" src="frontend_assets/images/emergency_help_800x600.jpg" alt="about-image" />

								<!-- Text -->
								<div class="abox-4-txt">

									<!-- Title -->
									<h5 class="h5-xs steelblue-color"><a href="all-services.html">Emergency Department</a></h5>

									<!-- Text -->
									<p>Porta semper lacus cursus, feugiat primis ultrice ligula risus auctor tempus feugiat
									   dolor lacinia cursus nulla vitae massa placerat at neque purus ultrice
									</p>
								</div>

							</div>
						</div>


						<!-- ABOUT BOX #3 -->
						<div class="col-lg-4">
							<div class="abox-4 abox-4-table blue-table mb-40 wow fadeInUp" data-wow-delay="0.6s">

								<!-- Title -->
								<h5 class="h5-sm">Working Time</h5>

								<!-- Text -->
								<p>Porta semper lacus cursus, feugiat primis ultrice ligula risus auctor at tempus feugiat
								   dolor lacinia cursus nulla vitae massa
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
									      	<td>-</td>
									      	<td class="text-right">9:00 AM - 6:30 PM</td>
									    </tr>
									    <tr>
									      	<td>Friday</td>
									      	<td>-</td>
									      	<td class="text-right">9:00 AM - 6:00 PM</td>
									    </tr>
									    <tr class="last-tr">
									      	<td>Sun - Sun</td>
									      	<td>-</td>
									      	<td class="text-right">Closed</td>
									   	 </tr>
									  </tbody>
								</table>

							</div>
						</div>


					</div>    <!-- End row -->
				</div>	   <!-- End container -->
			</section>	<!-- END ABOUT-4 -->




			<!-- BANNER-2
			============================================= -->
			<section id="banner-2" class="pt-50 banner-section division">
				<div class="bg-scroll bg-inner bg-image division">
					<div class="container white-color">
						<div class="row d-flex align-items-center">


							<!-- CALL TO ACTION IMAGE -->
							<div class="col-lg-5">
								<div class="banner-2-img">
									<img class="img-fluid" src="frontend_assets/images/image-05.png" alt="banner-image" />
								</div>
							</div>


							<!-- BANNER TEXT -->
							<div class="col-lg-6 offset-lg-1">
								<div class="banner-txt pc-30 wow fadeInUp" data-wow-delay="0.4s">

									<!-- Section ID -->
					 				<span class="section-id id-color">Modern Medicine</span>

									<!-- Title  -->
									<h3 class="h3-lg">Better Technologies for Better Healthcare</h3>

									<!-- Text -->
									<p>Egestas magna egestas magna ipsum vitae purus ipsum primis in cubilia laoreet augue
									   egestas suscipit lectus mauris lectus laoreet gestas neque undo luctus feugiat.
									   Aliquam a augue suscipit
								    </p>

								    <!-- Button -->
									<a href="all-doctors.html" class="btn btn-tra-white blue-hover">View Our Doctors</a>

								</div>
							</div>	<!-- END BANNER TEXT -->


						</div>	  <!-- End row -->
					</div>	   <!-- End container -->
				</div>		<!-- End Inner Background -->
			</section>	<!-- END BANNER-2 -->




			<!-- DOCTORS-1
			============================================= -->
			<section id="doctors-1" class="wide-40 doctors-section division">
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

                        @foreach ($doctors as $dr)
                            @if ( $dr ->rank == 1)

                            <!-- DOCTOR #2 -->
                            <div class="col-md-6 col-lg-3">
                                <div class="doctor-1">

                                    <!-- Doctor Photo -->
                                    <div class="hover-overlay text-center">

                                        <!-- Photo -->
                                        <img style="height: 256px;" class="img-fluid" src="{{ asset('storage/'.$dr->photo) }}" alt="doctor-foto">
                                        <div class="item-overlay"></div>

                                        <!-- Profile Link -->
                                        <div class="profile-link">
                                            <a class="btn btn-sm btn-tra-white black-hover" href="{{ route('drProfile',$dr->id) }}" title="">View More Info</a>
                                        </div>

                                    </div>

                                    <!-- Doctor Meta -->
                                    <div class="doctor-meta">

                                        <h5 class="h5-sm steelblue-color">{{ $dr->name }}</h5>
                                        <span class="blue-color">{{ $dr->designation }}</span>

                                        <p class="p-sm grey-color">
                                            {!! Str::limit($dr->description,100) !!}
                                        </p>

                                    </div>

                                </div>
                            </div>
                            <!-- END DOCTOR #2 -->
                            @endif
                        @endforeach







					</div>	    <!-- End row -->


					<!-- ALL DOCTORS BUTTON -->
					<div class="row">
						<div class="col-md-12 text-center">
							<div class="all-doctors mb-40">
								<a href="{{ route('doctors') }}" class="btn btn-blue blue-hover">Meet All Doctors</a>
							</div>
						</div>
					</div>


				</div>	   <!-- End container -->
			</section>	<!-- END DOCTORS-1 -->




			<!-- TESTIMONIALS-2bg-lightgrey wide-100 reviews-section division
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
										<div class="quote"><img src="frontend_assets/images/quote.png" alt="quote-img" /></div>

										<!-- Author Avatar -->
										<div class="testimonial-avatar">
											<img src="frontend_assets/images/review-author-1.jpg" alt="testimonial-avatar">
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
										<div class="quote"><img src="frontend_assets/images/quote.png" alt="quote-img" /></div>

										<!-- Author Avatar -->
										<div class="testimonial-avatar">
											<img src="frontend_assets/images/review-author-2.jpg" alt="testimonial-avatar">
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
										<div class="quote"><img src="frontend_assets/images/quote.png" alt="quote-img" /></div>

										<!-- Author Avatar -->
										<div class="testimonial-avatar">
											<img src="frontend_assets/images/review-author-3.jpg" alt="testimonial-avatar">
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
										<div class="quote"><img src="frontend_assets/images/quote.png" alt="quote-img" /></div>

										<!-- Author Avatar -->
										<div class="testimonial-avatar">
											<img src="frontend_assets/images/review-author-4.jpg" alt="testimonial-avatar">
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
										<div class="quote"><img src="frontend_assets/images/quote.png" alt="quote-img" /></div>

										<!-- Author Avatar -->
										<div class="testimonial-avatar">
											<img src="frontend_assets/images/review-author-5.jpg" alt="testimonial-avatar">
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
										<div class="quote"><img src="frontend_assets/images/quote.png" alt="quote-img" /></div>

										<!-- Author Avatar -->
										<div class="testimonial-avatar">
											<img src="frontend_assets/images/review-author-6.jpg" alt="testimonial-avatar">
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
										<div class="quote"><img src="frontend_assets/images/quote.png" alt="quote-img" /></div>

										<!-- Author Avatar -->
										<div class="testimonial-avatar">
											<img src="frontend_assets/images/review-author-7.jpg" alt="testimonial-avatar">
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
										<div class="quote"><img src="frontend_assets/images/quote.png" alt="quote-img" /></div>

										<!-- Author Avatar -->
										<div class="testimonial-avatar">
											<img src="frontend_assets/images/review-author-8.jpg" alt="testimonial-avatar">
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
										<div class="quote"><img src="frontend_assets/images/quote.png" alt="quote-img" /></div>

										<!-- Author Avatar -->
										<div class="testimonial-avatar">
											<img src="frontend_assets/images/review-author-9.jpg" alt="testimonial-avatar">
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
			</section>	  --}}
            <!-- END TESTIMONIALS-2 -->




			<!-- BANNER-3
			============================================= -->
			<section id="banner-3" class="pt-100 bg-lightgrey banner-section division">
				<div class="container">
					<div class="row d-flex align-items-center">


						<!-- BANNER TEXT -->
						<div class="col-lg-5">
							<div class="banner-txt wow fadeInUp" data-wow-delay="0.4s">

								<!-- Section ID -->
					 			<span class="section-id blue-color">Why Choose MedService</span>

								<!-- Title  -->
								<h2 class="h2-xl steelblue-color">High Quality Medical Care</h2>
								<h3 class="h3-md blue-color">+1-800-123-4560</h3>

							    <!-- Text -->
								<p>Egestas magna egestas magna ipsum vitae purus ipsum primis in cubilia laoreet augue
								   egestas suscipit lectus mauris a lectus laoreet gestas neque undo luctus feugiat augue
								   suscipit
							    </p>

								<!-- Button -->
								<a href="#" class="btn btn-blue blue-hover mt-15">Make An Apointment</a>

							</div>
						</div>	<!-- END BANNER TEXT -->


						<!-- BANNER IMAGE -->
						<div class="col-lg-7">
							<div class="banner-3-img">
								<img class="img-fluid" src="frontend_assets/images/image-06.png" alt="banner-image" />
							</div>
						</div>


					</div>	 <!-- End row -->
				</div>	   <!-- End container -->
			</section>	<!-- END BANNER-3 -->

@endsection
