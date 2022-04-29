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
                                    <h3 class="sub-title">We provide management and protection of knowledge, information, and data.</h3>
                                    <h2 class="title"></h2>
                                </div>

                                <p>We provide the processes and mechanisms needed to build a secure and reliable ICT infrastructure.</p>

                                <p>Information assurance and security is the management and protection of knowledge, information, and data.</p>

                                <p>Information assurance, which focuses on ensuring the availability, integrity, authentication, confidentiality, and non-repudiation of information and systems. These measures may include providing for restoration of information systems by incorporating protection, detection, and reaction capabilities.</p>

                                <p>Information security, which centers on the protection of information and information systems from unauthorized access, use, disclosure, disruption, modification, or destruction in order to provide confidentiality, integrity, and availability.</p>
                            

                            </div>
                            <!-- About Content End -->
                        </div>



                        <div class="col-lg-6">

                            

                                 
                                <p>Information systems play an important role in the infrastructure that supports commerce, banking, telecommunications, health care, and national security, driving the need for qualified information assurance and security specialists.</p><br>

                            
                          <img src="/assets/images/service/s-img-10.jpg" alt="">
                            <!-- About Thumb Wrap End -->
                        </div>


                    </div>
                </div>



            </div>
        </div>
        <!-- Features End -->




@endsection