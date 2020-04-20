	 
@extends('web.templete.master')

	    {{-- META --}}
	    @section('meta')
	     <title>Parakiaki Academy</title>
	     <!--<meta name="description" content="">-->
	     <!--<meta name="author" content="">-->
	     <!--<meta name="keywords" content="">-->
	    @endsection

	    @section('content') 
	        <div id="preloader">
		        <div>
		            <h1 style="position: fixed; top: 17%; left: 25%;font-style: italic;font-size: 50px"><img style="margin: auto;display: table;margin-bottom: 20px" src="{{asset('web/img/logo/logo.jpg')}}" alt="">WelCome To Pavaki Akademy</h1>
		        </div>
		    </div>

            <div class="slider">
		        <div class="all-slide owl-item">

		            <div class="single-slide" style="background-image:url({{asset('web/img/slide1.jpg')}});">
		                <div class="slider-overlay"></div>
		                <div class="slider-wrapper">
		                    <div class="slider-text">
		                        <div class="slider-caption">
		                            <h1>We are right person for your Educations teaching</h1>
		                            <ul>
		                                <li><a href="{{route('web.contact.contact')}}">contact us </a></li>
		                            </ul>
		                        </div>
		                    </div>
		                </div>
		            </div>

		            <div class="single-slide" style="background-image:url({{asset('web/img/slide2.jpg')}});">
		                <div class="slider-overlay"></div>
		                <div class="slider-wrapper">
		                    <div class="slider-text">
		                        <div class="slider-caption">
		                            <h1>We are right person for your Educations teaching</h1>
		                            <ul>
		                                <li><a href="{{route('web.contact.contact')}}">contact us </a></li>
		                            </ul>
		                        </div>
		                    </div>
		                </div>
		            </div>

		        </div>
		    </div>

		    <div class="why-choose-us-sec pt-100 pb-70">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12">
		                    <div class="sec-title HGS">
		                        <h1>Welcome Our Pavaki Akademy</h1>
		                    </div>
		                </div>
		            </div>
		            <div class="row">

		                <div class="col-md-4">
		                    <div class="why-choose-inner">
		                        <div class="why-choose-icon">
		                            <img src="{{asset('web/img/icon/employees.png')}}" alt="" />
		                        </div>
		                        <div class="why-choose-text">
		                            <h2><a href="#">Friendly Environment</a></h2>
		                            <p>Timeam nusquam usu ut, civibus fabellas eleifend eu vis. Id ipsum civibus pri, te ignota dignissim mel, iisque recteque.</p>
		                        </div>
		                    </div>
		                </div>

		                <div class="col-md-4">
		                    <div class="why-choose-inner">
		                        <div class="why-choose-icon">
		                            <img src="{{asset('web/img/icon/statistics.png')}}" alt="" />
		                        </div>
		                        <div class="why-choose-text">
		                            <h2><a href="#">Expert Instructor</a></h2>
		                            <p>Timeam nusquam usu ut, civibus fabellas eleifend eu vis. Id ipsum civibus pri, te ignota dignissim mel, iisque recteque.</p>
		                        </div>
		                    </div>
		                </div>

		                <div class="col-md-4">
		                    <div class="why-choose-inner">
		                        <div class="why-choose-icon">
		                            <img src="{{asset('web/img/icon/locked.png')}}" alt="" />
		                        </div>
		                        <div class="why-choose-text">
		                            <h2><a href="#">Group Teaching</a></h2>
		                            <p>Timeam nusquam usu ut, civibus fabellas eleifend eu vis. Id ipsum civibus pri, te ignota dignissim mel, iisque recteque.</p>
		                        </div>
		                    </div>
		                </div>

		            </div>
		        </div>
		    </div>

		    <div class="course-header-sec">
		        <div class="course-sec-image"></div>
		    </div>

		    <div class="course-sec pb-70">
		        <div class="container">

		            <div class="row">
		                <div class="col-md-12">
		                    <div class="sec-title HGS">
		                        <h1 class="">Our Subject</h1>
		                    </div>
		                </div>
		            </div>

		            <div class="row">
		                <div class="course-list-sec">
		                    <div class="all-course">

		                        <div class="course-inner">
		                            <div class="course-thumb">
		                                <img src="{{asset('web/img/course_1.jpg')}}" alt="" />
		                                <div class="readmore-button">
		                                    <a href="#">Learn More</a>
		                                </div>
		                            </div>
		                            <div class="course-meta">
		                                <span class="course-price">Class IX</span>
		                            </div>
		                            <div class="course-desc">
		                                <p>English</p>
		                                <p>Maths</p>
		                                <p>Social Studies</p>
		                            </div>
		                            <div class="course-info">
		                                <ul>
		                                    <li><a href="#"><i class="fa fa-user"></i>24 Seats</a></li>
		                                </ul>
		                            </div>
		                        </div>

		                        <div class="course-inner">
		                            <div class="course-thumb">
		                                <img src="{{asset('web/img/course_2.jpg')}}" alt="" />
		                                <div class="readmore-button">
		                                    <a href="#">Learn More</a>
		                                </div>
		                            </div>
		                            <div class="course-meta">
		                                <span class="course-price">Class X</span>
		                            </div>
		                            <div class="course-desc">
		                                <p>English</p>
		                                <p>Maths</p>
		                                <p>Social Studies</p>
		                            </div>
		                            <div class="course-info">
		                                <ul>
		                                    <li><a href="#"><i class="fa fa-user"></i>24 Seats</a></li>
		                                </ul>
		                            </div>
		                        </div>

		                        <div class="course-inner">
		                            <div class="course-thumb">
		                                <img src="{{asset('web/img/course_4.jpg')}}" alt="" />
		                                <div class="readmore-button">
		                                    <a href="#">Learn More</a>
		                                </div>
		                            </div>
		                            <div class="course-meta">
		                                <span class="course-price">Class XI</span>
		                            </div>
		                            <div class="course-desc">
		                                <p>English</p>
		                                <p>Maths</p>
		                                <p>Social Studies</p>
		                            </div>
		                            <div class="course-info">
		                                <ul>
		                                    <li><a href="#"><i class="fa fa-user"></i>24 Seats</a></li>
		                                </ul>
		                            </div>
		                        </div>

		                        <div class="course-inner">
		                            <div class="course-thumb">
		                                <img src="{{asset('web/img/course_3.jpg')}}" alt="" />
		                                <div class="readmore-button">
		                                    <a href="#">Learn More</a>
		                                </div>
		                            </div>
		                            <div class="course-meta">
		                                <span class="course-price">Class XII</span>
		                            </div>
		                            <div class="course-desc">
		                                <p>English</p>
		                                <p>Maths</p>
		                                <p>Social Studies</p>
		                            </div>
		                            <div class="course-info">
		                                <ul>
		                                    <li><a href="#"><i class="fa fa-user"></i>24 Seats</a></li>
		                                </ul>
		                            </div>
		                        </div>

		                        <div class="course-inner">
		                            <div class="course-thumb">
		                                <img src="{{asset('web/img/course_5.jpg')}}" alt="" />
		                                <div class="readmore-button">
		                                    <a href="#">Learn More</a>
		                                </div>
		                            </div>
		                            <div class="course-meta">
		                                <span class="course-price">Class XI</span>
		                            </div>
		                            <div class="course-desc">
		                                <p>English</p>
		                                <p>Maths</p>
		                                <p>Social Studies</p>
		                            </div>
		                            <div class="course-info">
		                                <ul>
		                                    <li><a href="#"><i class="fa fa-user"></i>24 Seats</a></li>
		                                </ul>
		                            </div>
		                        </div>

		                        <div class="course-inner">
		                            <div class="course-thumb">
		                                <img src="{{asset('web/img/course_6.jpg')}}" alt="" />
		                                <div class="readmore-button">
		                                    <a href="#">Learn More</a>
		                                </div>
		                            </div>
		                            <div class="course-meta">
		                                <span class="course-price">Class IX</span>
		                            </div>
		                            <div class="course-desc">
		                                <p>English</p>
		                                <p>Maths</p>
		                                <p>Social Studies</p>
		                            </div>
		                            <div class="course-info">
		                                <ul>
		                                    <li><a href="#"><i class="fa fa-user"></i>24 Seats</a></li>
		                                </ul>
		                            </div>
		                        </div>

		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>

		    <div class="about-us-sec pt-100 pb-70">
		        <div class="container">
		            <div class="row">

		                <div class="col-md-6">
		                    <div class="about-desc">
		                        <h1>Welcome To Our Parakiaki Academy</h1>
		                        <p>Lorem ipsum dolor sit amet, justo nunc orci donec sagittis metus dapibus, erat ullamcorper odio augue eleifend, consequat enim ullamcorper magnis dignissim nec phasellus, Lorem ipsum dolor sit amet, justo nunc orci donec sagittis metus dapibus, erat ullamcorper odio augue eleifend, consequat enim</p>
		                        <p>Lorem ipsum dolor sit amet, justo nunc orci donec sagittis metus dapibus, erat ullamcorper odio augue eleifend, consequat enim .</p>
		                        <a href="#" class="about-btn">Read More</a>
		                    </div>
		                </div>

		                <div class="col-md-6">
		                    <div class="vedio-inner">
		                        <img src="{{asset('web/img/why_us_2.jpg')}}" alt="">
		                    </div>
		                </div>

		            </div>
		        </div>
		    </div>

		    <div class="call-to-action-sec">
		        <div class="call-to-action-overlay"></div>
		        <div class="container">
		            <div class="row">
		                <div class="col-md-8 col-sm-9">
		                    <div class="call-to-action-text">
		                        <h2>contact with us for more query</h2>
		                        <p>we provide any possible support.</p>
		                    </div>
		                </div>
		                <div class="col-md-4 col-sm-3">
		                    <div class="call-to-action-text">
		                        <a href="{{route('web.contact.contact')}}" class="btn">Contact Us</a>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>

		    <div class="event-sec pt-100 pb-70">
		        <div class="container">
		            <div class="row">

		                <div class="col-md-6">
		                    <div class="faq-style1-sec">
		                        <h1 class="faq-style1-title">Classwise Syllabus</h1>
		                        <div class="panel-group" id="accordion" role="tablist">

		                            <div class="panel">
		                                <div class="panel-heading" role="tab" id="titleOne">
		                                    <h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												Class IX</a>
											</h4>
		                                </div>
		                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="titleOne">
		                                    <div class="panel-content">
		                                        Lorem ipsum dolor sit amet, mauris maecenas vel. Massa ultrices erat sit dolore. Vestibulum nunc. Nec tellus vulputate facilisis. Congue nunc enim platea, dolor lacinia arcu, vehicula nascetur purus penatibus ac pulvinar, sit ac faucibus. Vitae eros justo duis lacus iaculis eu
		                                    </div>
		                                </div>
		                            </div>

		                            <div class="panel">
		                                <div class="panel-heading" role="tab" id="titleTwo">
		                                    <h4 class="panel-title">
												<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												Class X</a>
											</h4>
		                                </div>
		                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="titleTwo">
		                                    <div class="panel-content">
		                                        Lorem ipsum dolor sit amet, mauris maecenas vel. Massa ultrices erat sit dolore. Vestibulum nunc. Nec tellus vulputate facilisis. Congue nunc enim platea, dolor lacinia arcu, vehicula nascetur purus penatibus ac pulvinar, sit ac faucibus. Vitae eros justo duis lacus iaculis eu
		                                    </div>
		                                </div>
		                            </div>

		                            <div class="panel">
		                                <div class="panel-heading" role="tab" id="titleThree">
		                                    <h4 class="panel-title">
												<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
												Class XI</a>
											</h4>
		                                </div>
		                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="titleThree">
		                                    <div class="panel-content">
		                                        Lorem ipsum dolor sit amet, mauris maecenas vel. Massa ultrices erat sit dolore. Vestibulum nunc. Nec tellus vulputate facilisis. Congue nunc enim platea, dolor lacinia arcu, vehicula nascetur purus penatibus ac pulvinar, sit ac faucibus. Vitae eros justo duis lacus iaculis eu
		                                    </div>
		                                </div>
		                            </div>

		                            <div class="panel">
		                                <div class="panel-heading" role="tab" id="titleFour">
		                                    <h4 class="panel-title">
												<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
												Class XII</a>
											</h4>
		                                </div>
		                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="titleFour">
		                                    <div class="panel-content">
		                                        Lorem ipsum dolor sit amet, mauris maecenas vel. Massa ultrices erat sit dolore. Vestibulum nunc. Nec tellus vulputate facilisis. Congue nunc enim platea, dolor lacinia arcu, vehicula nascetur purus penatibus ac pulvinar, sit ac faucibus. Vitae eros justo duis lacus iaculis eu
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>

		                <div class="col-md-6">
		                    <h1 class="faq-style1-title">Our Achievement</h1>

		                    <div class="event-inner">
		                        <div class="event-thumb">
		                            <img src="{{asset('web/img/g1.jpg')}}" alt="" />
		                            <div class="event-overlay">
		                                <a href="#"><i class="fa fa-external-link"></i></a>
		                            </div>
		                        </div>
		                        <div class="event-desc">
		                            <h2><a href="#">Mel apeirian salutatus scripserit ex</a></h2>
		                            <div class="event-meta">
		                                <ul>
		                                    <li><i class="fa fa-map-marker"></i>Californiya , United State</li>
		                                    <li><i class="fa fa-clock-o"></i>08.00 - 11.30</li>
		                                </ul>
		                            </div>
		                        </div>
		                    </div>

		                    <div class="event-inner">
		                        <div class="event-thumb">
		                            <img src="{{asset('web/img/g2.jpg')}}" alt="" />
		                            <div class="event-overlay">
		                                <a href="#"><i class="fa fa-external-link"></i></a>
		                            </div>
		                        </div>
		                        <div class="event-desc">
		                            <h2><a href="#">Mel apeirian salutatus scripserit ex</a></h2>
		                            <div class="event-meta">
		                                <ul>
		                                    <li><i class="fa fa-map-marker"></i>Californiya , United State</li>
		                                    <li><i class="fa fa-clock-o"></i>08.00 - 11.30</li>
		                                </ul>
		                            </div>
		                        </div>
		                    </div>

		                    <div class="event-inner">
		                        <div class="event-thumb">
		                            <img src="{{asset('web/img/g3.jpg')}}" alt="" />
		                            <div class="event-overlay">
		                                <a href="#"><i class="fa fa-external-link"></i></a>
		                            </div>
		                        </div>
		                        <div class="event-desc">
		                            <h2><a href="#">Mel apeirian salutatus scripserit ex</a></h2>
		                            <div class="event-meta">
		                                <ul>
		                                    <li><i class="fa fa-map-marker"></i>Californiya , United State</li>
		                                    <li><i class="fa fa-clock-o"></i>08.00 - 11.30</li>
		                                </ul>
		                            </div>
		                        </div>
		                    </div>

		                    <div class="event-inner">
		                        <div class="event-thumb">
		                            <img src="{{asset('web/img/g1.jpg')}}" alt="" />
		                            <div class="event-overlay">
		                                <a href="#"><i class="fa fa-external-link"></i></a>
		                            </div>
		                        </div>
		                        <div class="event-desc">
		                            <h2><a href="#">Mel apeirian salutatus scripserit ex</a></h2>
		                            <div class="event-meta">
		                                <ul>
		                                    <li><i class="fa fa-map-marker"></i>Silchar</li>
		                                    <li><i class="fa fa-clock-o"></i>08.00 - 11.30</li>
		                                </ul>
		                            </div>
		                        </div>
		                    </div>

		                    <div class="event-inner">
		                        <div class="event-thumb">
		                            <img src="{{asset('web/img/g2.jpg')}}" alt="" />
		                            <div class="event-overlay">
		                                <a href="#"><i class="fa fa-external-link"></i></a>
		                            </div>
		                        </div>
		                        <div class="event-desc">
		                            <h2><a href="#">Mel apeirian salutatus scripserit ex</a></h2>
		                            <div class="event-meta">
		                                <ul>
		                                    <li><i class="fa fa-map-marker"></i>Californiya , United State</li>
		                                    <li><i class="fa fa-clock-o"></i>08.00 - 11.30</li>
		                                </ul>
		                            </div>
		                        </div>
		                    </div>
		                    <div>
		                        <a href="#" class="about-btn">More Achievement</a>
		                    </div>
		                </div>

		            </div>
		        </div>
		    </div>
    	@endsection   

      