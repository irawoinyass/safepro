@extends('MainLayouts.app')
@section('content')


<!-- Page Banner Start -->
        <div class="section page-banner-section" style="background-image: url(/assets/images/hero-3.jpg);">
            <div class="shape-2"></div>
            <div class="container">
                <div class="page-banner-wrap">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Page Banner Content Start -->
                            <div class="page-banner text-center">
                                <h2 class="title">Contact Us</h2>
                                <ul class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                </ul>
                            </div>
                            <!-- Page Banner Content End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner End -->













<!-- Contact Info Start -->
        <div class="section contact-info-section section-padding-02">
            <div class="container">
                <!-- Contact Info Wrap Start -->
                <div class="contact-info-wrap">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <!--Single Contact Info Start -->
                            <div class="single-contact-info text-center">
                                <div class="info-icon">
                                    <i class="flaticon-phone-call"></i>
                                </div>
                                <div class="info-content">
                                	<br>
                                    <h5 class="title">Telephone</h5>
                                    <p><a href="tel:+44 7546 672405">+44 7546 672405</a></p>
                                    
                                    <br>
                                    <br>
                                </div>
                            </div>
                            <!--Single Contact Info End -->
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <!--Single Contact Info Start -->
                            <div class="single-contact-info text-center">
                                <div class="info-icon">
                                    <i class="flaticon-email"></i>
                                </div>
                                <div class="info-content">
                                	 <br>
                                    <h5 class="title">Mail Address</h5>
                                    <p>info@safeproservices.co.uk</p>
                                     <br>
                                    <br>
                                   
                                </div>
                            </div>
                            <!--Single Contact Info End -->
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <!--Single Contact Info Start -->
                            <div class="single-contact-info text-center">
                                <div class="info-icon">
                                    <i class="flaticon-pin"></i>
                                </div>
                                <div class="info-content">
                                    <h5 class="title">Location</h5>
                                    <p>66 Leegrange Road, Manchester, England, M9 4FA</p>
                                </div>
                            </div>
                            <!--Single Contact Info End -->
                        </div>
                    </div>
                </div>
                <!-- Contact Info Wrap End -->
            </div>
        </div>
        <!-- Contact Info End -->









                <!-- Contact Form Start -->
        <div class="section contact-form-section section-padding">
            <div class="container">
                <!-- Contact Wrap Start -->
                <div class="contact-wrap">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="form-title text-center">
                                <h2 class="title">Get Support from our Team</h2>
                            </div>
                            <!-- Contact Form Wrap Start -->
                            <div class="contact-form-wrap">
                            		<div class="alert alert-success" id="alert_success" style="display: none;"></div>
              <div class="alert alert-danger" id="alert_danger" style="display: none;"></div>

                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <input class="form-control" type="text" name="name" id="name" placeholder="Your Name">
                                            </div>
                                            <!-- Single Form End -->
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <input class="form-control" type="email" name="email" id="email" placeholder="Your Email">
                                            </div>
                                            <!-- Single Form End -->
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <input class="form-control" type="text" name="phone_no" id="phone_no" placeholder="Your Number">
                                            </div>
                                            <!-- Single Form End -->
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <input class="form-control" name="msg_subject" id="msg_subject" type="text" placeholder="Subject">
                                            </div>
                                            <!-- Single Form End -->
                                        </div>
                                        <div class="col-md-12">
                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <textarea class="form-control" id="msg" cols="30" placeholder="Write A Message"></textarea>
                                            </div>
                                            <!-- Single Form End -->
                                        </div>
                                        <div class="col-md-12">
                                            <!--  Single Form Start -->
                                            <div class="form-btn text-center">
                                                <button class="btn" id="submit_btn" type="submit">Send Message</button>
                                            </div>
                                            <!--  Single Form End -->
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Contact Form Wrap End -->
                        </div>
                    </div>
                </div>
                <!-- Contact Wrap End -->
            </div>
        </div>
        <!-- Contact Form End -->

<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
<script type="text/javascript">
	$(document).ready(function(){

		var _tokens = $('input[name=_token]').val();


function validateEmail(email) 
    {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }


$('#submit_btn').click(function(event){

  event.preventDefault();


  var name = $('#name').val();
  var email = $('#email').val();
  var phone_no = $('#phone_no').val();
  var msg = $('#msg').val();
  var msg_subject = $('#msg_subject').val();



  if (name == '') {
    $('#alert_danger').show();
$('#alert_danger').html('Please, Kindly Enter Your Name.');
//alert('oka');
  }else if (email == '') {

$('#alert_danger').show();
$('#alert_danger').html('Please, Kindly Enter Your Email Address.');

  }else if (validateEmail(email) == false) {

$('#alert_danger').show();
$('#alert_danger').html('Please, Kindly Enter Valid Email Address.');


        }else if (phone_no == '') {

       $('#alert_danger').show();
$('#alert_danger').html('Please, Kindly Enter Your Phone Number.');

  }else if (msg_subject == '') {

       $('#alert_danger').show();
$('#alert_danger').html('Please, Kindly Enter Mail Subject.');

  }else if (msg == '') {

   $('#alert_danger').show();
$('#alert_danger').html('Please, Kindly Leave Your Comment.');
  }else{
$('#alert_danger').hide();
$('#alert_success').show();
$('#alert_success').html('<i>Processing......</i>');



    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},        
        url:"{{route('main.contact')}}",
        method:"POST",
        data:{msg_subject:msg_subject,name:name,phone_no:phone_no,email:email,msg:msg,_tokens:_tokens},
        success:function(data){

    //console.log(data);

  if (data == 'success') {

    $('#alert_success').show();
$('#alert_success').html('<i>Sent, You will get a relpy from us ASAP.</i>');
  $('#name').val('');
  $('#phone_no').val('');
$('#email').val('');
  $('#msg').val('');
  $('#msg_subject').val('');
  

    }else{

  $('#alert_danger').show();
$('#alert_danger').html(data);

    }


          }
        
         })



  }










});
	});
</script>












@endsection