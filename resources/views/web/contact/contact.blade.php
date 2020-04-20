	  	@extends('web.templete.master')

	    {{-- META --}}
	    @section('meta')
	     <title>Parakiaki Academy</title>
	     <!--<meta name="description" content="">-->
	     <!--<meta name="author" content="">-->
	     <!--<meta name="keywords" content="">-->
	    @endsection

	    @section('content') 
	        <div class="pagehding-sec">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12">
		                    <div class="page-heading">
		                        <h1>Contact Us</h1>
		                    </div>
		                    <div class="breadcrumb-list">
		                        <ul>
		                            <li><a href="{{route('web.index')}}">Home</a></li>
		                            <li><a href="#">Contact Us </a></li>
		                        </ul>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		    <div class="contact-page-sec pt-100 pb-100">
			    <div class="container">
			        <div class="row">
			            <div class="col-md-8">
			                <div class="contact-page-map">
			                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10127.104379981942!2d91.746537738695!3d26.181316983655528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a5a2946bc373f%3A0x68efe4d996207ee8!2sPaltan%20Bazaar%2C%20Guwahati%2C%20Assam!5e0!3m2!1sen!2sin!4v1584446094349!5m2!1sen!2sin" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen=""></iframe>
			                </div>
			            </div>
			            <div class="col-md-4">
			                <div class="contact-info">
			                    <div class="contact-info-item">
			                        <div class="contact-info-icon">
			                            <i class="fa fa-map-marker"></i>
			                        </div>
			                        <div class="contact-info-text">
			                            <h2>address</h2>
			                            <span>Silchar</span>
			                        </div>
			                    </div>
			                </div>
			                <div class="contact-info">
			                    <div class="contact-info-item">
			                        <div class="contact-info-icon">
			                            <i class="fa fa-envelope"></i>
			                        </div>
			                        <div class="contact-info-text">
			                            <h2>e-mail</h2>
			                            <span><a>info@pavakiakademy.com</a></span>
			                        </div>
			                    </div>
			                </div>
			                <div class="contact-info">
			                    <div class="contact-info-item">
			                        <div class="contact-info-icon">
			                            <i class="fa fa-phone"></i>
			                        </div>
			                        <div class="contact-info-text">
			                            <h2>Phone</h2>
			                            <span>+91-8810597540</span>
			                            
			                        </div>
			                    </div>
			                </div>
			            </div>
			            <div class="col-md-12">
			                <div class="contact-page-form">
			                    <h2>Send your message</h2>
			                    <div class="col-md-6 col-sm-6 col-xs-12">
			                        <div class="single-input-field">
			                            <input type="text" placeholder="First Name">
			                        </div>
			                    </div>
			                    <div class="col-md-6 col-sm-6 col-xs-12">
			                        <div class="single-input-field">
			                            <input type="text" placeholder="Subject">
			                        </div>
			                    </div>
			                    <div class="col-md-6 col-sm-6 col-xs-12">
			                        <div class="single-input-field">
			                            <input type="text" placeholder="Phone Number">
			                        </div>
			                    </div>
			                    <div class="col-md-6 col-sm-6 col-xs-12">
			                        <div class="single-input-field">
			                            <input type="email" placeholder="E-mail">
			                        </div>
			                    </div>
			                    <div class="col-md-12 message-input">
			                        <div class="single-input-field">
			                            <textarea placeholder="Write Your Message"></textarea>
			                        </div>
			                    </div>
			                    <div class="single-input-fieldsbtn">
			                        <input type="submit" value="Send Now">
			                    </div>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>
    	@endsection   

      