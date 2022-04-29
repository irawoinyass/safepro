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
                                    <h3 class="sub-title">Our full-service design capabilities allow us to take any idea from specification to production.</h3>
                                    <h2 class="title"></h2>
                                </div>

                                <p>The key to successful product design is understanding the end-user customer, the person for whom the product is being created. WE solve real problems for real people by using empathy and knowledge of our prospective customers’ habits, behaviors, frustrations, needs, and wants.</p>

                                <p>Good product design practices thread throughout the entire product lifecycle. Product design is essential in creating the initial user experience and product offering, from pre-ideation user research to concept development to prototyping and usability testing.</p>

                       <p>But it doesn’t end there, as product design plays an ongoing role in refining the customer experience and ensuring supplemental functionality and capabilities get added in a seamless, discoverable, and non-disruptive manner. Brand consistency and evolution remain an essential product design responsibility until the end of a product’s lifespan.</p>
                            

                            </div>
                            <!-- About Content End -->
                        </div>



                        <div class="col-lg-6">

                            

                                 
                                

                                

                            
                          <img src="/assets/images/c-study-3.jpg" alt="">
                            <!-- About Thumb Wrap End -->
                        </div>


                    </div>
                </div>



            </div>
        </div>
        <!-- Features End -->




@endsection