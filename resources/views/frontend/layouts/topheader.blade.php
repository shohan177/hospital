<header id="header" class="header">


    <!-- MOBILE HEADER -->
    <div class="wsmobileheader clearfix">
        <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
        <span class="smllogo"><img src="{{ asset('frontend_assets/images/logo-grey.png') }}" width="180" height="40" alt="mobile-logo"/></span>
        <a href="tel:123456789" class="callusbtn"><i class="fas fa-phone"></i></a>
     </div>


     <!-- HEADER STRIP -->
    {{-- <div class="headtoppart bg-steelblue clearfix">
        <div class="">

            <!-- Address -->
             <div class="headertopleft">
                <div class="address clearfix"><span><i class="fas fa-map-marker-alt"></i>121 King St,
                    Melbourne, VIC 3000 </span> <a href="tel:123456789" class="callusbtn"><i class="fas fa-phone"></i>(800)-569-7890</a>
                </div>
             </div>

             <!-- Social Links -->
            <div class="headertopright">
                <a class="googleicon" title="Google" href="#"><i class="fab fa-google"></i> <span class="mobiletext02">Google</span></a>
                <a class="linkedinicon" title="Linkedin" href="#"><i class="fab fa-linkedin-in"></i> <span class="mobiletext02">Linkedin</span></a>
                <a class="twittericon" title="Twitter" href="#"><i class="fab fa-twitter"></i> <span class="mobiletext02">Twitter</span></a>
                <a class="facebookicon" title="Facebook" href="#"><i class="fab fa-facebook-f"></i> <span class="mobiletext02">Facebook</span></a>
              </div>

        </div>
      </div>	 --}}
      <!-- END HEADER STRIP -->


      <!-- NAVIGATION MENU -->
      <div class="wsmainfull menu clearfix">
        <div class="wsmainwp clearfix">

            <!-- LOGO IMAGE -->
            <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 360 x 80 pixels) -->
            <div class="desktoplogo"><a href="#hero-3"><img src="{{ asset('frontend_assets/images/logo-grey.png') }}"  width="180" height="40" alt="header-logo"></a></div>
            @php
                $allDepartment = App\Model\Department::latest()->get();
                $allService = App\Model\Service::latest()->get();
            @endphp
            <!-- MAIN MENU -->
              <nav class="wsmenu clearfix">


                <ul class="wsmenu-list">


                    {{-- home --}}
                    <li aria-haspopup="true"><a href="{{ route('mainHome') }}">Home</a>
                    </li>



                    <li aria-haspopup="true"><a href="#">About <span class="wsarrow"></span></a>
                        <ul class="sub-menu">
                            <li aria-haspopup="true"><a href="{{ route('about') }}">About Us</a></li>
                            <li aria-haspopup="true"><a href="demo-1.html">Mission, Vision, Values</a></li>
                            <li aria-haspopup="true"><a href="demo-1.html">Founder</a></li>
                            <li aria-haspopup="true"><a href="demo-1.html">Message From CEO</a></li>
                            <li aria-haspopup="true"><a href="demo-1.html">Management</a></li>
                            <li aria-haspopup="true"><a href="demo-1.html">Corporate Services</a></li>
                            <li aria-haspopup="true"><a href="demo-1.html">Contact</a></li>
                        </ul>
                    </li>
                    {{-- all department  --}}
                    <li aria-haspopup="true"><a href="#">Departments <span class="wsarrow"></span></a>
                           <ul class="sub-menu">
                               @foreach ($allDepartment as $item)

                               <li aria-haspopup="true"><a href="{{ route('department',$item ->id)}}">{{ $item -> name }}</a></li>
                               @endforeach
                           </ul>
                    </li>
                    {{-- all service  --}}
                    <li aria-haspopup="true"><a href="#">Service <span class="wsarrow"></span></a>
                           <ul class="sub-menu">
                               @foreach ($allService as $item)

                               <li aria-haspopup="true"><a href="demo-1.html">{{ $item -> name }}</a></li>
                               @endforeach
                           </ul>
                    </li>



                    <!-- SIMPLE NAVIGATION LINK -->
                    <li class="nl-simple" aria-haspopup="true"><a href="#">Consultants</a></li>

                    <!-- NAVIGATION MENU BUTTON -->
                    <li class="nl-simple header-btn" aria-haspopup="true"><a href="appointment.html">Make an Appointment</a></li>

                </ul>
            </nav>	<!-- END MAIN MENU -->

        </div>
    </div>
    <!-- END NAVIGATION MENU -->


</header>
