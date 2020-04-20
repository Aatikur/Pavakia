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
		                        <h1>About</h1>
		                    </div>
		                    <div class="breadcrumb-list">
		                        <ul>
		                            <li><a href="{{route('web.index')}}">Home</a></li>
		                            <li><a href="{{route('web.about.about')}}">About </a></li>
		                        </ul>
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
    	@endsection   

      