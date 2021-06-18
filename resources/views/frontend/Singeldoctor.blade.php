@extends('frontend.layouts.app')
@section('main')
<!-- DOCTOR BREADCRUMBS -->
<section id="doctor-breadcrumbs" class="bg-fixed doctor-details-section division">
    <div class="container">
        <div class="row">
            <div class="col-md-7 offset-md-5">
                 <div class="doctor-data white-color">

                     <!-- Name -->
                     <h2 class="h2-xs">{{ $singleDr ->name }}</h2>
                     <h5 class="h5-md">{{ $singleDr ->department->name }} / {{ $singleDr ->designation}}</h5>

                </div>
            </div>
        </div>   <!-- End row -->
    </div>	  <!-- End container -->
</section>
<!-- END DOCTOR BREADCRUMBS -->




<!-- DOCTOR-1 DETAILS -->
<section id="doctor-1-details" class="doctor-details-section division">
    <div class="container">
        <div class="row">


            <!-- DOCTOR PHOTO -->
            <div class="col-md-5">
                 <div class="doctor-photo mb-40">

                     <!-- Photo -->
                     <img class="img-fluid" src="{{ asset('storage/'.$singleDr->photo) }}" alt="doctor-foto">

                     <!-- Doctor Info -->
                     <div class="doctor-info">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                      <td>Department</td>
                                      <td>{{ $singleDr ->department->name }}</td>
                                </tr>
                                <tr>
                                      <td>Designation</td>
                                      <td>
                                         {{ $singleDr ->designation}}
                                      </td>
                                   </tr>
                                <tr>
                                      <td>Available time</td>
                                      <td>
                                         {{ $singleDr ->time}}
                                      </td>
                                   </tr>
                                   <tr class="last-tr">
                                      <td>Work Days</td>
                                      <td>
                                          @foreach ($avilabeDays as $day)

                                          @if ($day == "0")
                                            Sun
                                          @elseif ($day == "1")
                                            Mon
                                          @elseif ($day == "2")
                                            Tue
                                          @elseif ($day == "3")
                                            We
                                          @elseif ($day == "4")
                                            Thu
                                          @elseif ($day == "5")
                                            Fri
                                          @elseif ($day == "g")
                                            Sat
                                          @endif

                                            ,
                                          @endforeach
                                      </td>
                                   </tr>
                            </tbody>
                        </table>
                    </div>	<!-- End Doctor Info -->

                    <!-- Doctor Contacts -->
                     <div class="doctor-contacts text-center">
                         <h4 class="h4-xs"><i class="fas fa-mobile-alt"></i>{{ $singleDr -> phone  }}</h4>

                    </div>



                 </div>
             </div>	<!-- END DOCTOR PHOTO -->


             <!-- DOCTOR'S BIO -->
            <div class="col-md-7">
                <div class="doctor-bio">

                       <!-- Title -->
                    <h5 class="h5-md blue-color">About</h5>

                       <!-- Text -->
                    <p>
                        {!! $singleDr ->description !!}
                    </p>




                </div>
            </div>	<!-- END DOCTOR BIO -->


        </div>    <!-- End row -->
    </div>	   <!-- End container -->
</section>
<!-- END DOCTOR-1 DETAILS -->

@endsection
