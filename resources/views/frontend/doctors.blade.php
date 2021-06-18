@extends('frontend.layouts.app')
@section('main')
<!-- BREADCRUMB
			============================================= -->
			<div id="breadcrumb" class="division">
				<div class="container">
					<div class="row">
						{{-- <div class="col">
							<div class=" breadcrumb-holder">

								<!-- Breadcrumb Nav -->
								<nav aria-label="breadcrumb">
								  	<ol class="breadcrumb">
								    	<li class="breadcrumb-item"><a href="demo-1.html">Home</a></li>
								    	<li class="breadcrumb-item active" aria-current="page">Meet the Doctors</li>
								  	</ol>
								</nav>

								<!-- Title -->
								<h4 class="h4-sm steelblue-color">Meet the Doctors</h4>

							</div>
						</div> --}}

                        <div class="col">
                            <div class="statistic-block icon-lg wow fadeInUp" data-wow-delay="0.6s">

                                <!-- Icon  -->
                                <span class="flaticon-137-doctor"></span>

                                <!-- Text -->
                                <h5 class="statistic-number"><span class="count-element">{{ count($doctors) }}</span></h5>
                                <p class="txt-400">Qualified Doctors</p>

                            </div>
                        </div>
					</div>  <!-- End row -->
				</div>	<!-- End container -->
			</div>	<!-- END BREADCRUMB -->




			<!-- DOCTORS-3
			============================================= -->
			<section id="doctors-3" class="bg-lightgrey wide-60 doctors-section division">
				<div class="container">
					<div class="row">

                        @foreach ($doctors as $dr)

						<!-- DOCTOR #1 -->
						<div class="col-md-6 col-lg-4">
							<div class="doctor-2">

								<!-- Doctor Photo -->
								<div class="hover-overlay">
									<img style="height: 300px" class="img-fluid" src="{{ asset('storage/'.$dr->photo) }}" alt="doctor-foto">
								</div>

								<!-- Doctor Meta -->
								<div class="doctor-meta">

									<h5 class="h5-xs blue-color">{{ $dr->name }}</h5>
									<span>{{ $dr->designation }} <p class="text-secondary">{{ $dr->department->name }}</p></span>

									<!-- Button -->
									<a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ route('drProfile',$dr->id) }}" title="">View More Info</a>

								</div>

							</div>
						</div>
                        <!-- END DOCTOR #1 -->

                        @endforeach





					</div>	    <!-- End row -->
				</div>	   <!-- End container -->
			</section>	<!-- END DOCTORS-3 -->









@endsection
