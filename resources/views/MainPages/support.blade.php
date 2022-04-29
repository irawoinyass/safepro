@extends('MainLayouts.app')
@section('content')


<!-- Page Banner Start -->
        <div class="section page-banner-section" style="background-image: url(/assets/images/video-img.jpg);">
            <div class="shape-2"></div>
            <div class="container">
                <div class="page-banner-wrap">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Page Banner Content Start -->
                            <div class="page-banner text-center">
                                <h2 class="title">{{$title}}</h2>
                                <ul class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                                </ul>
                            </div>
                            <!-- Page Banner Content End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner End -->




        <!-- Features Start -->
   <div class="section about-section section-padding">
            <div class="container-fluid">


                <div class="about-wrap">
                    <div class="row">



                                  <div class="col-lg-6">
                            <!-- About Content Start -->
                            <div class="about-content">
                                <div class="section-title">
                                    <h3 class="sub-title">A broad range of network security options are offered by our company.</h3>
                                    <h2 class="title"></h2>
                                </div>

                                <p>Cloud networking is a type of IT infrastructure in which some or all of an organization’s network capabilities and resources are hosted in a public or private cloud platform, managed in-house or by a service provider, and available on demand.</p>

                                <p>Businesses today turn to the cloud to drive agility, deliver differentiation, accelerate time-to-market, and increase scale. The cloud model has become the standard approach to build and deliver applications for the modern enterprise. </p>

                       <p>Cloud networking has also played a critical role in the way organizations address their growing infrastructure needs, regional expansions, and redundancy plans. Many organizations are adopting a multi-data center strategy and leveraging multiple clouds from multiple cloud service providers (CSPs).</p>
                            

                            </div>
                            <!-- About Content End -->
                        </div>



                        <div class="col-lg-6">

                            

                                 
                                

                                

                            
                          <img src="/assets/images/c-study-1.jpg" alt="">
                            <!-- About Thumb Wrap End -->
                        </div>


                    </div>
                </div>



            </div>
        </div>
        <!-- Features End -->




@endsection