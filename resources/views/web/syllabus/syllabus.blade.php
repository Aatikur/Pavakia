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
			                    <h1>Subject</h1>
			                </div>
			                <div class="breadcrumb-list">
			                    <ul>
			                        <li><a href="{{route('web.index')}}">Home</a></li>
			                        <li><a href="#">Subject</a></li>
			                    </ul>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>

			<div class="research-sec pt-100 pb-100">
			    <div class="container">
			        <div class="row">
			            <div class="research-item">
			            	@foreach($syllabus_record as $value)
			            	@foreach($syllabus_records as $record)
			            	
			                <div class="col-md-4 col-sm-6 inner">
			                    <div class="media">
			                    	@if($value->id == $record->id)
			                        <div class="research-thumb">

			                            <a href="{{asset('admin/syllabus/docs/'.$record->syllabus)}}"><img src="{{asset('admin/subject/banner/'.$record->banner)}}"  alt="" /></a>
			                            <div class="research-icon">
			                                <div class="readmore-button">
			                                    <a href="{{asset('admin/syllabus/docs/'.$record->syllabus)}}">View</a>
			                                </div>
			                            </div>
			                        </div>
			                        <div class="research-inner-text">
			                            <div class="media-body">
			                                <h2><a href="{{asset('admin/syllabus/docs/'.$record->syllabus)}}">{{$record->subject_name}}</a></h2>
			                            </div>
			                        </div>
			                        @endif
			                    </div>
			                </div>
			                @endforeach
			                @endforeach
			            </div>
			           
			            
			            
			           
			            
			        </div>
			    </div>
			</div>
    	@endsection   

      