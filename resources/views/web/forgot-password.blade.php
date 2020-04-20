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
		                        <h1>Forgot password</h1>
		                    </div>
		                    <div class="breadcrumb-list">
		                        <ul>
		                            <li><a href="index.php">Home</a></li>
		                            <li><a href="#">Forgot password</a></li>
		                        </ul>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		    <div class="contact-page-sec pt-50 pb-50">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-6 col-md-offset-3">
		                    <div class="contact-page-form login-form">
		                        <h2>Forgot password <br><span>No Worries.. Plese enter email</span></h2>
		                        <div class="col-md-12 col-sm-12 col-xs-12">
		                            <div class="single-input-field">
		                                <label for="">Email *</label>
		                                <input type="text" placeholder="Email">
		                            </div>
		                        </div>
		                        <div class="single-input-fieldsbtn">
		                            <input type="submit" value="Submit">
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
    	@endsection   

      