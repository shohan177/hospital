@extends('frontend.layouts.app')
@section('main')
<!-- SERVICES-2
			============================================= -->
			<section id="services-2" class="wide-70 services-section division">
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row">	
						<div class="col-lg-10 offset-lg-1 section-title">		

							<!-- Title 	-->	
							<h3 class="h3-md steelblue-color">Choose Department</h3>	

							<!-- Text -->
							<p>Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero at tempus, 
							   blandit posuere ligula varius congue cursus porta feugiat
							</p>
										
						</div> 
					</div>


			 		<div class="row">

						@foreach ($department as $valu)
							
						<!-- SERVICE BOX #2 -->
						<div class="col-sm-6 col-lg-3">
							<div class="sbox-2 wow fadeInUp" data-wow-delay="0.6s">
								<a href="{{ route('appoinmentForm') }}">	
								
									<!-- Icon  -->
									<div class="sbox-2-icon icon-xl">
										<span class="flaticon-047-head"></span>
									</div>
		
									<!-- Title -->
									<h5 class="h5-sm sbox-2-title steelblue-color">{{ $valu ->name }}</h5>

								</a>
							</div>							
						</div>
						@endforeach



						


			 		</div>	   <!-- End row -->		


			 	</div>	   <!-- End container -->		
			</section>	
			<!-- END SERVICES-2 -->

@endsection
