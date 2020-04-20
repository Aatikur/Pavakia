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
		                        <h1>Login</h1>
		                    </div>
		                    <div class="breadcrumb-list">
		                        <ul>
		                            <li><a href="{{route('web.index')}}">Home</a></li>
		                            <li><a href="#">Login </a></li>
		                        </ul>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		    <div class="contact-page-sec pt-50 pb-50">
		        <div class="container">
		            <div class="row">
		            
		            	<form action="{{ route('web.login_submit') }}" autocomplete="off" method="POST"  >
								@csrf
		                <div class="col-md-6 col-md-offset-3">
		                    <div class="contact-page-form login-form">
		                        <h2>Login <br><span>Wellcome back. Please login</span></h2>
		                        <div class="col-md-12 col-sm-12 col-xs-12">
		                            <div class="single-input-field">
		                                <label for="">Email *</label>
		                                <input type="text" placeholder="Email" name="username">
		                            </div>
		                            @if ($message = Session::get('login_error'))
					                  <span class="invalid-feedback" role="alert">
					                        <strong  style="color:red">{{ $message }}</strong>
					                    </span>
					                @endif
					                 @if ($message = Session::get('msg'))
					                  <span class="invalid-feedback" role="alert">
					                        <strong  style="color:red">{{ $message }}</strong>
					                    </span>
					                @endif

					                @error('username')
					                    <span class="invalid-feedback" role="alert">
					                        <strong  style="color:red">{{ $message }}</strong>
					                    </span>
					                @enderror
		                        </div>
		                       
		                        <div class="col-md-12 col-sm-12 col-xs-12">
		                            <div class="single-input-field">
		                                <label for="">Password *</label>
		                                <input type="password" placeholder="Password" name="password">
		                            </div>
		                            @error('password')
					                    <span class="invalid-feedback" role="alert">
					                        <strong  style="color:red">{{ $message }}</strong>
					                    </span>
					                @enderror
		                        </div>
		                        <div class="single-input-fieldsbtn">
		                            <input type="submit" value="Login">
		                           {{--  <a href="{{route('web.subject.subject')}}" title="">test</a> --}}
		                        </div>
		                    </div>

		                </div>
		            </div>
		        </form>
		        </div>
		    </div>
    	@endsection   

      